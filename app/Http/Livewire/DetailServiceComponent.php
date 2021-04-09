<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class DetailServiceComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $service = Service::where('slug', $this->slug)->first();
//        $products = Product::where('category_id', $id_cate->id)->paginate(12);
        return view('livewire.detail-service-component',[
            'service' => $service
        ])->layout('layouts.base');
    }
}
