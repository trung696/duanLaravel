<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Orders extends Component
{
    public $name;
    public $phone_number;
    public $address;
    public $id_service = [];
    public $quality_service = 1;
    public $id_product;
    public $quality_product;
    public $status;
    public $book_date;
    public $time_shift;
    public $id_user;
    public $note;
    public $created_at;
    public $search;

    public $createShowModal ;
    public $modalFormVisible =true;
    public $modelId;

    /**
     * create order
     */
    public function create()
    {

//        $this->validate();

//        Order::create([
//            ''
//        ]);
//        $this->reset();
//        $this->modalFormVisible = false;
//        session()->flash('message', 'Thêm sản phẩm thành công');
    }

    /**
     * show form create categories
     */
    public function createShowModal()
    {
        $this->reset();
        $this->modalFormVisible = true;
    }
    public function read()
    {
        return Order::where('phone_number', 'like', '%' . $this->search . '%')->paginate(8);

    }

    public function render()
    {
        $services = DB::table('services')->get();
        return view('livewire.admin.orders', [
            'orders' => $this->read(),
            'services' => $services,
        ]);
    }
}
