<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategoryService;
use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditService extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $content;
    public $price;
    public $image;
    public $photo;
    public $file_name;
    public $id_cate;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->loadModel();
    }

    public function update()
    {
        $this->validate([
            'name' => ['required'],
            'slug' => ['required'],
            'price' => ['required'],
            'image' => ['required'],
            'content' => ['required'],
        ]);
        if ($this->photo == $this->image) {
            $this->file_name = $this->image;
        } else {
            $this->file_name = $this->image->store('/product', 'public');
        }
        Service::where('slug', $this->slug)->update([
            'name' => $this->name,
            'content' => $this->content,
            'price' => $this->price,
            'image' => $this->file_name,
            'id_cate' => $this->id_cate,
            'slug' => $this->slug
        ]);
        session()->flash('message', 'Sửa sản phẩm thành công');
        return redirect()->route('admin.services');

    }

    public function loadModel()
    {
        $data = Service::where('slug', $this->slug)->first();
        $this->name = $data->name;
        $this->content = $data->content;
        $this->price = $data->price;
        $this->image = $data->image;
        $this->photo = $data->image;
        $this->id_cate = $data->id_cate;
        $this->slug = $data->slug;
    }

    protected function rules()
    {
        return [
            'name' => ['required'],
            'slug' => ['required', 'unique:services'],
            'price' => ['required', 'numeric'],
            'image' => ['required'],
            'content' => ['required'],
            'id_cate' => ['required'],
        ];
    }

    public function generatesSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    /**
     * validate realtime
     * @param $field
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    /**
     * customize message validate
     * @var string[]
     */
    protected $messages = [
        'name.required' => 'Tên không được để trống.',
//        'name.unique' => 'Tên không được trùng.',
        'slug.required' => 'Tên không được để trống.',
        'slug.unique' => 'Tên không được trùng.',
        'price.required' => 'Giá không được trùng.',
        'price.numeric' => 'Giá phải là số.',
        'image.required' => 'Ảnh không được để trống.',
        'id_cate.required' => 'không được để trống.'
    ];

    public function render()
    {
        $cate_services = CategoryService::all();
        return view('livewire.admin.edit-service', [
            'cate_services' => $cate_services
        ]);
    }
}
