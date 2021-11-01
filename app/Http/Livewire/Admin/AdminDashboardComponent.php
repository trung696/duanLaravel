<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Month(created_at)"))
            ->pluck('count');

        $ordersData = Order::select('status as name', DB::raw("COUNT(*) as y"))
//            $ordersData = Order
            ->whereYear('created_at', date('Y'))
            ->whereNull('book_date')
//            ->where('status', date('Y'))
            ->groupBy(DB::raw('status'))
//            ->pluck('count','status');
            ->get();

        $ordersBookData = Order::select('status as name', DB::raw("COUNT(*) as y"))
            ->whereYear('created_at', date('Y'))
            ->whereNotNull('book_date')
            ->groupBy(DB::raw('status'))
            ->get();

        $revenue = 0;
        $total_price = Order::where('status', 4)->get();
        foreach ($total_price as $total) {
            foreach ($total->order_detail as $t) {
                $revenue += $t->price * $t->quality_ps;
            }
        }
        $total_user = count(User::all());

        return view('livewire.admin.admin-dashboard-component', [
            'users' => $users,
            'ordersData' => $ordersData,
            'ordersBookData' => $ordersBookData,
            'revenue' => $revenue,
        ])->layout('layouts.base');
    }
}
