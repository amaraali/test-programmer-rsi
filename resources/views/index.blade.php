<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LMS - Learning Management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- back-to-top-start  -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="far fa-angle-double-up"></i>
    </button>
    <!-- back-to-top-end  -->


    <header>
        <!-- tp-header-area-start -->
        <div id="header-sticky" class="tp-header__area tp-header__space-2 tp-header__transparent tp-header__menu-space">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                        <div class="tp-header__logo">
                            <a href="index.html">
                                <h1>TODO</h1>
                                {{-- <img src="{{ asset('assets/img/logo/logo-black.png') }}" alt=""> --}}
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 d-none d-lg-block">
                        <div class="tp-header__main-menu tp-header__black-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul class="submenu">
                                            <li><a href="index.html">App Landing</a></li>
                                            <li><a href="index-2.html">Saas Landing</a></li>
                                            <li><a href="index-3.html">IT Solution</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Page</a>
                                        <ul class="submenu">
                                            <li><a href="about-me.html">About Me</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="blog.html">Blog Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="price.html">Price</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                        <div class="tp-header__right-two d-flex align-items-center justify-content-end">
                            @if (Auth::check())
                                <a class="tp-btn-blue d-none d-md-block" href="{{ route('dashboard.index') }}">
                                    <span>Dashboard</span>
                                </a>
                            @else
                                <a class="tp-header__login d-none d-lg-block" href="{{ route('login') }}">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.364 11.636C14.3837 10.6558 13.217 9.93013 11.9439 9.49085C13.3074 8.55179 14.2031 6.9802 14.2031 5.20312C14.2031 2.33413 11.869 0 9 0C6.131 0 3.79688 2.33413 3.79688 5.20312C3.79688 6.9802 4.69262 8.55179 6.05609 9.49085C4.78308 9.93013 3.61631 10.6558 2.63605 11.636C0.936176 13.3359 0 15.596 0 18H1.40625C1.40625 13.8128 4.81279 10.4062 9 10.4062C13.1872 10.4062 16.5938 13.8128 16.5938 18H18C18 15.596 17.0638 13.3359 15.364 11.636ZM9 9C6.90641 9 5.20312 7.29675 5.20312 5.20312C5.20312 3.1095 6.90641 1.40625 9 1.40625C11.0936 1.40625 12.7969 3.1095 12.7969 5.20312C12.7969 7.29675 11.0936 9 9 9Z"
                                            fill="currentColor" />
                                    </svg>
                                    <span>Login</span>
                                </a>
                            @endif
                            <a class="tp-header__bars tp-menu-bar d-lg-none" href="#"><i
                                    class="far fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-header-area-end -->
    </header>

    <!-- tp-offcanvus-area-start -->
    <div class="tp-offcanvas-area">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo">
                <a href="{{ route('home2.index') }}">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="">
                </a>
            </div>
            <div class="mobile-menu"></div>
            <div class="tpoffcanvas__social">
                <div class="social-icon">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->

    <main>

        <div class="tp-header-bg">
            <img src="{{ asset('assets/img/hero/hero-bg-2.png') }}" alt="">
        </div>

        <!-- tp-slider-area-start -->
        <div class="tp-hero__area tp-hero__bg-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-12">
                        <div class="tp-hero__wrapper text-center">
                            <div class="tp-hero__content text-center">
                                <h2 class="tp-hero__title-lg pb-40 theme-color wow tpfadeUp" data-wow-duration=".9s"
                                    data-wow-delay=".3s"><span>TODO</span> - Todo List
                                </h2>
                            </div>
                            <div class="tp-hero__contact pb-70 wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".7s">
                                <p>Belum punya akun?
                                    <b>
                                        <a class="btn btn-outline-secondary rounded-pill mx-2"
                                            href="{{ route('login') }}"> Login / Register
                                        </a>
                                    </b>
                                </p>
                            </div>
                            <div class="tp-hero__thumb-2 p-relative">
                                <img class="wow tpfadeUp rounded" border='1' data-wow-duration=".9s"
                                    data-wow-delay=".9s" src="{{ asset('assets/img/hero/custom-hero2.png') }}"
                                    alt="">
                                <div class="tp-hero__img-1 d-none d-lg-block">
                                    <img src="{{ asset('assets/img/hero/hero-img-3.png') }}" alt="">
                                </div>
                                {{-- <div class="tp-hero__img-2 d-none d-lg-block">
                                    <img class="rounded" src="{{ asset('assets/img/hero/custom-hero1.png') }}"
                                        alt="">
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <!-- tp-footer-area-start -->
        <div class="tp-footer__area theme-bg pb-50">
            {{-- <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-footer__content text-center">
                            <h3 class="tp-section-title text-white wow tpfadeUp" data-wow-duration=".9s"
                                data-wow-delay=".3s">Ready To Download 📥</h3>
                            <p class="wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">Discover your new
                                favorite spaces, from Sao Paulo to Seoul. Download from App Store or Google Play.</p>
                        </div>
                        <div class="tp-footer__thumb d-flex justify-content-center wow tpfadeUp"
                            data-wow-duration=".9s" data-wow-delay=".7s">
                            <div class="tp-footer__thumb-sm">
                                <a href="#"><img src="{{ asset('assets/img/app/app-2.png') }}"
                                        alt=""></a>
                            </div>
                            <div class="tp-footer__thumb-sm">
                                <a href="#"><img src="{{ asset('assets/img/app/app-3.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="tp-footer-bottom__area wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                <div class="container">
                    <div class="tp-footer-bottom__border-top pt-40">
                        <div class="row align-items-center">
                            <div
                                class="col-xl-9 col-lg-9 col-md-6 col-12 order-2 order-lg-1 text-center text-md-start">
                                <div class="tp-footer-bottom__logo">
                                    <a href="index.html">
                                        <h2 class="text-white">Quitox</h2>
                                        {{-- <img src="{{ asset('assets/img/logo/logo.png') }}" alt=""> --}}
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 order-2 order-lg-3 text-center text-md-end">
                                <div class="tp-footer-bottom__social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-footer-area-end -->
    </footer>

    <!-- JS here -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>



</body>

</html>
