<?php

namespace App\Http\Livewire\Panel;

use Livewire\Component;

class MyEnrol extends Component
{
    public function render()
    {
        return view('livewire.panel.my-enrol')->layout('master.index');
    }
}
