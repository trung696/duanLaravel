<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProduct extends Component
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
    public $search;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->loadModel();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'regular_price' => 'required|numeric',
//            'sale_price' => 'numeric',
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
            $id = Product::where('slug', $this->slug)->first()->id;
            ProductImage::where('id_product', $id)->delete();
            foreach ($this->photos as $photo) {
                ProductImage::create([
                    'image_path' => $photo->store('/product_image', 'public'),
                    'id_product' => $id
                ]);
            }
        }

        Product::where('slug', $this->slug)->update($this->modelData());
        session()->flash('message', 'Sửa sản phẩm thành công');
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
    public function loadModel()
    {
        $data = Product::where('slug', $this->slug)->first();
        $this->name = $data->name;
        $this->slug = $data->slug;
        $this->regular_price = $data->regular_price;
        $this->sale_price = $data->sale_price;
        $this->feature_img = $data->feature_img;
        $this->image = $data->feature_img;
        $this->photos = $data->product_image;
        $this->image_photo = $data->product_image;
        $this->short_description = $data->short_description;
        $this->detail_description = $data->detail_description;
        $this->category_id = $data->category_id;
    }
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
    public function render()
    {
        $categories = DB::table('categories')->get();
        return view('livewire.admin.edit-product',[
            'categories' => $categories
        ]);
    }
}
