<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProduct extends Component
{
    use WithFileUploads;

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

    public function create()
    {
        $this->validate();
//        dd(2);
        $this->file_name = $this->feature_img->store('/product', 'public');
        Product::create($this->modelData());
        $pr = Product::where('name', $this->name)->first();
//        dd($pr->id);
        foreach ($this->photos as $photo) {
            $this->file_name_photo = $photo->store('/product_image', 'public');
            ProductImage::create([
                'image_path' => $photo->store('/product_image', 'public'),
                'id_product' => $pr->id
            ]);
        }
        session()->flash('message', 'Thêm sản phẩm thành công');
        return redirect()->route('admin.products');
    }

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

    public function render()
    {
        $categories = DB::table('categories')->get();
        return view('livewire.admin.add-product',[
            'categories' => $categories
        ]);
    }
}
