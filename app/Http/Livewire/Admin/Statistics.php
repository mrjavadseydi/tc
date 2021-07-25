<?php

namespace App\Http\Livewire\Admin;

//use App\Http\Livewire\Panel\ExamEnrol;
use App\Models\Enrol;
use Livewire\Component;


class Statistics extends Component
{

    public  $exam;


    public function mount($id){
        $this->exam =$id;
    }


    public function render()
    {
        $id = $this->exam;
        return view('livewire.admin.statistics',compact('id'))->layout('master.index');
    }
}
