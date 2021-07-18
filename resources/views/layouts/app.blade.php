<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ثبت نام عوامل اجرایی  آزمون</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v29.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/persian-datepicker@latest/dist/css/persian-datepicker.min.css" rel="stylesheet">
    @toastr_css

    <style>
        *{
            font-family: Vazir;
        }
        .customselect{
            padding: 0.75rem 1rem;

            background-color: #fff;

            border: 1px solid #ced4da;
        }
    </style>
    @livewireStyles
</head>
<body>
<!-- Masthead-->
<header class="masthead">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center text-white">
                    <!-- Page heading-->
                    <h1 class="mb-5">ثبت نام عوامل اجرایی  آزمون های دانشگاه بیرجند </h1>

                    <div class="col-auto "><a class="btn btn-info btn-lg m-2 "  href="{{route('signup')}}/#sub" >ثبت نام </a><a class="btn btn-primary btn-lg m-2" href="{{route('signin')}}/#sub">ورود</a></div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- Icons Grid-->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="text-center">
            {{ $slot }}
        </div>
    </div>
</section>
<!-- Image Showcases-->

<!-- Footer-->
<footer class="footer bg-light">
    <div class="container  text-center">
        <div class="row">
            <div class=" h-100 text-center ">
{{--                <ul class="list-inline mb-2">--}}
                    <a href="https://birjand.ac.ir">دانشگاه بیرجند</a>
                    ⋅
                    <a href="https://daneshjooyar.com">دانشجویار </a>
{{--                </ul>--}}
            </div>
        </div>
        <p class="text-muted small mb-4 mb-lg-0">&copy; تمام حقوق مادی و معنوی این وبسایت متعلق به دانشگاه بیرجند میباشد</p>

    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/persian-date@latest/dist/persian-date.min.js"></script>
<script src="https://unpkg.com/persian-datepicker@latest/dist/js/persian-datepicker.min.js"></script>
@livewireScripts

@yield('script')
</body>
</html>
