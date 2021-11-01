<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $modalConfirmDeleteVisible;
    public $userID;
    public $search;
    public $modalFormVisible;
    public $modelId;
    public $name;
    public $phone_number;
    public $email;
    public $id_role;

    public function showConfirmDelete($id)
    {
        $this->modalConfirmDeleteVisible = true;
        $this->userID = $id;
    }

    /**
     * show form update
     * @param $ids
     */
    public function updateShowModal($id)
    {
        $this->modalFormVisible = true;
        $this->modelId = $id;
        $this->loadModel($id);

    }

    /**
     * update categories
     */
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
        ]);
        User::find($this->modelId)->update([
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'id_role' => $this->id_role,]);
        $this->modalFormVisible = false;
        session()->flash('message', 'Sửa sản phẩm thành công');
    }
    /**
     *  load data to the form update
     */
    public function loadModel($id)
    {
        $data = User::find($id);
        $this->name = $data->name;
        $this->phone_number = $data->phone_number;
        $this->email = $data->email;
        $this->id_role = $data->id_role;

    }
    public function deleteUser()
    {
        User::destroy($this->userID);
        $this->modalConfirmDeleteVisible = false;
    }

    public function render()
    {
        $users = User::where('name', 'like', '%' . $this->search . '%')->paginate(8);
        $role = Role::all();
        return view('livewire.admin.users', [
            'users' => $users,
            'roles' => $role
        ]);
    }
}
