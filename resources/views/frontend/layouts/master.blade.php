<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('fontend/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('fontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/css/style.css') }}">
    <style>
        .custom-link {
            color: #9c0303;
            background-color: #a10303;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .custom-link:hover {
            background-color: #0056b3;
            color: #940202;
        }

        .header-social li {
            margin-right: 10px;
        }

        .header-social li a {
            color: #ffffff;
            transition: color 0.3s ease;
        }

        .header-social li a:hover {
            color: #ff0000;
        }
    </style>
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('fontend/img/logo/logo.p') }}ng" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-top black-bg d-none d-md-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li><img src="{{ asset('fontend/img/icon/header_icon1.png') }}"
                                                alt="">34ºc, Sunny</li>
                                        <li><img src="{{ asset('fontend/img/icon/header_icon1.png') }}"
                                                alt="">Tuesday, 18th June, 2024</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        @guest
                                            <li><a class="custom-link" href="{{ route('login') }}">LoginADC</a></li>
                                            <li><a class="custom-link" href="{{ route('register') }}">Register</a></li>
                                        @else
                                            <li>Welcome, {{ Auth::user()->name }}</li>
                                            <li>
                                                <a class="custom-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('fontend/img/logo/logo.png') }}"
                                            alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            {{-- <li><a href="{{url('/category')}}">Category</a></li> --}}
                                            @php
                                                $category_nav = DB::table('categories')
                                                    ->select('id', 'ten', 'slug')
                                                    ->orderBy('id', 'asc')
                                                    ->where('anHien', 1)
                                                    ->get();

                                            @endphp

                                            <!-- Dropdown cho Category -->
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Category
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                                                    @foreach ($category_nav as $category)
                                                        @if ($category->ten)
                                                            <a class="dropdown-item"
                                                                href="{{ route('category', $category->slug) }}">{{ $category->ten }}</a>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </li>

                                            <li><a href="{{ url('/about') }}">About</a></li>
                                            <li><a href="{{ url('/laterNews') }}">Latest News</a></li>
                                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    {{-- <li><a href="elements.html">Element</a></li> --}}
                                                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                                                    <li><a href="{{ url('/blogDetail') }}">Blog Details</a></li>
                                                    <li><a href="{{ url('/detail') }}">Categori Details</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <i class="fas fa-search special-tag"></i>
                                    <div class="search-box">
                                        <form action="#">
                                            <input type="text" placeholder="Search">

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header End -->
    </header>

    @yield('content')

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="single-footer-caption">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="{{ url('/') }}"><img
                                            src="{{ asset('fontend/img/logo/logo2_footer.png') }}"
                                            alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Suscipit mauris pede for con sectetuer sodales adipisci for cursus fames
                                            lectus tempor da blandit gravida sodales Suscipit mauris pede for con
                                            sectetuer sodales adipisci for cursus fames lectus tempor da blandit gravida
                                            sodales Suscipit mauris pede for sectetuer.</p>
                                    </div>
                                </div>
                                <!-- social -->
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-6">
                        <div class="single-footer-caption mt-60">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over les idays appear creeping</p>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="{{ asset('fontend/img/logo/form-iocn.png') }}"
                                                        alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                        <div class="single-footer-caption mb-50 mt-60">
                            <div class="footer-tittle">
                                <h4>Instagram Feed</h4>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li><a href="#"><img src="{{ asset('fontend/img/post/instra1.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('fontend/img/post/instra2.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('fontend/img/post/instra3.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('fontend/img/post/instra4.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('fontend/img/post/instra5.jpg') }}"
                                                alt=""></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('fontend/img/post/instra6.jpg') }}"
                                                alt=""></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom aera -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Trần Minh Quân PD08630 <i
                                        class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                        target="_blank">Minh
                                        Quân</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('fontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('fontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('fontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('fontend/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('fontend/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('fontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('fontend/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('fontend/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('fontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('fontend/js/animated.headline.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.magnific-popup.js') }}"></script>

    <!-- Breaking New Pluging -->
    <script src="{{ asset('fontend/js/jquery.ticker.js') }}"></script>
    <script src="{{ asset('fontend/js/site.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('fontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('fontend/js/contact.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.form.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('fontend/js/mail-script.js') }}"></script>
    <script src="{{ asset('fontend/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('fontend/js/plugins.js') }}"></script>
    <script src="{{ asset('fontend/js/main.js') }}"></script>

</body>

</html>
