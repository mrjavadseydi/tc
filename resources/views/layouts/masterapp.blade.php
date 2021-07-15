<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v29.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />

    <style>
        *{
            font-family: Vazir;
        }
    </style>
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

                    <div class="col-auto "><a class="btn btn-info btn-lg m-2 "  href="{{route('signup')}}"  >ثبت نام </a><a class="btn btn-primary btn-lg m-2"  >ورود</a></div>

                </div>
            </div>
        </div>
    </div>
</header>
<!-- Icons Grid-->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="text-center">
            <h3>
                ثبت نام در ۳ مرحله ساده
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                    <h3>دریافت ابلاغیه</h3>
                    <p class="lead mb-0">پس از تایید درخواست شما برای شما ابلاغیه صادر خواهد شد و میتوانیدابلاغیه خود را دریافت کنید </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                    <h3>انتخاب آزمون</h3>
                    <p class="lead mb-0">پس از ورود آزمون مورد نظر خود را انتخاب کنید ، نقش خود را در آزمون انتخاب کنید و درخواست خود را قطعی کنید  </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                    <h3>وارد کردن مشخصات </h3>
                    <p class="lead mb-0">با کلیک بر روی دکمه ثبت نام و  وارد کردن اطلاعات خود ثبت نام اولیه شما انجام می شود . در صورتی که قبلا حساب ایجاد کرده اید از دکمه ورود استفاده کنید </p>
                </div>
            </div>
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

{{--<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>--}}
</body>
</html>
