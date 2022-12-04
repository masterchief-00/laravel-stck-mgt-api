<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('customer/images/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('customer/css/color-01.css') }}">
</head>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">

                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+123) 456 789" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>
                                @auth
                                    <li class="menu-item menu-item-has-children parent">
                                        <a title="My account" href="#">My account ({{ Auth::user()->name }})<i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="submenu curency">
                                            <li class="menu-item">
                                                <a title="Dashboard" href="#">Profile settings</a>
                                            </li>

                                            <li class="menu-item">
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        </ul>
                                    </li>
                                @else
                                    <li class="menu-item"><a title="Register or Login" href="/login">Login</a></li>
                                    <li class="menu-item"><a title="Register or Login" href="/register">Register</a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">

                        <div class="wrap-search center-section">
                            <div class="wrap-search-form">
                                <form action="#" id="form-search-top" name="form-search-top">
                                    <input type="text" name="search" value="" placeholder="Search here...">
                                    <button form="form-search-top" type="button"><i class="fa fa-search"
                                            aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="wrap-icon right-section">

                            <div class="wrap-icon-section minicart">
                                <a href="/cart" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span
                                            class="index">{{ Session::get('cart') ? count(Session::get('cart')) : 0 }}
                                            item(s)</span>
                                        <span class="title">CART</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">


                    <div class="primary-nav-section">
                        <div class="container">
                            <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                <li class="menu-item home-icon">
                                    <a href="/shop" class="link-term mercado-item-title"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="menu-item">
                                    <a href="/cart" class="link-term mercado-item-title">Cart</a>
                                </li>
                                <li class="menu-item">
                                    <a href="/contacts" class="link-term mercado-item-title">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>



    @yield('content')




    <!--footer area-->
    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="wrap-function-info">
                <div class="container">
                    <ul>
                        <li class="fc-info-item">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Free Shipping</h4>
                                <p class="fc-desc">Free On Oder Over $99</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Guarantee</h4>
                                <p class="fc-desc">30 Days Money Back</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Safe Payment</h4>
                                <p class="fc-desc">Safe your online payment</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Online Suport</h4>
                                <p class="fc-desc">We Have Support 24/7</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <!--End function info-->

            <div class="main-footer-content">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Contact Details</h3>
                                <div class="item-content">
                                    <div class="wrap-contact-detail">
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="contact-txt">45 Grand Central Terminal New York,NY 1017
                                                    United State USA</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">Contact@yourcompany.com</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                            <div class="wrap-footer-item">
                                <h3 class="item-header">Hot Line</h3>
                                <div class="item-content">
                                    <div class="wrap-hotline-footer">
                                        <span class="desc">Call Us toll Free</span>
                                        <b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
                                    </div>
                                </div>
                            </div>

                            <div class="wrap-footer-item footer-item-second">
                                <h3 class="item-header">Sign up for newsletter</h3>
                                <div class="item-content">
                                    <div class="wrap-newletter-footer">
                                        <form action="#" class="frm-newletter" id="frm-newletter">
                                            <input type="email" class="input-email" name="email" value=""
                                                placeholder="Enter your email address">
                                            <button class="btn-submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                            <div class="row">
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">My Account</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">My
                                                        Account</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Brands</a>
                                                </li>
                                                <li class="menu-item"><a href="#" class="link-term">Gift
                                                        Certificates</a></li>
                                                <li class="menu-item"><a href="#"
                                                        class="link-term">Affiliates</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Wish
                                                        list</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Infomation</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">Contact
                                                        Us</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Returns</a>
                                                </li>
                                                <li class="menu-item"><a href="#" class="link-term">Site
                                                        Map</a></li>
                                                <li class="menu-item"><a href="#"
                                                        class="link-term">Specials</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Order
                                                        History</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">We Using Safe Payments:</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item wrap-gallery">
                                        <img src="{{ asset('customer/images/payment.png') }}"
                                            style="max-width: 260px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Social network</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item social-network">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="twitter"><i
                                                        class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="facebook"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="pinterest"><i
                                                        class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="instagram"><i
                                                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="vimeo"><i
                                                        class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Dowload App</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item apps-list">
                                        <ul>
                                            <li><a href="#" class="link-to-item"
                                                    title="our application on apple store">
                                                    <figure><img
                                                            src="{{ asset('customer/images/brands/apple-store.png') }}"
                                                            alt="apple store" width="128" height="36"></figure>
                                                </a></li>
                                            <li><a href="#" class="link-to-item"
                                                    title="our application on google play store">
                                                    <figure><img
                                                            src="{{ asset('customer/images/brands/google-play-store.png') }}"
                                                            alt="google play store" width="128" height="36">
                                                    </figure>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>

            <div class="coppy-right-box">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2020 Surfside Media. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>
                                <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy
                                        Policy</a></li>
                                <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms &
                                        Conditions</a></li>
                                <li class="menu-item"><a href="return-policy.html" class="link-term">Return
                                        Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('customer/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('customer/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('customer/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('customer/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('customer/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('customer/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('customer/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('customer/js/functions.js') }}"></script>

    @yield('scripts')
</body>

</html>
