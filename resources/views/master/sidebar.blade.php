<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color around">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            {{ Auth::user()->name }}
        </div>
    </div>

    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item">
                <a href="{{ route('panel') }}"
                   class="nav-link"><span>میزکار</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('myenrol') }}"
                   class="nav-link"><span>ثبت نام های من</span></a>
            </li>
            @can('admin')

                <li class="nav-item">
                    <a href="{{ route('roles') }}"
                       class="nav-link"><span>مدیریت نقش های آزمون</span></a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('index.exam') }}"
                       class="nav-link"><span>مدیریت آزمون ها </span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('create.exam') }}"
                       class="nav-link"><span>ساخت آزمون</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('index.users') }}"
                       class="nav-link"><span>کاربران</span></a>
                </li>
            @endcan
        </ul>
    </div>
</div>
