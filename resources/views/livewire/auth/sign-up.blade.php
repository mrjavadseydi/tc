<div>
    <div>
        <style>
            .star {
                color: red;
            }

            .form-control::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                color: #c7c7c7f3;;
                /*opacity: 1; !* Firefox *!*/
            }

            .form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
                color: #c7c7c7f3;;
            }

            .form-control::-ms-input-placeholder { /* Microsoft Edge */
                color: #c7c7c7f3;;
            }
        </style>
        @toastr_js
        @toastr_render
        <form wire:submit.prevent="submit" wire:loading.remove>
            <div class="text-center">
                <h3>فرم ثبت نام عوامل اجرایی آزمون </h3>
            </div>
            <div class="row">
                {{--                <div class="col-md-6">--}}
                {{--                    <div class="p-2">--}}
                {{--                        <lable class="text-right">ایمیل</lable>--}}
                {{--                    </div>--}}
                {{--                    <input class="form-control  @error('email') is-invalid @enderror" placeholder="example@e-mail.com"--}}
                {{--                           wire:model.debounce.700ms="email" type="email">--}}
                {{--                    @error('email')--}}
                {{--                    <div class="invalid-feedback ">{{ $message }}</div>--}}
                {{--                    @enderror--}}
                {{--                </div>--}}
                <div class="col-md-12">
                    <div class="p-2">
                        <lable class="text-right">نام و نام خانوادگی
                            <span class="star">*</span>
                        </lable>
                    </div>
                    <input dir="rtl" class="form-control text-right  @error('name') is-invalid @enderror"
                           wire:model.debounce.700ms="name"
                           type="text"
                           placeholder="احمد رضا غلامی">
                    @error('name')
                    <div class="invalid-feedback ">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="p-2">
                        <lable>جنسیت <span class="star">*</span>
                        </lable>
                    </div>
                    <select dir="rtl" wire:model.debounce.700ms="sex"
                            class=" customselect w-100  @error('sex') is-invalid @enderror">
                        <option selected>
                            انتخاب کنید
                        </option>
                        <option value="1">مذکر</option>
                        <option value="2">مونث</option>

                    </select>
                    @error('sex')
                    <div class="invalid-feedback ">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <div class="p-2">
                        <lable>کد ملی <span class="star">*</span>
                        </lable>
                    </div>
                    <input class="form-control  @error('national_id') is-invalid @enderror"
                           wire:model.debounce.700ms="national_id"
                           placeholder="06407541800" type="text">
                    @error('national_id')
                    <div class="invalid-feedback ">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="p-2">
                        <lable>تلفن همراه <span class="star">*</span>
                        </lable>
                    </div>
                    <input class='form-control  @error("mobile") is-invalid  @enderror'
                           wire:model.debounce.700ms="mobile"
                           placeholder="09151111111" type="text">
                    @error('mobile')
                    <div class="invalid-feedback ">{{ $message }}</div>
                    @enderror

                </div>
                <div class="col-md-6">
                    <div class="p-2">
                        <lable>شماره واتس اپ</lable>
                    </div>
                    <input class="form-control  @error('whatsapp') is-invalid @enderror" placeholder="09151111111"
                           wire:model.debounce.700ms="whatsapp" type="text">

                    @error('whatsapp')
                    <div class="invalid-feedback ">{{ $message }}</div>@enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <div class="p-2">
                        <lable>تاریخ تولد <span class="star">*</span>
                        </lable>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <select wire:model.debounce.700ms="year" class=" d-inline w-100 customselect">
                                <option>سال</option>

                                @for($i=1380;$i>1300;$i--)
                                    <option>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="col-4">
                            <select wire:model.debounce.700ms="month" class="col-4 w-100 d-inline customselect">
                                <option>ماه</option>
                                @for($i=12;$i>0;$i--)
                                    <option>{{$i}}</option>
                                @endfor

                            </select>
                        </div>

                        <div class="col-4">

                            <select wire:model.debounce.700ms="day" class="col-4 w-100 d-inline customselect">
                                <option>روز</option>

                                @for($i=31;$i>0;$i--)
                                    <option>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-2">
                        <lable>شماره حساب بانک تجارت ( شماره شبا دیگر بانک ها ) <span class="star">*</span>
                        </lable>
                    </div>
                    <input class="form-control  @error('bank') is-invalid @enderror"
                           placeholder="IR123123123123123123123123" wire:model.debounce.700ms="bank" type="text">
                    @error('bank')
                    <div class="invalid-feedback ">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="row">
{{--                <div class="col-md-6">--}}
{{--                    <div class="p-2">--}}
{{--                        <lable>دانشجوی مقطع(در صورت دانشجو بودن)</lable>--}}
{{--                    </div>--}}
{{--                    <input dir="rtl" class="form-control  @error('student_step') is-invalid @enderror"--}}
{{--                           placeholder="کارشناسی"--}}
{{--                           wire:model.debounce.700ms="student_step" type="text">--}}
{{--                    @error('student_step')--}}
{{--                    <div class="invalid-feedback ">{{ $message }}</div>@enderror--}}
{{--                </div>--}}

            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="p-2">
                        <lable>تصویر مدرک تحصیلی<span class="star">*</span></lable>
                    </div>
                    <input wire:model="degree_photo" class="form-control  @error('degree_photo') is-invalid @enderror"
                           type="file">
                    @error('degree_photo')
                    <div class="invalid-feedback ">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="p-2">
                        <lable>مقطع تحصیلی<span class="star">*</span></lable>
                    </div>
                    <select dir="rtl" wire:model.debounce.700ms="gradu_step"
                            class=" customselect w-100  @error('gradu_step') is-invalid @enderror">
                        <option selected value="1" >
                            انتخاب کنید
                        </option>
                        <option>
                            کارشناسی
                        </option>
                        <option>
                            کارشناسی ارشد
                        </option>
                        <option>دکتری</option>
                    </select>

                    @error('gradu_step')
                    <div class="invalid-feedback ">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-4">
                    <div class="p-2">
                        <lable>مدرک تحصیلی <span class="star">*</span>
                        </lable>
                    </div>
                    <input dir="rtl" class="form-control  @error('degree') is-invalid @enderror"
                           placeholder="کامپیوتر" wire:model.debounce.700ms="degree" type="text">
                    @error('degree')
                    <div class="invalid-feedback ">{{ $message }}</div>@enderror
                </div>

            </div>


            <div class="row">

                <div class="col-md-4">
                    <div class="p-2">
                        <lable>تصویر روی کارت ملی<span class="star">*</span></lable>
                    </div>
                    <input wire:model="national_id_photo"
                           class="form-control  @error('national_id_photo') is-invalid @enderror" type="file">
                    @error('national_id_photo')
                    <div class="invalid-feedback ">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="p-2">
                        <lable>تصویر پرسنلی<span class="star">*</span></lable>
                    </div>
                    <input wire:model="profile" class="form-control  @error('profile') is-invalid @enderror"
                           type="file">
                    @error('profile')
                    <div class="invalid-feedback ">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-4">
                    <div class="p-2">
                        <lable>وضعیت اشتغال</lable>
                    </div>
                    <select  dir="rtl"  wire:model.debounce.700ms="service" class=" customselect w-100  @error('service') is-invalid @enderror">
                        <option selected value="1">
                            انتخاب کنید
                        </option>
                        <option>
                            دانشجو تحصیلات تکمیلی
                        </option>
                        <option >شاغل دانشگاه بیرجند</option>
                        <option >شاغل خارج از دانشگاه بیرجند</option>
                        <option >جویای کار</option>

                    </select>
                    @error('service')
                    <div class="invalid-feedback ">{{ $message }}</div>@enderror
                </div>
            </div>
            <div class="p-2">
                <lable></lable>
            </div>
            <input id="sub" class="form-control btn btn-success " type="submit" value="ثبت نام">

        </form>
        <div wire:loading>
            <div class="text-center" dir="rtl">
                <img src="{{asset('loading.gif')}}">
            </div>
        </div>
    </div>
</div>
@section('script')
    <script>
        $('.date').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD',
            altField: '.observer-example-alt'
        });
    </script>

@endsection
