<?php

namespace App\Http\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogDetailComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
        Blog::where('slug', $slug)->increment('count_view');
    }


    public function render()
    {
        $blog = Blog::where('slug', $this->slug)->first();
        return view('livewire.blog-detail-component', [
            'blog' => $blog,
        ])->layout('layouts.base');
    }
}
