<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            {{ Auth::user()->name }}
        </div>
    </div>

    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">

            @can('admin')
                <li class="nav-item">
                    <a href="{{ route('excel') }}" class="nav-link"><span>آپلود فایل پذیرفته شدگان</span></a>
                </li>
            @endcan
            @can('takmili')
                <li class="nav-item">
                    <a href="{{ route('point.all.takmili') }}" class="nav-link"><span>نتایج</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('takmili.co') }}" class="nav-link"><span>هیات داوران</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('takmili.form') }}" class="nav-link"><span>فرم شماره ۳</span></a>
                </li>
            @endcan
                @can('admin')

                    <li class="nav-item">
                        <a href="{{ route('takmili.co') }}" class="nav-link"><span>هیات داوران</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('takmili.form') }}" class="nav-link"><span>فرم شماره ۳</span></a>
                    </li>

                @endcan
            @can('group')
                @can('admin')
                    <li class="nav-item">
                        <a href="{{ route('payment') }}" class="nav-link"><span>پرداخت ها</span></a>
                    </li>
                @endcan
                {{-- <li class="nav-item">
                    <a href="{{ route('acc.index') }}" class="nav-link"><span>دانشجویان</span></a>
                </li> --}}
            @endcan
            @can('hedayat')
                <li class="nav-item">
                    <a href="{{ route('acc.index') }}" class="nav-link"><span>دانشجویان</span></a>
                </li>
            @endcan

            @can('admin')
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link"><span>کاربران</span></a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('code') }}" class="nav-link"><span>کد رشته ها</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('excel.done') }}" class="nav-link"><span>دریافت اکسل برای سنجش </span></a>
                </li>
            @endcan

            @can('group')
                @if (auth()->user()->admin != 1)

                    <li class="nav-item">
                        <a href="{{ route('sms') }}" class="nav-link"><span>ارسال پیامک</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('zipall') }}" class="nav-link"><span>دانلود فایل زیپ همه دانشجویان</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('allow.index') }}" class="nav-link"><span>حد نصاب</span></a>
                    </li>
                @endif

                @if (auth()->user()->admin != 1)

                    <li class="nav-item">
                        <a href="{{ route('CoWorker.index') }}" class="nav-link"><span>هیات داوران</span></a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('point.all') }}" class="nav-link"><span>مشاهده نتایج مصاحبه</span></a>
                </li>
            @endcan
            @can('co')
                {{-- @dd(auth()->user()) --}}
                @if (auth()->user()->admin != 1)
                    <li class="nav-item">
                        <a href="{{ route('co.point') }}" class="nav-link"><span>مشاهده و تایید نمرات</span></a>
                    </li>
                @endif

            @endcan

            {{-- @dd(auth()->user()) --}}
            @if (\App\Models\CoAccess::where('user_id',auth()->id())->first())
                <li class="nav-item">
                    <a href="{{ route('co.point') }}"
                       class="nav-link"><span>مشاهده و تایید نمرات(ویژه هیات داوران)</span></a>
                </li>
            @endif


            @can('admin')
                <li class="nav-item">
                    <a href="{{ route('config') }}" class="nav-link"><span>تنظیمات</span></a>
                </li>
            @endcan

        </ul>
    </div>
</div>
