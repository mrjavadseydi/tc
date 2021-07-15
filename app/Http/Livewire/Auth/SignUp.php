<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class SignUp extends Component
{
    use WithFileUploads;
    public $name;
    public $national_id;
    public $email;
    public $mobile;
    public $whatsapp;
    public $bank;
    public $birth;
    public $service;
    public $degree;
    public $student_step;
    public $gradu_step;
    public $password;
    public $repassword;
    public $sex=1;
    public $degree_photo;
    public $profile;
    public $national_id_photo;
    public $year;
    public $month;
    public $day;
    protected $rules = [
        'name'=>'required|min:3',
        'service'=>'nullable|min:3',
        'national_id'=>'required|min:10',
        'email'=>'required|unique:users,email|email',
        'mobile'=>'required|starts_with:09|min:11',
        'whatsapp'=>'required|starts_with:09|min:11',
        'bank'=>'required',
        'password'=>'required',
        'repassword'=>'required|same:password',
        'sex'=>'required|in:1,2',
        'degree'=>'required',
        "degree_photo"=>'nullable|image|max:2048',
        'profile'=>"required|image|max:2048",
        'national_id_photo'=>"required|image|max:2048",
        'gradu_step'=>'required_without:student_step',
        'student_step'=>'required_without:gradu_step',
        'year'=>'required|numeric',
        'day'=>'required|numeric',
        'month'=>'required|numeric'

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit(){

        $this->validate();
        if (is_file($this->degree_photo)){
            $degree_photo =$this->degree_photo->store('public/uploads');
        }else{
            $degree_photo = null;
        }
        $this->birth = $this->year."/".$this->month."/".$this->day;
        $user = User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt($this->password),
            'mobile'=>$this->mobile,
            'national_id'=>$this->national_id,
            'national_id_photo'=>$this->national_id_photo->store('public/uploads'),
            'profile'=>$this->profile->store('public/uploads'),
            'degree'=>$this->degree,
            'whatsapp_mobile'=>$this->whatsapp,
            'birthday'=>$this->birth,
            'sex'=>$this->sex,
            'bank'=>$this->bank,
            'graduated_step'=>$this->gradu_step,
            'student_step'=>$this->student_step,
            'service_location'=>$this->service,
            'degree_photo'=>$degree_photo

        ]);
        session()->flash('message', ['type'=>'success','message'=>'ثبت نام موفقیت آمیز بود میتوانید وارد حساب خود شوید!']);

        $this->redirect(route('signin'));

    }
    public function render()
    {
        return view('livewire.auth.sign-up');
    }
}
