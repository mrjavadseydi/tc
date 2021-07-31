<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use Livewire\Component;

class Delete extends Component
{

    public $exam;
    public function mount($examid){
        $this->exam = Exam::whereId($examid)->first();
        try{
            $this->exam->delete();
//            $this->emit('refreshAll');
            session()->flash('message',['type'=>'success','message'=>'آزمون با موفقیت حذف شد! ']);
        }catch (\Exception $e){
            session()->flash('message',['type'=>'danger','message'=>'در این آزمون ثبت نام فعال وجود دارد !']);
        }
        return $this->redirect(route('index.exam'));
    }
    public function render()
    {
        return view('livewire.exam.delete');
    }
}
