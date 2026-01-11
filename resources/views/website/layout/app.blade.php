<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.svg">

    <title>IJ Restaurant</title>
    {{-- CSRF --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/fontawesome-5.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/unicons.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/metismenu.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/timepickers.min.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/hover-revel.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/bootstrap.min.css') }}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/mystyle.css') }}">
    @yield('css')
</head>
<style>
    /* Header Top Bar Styles */
    .header-two .header-top {
        background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%) !important;
        padding: 12px 30px !important;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .header-two .header-top .single-info {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .header-two .header-top .single-info .icon {
        color: #DD5903 !important;
        font-size: 14px;
    }
    
    .header-two .header-top .single-info .icon i {
        color: #DD5903 !important;
    }
    
    .header-two .header-top .single-info p,
    .header-two .header-top .single-info a {
        color: rgba(255,255,255,0.9) !important;
        font-size: 13px !important;
        font-weight: 400 !important;
        text-transform: none !important;
        letter-spacing: 0.3px;
        transition: color 0.3s ease;
    }
    
    .header-two .header-top .single-info a:hover {
        color: #DD5903 !important;
    }
    
    .header-two .header-top .end-top {
        display: flex;
        gap: 25px;
    }
    
    .header-two .header-top .start-top .single-info p {
        margin: 0;
    }
    
    /* Navbar Styles */
    .navbar {
        padding: 0;
    }
    
    .navbar-nav {
        gap: 8px;
    }
    
    .nav-link {
        margin-right: 3px;
        position: relative;
        font-weight: 600;
        padding: 10px 16px !important;
        font-size: 14px;
        white-space: nowrap;
    }

    .nav-link::after {
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 0;
        width: 0%;
        height: 2.5px;
        background-color: #DD5903;
        transition: .3s;
    }

    .nav-link:hover::after {
        width: 80%;
        color: #DD5903;
    }
    
    /* Responsive Navbar */
    @media (max-width: 991px) {
        .navbar-collapse {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #fff;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-radius: 0 0 12px 12px;
            z-index: 1000;
        }
        
        .navbar-nav {
            gap: 0;
        }
        
        .nav-link {
            padding: 12px 16px !important;
            border-bottom: 1px solid #f3f4f6;
        }
        
        .nav-link::after {
            display: none;
        }
        
        .navbar-toggler {
            border: 2px solid #DD5903 !important;
            padding: 6px 10px;
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23DD5903' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
        }
        
        .rts-header-right {
            gap: 10px !important;
        }
        
        .auth-buttons {
            flex-direction: column;
            gap: 8px;
        }
        
        .profile-name {
            display: none;
        }
    }
    
    @media (max-width: 576px) {
        .auth-btn {
            padding: 6px 12px;
            font-size: 12px;
        }
        
        .auth-btn i {
            display: none;
        }
    }


    .cart-badge {
        position: relative;
        display: inline-block;
    }

    .cart-icon {
        display: inline-block;
        width: 45px;
        height: 20px;
    }

    .cart-count {
        position: absolute;
        top: -10px;
        /* Adjust the value as needed to move the badge up or down */
        right: 9px;
        /* Adjust the value as needed to move the badge more to the left */
        display: inline-block;
        width: 20px;
        height: 20px;
        line-height: 20px;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
        background-color: #DD5903;
        color: white;
        border-radius: 50%;
    }

    .rts-header-right i {
        font-weight: 500;
    }
    
    /* Auth Buttons Styles */
    .auth-buttons {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .auth-btn {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 18px;
        font-size: 14px;
        font-weight: 600;
        border-radius: 6px;
        text-decoration: none !important;
        transition: all 0.3s ease;
    }
    
    .auth-btn.login-btn {
        background: transparent;
        color: #DD5903 !important;
        border: 2px solid #DD5903;
    }
    
    .auth-btn.login-btn:hover {
        background: #DD5903;
        color: #fff !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(221, 89, 3, 0.4);
    }
    
    .auth-btn.register-btn {
        background: linear-gradient(135deg, #DD5903 0%, #ff7b2e 100%);
        color: #fff !important;
        border: 2px solid transparent;
    }
    
    .auth-btn.register-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(221, 89, 3, 0.5);
    }
    
    /* Profile Dropdown Styles */
    .profile-dropdown-wrapper {
        position: relative;
    }
    
    .profile-trigger {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 6px 14px 6px 8px;
        background: linear-gradient(135deg, #DD5903 0%, #ff7b2e 100%);
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 3px 12px rgba(221, 89, 3, 0.3);
    }
    
    .profile-trigger:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 18px rgba(221, 89, 3, 0.45);
    }
    
    .profile-avatar {
        width: 32px;
        height: 32px;
        background: rgba(255, 255, 255, 0.25);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .profile-avatar i {
        color: #fff;
        font-size: 14px;
    }
    
    .profile-name {
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        max-width: 100px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .profile-arrow {
        font-size: 10px;
        color: rgba(255, 255, 255, 0.85);
        transition: transform 0.3s ease;
    }
    
    .profile-dropdown-wrapper.active .profile-arrow {
        transform: rotate(180deg);
    }
    
    .profile-dropdown-menu {
        position: absolute;
        top: calc(100% + 10px);
        right: 0;
        min-width: 260px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        z-index: 1000;
        overflow: hidden;
    }
    
    .profile-dropdown-wrapper.active .profile-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .profile-dropdown-header {
        display: flex;
        align-items: center;
        padding: 18px;
        background: linear-gradient(135deg, #DD5903 0%, #ff7b2e 100%);
        color: #fff;
    }
    
    .profile-dropdown-avatar {
        margin-right: 12px;
    }
    
    .profile-dropdown-avatar i {
        font-size: 42px;
        opacity: 0.9;
    }
    
    .profile-dropdown-info {
        flex: 1;
        overflow: hidden;
    }
    
    .profile-dropdown-name {
        display: block;
        font-size: 15px;
        font-weight: 600;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .profile-dropdown-email {
        display: block;
        font-size: 12px;
        opacity: 0.85;
        margin-top: 3px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .profile-dropdown-divider {
        height: 1px;
        background: #eee;
    }
    
    .profile-dropdown-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 18px;
        font-size: 14px;
        font-weight: 500;
        color: #444 !important;
        text-decoration: none !important;
        transition: all 0.2s ease;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
    }
    
    .profile-dropdown-item i {
        width: 18px;
        font-size: 15px;
        color: #DD5903;
    }
    
    .profile-dropdown-item:hover {
        background: #fff5ef;
        color: #DD5903 !important;
    }
    
    .profile-dropdown-item.logout-item {
        color: #dc3545 !important;
    }
    
    .profile-dropdown-item.logout-item i {
        color: #dc3545;
    }
    
    .profile-dropdown-item.logout-item:hover {
        background: #fff0f0;
    }
    
    .logout-form {
        margin: 0;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .auth-buttons {
            gap: 6px;
        }
        
        .auth-btn {
            padding: 6px 12px;
            font-size: 12px;
        }
        
        .profile-trigger {
            padding: 5px;
            border-radius: 50%;
        }
        
        .profile-name,
        .profile-arrow {
            display: none;
        }
        
        .profile-dropdown-menu {
            right: -50px;
            min-width: 240px;
        }
    }
</style>

<body class="home-three">

    <!-- header style two -->
    <!-- header area start -->
    <header class="header-two header-three header--sticky">
        <div class="header-top">
            <div class="start-top">
                <div class="single-info">
                    <div class="icon"><i class="fa-solid fa-location-dot"></i> </div>
                    <p>House 10, Road 03, Mirpur, Dhaka</p>
                </div>
            </div>
            <div class="end-top">
                <div class="single-info">
                    <div class="icon"><i class="fas fa-envelope-open"></i></div>
                    <a href="mailto:ishratjahan260@gmail.com">ishratjahan260@gmail.com</a>
                </div>
                <div class="single-info">
                    <div class="icon"><i class="fa-solid fa-phone-flip"></i></div>
                    <a href="tel:0799217813">07-99217813</a>
                </div>
            </div>
        </div>
        <div class="header-two-container">
            <div class="row">
                <div class="col-12">
                    <div class="header-main-wrapper">
                        <div class="menu-area left" id="menu-btn">
                            <a href="#" class="nav-menu-link menu-button">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                                <span class="dot4"></span>
                            </a>
                        </div>
                        <div class="rts-header-mid">
                            <!-- nav area start -->



                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="#"></a>
                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('home') }}" style="color: #DD5903;">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('wmenu') }}" style="color: #DD5903;">Menu</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('reserve') }}" style="color: #DD5903;">Reservation</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('contact') }}" style="color: #DD5903;">Contact</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('about') }}" style="color: #DD5903;">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('dashboard') }}" style="color: #DD5903;">Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                            <!-- nav-area end -->
                        </div>
                        <div class="logo-area">
                            <!-- <a href="index.html" class="logo">
                                <img src="{{ asset('website/assets/images/logo/02.svg') }}" alt="image-logo">
                            </a> -->
                        </div>
                        <!-- header right start -->
                        <div class="rts-header-right mt-2">
                            <div class="mt-1">
                                <a style="color: #DD5903;" href="#">
                                    <div class="cart-badge">
                                        <a style="color:#DD5903; ;" href="{{ route('order.create') }}">
                                            <span class="cart-icon"> <i class="fa-solid fa-cart-shopping"></i></span>
                                        </a>
                                        <span id="cartTotal" class="cart-count">5</span>
                                    </div>
                                </a>
                            </div>


                            <div class="account">
                                @auth
                                    {{-- Profile Dropdown for Logged In Users --}}
                                    <div class="profile-dropdown-wrapper">
                                        <div class="profile-trigger" id="profileDropdownTrigger">
                                            <div class="profile-avatar">
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <span class="profile-name">{{ Auth::user()->name }}</span>
                                            <i class="fa-solid fa-chevron-down profile-arrow"></i>
                                        </div>
                                        <div class="profile-dropdown-menu" id="profileDropdownMenu">
                                            <div class="profile-dropdown-header">
                                                <div class="profile-dropdown-avatar">
                                                    <i class="fa-solid fa-user-circle"></i>
                                                </div>
                                                <div class="profile-dropdown-info">
                                                    <span class="profile-dropdown-name">{{ Auth::user()->name }}</span>
                                                    <span class="profile-dropdown-email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="profile-dropdown-divider"></div>
                                            <a href="{{ route('profile.edit') }}" class="profile-dropdown-item">
                                                <i class="fa-solid fa-user-pen"></i> My Profile
                                            </a>
                                            <a href="{{ route('dashboard') }}" class="profile-dropdown-item">
                                                <i class="fa-solid fa-gauge-high"></i> Dashboard
                                            </a>
                                            <div class="profile-dropdown-divider"></div>
                                            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                                                @csrf
                                                <button type="submit" class="profile-dropdown-item logout-item">
                                                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    {{-- Login/Register Buttons for Guests --}}
                                    <div class="auth-buttons">
                                        <a href="{{ route('login') }}" class="auth-btn login-btn">
                                            <i class="fa-solid fa-right-to-bracket"></i> Login
                                        </a>
                                        <a href="{{ route('register') }}" class="auth-btn register-btn">
                                            <i class="fa-solid fa-user-plus"></i> Register
                                        </a>
                                    </div>
                                @endauth
                            </div>
                            <div class="menu-area right" id="menu-btn">
                                <a href="javascript:void(0)" class="nav-menu-link menu-button">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                    <span class="dot4"></span>
                                </a>
                            </div>
                        </div>
                        <!-- header right end -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- side bar for desktop -->
    <div id="side-bar" class="side-bar header-one">
        <div class="inner">
            <button class="close-icon-menu"><i class="far fa-times"></i></button>
            <!-- inner menu area desktop start -->
            <div class="inner-main-wrapper-desk d-none d-lg-block">
                <div class="thumbnail">
                    <!--<img src="{{ asset('website/assets/images/logo/01.svg') }}" alt="dinenos">-->
                </div>
                <div class="banner-shape-area">
                    <span class="shape"></span>
                    <span class="shape"></span>
                    <span class="shape"></span>
                </div>
                <div class="inner-content">
                    <ul class="feature-list">
                        <li class="query-list">
                            <span class="sub-text">House 10, Road 03, Mirput 06</span>
                            <a class="phone" href="tel:99988899900">01799217813</a>
                            <a class="email" href="mail-to_office%40webmailfree.html">ijrestaurant@gmail.com</a>
                        </li>
                        <li class="query-list two">
                            <p class="time">Mon - Thu: 10 AM - 02 AM</p>
                            <p class="time">Fri - Sun: 10 AM - 02 AM</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- mobile menu area start -->
            <div class="mobile-menu d-block d-lg-none">
                <nav class="nav-main mainmenu-nav mt--30">
                    <ul class="mainmenu" id="mobile-menu-active">
                        <li>
                            <a href="#" class="main">Home</a>
                        </li>
                        <li>
                            <a href="#" class="main">About</a>
                        </li>
                        <li>
                            <a href="" class="main">Menu</a>

                        </li>
                        <li>
                            <a href="#" class="main">Shop</a>
                        </li>
                        <li>
                            <a href="#" class="main">Blog</a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- header style two End -->

    @yield('content')


    <!-- rts footer area start -->
    <hr>
    <div class="rts-footer-one rts-footer-three mt-5">
        <div class="container py-5">
            <div class="row align-items-start">
                <!-- Contact Us -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div style="padding-left: 20px;">
                        <h6 class="mb-3" style="color: #fff !important; text-decoration: underline; text-underline-offset: 8px;">Contact Us</h6>
                        <ul class="list-unstyled" style="color: #fff !important; padding-left: 0; margin-left: 0;">
                            <li class="mb-2" style="color: #fff !important;"><i class="fa-solid fa-location-dot me-2" style="color: #fff !important;"></i> House 10, Road 03, Mirpur, Dhaka</li>
                            <li class="mb-2"><a href="tel:0799217813" style="color: #fff !important; text-decoration: none;"><i class="fa-solid fa-phone-flip me-2" style="color: #fff !important;"></i> 07-99217813</a></li>
                            <li><a href="mailto:ishratjahan260@gmail.com" style="color: #fff !important; text-decoration: none;"><i class="fa-solid fa-envelope-open me-2" style="color: #fff !important;"></i> ishratjahan260@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Quick Links -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div style="padding-left: 20px;">
                        <h6 class="mb-3" style="color: #fff !important; text-decoration: underline; text-underline-offset: 8px;">Quick Links</h6>
                        <ul class="list-unstyled" style="color: #fff !important; padding-left: 0; margin-left: 0;">
                            <li class="mb-2"><a href="{{ route('home') }}" style="color: #fff !important; text-decoration: none;"><i class="fa-sharp fa-light fa-arrow-right me-2" style="color: #fff !important;"></i> Home</a></li>
                            <li class="mb-2"><a href="{{ route('wmenu') }}" style="color: #fff !important; text-decoration: none;"><i class="fa-sharp fa-light fa-arrow-right me-2" style="color: #fff !important;"></i> Our Menu</a></li>
                            <li class="mb-2"><a href="{{ route('reserve') }}" style="color: #fff !important; text-decoration: none;"><i class="fa-sharp fa-light fa-arrow-right me-2" style="color: #fff !important;"></i> Reservation</a></li>
                            <li class="mb-2"><a href="{{ route('about') }}" style="color: #fff !important; text-decoration: none;"><i class="fa-sharp fa-light fa-arrow-right me-2" style="color: #fff !important;"></i> About Us</a></li>
                            <li><a href="{{ route('contact') }}" style="color: #fff !important; text-decoration: none;"><i class="fa-sharp fa-light fa-arrow-right me-2" style="color: #fff !important;"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Opening Hours -->
                <div class="col-lg-4 col-md-6">
                    <div style="padding-left: 20px;">
                        <h6 class="mb-3" style="color: #fff !important; text-decoration: underline; text-underline-offset: 8px;">Opening Hours</h6>
                        <ul class="list-unstyled" style="color: #fff !important; padding-left: 0; margin-left: 0;">
                            <li class="mb-2" style="color: #fff !important;"><i class="fa-solid fa-clock me-2" style="color: #fff !important;"></i> Mon - Fri: 10:00 AM - 10:00 PM</li>
                            <li class="mb-3" style="color: #fff !important;"><i class="fa-solid fa-clock me-2" style="color: #fff !important;"></i> Sat - Sun: 11:00 AM - 11:00 PM</li>
                        </ul>
                        <a href="{{ route('reserve') }}" class="rts-btn btn-primary">Book A Table</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- copy right area start -->
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-footer-one text-center py-3">
                            <p class="disc mb-0">
                                Copyright © 2024 IJ Restaurant. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
    <!-- rts footer area end -->

    <!-- header style two -->

    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- progress area end -->

    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>


    <div id="anywhere-home" class="">
    </div>

    <!-- pre loader start -->
    <div id="dinenos-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jquery js -->
    <script src="{{ asset('website/assets/js/plugins/jquery.min.js') }}"></script>
    <!-- jquery ui -->
    <!-- counter up -->
    <script src="{{ asset('website/assets/js/plugins/counter-up.js') }}"></script>
    <script src="{{ asset('website/assets/js/plugins/swiper.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('website/assets/js/vendor/twinmax.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('website/assets/js/vendor/aos.js') }}"></script>
    <!-- twinmax -->
    <script src="{{ asset('website/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <!-- split text js -->
    <script src="{{ asset('website/assets/js/vendor/split-text.js') }}"></script>
    <!-- text plugins -->
    <script src="{{ asset('website/assets/js/plugins/text-plugins.js') }}"></script>
    <!-- waypoint js -->
    <script src="{{ asset('website/assets/js/plugins/metismenu.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('website/assets/js/plugins/waypoint.js') }}"></script>
    <!-- metismenu js -->
    <script src="{{ asset('website/assets/js/vendor/metisMenu.min.js') }}"></script>
    <!-- waw -->
    <script src="{{ asset('website/assets/js/vendor/wow.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('website/assets/js/plugins/jquery-ui.js') }}"></script>
    <!-- jquery ui js -->
    <script src="{{ asset('website/assets/js/plugins/jquery-timepicker.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('website/assets/js/plugins/magnific-popup.js') }}"></script>
    <!-- sal animation -->
    <script src="{{ asset('website/assets/js/vendor/sal.min.js') }}"></script>
    <!-- bootstrap JS -->
    <script src="{{ asset('website/assets/js/plugins/bootstrap.min.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('website/assets/js/plugins/jquery-slideNav.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('website/assets/js/vendor/hover-revel.js') }}"></script>
    <!-- easing JS -->
    <script src="{{ asset('website/assets/js/plugins/swip-img.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('website/assets/js/main.js') }}"></script>
    <script src="{{ asset('website/assets/js/cart.js') }}"></script>

    <!-- header style two End -->




    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>

    <script>
        var cart = new Cart();
        // ..................cart add..................

        $(document).ready(function() {

            $("#cartTotal").html(cart.totalItems());

            $(".add-to-cart-btn").click(function() {

                var menuId = $(this).data("menu-id");
                let quantity = 1;

                $.getJSON("{{url('cartapi')}}/" + menuId, function(data) {
                    let images = [];

                    data.images.forEach(function(image) {
                        images.push(image.name);
                    });

                    let menu = {
                        'id': data.id,
                        'name': data.name,
                        'price': data.price,
                        'quantity': quantity,
                        'image': images
                    };

                    // Check if item already in cart
                    let alreadyInCart = cart.itemExists(data.id);
                    
                    // Add item (will update quantity if already exists)
                    cart.addItem(menu, quantity);

                    $("#cartTotal").html(cart.totalItems());
                    
                    // Show toast notification
                    let message = alreadyInCart 
                        ? data.name + ' quantity updated (Total: ' + cart.getItemQty(data.id) + ')'
                        : data.name + ' added to cart';
                    
                    Swal.fire({
                        icon: 'success',
                        title: alreadyInCart ? 'Cart Updated!' : 'Added to Cart!',
                        text: message,
                        showConfirmButton: false,
                        timer: 2000,
                        toast: true,
                        position: 'top-end',
                        background: '#fff',
                        iconColor: '#DD5903'
                    });

                })
            })
        })

        // ..................cart add end..................

        function financial(x) {
            return Number.parseFloat(x).toFixed(2);
        }

        $(document).ready(function() {

            let showCart = new Cart();
            console.log(showCart.getItems());
            let cartInfo = showCart.getItems();
            let html = "";
            cartInfo.forEach(e => {
                html += `<tr >
                <td>${e.name}</td>
       <td style="width: 100px;">
        <div style="max-width: 100%; max-height: 100px; display: flex; align-items: center; justify-content: center;">
            <img style="max-width: 100%; max-height: 100%; object-fit: contain;" src="{{ asset('storage/') }}/${e.image}" class="img-fluid" alt="">
        </div>
      </td>
     <td class="price">${e.price}</td>
      <td><input class="qu w-50" type="number" min="1" name="quantity" value="1"></td>
     <td class="itemtotal" >${e.price}</td>
     <td><a href="#" class="removeItem" data-item='${e.id}'><i style="color: #DD5903; font-size: larger;" class="fa-solid fa-trash-can"></i></a></td>
     </tr>`;

                return html;

            });
            $('#dyn_tr').html(html);


            updateTotal();

            $(document).on('blur change keyup', '.qu', function() {
                var $row = $(this).closest('tr');
                var qty = $row.find('.qu').val();
                var price = $row.find('.price').text();
                var itemtotal = qty * price;
                // console.log(itemtotal);
                $row.find('.itemtotal').text(financial(itemtotal));
                updateTotal();
            });

            $(".removeItem").click(function() {
                console.log($(this).data("item"));
                if (confirm("Are you sure you want to remove")) {
                    showCart.removeItem($(this).data("item"));
                    location.reload();
                }
            });

            function updateTotal() {

                var grandtotal = 0;
                $('.itemtotal').each(function() {
                    grandtotal += parseFloat($(this).text());

                });


                let gTotal = {
                    'total': grandtotal
                }
                localStorage.setItem("total", JSON.stringify(gTotal));
                // let cart = new Cart();
                // cart.settotal(grandtotal);

                $('.grandtotal').text(grandtotal);
                // console.log(4);
                // alert(grandtotal);


            }
        })


        $(document).on('click', '.myorder', function(event) {
            event.preventDefault();

            // alert("hi");

            let cart = new Cart();
            let items = cart.getItems();
            let order = [];

            items.forEach(e => {
                let menu_id = e.id;
                let name = e.name;
                let price = e.price;
                let qty = e.quantity;


                order.push({
                    menu_id: menu_id,
                    name: name,
                    price: price,
                    qty: qty
                })
                // console.log(order);
            })

            var user_id = $('#userId').val();
            let status = "pending";
            //alert(user_id);

            var grandtotal = JSON.parse(localStorage.getItem("total")).total;


            $.ajax({
                url: "{{ route('order.store') }}",
                type: 'post',
                data: {
                    orders: order,
                    grandtotal: grandtotal,
                    comment: $('#comment').val(),
                    bAddress: $('#bAddress').val(),
                    sAddress: $('#sAddress').val(),
                    user_id: user_id,
                    status: 'pending',

                },
                success: function(response) {

                    if (response.status === 'success') {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: false,
                            timer: 1500,
                            customClass: {
                                container: 'custom-swal-container',
                            },
                        }).then(() => {
                            cart.emptyCart();
                            location.reload();
                        });
                    }

                },
                error: function(xhr, status, error) {

                    console.error(xhr.responseText);
                }
            });



        });
    </script>

    {{-- Profile Dropdown Toggle Script --}}
    <script>
        $(document).ready(function() {
            // Toggle profile dropdown
            $('#profileDropdownTrigger').on('click', function(e) {
                e.stopPropagation();
                $('.profile-dropdown-wrapper').toggleClass('active');
            });
            
            // Close dropdown when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.profile-dropdown-wrapper').length) {
                    $('.profile-dropdown-wrapper').removeClass('active');
                }
            });
            
            // Prevent dropdown from closing when clicking inside
            $('.profile-dropdown-menu').on('click', function(e) {
                e.stopPropagation();
            });
        });
    </script>

    @yield('js')

</body>


</html>