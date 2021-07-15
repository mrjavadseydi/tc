<div>
    <div class="text-center">

        <form wire:submit.prevent="login" wire:loading.remove class="offset-2 col-8">
            @toastr_js
            @toastr_render
            <div class="text-center">
                @if (session()->has('message'))

                    <div class="alert alert-{{session('message')['type']}}">
                        {{session('message')['message'] }}
                    </div>
                @endif
                <h3>فرم ورود عوامل اجرایی آزمون </h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="p-2">
                        <lable class="text-right">ایمیل</lable>
                    </div>
                    <input class="form-control  @error('username') is-invalid @enderror" placeholder="example@e-mail.com"
                           wire:model.debounce.700ms="username" type="email">
                    @error('username')
                    <div class="invalid-feedback ">{{ $message }}</div>
                    @enderror
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">

                        <div class="p-2">
                            <lable class="text-right">کلمه عبور</lable>
                        </div>
                        <input  class="form-control text-right  @error('password') is-invalid @enderror"
                               wire:model.debounce.700ms="password"
                               type="password"
                               placeholder="*********">
                        @error('password')
                        <div class="invalid-feedback ">{{ $message }}</div>
                        @enderror
                    </div>

            </div>
                <div class="p-2">
                    <lable></lable>
                </div>
                <input class="form-control btn btn-success " type="submit" value="ورود">

        </form>

        <div wire:loading>
            <div class="text-center" dir="rtl">
                <img src="{{asset('loading.gif')}}">
            </div>
        </div>
    </div>
</div>
