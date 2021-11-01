<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategoryService;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CategoryServices extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $name;
    public $slug;
    public $image;
    public $photo;
    public $file_name;
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
        $this->file_name = $this->image->store('/category-service', 'public');
        CategoryService::create($this->modelData());
        $this->reset();
        $this->modalFormVisible = false;
        session()->flash('message', 'Thêm sản phẩm thành công');
    }
//
//    /**
//     * update categories
//     */
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',

        ]);
        if ($this->photo == $this->image) {
            $this->file_name = $this->image;
        } else {
            $this->file_name = $this->image->store('/product', 'public');
        }
        CategoryServices::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
        session()->flash('message', 'Sửa sản phẩm thành công');
    }
//
//    /**
//     * delete categories
//     */
    public function delete()
    {
        CategoryService::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        session()->flash('message', 'Xóa sản phẩm thành công');
    }
//
//    /**
//     * show form create categories
//     */
    public function createShowModal()
    {
        $this->reset();
        $this->modalFormVisible = true;
    }
//
//    /**
//     * show form update
//     * @param $ids
//     */
    public function updateShowModal($id)
    {
        $this->modalFormVisible = true;
        $this->modelId = $id;
        $this->loadModel();
        $this->photo = $this->image;

    }
//
//    /**
//     *  load data to the form update
//     */
    public function loadModel()
    {
        $data = CategoryServices::find($this->modelId);
        $this->name = $data->name;
        $this->image = $data->image;
        $this->slug = $data->slug;
    }
//
//    /**
//     * get the data to update
//     * @return array
//     */
    public function modelData()
    {
        return [
            'name' => $this->name,
            'image' => $this->file_name,
            'slug' => $this->slug
        ];
    }
//
//    /**
//     * Show confirm delete categories
//     * @param $id
//     */
    public function deleteShowModal($id)
    {
        $this->modalConfirmDeleteVisible = true;
        $this->modelId = $id;
    }
//
//    /**
//     * generate name -> slug
//     */
    public function generatesSlug()
    {
        $this->slug = Str::slug($this->name);
    }
//
////    Validate
//
//    /**
//     * validate rules
//     * @return string[]
//     */
    protected function rules()
    {
        return [
            'name' => ['required', 'unique:category_services'],
            'slug' => ['required', 'unique:category_services'],
            'image' => 'required'
        ];
    }
//
//    /**
//     * customize message validate
//     * @var string[]
//     */
    protected $messages = [
        'name.required' => 'Tên không được để trống.',
        'name.unique' => 'Tên không được trùng.',
        'slug.email' => 'Slug không được để trống.',
        'slug.unique' => 'Slug không được trùng.',
        'image.unique' => 'Ảnh không được để trống.'
    ];
//
//    /**
//     * validate realtime
//     * @param $field
//     * @throws \Illuminate\Validation\ValidationException
//     */
    public function updated($field)
    {
        $this->validateOnly($field);
    }

    /**
     * Show data to the screen
     * @return mixed
     */
    public function read()
    {
        return CategoryService::where('name','like', '%' . $this->search . '%')->paginate(8);
    }
    public function render()
    {
        return view('livewire.admin.category-services', [
            'categories' => $this->read()
        ]);
    }
}
