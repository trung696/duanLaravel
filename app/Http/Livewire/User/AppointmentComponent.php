<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Livewire\Component;

class AppointmentComponent extends Component
{
    public function render()
    {
        $orders = Order::where('id_user', \Auth::id())
            ->orderByDesc('created_at')
            ->get();

        return view('livewire.user.appointment-component',[
            'orders' => $orders,
        ])->layout('layouts.base');
    }
}
