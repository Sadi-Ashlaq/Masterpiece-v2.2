<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img1/icon.png')}}"/>
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Fontfaces CSS-->
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
    <style type="text/css">
        .modal-backdrop {
            position: relative;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 0;
            opacity: 0.1;
            background-color: #000;
        }
    </style>
</head>
<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p3">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="{{ route('admin.dashboard') }}">
                        <img  src="{{asset('img1/logo.png')}}" />
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">

                        @if(auth('admin')->user()->type == "super")
                            <li class="has-sub">
                                <a href="{{ route('manage_admin') }}">
                                    <i class="fas fa-sitemap"></i>Manage Admins
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                        @endif
                        <li>
                            <a href="{{ route('manage_user') }}">
                                <i class="fas fa-users"></i>
                                <span class="bot-line"></span>Manage Users</a>
                        </li>
                        <li>
                            <a href="{{ route('manage_brand') }}">
                                <i class="fas fa-tag"></i>
                                <span class="bot-line"></span>Manage Brands
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('manage_phone') }}">
                                <i class="fas fa-mobile"></i>
                                <span class="bot-line"></span>Manage Phones
                            </a>
                        </li>
                            <li>
                                <a href="{{ route('manage_contact') }}">
                                    <i class="fas fa-comments"></i>
                                    <span class="bot-line"></span>Manage Contact</a>
                            </li>
                         <li>
                                <a href="#">
                                    <i class="fas fa-tags
"></i>
                                    <span class="bot-line"></span>Manage Offer</a>
                         </li>
                    </ul>
                </div>
                <div class="header__tool">
                    <div class="header-button-item has-noti js-item-menu">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{auth()->guard('admin')->user()->name}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{auth()->guard('admin')->user()->name}}</a>
                                            </h5>
                                            <span class="email">{{auth()->guard('admin')->user()->email}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('admin_profile', auth()->guard('admin')->user()->id) }}">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <!-- END HEADER DESKTOP-->
    <!-- HEADER MOBILE-->
    <!-- END HEADER MOBILE -->
