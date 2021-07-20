<?php

namespace App\Http\Livewire\Panel;

use App\Models\Enrol;
use Livewire\Component;

class ExamEnrol extends Component
{
    public $exam ;
    public $roles;
    public $agree;
    public $user_role=43;
    protected $rules = [
        'user_role'=>'required|numeric',
        'agree'=>'required|in:active'
    ];
    protected $messages = [
        'agree.*'=>"موافقت با شرایط الزامی است ",
        'user_role.numeric'=>"ورودی غلط"
    ];

    public function mount($exam,$roles){
            $this->exam = $exam;
            $this->roles = $roles;
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function enrol(){
        $this->validate();
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
