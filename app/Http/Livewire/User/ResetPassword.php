<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use App\Rules\GoogleRecapcha;
use Illuminate\Validation\Rule;
use Livewire\Component;

class ResetPassword extends Component
{


    public $mobile;
    public $captcha;
    protected $rules = [

        'mobile'=>'required|starts_with:09',
        'captcha'=> ['required','string']
    ];
    public function resetPass()
    {
        $this->dispatchBrowserEvent('toast', ['type' => 'success', 'msg' => 'ثبت نام موفقیت آمیز بود میتوانید وارد حساب خود شوید!']);

//        toastr()->success('sdjkfhksdjfkf');
//        $this->validate();
//        $response = \Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('GOOGLE_SECRET_KEY') . '&response=' . $this->captcha);
//        $this->captcha = $response->json();
//
//        if($this->captcha['success']){
//            $user = User::where('mobile',$this->mobile)->first();
//            if ($user){
//                $pass = rand(1000000,9999999999);
//                $user->update([
//                    'password'=>bcrypt($pass)
//                ]);
//                $this->sms($pass,$user->mobile);
//            }
//            session()->flash('message', ['type'=>'success','message'=>'کلمه عبور برای شما پیامک شد !']);
//
//        }else{
//            session()->flash('message', ['type'=>'danger','message'=>'کپچا را تکمیل کنید']);
//
//        }
//        $this->emit('resetCap');

    }
    public function sms( $password1, $phone)
    {
        $username = "birjandlms";
        $password = 'pas120pas';
        $from = "+983000505";
        $pattern_code = "d6wawviz78";
        $to = [$phone];
        $input_data = ["password" => $password1];
        $url = "https://ippanel.com/patterns/pattern?username=" . $username . "&password=" . urlencode($password) . "&from=$from&to=" . json_encode($to) . "&input_data=" . urlencode(json_encode($input_data)) . "&pattern_code=$pattern_code";
        $handler = curl_init($url);
        curl_setopt($handler, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($handler, CURLOPT_POSTFIELDS, $input_data);
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($handler);
        curl_close($handler);

    }
    public function render()
    {
        return view('livewire.user.reset-password');
    }
}
