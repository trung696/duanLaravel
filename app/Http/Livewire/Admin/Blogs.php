<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;
    public $search;


    public function render()
    {
        $blogs = Blog::where('title','like', '%' . $this->search . '%')->paginate(8);
        return view('livewire.admin.blogs',[
            'blogs' => $blogs
        ]);
    }
}
