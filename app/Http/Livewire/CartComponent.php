<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Cart;
class CartComponent extends Component
{

    public function increase($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }
    public function decrease($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
    }

    public function destroy($row_id)
    {
        Cart::remove($row_id);
        session()->flash('success' , 'xóa thành công');
    }
    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
