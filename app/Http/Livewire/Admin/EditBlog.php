<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBlog extends Component
{
    use WithFileUploads;

    public $title;
    public $slug;
    public $short_description;
    public $detail_description;
    public $id_user;
    public $id_cate;
    public $image;
    public $photo;
    public $file_name;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->loadModel();
//        dd($this->detail_description);
    }

    public function update($id)
    {

        $this->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'image' => ['required'],
        ]);
        if ($this->photo == $this->image) {
            $this->file_name = $this->image;
        } else {
            $this->file_name = $this->image->store('/blogs', 'public');
        }
        $id1 = Blog::where('slug', $this->slug)->first()->id;
//dd(Blog::find($id1));
        Blog::find($id1)->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'image' => $this->file_name,
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
        $this->image = $data->image;
        $this->photo = $data->image;
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

    protected function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required',
            'image' => ['required'],
            'detail_description' => ['required'],
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
        'detail_description.required' => 'image không được để trống.',
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

//        $blog = Blog::where('slug', $this->slug)->first();

        return view('livewire.admin.edit-blog', [
//            'blog' => $blog
        ]);
    }
}
