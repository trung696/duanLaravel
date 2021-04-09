<?php

namespace App\Http\Livewire;

use App\Models\CategoryService;
use Livewire\Component;

class ServiceComponent extends Component
{
    public function render()
    {
        $cates = CategoryService::all();
        return view('livewire.service-component',[
            'cates' => $cates
        ])->layout('layouts.base');
    }
}
