<?php

namespace App\Http\Livewire\Exam;

use App\Models\Exam;
use Livewire\Component;

class Edit extends Component
{
    public $title;
    public $eid;
    public $description;
    public $active;
    protected $rules = [
        'title'=>'required',
        'description'=>'required',
        'active'=>'required|in:1,0'
    ];
    public function mount($id){
        $this->eid = $id;
        $exam = Exam::findOrFail($id);
        $this->title = $exam->title;
        $this->description = $exam->description;
        $this->active = $exam->active;
    }
    public function submit(){
        $this->validate();
        Exam::whereId($this->eid)->update([
            'title'=>$this->title,
            'description'=>$this->description,
            'active'=>$this->active
        ]);
        session()->flash('message',['type'=>'success','message'=>'ازمون  ویرایش شد !']);
        $this->redirect(route('index.exam'));
    }
    public function render()
    {
        return view('livewire.exam.edit')->layout('master.index');
    }
}
