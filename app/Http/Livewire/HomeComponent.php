<?php

namespace App\Http\Livewire;

use App\Models\CategoryService;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Cart;

class HomeComponent extends Component
{

    public $phone_number;
    public $name;
    public $book_date;
    public $time_shift;
    public $id_user;
    public $id_ps;
    public $note;
    public $modalConfirmBook;
    public $id_order;

    public function mount()
    {
        Carbon::setLocale('vi');
        $this->book_date = Carbon::now('Asia/Ho_Chi_Minh')->isoFormat('Y-MM-DD');

    }

    public function store($product_id, $product_name, $product_price, $product_img)
    {
        Cart::add($product_id, $product_name, 1, $product_price, ['img' => $product_img])->associate('App\Models\Product');
        session()->flash('message', 'Đã thêm vào giỏ hàng');
        return redirect()->route('product.cart');
    }

    public function book()
    {

        $this->validate();
        Order::create([
            'phone_number' => $this->phone_number,
            'name' => $this->name,
            'book_date' => $this->book_date,
            'time_shift' => $this->time_shift,
            'id_user' => $this->id_user,
            'note' => $this->note,
        ]);

        OrderDetails::create([
            'id_order' => Order::where('phone_number', $this->phone_number)->first()->id,
            'id_ps' => $this->id_ps,
            'type' => 1,
        ]);
        $this->id_order = Order::where('phone_number', $this->phone_number)->first()->id;
        $this->modalConfirmBook = true;
//        session()->flash('message', 'Thêm sản phẩm thành công');

    }

    /**
     * validate rules
     * @return string[]
     */
    protected function rules()
    {
        return [
            'phone_number' => ['required', 'numeric', 'regex:/^0.+$/i', 'digits:10',],
            'book_date' => 'required',
            'time_shift' => 'required',
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
        'book_date.required' => 'Ngày đặt Không để trống',
        'time_shift.required' => 'Thời gian cắt Không để trống',

    ];

    /**
     * validate realtime
     * @param $field
     * @throws \Illuminate\Validation\ValidationException
     */
//    public function updated($field)
//    {
//        $this->validateOnly($field);
//    }

    public function render()
    {
        $arr_time = [];
        $time_start = new Carbon('08:00');
        $time_end = new Carbon('20:00');
        for ($i = 0; $time_start <= $time_end; $i++) {
            $arr_time[] = $time_start->isoFormat('HH:mm');
            $time_start->addHour();
        }
        $select_day = [
            'Hôm nay' => Carbon::now('Asia/Ho_Chi_Minh')->isoFormat('Y-MM-DD'),
            'Ngày mai' => Carbon::now('Asia/Ho_Chi_Minh')->addDays(1)->isoFormat('Y-MM-DD'),
            'Ngày kia' => Carbon::now('Asia/Ho_Chi_Minh')->addDays(2)->isoFormat('Y-MM-DD')
        ];
//
        if ($this->book_date == Carbon::now('Asia/Ho_Chi_Minh')->isoFormat('Y-MM-DD')) {
            foreach ($arr_time as $key => $time) {
                if ($time < Carbon::now()->isoFormat('H:s')) {
//                    dd($time);
                    unset($arr_time[$key]);
                }
            }
        }

        $staff = DB::table('users')->where('id_role', '3')->get();

        $cate_services = CategoryService::all();
        $products = DB::table('products')->orderBy('count_view', 'Desc')->limit(4)->get();
        $services = Service::all();
        $rewards = DB::table('blogs')->where('id_cate', 2)->get();
        $sliders = Slider::all();
        return view('livewire.home-component', [
//            'date' => $date,
            'select_day' => $select_day,
            'staff' => $staff,
            'arr_time' => $arr_time,
            'cate_services' => $cate_services,
            'products' => $products,
            'services' => $services,
            'rewards' => $rewards,
            'sliders' => $sliders,
        ])->layout('layouts.base');
    }
}
