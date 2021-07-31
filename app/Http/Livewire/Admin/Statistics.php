<?php

namespace App\Http\Livewire\Admin;

//use App\Http\Livewire\Panel\ExamEnrol;
use App\Models\Enrol;
use App\Models\User;
use Livewire\Component;


class Statistics extends Component
{

    public  $exam;
    public $user = null;
    protected $listeners = ['getUser'];
    public $accept;
    public function getUser($data){
//        dd($data);
        $this->accept = $data['accept'];
        $this->user = User::findOrFail($data['id']);
    }
    public function nullUser(){
        $this->user = null;
    }
    public function makeActive(){
        Enrol::where([['user_id',$this->user->id],['exam_id',$this->exam]])->update([
            'accept'=>'1'
        ]);
        $this->dispatchBrowserEvent('toast', ['type' => 'success', 'msg' => 'درخواست کاربر تایید شد ']);
        $this->user = null;
    }
    public function mount($id){
        $this->exam =$id;
    }
    public function render()
    {
        $id = $this->exam;
        return view('livewire.admin.statistics',compact('id'))->layout('master.index');
    }
}
