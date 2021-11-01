<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogComponent extends Component
{


    public function render()
    {
        $blogs = Blog::paginate(10);
//        dd($blog);
        return view('livewire.blog-component', [
            'blogs' => $blogs,
        ])->layout('layouts.base');
    }
}
