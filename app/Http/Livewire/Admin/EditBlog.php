<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use Livewire\Component;

class EditBlog extends Component
{
    public $title;
    public $slug;
    public $short_description;
    public $detail_description;
    public $id_user;
    public $id_cate;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->loadModel();
//        dd($this->detail_description);
    }

    public function update($id)
    {
        $id1 = Blog::where('id_user', $id)->first()->id;
        Blog::find($id1)->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'short_description' => $this->short_description,
            'detail_description' => $this->detail_description,
            'id_user' => $id,
            'id_cate' => $this->id_cate,
        ]);
        session()->flash('message', 'Sua bai viet moi thanh cong');
        return redirect()->route('admin.blogs');
    }

    /**
     *  load data to the form update
     */
    public function loadModel()
    {
        $data = Blog::where('slug', $this->slug)->first();
        $this->title = $data->title;
        $this->slug = $data->slug;
        $this->short_description = $data->short_description;
        $this->detail_description = $data->detail_description;
        $this->id_cate = $data->id_cate;
    }

    /**
     * generate name -> slug
     */
    public function generatesSlug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function render()
    {
//        $blog = Blog::where('slug', $this->slug)->first();

        return view('livewire.admin.edit-blog', [
//            'blog' => $blog
        ]);
    }
}
