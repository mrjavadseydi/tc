<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use Livewire\Component;

class Delete extends Component
{

    public $exam;
    public function mount($examid){
        $this->exam = Exam::whereId($examid)->first();
    }

    public function removeExam(){
        try{
            $this->exam->delete();
            $this->emit('refreshAll');
            $this->emit('flashMessage',['type'=>'success','message'=>'آزمون با موفقیت حذف شد! ']);
        }catch (\Exception $e){
            $this->emit('flashMessage',['type'=>'danger','message'=>'در این آزمون ثبت نام فعال وجود دارد !']);

        }

    }
    public function render()
    {
        return view('livewire.exam.delete');
    }
}
