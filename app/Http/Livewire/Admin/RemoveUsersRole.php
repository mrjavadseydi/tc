<?php

namespace App\Http\Livewire\Admin;

use App\Models\ExamRole;
use Livewire\Component;

class RemoveUsersRole extends Component
{
    public $role_id;
    public function mount($roleid){
        $this->role_id = $roleid;
    }
    public function removeRole(){

        try {
            ExamRole::where('id',$this->role_id)->delete();
            $this->emit('refreshAll');
            $this->emit('flashMessage',['type'=>'success','message'=>'نقش با موفقیت حذف شد! ']);
        }catch (\Exception $e){
            $this->emit('refreshAll');
            $this->emit('flashMessage',['type'=>'danger','message'=>'در حال حاضر این نقش  مورد استفاده قرار گرفته و حذف نقش امکان پذیر نیست!']);
        }

    }

    public function render()
    {
        return view('livewire.admin.remove-users-role');
    }
}
