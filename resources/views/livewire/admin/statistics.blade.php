<div>
    <div class="text-center">
        <div wire:loading>
            <div class="text-center" dir="rtl">
                <img src="{{asset('loading.gif')}}">
            </div>
        </div>
    </div>

    <div class="card message-box-wrap height-auto" wire:loading.remove>
        @if (session()->has('message'))

            <div class="alert alert-{{session('message')['type']}}">
                {{session('message')['message'] }}
            </div>
        @endif
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>داوطلبان همکاری</h3>
                </div>
            </div>


        </div>
    </div>
    @if($user)
        <div class="card message-box-wrap height-auto" wire:loading.remove>
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>اطلاعات کاربر</h3>
                    </div>
                </div>
                <div class="single-info-details">
                    <div class="item-img" style="max-width: 300px;max-height: 300px">
                        <img src="{{asset($user->profile)}}"
                             alt="userAccount Photo">
                    </div>
                    <div class="item-content">
                        <div class="header-inline item-header">
                            <h3 class="text-dark-medium font-medium">{{$user->name}}</h3>
                            <div class="header-elements">
                                <ul>
                                    <li><a href="" wire:click.prevent="nullUser">بستن</a></li>
                                    @if($accept==0)
                                        <li><a href="" wire:click.prevent="makeActive">تایید کاربر </a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody>
                                <tr>
                                    <td>نام:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>کدملی:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{$user->national_id}}</td>
                                </tr>
                                <tr>
                                    <td>عکس کارت ملی:</td>
                                    <td class="font-medium text-dark-medium">
                                        <a href="{{asset($user->profile)}}" target="_blank">
                                            دانلود
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>مدرک تحصیلی:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{$user->degree}}</td>
                                </tr>
                                <tr>
                                    <td>تصویر مدرک تحصیلی:</td>
                                    <td class="font-medium text-dark-medium">
                                        <a href="{{asset($user->degree_photo)}}" target="_blank">
                                            دانلود
                                        </a></td>
                                </tr>
                                <tr>
                                    <td>تلفن همراه:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{$user->mobile}}</td>
                                </tr>
                                <tr>
                                    <td>شماره واتس اپ :</td>
                                    <td class="font-medium text-dark-medium">
                                        {{$user->whatsapp_mobile}}</td>
                                </tr>
                                <tr>
                                    <td>مقطع تحصیلی :</td>
                                    <td class="font-medium text-dark-medium">
                                        {{$user->graduated_step}}</td>
                                </tr>
                                <tr>
                                    <td>وضعیت اشتغال:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{$user->service_location}}</td>
                                </tr>
                                <tr>
                                    <td>شماره شبا:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{$user->bank}}</td>
                                </tr>
                                <tr>
                                    <td>جنسیت:</td>
                                    <td class="font-medium text-dark-medium">
                                        {{$user->sex==1?"مذکر":"مونث"}}
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    @endif
    <div class="slot">
        <livewire:admin.statistics-datatable :params="$id"/>

    </div>
</div>
