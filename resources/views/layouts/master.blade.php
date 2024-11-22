<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LMS - Learning Management System">

    <!-- ========== Page Title ========== -->
    <title>LMS - Learning Management System</title>

    <!-- ========== Favicon Icon ========== -->
    {{-- <link rel="shortcut icon" href="{{ asset('assets/img/a00.png') }}" type="image/x-icon"> --}}

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('assets/js/html5/html5shiv.min.js') }}"></script>
      <script src="{{ asset('assets/js/html5/respond.min.js') }}"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    <!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-bg navbar-fixed white no-background bootsnav">

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="button">
                            @if (Auth::check())
                                <a href="{{ route('board.index') }}">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                            @endif
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/img/a00.png') }}" class="logo logo-display" alt="Logo"
                            style="height:50px">
                        <img src="{{ asset('assets/img/a00.png') }}" class="logo logo-scrolled" alt="Logo"
                            style="height:50px">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a class="smooth-menu" href="#">Beranda</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#zonaintegritas">Zona Integritas</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#sop">SOP</a>
                        </li>
                        <li class="dropdown dropdown-right">
                            <a class="dropdown-toggle" data-toggle="dropdown">Survei</a>
                            <ul class="dropdown-menu">
                                @foreach ($surveis as $survei)
                                    <li><a
                                            href="{{ route('surveifront.index', $survei->slug) }}">{{ $survei->judul }}</a>
                                    </li>
                                @endforeach
                                {{-- <li><a target="_blank" href="login.html">Login</a></li> --}}
                            </ul>
                        </li>
                        {{-- <li>
                            <a class="smooth-menu" href="#contact">Contact</a>
                        </li> --}}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    @yield('content')


    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <!-- Shape -->
        {{-- <div class="footer-shape">
            <img src="{{ asset('assets/img/shape/4.png') }}" alt="Shape">
        </div> --}}
        <!-- Shape -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2024.</p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
