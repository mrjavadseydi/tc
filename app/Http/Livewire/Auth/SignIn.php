<?php

namespace App\Http\Livewire\Auth;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SignIn extends Component
{
    public $username;
    public $password;
    protected $rules = [
        'username'=>'required|email',
        'password'=>'required',


    ];
    public function login(){
        $this->validate();
        if($user = User::where('email',$this->username)->first()){
            if(Hash::check($this->password,$user->password)){
                \Auth::loginUsingId($user->id);
                session()->flash('message', ['type'=>'success','message'=>'ورود موفقیت آمیز']);
            }else{
                session()->flash('message', ['type'=>'danger','message'=>'ورود نا موفق کلمه عبور را بررسی کنید']);

            }
        }else{
            session()->flash('message', ['type'=>'danger','message'=>'کاربری یافت نشد ']);

        }

        $this->username = "";
        $this->password = "";

    }

    public function render()
    {
        return view('livewire.auth.sign-in');
    }
}
