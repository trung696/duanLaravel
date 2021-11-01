<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use App\Models\Order;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddBlog extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $short_description;
    public $detail_description;
    public $id_user;
    public $id_cate;
    public $file_name;
    public $image;

    public function create($id)
    {
        $this->validate();
        $this->file_name = $this->image->store('/blogs', 'public');
        Blog::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'image' => $this->file_name,
            'short_description' => $this->short_description,
            'detail_description' => $this->detail_description,
            'id_user' => $id,
            'id_cate' => $this->id_cate,
        ]);
        session()->flash('message', 'Them bai viet moi thanh cong');
        return redirect()->route('admin.blogs');
    }


    /**
     * generate name -> slug
     */
    public function generatesSlug()
    {
        $this->slug = Str::slug($this->title);
    }

    protected function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required',
            'image' => ['required'],
        ];
    }

    /**
     * customize message validate
     * @var string[]
     */
    protected $messages = [
        'title.required' => 'Tên không được để trống.',
        'slug.required' => 'slug không được để trống.',
        'image.required' => 'image không được để trống.',
    ];

    /**
     * validate realtime
     * @param $field
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($field)
    {
        $this->validateOnly($field);
    }


    public function render()
    {
        return view('livewire.admin.add-blog');
    }
}
