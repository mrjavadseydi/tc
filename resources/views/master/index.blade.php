<!doctype html>
<html class="no-js" lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        پنل
        </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
{{--    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">--}}
    <!-- Normalize CSS -->
    @include('master.header')
    @yield('header')
    <style>
            .a-head {
            color: black;
            padding: 11px;
        }
            .select {
                line-height: 50px;
                padding-right: 25px;
                padding-left: 20px;
                font-size: 15px;
                background-color: #f0f1f3;
                border-color: #f0f1f3;
                height: 50px;
                min-width: 300px;
                border-radius: 4px;
            }

    </style>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
       <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a >
{{--                        <img src="img/logo.png" alt="logo">--}}
                        {{auth()->user()->name}}
                    </a>
                </div>
                 <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">

                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <span class="input-group-addon">
                                <a href="{{ route('logout') }}" class="a-head">
                                    خروج
                                </a>
                            </span>

                        </div>
                    </li>
                </ul>

            </div>
        </div>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            @include('master.sidebar')

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <br>

               {{ $slot }}
                <!-- Social Media End Here -->
                <!-- Footer Area Start Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">
                        &copy;
                        کلیه حقوق متعلق به دانشگاه بیرجند می باشد . |
                        توسعه و طراحی :
                        <a href="https://daneshjooyar.com">
                        دانشجویار
                    </a>
                </div>
                </footer>
                <!-- Footer Area End Here -->
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    @include('master.script')
    @yield('script')
</body>
</html>
