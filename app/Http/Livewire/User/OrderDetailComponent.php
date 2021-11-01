<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\OrderDetails;
use Livewire\Component;

class OrderDetailComponent extends Component
{
    public $code;
    public $sum_total = 0;

    public function mount($code)
    {
        $this->code = $code;
    }

    public function render()
    {
        $order = Order::find($this->code);

            foreach ($order->order_detail as $key => $value) {
                $this->sum_total += $value->price * $value->quality_ps;
            }
        return view('livewire.user.order-detail-component',[
            'order' => $order,
        ])->layout('layouts.base');
    }
}
