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

class Orders extends Component
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
    public $type = [1];
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
//        $this->search_date = Carbon::now()->toDateString();
        $orders = Order::whereNotIn('status', [4])
            ->whereYear('book_date', date('Y'))
            ->whereMonth('book_date', '<=', date('m'))
            ->whereDay('book_date', '<', date('d'))
            ->whereNotNull('book_date')
            ->orWhere(function ($query) {
                $query->WhereDay('book_date','=', date('d'))
                    ->WhereTime('time_shift', '<', Carbon::now()->isoFormat('HH:ss'));
            })
            ->update([
                'status' => 7
            ]);
    }

    /**
     * create order
     */
    public function create()
    {
        Order::create([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'status' => $this->status,
            'note' => $this->note,
            'id_user' => $this->id_user,
        ]);
        $id = DB::table('orders')->where('phone_number', $this->phone_number)->orderBy('created_at', 'desc')->first()->id;

        foreach ($this->type as $key => $value) {
            OrderDetails::create([
                'id_order' => $id,
                'type' => $value,
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
//        dd($this->book_date);
        Order::find($this->modelId)->update([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'book_date' => $this->book_date,
            'time_shift' => $this->time_shift,
            'status' => $this->status,
            'note' => $this->note,
            'id_user' => $this->id_user,
        ]);
        OrderDetails::where('id_order', $this->modelId)->delete();

        foreach ($this->type as $key => $value) {
            OrderDetails::create([
                'id_order' => $this->modelId,
                'type' => $value,
                'id_ps' => $this->id_ps[$key],
                'quality_ps' => $this->quality_ps[$key],
                'price' => $this->price[$key],
            ]);
        }
        $this->modalFormVisible = false;
        session()->flash('message', 'Sửa thành công');
    }

    public function addRowForValue()
    {
        $this->type[] += 1;
        $this->id_ps[] += 1;
        $this->quality_ps[] += 1;
        $this->price[] += 0;
    }

    public function removeRowForValue($key)
    {
        unset($this->type[$key]);
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
//        dd(count($dataDetail));
//        if (count($dataDetail) > 0) {
//            unset($this->type[0]);
//            unset($this->id_ps[0]);
//            unset($this->quality_ps[0]);
//            unset($this->price[0]);
//        }
        $this->modelId = $id;
        $this->name = $data->name;
        $this->phone_number = $data->phone_number;
        $this->book_date = $data->book_date;
        $this->time_shift = Carbon::parse($data->time_shift)->isoFormat('H:mm');
//        dd($this->time_shift);
        $this->address = $data->address;
        $this->note = $data->note;
        $this->status = $data->status;
        foreach ($dataDetail as $key => $dt) {
            $this->type[$key] = $dt->type;
            $this->id_ps[$key] = $dt->id_ps;
            $this->quality_ps[$key] = $dt->quality_ps;
//            dd(Service::find($this->id_ps[$key])->price);
//            if ($dt->type == 1) {
//                $this->price[] = Service::find($this->id_ps[$key])->price;
//            } else {
//                $this->price[] = Product::find($this->id_ps[$key])->price;
//            }
        }
        $this->modalFormVisible = true;

    }

    public function viewShowModal($id)
    {
        $this->reset();

        $data = Order::find($id);
        $dataDetail = $data->order_detail;

        if (count($dataDetail) > 0) {
            unset($this->type[0]);
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
            $this->type[] = $dt->type;
            $this->id_ps[] = $dt->id_ps;
            $this->quality_ps[] = $dt->quality_ps;
            if ($dt->type == 1) {
                $this->sum += $dt->quality_ps * Service::where('id', $dt->id_ps)->first()->price;
            } else {
                $price = Product::where('id', $dt->id_ps)->first();
                if ($price->sale_price) {
                    $this->sum += $dt->quality_ps * $price->sale_price;
                } else {
                    $this->sum += $dt->quality_ps * $price->regular_price;
                }
            }
        }
        $this->view = true;
    }

    public function read()
    {
        return Order::where('phone_number', 'like', '%' . $this->search_phone . '%')
            ->where('name', 'like', '%' . $this->search_name . '%')
            ->where('created_at', 'like', '%' . $this->search_date . '%')
            ->where('status', 'like', '%' . $this->search_status . '%')
            ->whereNotNull('book_date')
            ->orderBy('id', 'desc')->paginate(10);
    }

    public function render()
    {
//        dd(Carbon::now()->isoFormat('H:s'));
        foreach ($this->type as $key => $value) {
            if ($value == 1 && Service::find($this->id_ps[$key])) {
                $this->price[$key] = Service::find($this->id_ps[$key])->price;
                $this->total[$key] = $this->price[$key] * $this->quality_ps[$key];
            } elseif (Product::find($this->id_ps[$key])) {
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
        foreach ($this->type as $key => $value) {

            if ($this->type[$key] == 1) {
                $this->ps[$key] = DB::table('services')->get();
            } else {
                $this->ps[$key] = DB::table('products')->get();
            }
        }
        $services = Service::all();
        $products = Product::all();
//        $o = $this->read();
//        dd($o);
        return view('livewire.admin.orders', [
            'orders' => $this->read(),
            'type' => $this->type,
            'arr_time' => $arr_time,
            'services' => $services,
            'products' => $products,

        ]);
    }
}
