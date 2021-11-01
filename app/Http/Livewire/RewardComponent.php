<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class RewardComponent extends Component
{
    public function render()
    {
        $rewards = Blog::where('id_cate', 2)->get();
        return view('livewire.reward-component',[
            'rewards' => $rewards,
        ])->layout('layouts.base');
    }
}
