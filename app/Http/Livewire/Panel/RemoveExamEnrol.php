<?php

namespace App\Http\Livewire\Panel;

use App\Models\Enrol;
use Livewire\Component;

class RemoveExamEnrol extends Component
{
    public $enrol_id;
    public function mount($enrol_id){
        $this->enrol_id=$enrol_id;
    }

    public function removeEnrol(){
        Enrol::where([['id',$this->enrol_id],['user_id',auth()->id()],['accept',0]])->delete();
        $this->emit('refreshEnrol');
        $this->emit('flashMessage',['type'=>'success','message'=>'ثبت نام شما با موفقیت حذف شد !']);

    }
    public function render()
    {
        return view('livewire.panel.remove-exam-enrol');
    }
}
