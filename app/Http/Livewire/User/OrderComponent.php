<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderComponent extends Component
{
    public $total = [];
    public function render()
    {
        $orders = Order::where('id_user_order', \Auth::id())->get();
//        dd($orders[1]);
        foreach ($orders as $key => $order) {
//            dd($order->order_detail);
            $this->total[] += 0;
            foreach ($order->order_detail as $od){
                $this->total[$key] += $od->price * $od->quality_ps;
            }
        }
//        dd($this->total);


        return view('livewire.user.order-component', [
            'orders' => $orders,
        ])->layout('layouts.base');
    }
}
