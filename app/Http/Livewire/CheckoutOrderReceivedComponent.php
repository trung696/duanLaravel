<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use Livewire\Component;

class CheckoutOrderReceivedComponent extends Component
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
        if ($order->status != 6) {
            foreach ($order->order_detail as $key => $value) {
                $this->sum_total += $value->price * $value->quality_ps;
            }
        }

        return view('livewire.checkout-order-received-component', [
            'order' => $order,
        ])->layout('layouts.base');
    }
}
