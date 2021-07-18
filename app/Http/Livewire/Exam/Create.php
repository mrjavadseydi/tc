<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $description;
    public $active=1;
    protected $rules = [
        'title'=>'required',
        'description'=>'required',
        'active'=>'required|in:1,0'
    ];
    public function submit(){
        $this->validate();
        Exam::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'active'=>$this->active
        ]);
        session()->flash('message',['type'=>'success','message'=>'ازمون  جدید اضافه شد !']);
        $this->title="";
        $this->description="";
        $this->active=1;
        $this->emit('initializeCkEditor');
    }
    public function render()
    {
        return view('livewire.exam.create')->layout('master.index');
    }
}
