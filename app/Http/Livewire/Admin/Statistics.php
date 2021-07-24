<?php

namespace App\Http\Livewire\Admin;

//use App\Http\Livewire\Panel\ExamEnrol;
use App\Models\Enrol;
use Livewire\Component;
use Livewire\WithPagination;

class Statistics extends Component
{
    use WithPagination;
    public  $exam;


    public function mount($id){
        $this->exam =$id;
    }


    public function render()
    {
        $enrols  = Enrol::where('exam_id',$this->exam)->with(['user','exam'])->paginate(10);
        return view('livewire.admin.statistics',compact('enrols'))->layout('master.index');
    }
}
