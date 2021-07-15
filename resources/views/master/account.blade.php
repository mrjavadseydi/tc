<!doctype html>
<html class="no-js" lang="fa">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>

        حساب کاربری
        {{ session('account')->firstname . ' ' . session('account')->lastname }}
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <style>
        .a-head {
            color: black;
            padding: 11px;
        }

        .redstar {
            color: red;
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #b4b4b4 !important;
            opacity: 1;
            /* Firefox */
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #b4b4b4 !important;
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #b4b4b4 !important;
        }
        .select2-container .select2-selection--single .select2-selection__rendered{
            color:black !important;
        }
    </style>
    @include('master.header')
    @yield('header')
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
                    <img src="{{ asset('/profile/1063') . '/' . session('account')->file . '.jpg' }}" style="width: 32%">

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
                <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse"
                    data-target="#mobile-navbar" aria-expanded="false">
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
                                <a href="{{ route('account.panel') }}" class="a-head">
                                    حساب کاربری
                                </a>
                                <a href="{{ route('account.logout') }}" class="a-head">
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
            @include('master.sidebar2')

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <br>
                @yield('content')
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
