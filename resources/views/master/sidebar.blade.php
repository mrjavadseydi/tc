<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
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
        </ul>
    </div>
</div>
