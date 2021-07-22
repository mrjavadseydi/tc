<?php

namespace App\Http\Livewire\Admin;

use App\Models\ExamRole;
use Livewire\Component;
use Livewire\WithPagination;

class UsersRole extends Component
{
    use WithPagination;
    public $role_name;
    protected $rules = [
        'role_name'=>"required"
    ];
    protected $listeners = ['refreshRole'=>'$refresh','flashMessage'=>'flash'];
    public function flash($data){
        session()->flash('message',$data);
    }
    public function newRole(){
        $this->validate();
        ExamRole::create([
            'title'=>$this->role_name
        ]);
        $this->role_name = "";
        $this->flash(['type'=>'success','message'=>'نقش جدید اضافه شد !']);


    }
    public function render()
    {
        $roles = ExamRole::orderBy('id','desc')->paginate(10);
        return view('livewire.admin.users-role',compact('roles'))->layout('master.index');
    }
}
