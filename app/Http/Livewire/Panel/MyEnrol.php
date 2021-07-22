<?php

namespace App\Http\Livewire\Panel;

use App\Models\Enrol;
use Livewire\Component;

class MyEnrol extends Component
{
    public $enrols;
    protected $listeners = ['refreshEnrol' => 'mount', 'flashMessage' => 'flash'];

    public function mount()
    {
        $this->enrols = Enrol::where('user_id', auth()->id())->with('exam')->get();
    }

    public function flash($data)
    {
        session()->flash('message', $data);
    }

    public function render()
    {
        return view('livewire.panel.my-enrol')->layout('master.index');
    }
}
