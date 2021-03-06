<?php

namespace App\Http\Livewire\User;


use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {

        $users = User::where('level',0)->paginate(10);
        return view('livewire.user.index',compact('users'))->layout('master.index');
    }
}
