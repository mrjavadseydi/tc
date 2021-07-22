<?php

namespace App\Http\Livewire\Panel;

use App\Models\Enrol;
use App\Models\Exam;
use App\Models\ExamRole;
use Livewire\Component;

class Panel extends Component
{
    public $exams;
    public $roles;
    protected $listeners = ['refreshAll'=>'mount','flashMessage'=>'flash'];
    public function flash($data){
        session()->flash('message',$data);
    }
    public function mount(){
        $enroled =Enrol::where('user_id',\Auth::id())->get('exam_id');
        $this->exams= Exam::where('active',1)->whereNotIn('id',$enroled)->get();
        $this->roles = ExamRole::all();
    }
    public function render()
    {
        return view('livewire.panel.panel')->layout('master.index');
    }
}
