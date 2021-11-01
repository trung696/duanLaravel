<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public $modalFormVisible;
    public $logo;
    public $phone_number;
    public $email;
    public $address;
    public $image;
    public $file_name;


    public function update()
    {
//        dd($this->file_name);
        if ($this->logo == $this->image) {
            $this->file_name = $this->image;
        } else {
            $this->file_name = $this->image->store('/setting', 'public');
        }
        Setting::find(1)->update([
            'logo' => $this->file_name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'address' => $this->address,
        ]);
        $this->modalFormVisible = false;
        session()->flash('message', 'Sửa sản phẩm thành công');
    }

    public function updateShowModal()
    {
        $this->modalFormVisible = true;
        $data = Setting::find(1);
        $this->phone_number = $data->phone_number;
        $this->email = $data->email;
        $this->address = $data->address;
        $this->image = $data->logo;
        $this->logo = $this->image;
    }

    public function render()
    {
        $setting = Setting::find(1);
        return view('livewire.admin.settings',['setting' => $setting]);
    }
}
