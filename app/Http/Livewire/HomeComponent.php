<?php

namespace App\Http\Livewire;

use App\Models\CategoryService;
use App\Models\Order;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class HomeComponent extends Component
{

    public $phone_number;
    public $book_date;
    public $time_shift;
    public $id_user;
    public $note;
    public $modalConfirmBook ;

    public function mount()
    {
        Carbon::setLocale('vi');
    }

    public function book()
    {
        $this->validate();
        Order::create([
            'phone_number' => $this->phone_number,
            'book_date' => $this->book_date,
            'time_shift' => $this->time_shift,
            'id_user' => $this->id_user,
            'note' => $this->note,
        ]);
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
            'phone_number' => 'required',
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
        'book_date.required' => 'Ngày đặt Không để trống',
        'time_shift.required' => 'Thời gian cắt Không để trống',

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

    public function render()
    {


        $select_day = [
            'Hôm nay' => Carbon::now('Asia/Ho_Chi_Minh')->isoFormat('Y-MM-DD'),
            'Ngày mai' => Carbon::now('Asia/Ho_Chi_Minh')->addDays(1)->isoFormat('Y-MM-DD'),
            'Ngày kia' => Carbon::now('Asia/Ho_Chi_Minh')->addDays(2)->isoFormat('Y-MM-DD')
        ];

        $employee = DB::table('users')->where('id_role', '2')->get();
        $time_start = new Carbon('08:00');
        $time_end = new Carbon('20:00');
        $arr_time = [];
        for ($i = 0; $time_start <= $time_end; $i++) {
            $arr_time[] = $time_start->isoFormat('HH:mm');
            $time_start->addHour();
        }
        $cate_services = CategoryService::all();
        $products= DB::table('products')->orderBy('count_view')->limit(4)->get();

        return view('livewire.home-component', [
//            'date' => $date,
            'select_day' => $select_day,
            'employee' => $employee,
            'arr_time' => $arr_time,
            'cate_services' => $cate_services,
            'products' => $products,
        ])->layout('layouts.base');
    }
}
