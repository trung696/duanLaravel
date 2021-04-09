<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategoryService;
use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Services extends Component
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
    public $modelId;
    public $modalFormVisible;
    public $modalConfirmDeleteVisible;
    public $search;

    public function mount()
    {
        $this->reset();
    }

    /**
     * create categories
     */
    public function create()
    {
        $this->validate();
        $this->file_name = $this->image->store('/service', 'public');
        Service::create($this->modelData());
        $this->reset();
        $this->modalFormVisible = false;
        session()->flash('message', 'Thêm sản phẩm thành công');
    }

    /**
     * update categories
     */
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
        Service::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
        session()->flash('message', 'Sửa sản phẩm thành công');
    }

    /**
     * delete categories
     */
    public function delete()
    {
        Service::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        session()->flash('message', 'Xóa sản phẩm thành công');
    }

    /**
     * show form create categories
     */
    public function createShowModal()
    {
        $this->reset();
        $this->modalFormVisible = true;
    }

    /**
     * show form update
     * @param $ids
     */
    public function updateShowModal($id)
    {
        $this->modalFormVisible = true;
        $this->modelId = $id;

        $this->loadModel();
//        dd($this->content);
        $this->photo = $this->image;
//        dd($this->content);
    }

    /**
     *  load data to the form update
     */
    public function loadModel()
    {
        $data = Service::find($this->modelId);
        $this->name = $data->name;
        $this->content = $data->content;
        $this->price = $data->price;
        $this->image = $data->image;
        $this->id_cate = $data->id_cate;
        $this->slug = $data->slug;
    }

    /**
     * get the data to update
     * @return array
     */
    public function modelData()
    {
        return [
            'name' => $this->name,
            'content' => $this->content,
            'price' => $this->price,
            'image' => $this->file_name,
            'id_cate' => $this->id_cate,
            'slug' => $this->slug
        ];
    }

    /**
     * Show confirm delete categories
     * @param $id
     */
    public function deleteShowModal($id)
    {
        $this->modalConfirmDeleteVisible = true;
        $this->modelId = $id;
    }

    /**
     * generate name -> slug
     */
    public function generatesSlug()
    {
        $this->slug = Str::slug($this->name);
    }

//    Validate

    /**
     * validate rules
     * @return string[]|\string[][]
     */
    protected function rules()
    {
        return [
            'name' => ['required', 'unique:services'],
            'slug' => ['required', 'unique:services'],
            'price' => ['required', 'numeric'],
            'image' => ['required'],
            'content' => ['required'],
        ];
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
        'name.unique' => 'Tên không được trùng.',
        'slug.required' => 'Tên không được để trống.',
        'slug.unique' => 'Tên không được trùng.',
        'price.unique' => 'Giá không được trùng.',
        'price.numeric' => 'Giá phải là số.',
        'image.unique' => 'Ảnh không được để trống.'
    ];

    /**
     * Show data to the screen
     * @return mixed
     */
    public function read()
    {
        return Service::where('name', 'like', '%' . $this->search . '%')->paginate(8);

    }

    public function render()
    {
        $cate_services = CategoryService::all();
        return view('livewire.admin.services', [
            'services' => $this->read(),
            'cate_services' =>  $cate_services
        ]);
    }
}
