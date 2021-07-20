<div>

    <div>
        @if (session()->has('message'))

            <div class="alert alert-{{session('message')['type']}}" dir="rtl">
                {{session('message')['message'] }}
            </div>
            <livewire:auth.sign-in></livewire:auth.sign-in>
        @else
        <script src="https://www.google.com/recaptcha/api.js"></script>

        <form wire:submit.prevent="resetPass" class="offset-2 col-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="p-2">
                        <lable class="text-right">تلفن همراه</lable>
                    </div>
                    <input class="form-control  @error('mobile') is-invalid @enderror" placeholder="09153333333"
                           wire:model.debounce.700ms="mobile" type="text">
                    @error('mobile')
                    <div class="invalid-feedback ">{{ $message }}</div>
                    @enderror
                </div>


            </div>
            <br>
            <div class="offset-4" wire:ignore>
                <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_SITE_KEY')}}"></div>

            </div>
            <br>
            <button type="submit" class="form-control btn btn-success "
                    wire:click="$set('captcha', grecaptcha.getResponse())">ریست پسورد
            </button>
        </form>
        @section('script')
            <script>
                Livewire.on('resetCap', function () {
                    grecaptcha.reset();
                });
            </script>
        @endsection
    </div>
    @endif

</div>
