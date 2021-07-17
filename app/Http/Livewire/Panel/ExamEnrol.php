<?php

namespace App\Http\Livewire\Panel;

use App\Models\Enrol;
use Livewire\Component;

class ExamEnrol extends Component
{
    public $exam ;
    public $roles;
    public $user_role;
    public function mount($exam,$roles){
            $this->exam = $exam;
            $this->roles = $roles;
    }

    public function enrol(){
        Enrol::create([
            'user_id'=>\Auth::id(),
            'role_id'=>$this->user_role,
            'accept'=>0,
            'exam_id'=>$this->exam->id
        ]);

        $this->emit('refreshAll');
        $this->emit('flashMessage',['type'=>'success','message'=>'ثبت نام شما با موفقیت انجام شد !']);
    }
    public function render()
    {
        return view('livewire.panel.exam-enrol');
    }
}
