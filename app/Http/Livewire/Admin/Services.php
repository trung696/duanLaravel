<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategoryService;
use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Services extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $modalConfirmDeleteVisible;
    public $search;
    public $modelId;

    /**
     * delete categories
     */
    public function delete()
    {
        Service::destroy($this->modelId);
        $this->modalConfirmDeleteVisible = false;
        session()->flash('message', 'Xóa sản phẩm thành công');
    }


    public function deleteShowModal($id)
    {
        $this->modalConfirmDeleteVisible = true;
        $this->modelId = $id;
    }


    public function read()
    {
        return Service::where('name', 'like', '%' . $this->search . '%')
            ->orderByDesc('id')
            ->paginate(8);

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
