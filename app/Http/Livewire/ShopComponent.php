<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Cart;

class ShopComponent extends Component
{
    public function store($product_id, $product_name, $product_price, $product_img)
    {
      Cart::add($product_id, $product_name, 1, $product_price, ['img'=> $product_img] )->associate('App\Models\Product');
      session()->flash('message', 'Đã thêm vào giỏ hàng');
      return redirect()->route('product.cart');
    }

    public function render()
    {
        $categories = Category::all();
        $products = Product::paginate(12);

        return view('livewire.shop-component',[
            'categories' => $categories,
            'products' => $products,
        ])->layout('layouts.base');
//        return view('livewire.shop-component');
    }
}
