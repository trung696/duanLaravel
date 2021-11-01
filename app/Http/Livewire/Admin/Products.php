<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Products extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $name;
    public $slug;
    public $regular_price;
    public $sale_price;
    public $feature_img;
    public $file_name;
    public $image;
    public $image_photo = [];
    public $photos = [];
    public $file_name_photo = [];
    public $short_description;
    public $detail_description;
    public $category_id;
    public $modelId;
    public $modalFormVisible;
    public $modalConfirmDeleteVisible;
    public $search;

    public function mount()
    {

    }

    /**
     * create categories
     */
    public function create()
    {
        $this->validate();
//        dd(2);
        $this->file_name = $this->feature_img->store('/product', 'public');
        $pr = DB::table('products')->insertGetId($this->modelData());
        foreach ($this->photos as $photo) {
            $this->file_name_photo = $photo->store('/product_image', 'public');
            ProductImage::create([
                'image_path' => $photo->store('/product_image', 'public'),
                'id_product' => $pr
            ]);
        }
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
            'name' => 'required',
            'slug' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'numeric',
            'feature_img' => 'required',
            'short_description' => 'required',
            'detail_description' => 'required',
            'category_id' => 'required',
        ]);

        if ($this->feature_img == $this->image) {
            $this->file_name = $this->feature_img;
        } else {
            $this->file_name = $this->feature_img->store('/product', 'public');
        }
        if ($this->photos == $this->image_photo) {
            $this->file_name_photo = $this->photos;
//            dd(2);
        } else {
//            $this->file_name_photo = $this->photos->store('/product', 'public');
            ProductImage::where('id_product', $this->modelId)->delete();
            foreach ($this->photos as $photo) {
                ProductImage::create([
                    'image_path' => $photo->store('/product_image', 'public'),
                    'id_product' => $this->modelId
                ]);
            }
        }

        Product::find($this->modelId)->update($this->modelData());
        $this->modalFormVisible = false;
        session()->flash('message', 'Sửa sản phẩm thành công');
    }

    /**
     * delete categories
     */
    public function delete()
    {
        Product::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        session()->flash('message', 'Xóa sản phẩm thành công');

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
        $this->image = $this->feature_img;
        $this->image_photo = $this->photos;
//        dd($this->image_photo);
    }

    /**
     *  load data to the form update
     */
    public function loadModel()
    {
        $data = Product::find($this->modelId);
        $this->name = $data->name;
        $this->slug = $data->slug;
        $this->regular_price = $data->regular_price;
        $this->sale_price = $data->sale_price;
        $this->feature_img = $data->feature_img;
        $this->photos = $data->product_image;
        $this->short_description = $data->short_description;
        $this->detail_description = $data->detail_description;
        $this->category_id = $data->category_id;
    }

    /**
     * get the data to update
     * @return array
     */
    public function modelData()
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'regular_price' => $this->regular_price,
            'sale_price' => $this->sale_price,
            'feature_img' => $this->file_name,
            'short_description' => $this->short_description,
            'detail_description' => $this->detail_description,
            'category_id' => $this->category_id,
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
     * @return string[]
     */
    protected function rules()
    {
        return [
            'name' => 'required|unique:App\Models\Product,name',
            'slug' => 'required|unique:App\Models\Product,slug',
            'regular_price' => 'required|numeric',
//            'sale_price' => 'numeric',
            'feature_img' => 'required',
            'photos.*' => 'required',
            'short_description' => 'required',
            'detail_description' => 'required',
            'category_id' => 'required',
        ];
    }

    /**
     * customize message validate
     * @var string[]
     */
    protected $messages = [
        'name.required' => 'Không để trống',
        'name.min' => 'Số kí tự lớn hơn 3',
        'slug.required' => 'Không để trống',
        'regular_price.required' => 'Không để trống',
        'regular_price.numeric' => 'Giá trị không phải là số',
//        'sale_price.required' => 'Không để trống',
//        'sale_price.numeric' => 'Giá trị không phải là số',
        'feature_img.required' => 'Chọn ảnh',
//        'feature_img.image' => 'File không phải là ảnh',
        'short_description.required' => 'Không để trống',
        'detail_description.required' => 'Không để trống',
        'category_id.required' => 'Chọn danh mục',
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

    /**
     * Show data to the screen
     * @return mixed
     */
    public function read()
    {
        return Product::where('name', 'like', '%' . $this->search . '%')
            ->orderByDesc('created_at')
            ->paginate(8);
    }

    public function render()
    {
        $categories = DB::table('categories')->get();
        return view('livewire.admin.products', [
            'products' => $this->read(),
            'categories' => $categories
        ]);
    }
}
