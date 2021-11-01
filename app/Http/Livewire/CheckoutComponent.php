<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Cart;
class CheckoutComponent extends Component
{
    public $name;
    public $phone_number;
    public $address;
    public $email;
    public $note;

    public function mount()
    {
        if (Auth::id()) {
            $user = User::find(Auth::id());
            $this->name = $user->name;
            $this->phone_number = $user->phone_number;
            $this->address = $user->address;
            $this->email = $user->email;
        }
    }

    public function checkout()
    {
        $this->validate();
        Order::create([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'email' => $this->email,
            'note' => $this->note,
        ]);
        $id = DB::table('orders')->where('phone_number', $this->phone_number)->orderBy('created_at', 'desc')->first()->id;
        foreach (Cart::content() as $key => $value) {
//            dd($value);
            OrderDetails::create([
                'id_order' => $id,
                'type' => 2,
                'id_ps' => $value->id,
                'quality_ps' => $value->qty,
            ]);
        }
        return redirect()->route('checkout.received', ['code' => $id]);
    }

    protected function rules()
    {
        return [
            'name' => 'required',
            'phone_number' => ['required', 'numeric', 'digits:10'],
            'email' => 'required',
            'address' => 'required',
        ];
    }

    /**
     * validate realtime
     * @param $field
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    /**
     * customize message validate
     * @var string[]
     */
    protected $messages = [
        'name.required' => 'Tên không được để trống.',
        'phone_number.required' => 'Số điện thoại không được để trống.',
        'phone_number.numeric' => 'Số điện thoại phải là số.',
        'phone_number.digits' => 'Số điện thoại là số có 10 kí tự số.',
        'email.required' => 'Email không được để trống.',
        'address.required' => 'Địa chỉ không được để trống.',
    ];

    public function render()
    {

        return view('livewire.checkout-component')->layout('layouts.base');
    }
}
