<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use Livewire\Component;

class Index extends Component
{
    protected $listeners  = ['refreshAll'=>'$refresh','flashMessage'=>'flash'];
    public function flash($data){
        session()->flash('message',$data);
    }
    public function render()
    {
        return view('livewire.exam.index',[
            'exams'=>Exam::withCount('enrol')->orderBy('id','desc')->paginate(10)
        ])->layout('master.index');
    }
}
