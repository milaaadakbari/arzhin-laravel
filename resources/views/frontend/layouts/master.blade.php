<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <title>قالب اصلی</title>
</head>
<body>
<header>
    <div class="index-top position-relative w-100 bg-white">
        <div class="main-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-3">
                        <img src="img/logo.png" alt="" height="30px" style="object-fit: contain;margin-top:18px;filter: grayscale(1);">
                    </div>
                    <div class="col-md-7 col-5 pt-2">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse"
                                 id="navbarSupportedContent">
                                <ul class="navbar-nav mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">خانه</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">مقالات</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" tabindex="-1"
                                           aria-disabled="true">تماس با ما</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" tabindex="-1"
                                           aria-disabled="true">درباره</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            دسته بندی ها
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">مجله فرهنگی</a></li>
                                            <li><a class="dropdown-item" href="#">مطالب ویدئویی</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">ارسالی مخاطبین</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3 col-4 text-start">
                        <div class="top-account">
                            <a href="#" class="text-dark"><i class="bi bi-person"></i></a>
                            <a href="#" class="text-dark"><i class="bi bi-gem"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer class="bg-white py-4 text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="d-flex justify-content-center social-bx">
                    <li class="p-2 m-1"><a href="#"><i class="bi bi-instagram"></i></a></li>
                    <li class="p-2 m-1"><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li class="p-2 m-1"><a href="#"><i class="bi bi-facebook"></i></a></li>
                </ul>
            </div>
            <div class="col-12">
                <p>قالب وبلاگی سئو 90 رایگان</p>
                <p class="mb-0">&copy; حقوق انتشار برای مجموعه محفوظ است</p>
            </div>
        </div>
    </div>
</footer>
<div class="scroll_top">
         <span class="btn btn-info text-center text-light">
         <i class="bi bi-arrow-up"></i>
         </span>
</div>
<script src="{{url('frontend/js/jQuery.js')}}"></script>
<script src="{{url('frontend/js/popper.js')}}"></script>
<script src="{{url('frontend/js/bootstrap.js')}}"></script>
<script src="{{url('frontend/js/owl.carousel.js')}}"></script>
<script src="{{url('frontend/js/index.js')}}"></script>
<script src="{{url('frontend/https://seo90.ir/downloads/category/html-theme/')}}"></script>
</body>
</html>
