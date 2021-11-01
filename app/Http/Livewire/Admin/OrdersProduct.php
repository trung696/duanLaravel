<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;
use phpDocumentor\Reflection\Type;
use Carbon\Carbon;

class OrdersProduct extends Component
{
    use WithPagination;
    public $name;
    public $phone_number;
    public $address;

    public $status;
    public $book_date;
    public $time_shift;
    public $id_user;
    public $note;
    public $created_at;
    public $createShowModal;
    public $modalFormVisible;
    public $view;
    public $modelId;
    public $ps = [];
    public $id_ps = [1];
    public $quality_ps = [1];
    public $price = [0];
    public $total = [0];
    public $sum = 0;

    public $search_phone;
    public $search_name;
    public $search_date;
    public $search_status;

    public function mount()
    {
        $this->search_date = Carbon::now()->toDateString();
    }
    /**
     * create order
     */
    public function create()
    {
        $this->validate();
        Order::create([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'status' => $this->status,
            'note' => $this->note,
            'id_user' => $this->id_user,
        ]);
        $id = DB::table('orders')->where('phone_number', $this->phone_number)->orderBy('created_at', 'desc')->first()->id;

        foreach ($this->id_ps as $key => $value) {
            OrderDetails::create([
                'id_order' => $id,
                'type' => 2,
                'id_ps' => $this->id_ps[$key],
                'quality_ps' => $this->quality_ps[$key],
                'price' => $this->price[$key],
            ]);
        }
        $this->reset();
        $this->modalFormVisible = false;
        session()->flash('message', 'Thêm thành công');
    }

    /**
     * update orders
     */
    public function update()
    {
        Order::find($this->modelId)->update([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'status' => $this->status,
            'note' => $this->note,
            'id_user' => $this->id_user,
        ]);
        OrderDetails::where('id_order', $this->modelId)->delete();

        foreach ($this->id_ps as $key => $value) {
            OrderDetails::create([
                'id_order' => $this->modelId,
                'id_ps' => $this->id_ps[$key],
                'quality_ps' => $this->quality_ps[$key],
                'price' => $this->price[$key],
                'type' => 2,
            ]);
        }
        $this->modalFormVisible = false;
        session()->flash('message', 'Sửa thành công');
    }

    public function addRowForValue()
    {
        $this->id_ps[] += 1;
        $this->quality_ps[] += 1;
        $this->price[] += 0;
    }

    public function removeRowForValue($key)
    {
        unset($this->id_ps[$key]);
        unset($this->quality_ps[$key]);
        unset($this->ps[$key]);
        unset($this->price[$key]);
        unset($this->total[$key]);
    }

    /**
     * show form create categories
     */
    public function createShowModal()
    {
        $this->reset();
        $this->modalFormVisible = true;
    }

    /**
     * show form create orders
     */
    public function updateShowModal($id)
    {
        $this->reset();
        $data = Order::find($id);
        $dataDetail = $data->order_detail;
        $this->modelId = $id;
        $this->name = $data->name;
        $this->phone_number = $data->phone_number;
        $this->address = $data->address;
        $this->note = $data->note;
        $this->status = $data->status;
        foreach ($dataDetail as $key => $dt) {
            $this->id_ps[$key] = $dt->id_ps;
            $this->quality_ps[$key] = $dt->quality_ps;
        }
        $this->modalFormVisible = true;

    }

    public function viewShowModal($id)
    {
        $this->reset();

        $data = Order::find($id);
        $dataDetail = $data->order_detail;

        if (count($dataDetail) > 0) {
            unset($this->id_ps[0]);
            unset($this->quality_ps[0]);
            unset($this->ps[0]);
            unset($this->price[0]);
        }
        $this->modelId = $id;
        $this->name = $data->name;
        $this->phone_number = $data->phone_number;
        $this->address = $data->address;

        foreach ($dataDetail as $dt) {
            $this->id_ps[] = $dt->id_ps;
            $this->quality_ps[] = $dt->quality_ps;
            $price = Product::where('id', $dt->id_ps)->first();

            if ($price->sale_price) {
                $this->sum += $dt->quality_ps * $price->sale_price;
            } else {
                $this->sum += $dt->quality_ps * $price->regular_price;
            }
        }
        $this->view = true;
    }

    /**
     * validate rules
     * @return string[]
     */
    protected function rules()
    {
        return [
            'phone_number' => ['required', 'numeric', 'regex:/^0.+$/i', 'digits:10',],
        ];
    }

    /**
     * customize message validate
     * @var string[]
     */
    protected $messages = [
        'phone_number.required' => 'Số điện thoại Không để trống',
        'phone_number.numeric' => 'Số điện thoại không phải là số',
        'phone_number.regex' => 'Số điện thoại phải số 0 trước',
        'phone_number.digits' => 'Số điện thoại phải là 10 kí tự số',
    ];

    /**
     * validate realtime
     * @param $field
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function read()
    {
        return Order::where('phone_number', 'like', '%' . $this->search_phone . '%')
            ->where('name', 'like', '%' . $this->search_name . '%')
            ->where('created_at', 'like', '%' . $this->search_date . '%')
            ->where('status', 'like', '%' . $this->search_status . '%')
            ->whereNull('book_date')
            ->orderBy('id', 'desc')->paginate(5);

    }

    public function render()
    {
        foreach ($this->id_ps as $key => $value) {
            if (Product::find($this->id_ps[$key])) {
                if (Product::find($this->id_ps[$key])->sale_price) {
                    $this->price[$key] = Product::find($this->id_ps[$key])->sale_price;
                    $this->total[$key] = $this->price[$key] * $this->quality_ps[$key];
                } else {
                    $this->price[$key] = Product::find($this->id_ps[$key])->regular_price;
                    $this->total[$key] = $this->price[$key] * $this->quality_ps[$key];
                }
            } else {
                $this->price[$key] = 0;
            }
        }

        $time_start = new Carbon('08:00');
        $time_end = new Carbon('20:00');
        $arr_time = [];
        for ($i = 0; $time_start <= $time_end; $i++) {
            $arr_time[] = $time_start->isoFormat('HH:mm');
            $time_start->addHour();
        }
        foreach ($this->id_ps as $key => $value) {
            $this->ps[$key] = DB::table('products')->get();
        }
        $products = Product::all();

        return view('livewire.admin.orders-product', [
            'orders' => $this->read(),
            'arr_time' => $arr_time,
            'products' => $products,

        ]);
    }
}
