<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>G-TAK</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img1/icon.png')}}"/>
    <!-- custom.css -->
    <link rel="stylesheet" href="{{asset('css1/custom.css')}}">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="{{asset('css1/bootstrap.min.css')}}">
	<!-- font-awesome -->
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!-- AOS -->
    <link rel="stylesheet" href="{{asset('css1/aos.css')}}">
    <script src="{{asset('js1/aos.js')}}"></script>
    <!------ NAV---------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!------ NAV ---------->
    <style>
        .mb-44 {
            margin-bottom:0!important;
        }
        .navbar .dropdown-toggle, .navbar .dropdown-menu a {
            cursor: pointer;
        }
        .navbar .dropdown-item.active, .navbar .dropdown-item:active {
            color: inherit;
            text-decoration: none;
            background-color: inherit;
        }
        .navbar .dropdown-item:focus, .navbar .dropdown-item:hover {
            color: #16181b;
            text-decoration: none;
            background-color: #f8f9fa;
        }
        @media (min-width: 767px) {
            .navbar .dropdown-toggle:not(.nav-link)::after {
                display: inline-block;
                width: 0;
                height: 0;
                margin-left: .5em;
                vertical-align: 0;
                border-bottom: .3em solid transparent;
                border-top: .3em solid transparent;
                border-left: .3em solid;
            }
        }
        .bg-dark {
            background-color: #d64b50!important;
            color: #ffffff;
        }
        #price-table__premium {
            background: #223140;
            color: #ffffff;
        }
        .btn-outline-success {
            color: #fff;
            background-color: transparent!important;
            background-image: none!important;
            border-color: #204973!important;
        }
        .btn-outline-success:hover {
            color: #fff!important;
            background-color: #204973!important;
            border-color: #28a745!important;
        }
        .btn-outline-success:hover {
            color: #fff!important;
            background-color: #204973!important;
            border-color: #223140!important;
        }
        .gg{
            color: #223140;
        }
        .text-md-left2 {
            text-align: left!important;
            margin-top: 50px;
        }
        .mb-5, .my-5 {
            margin-bottom: 9rem!important;
        }
        .mb-f5, .my-f5 {
            margin-bottom: 3rem!important;
        }
        /* width */
        ::-webkit-scrollbar {
            width: 12px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 2px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #223140;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #D64B50;
        }
        .ff{
            border: 1px solid #D64B50;
            border-radius: 25px;
            padding: -1px;
        }
    </style>
</head>
<body>
<!-- start -->
<div class="navbar navbar-expand-md navbar-dark bg-dark mb-44" role="navigation">
    <a class="navbar-brand" href="{{ route('home')}}"><img style="width:200px;  padding-left:5px; position:relative; top:5px;" src="{{asset('img1/log2.png')}}" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                @auth
                <a class="nav-link" href="{{ route('order')}}">Repair Order <span class="sr-only">(current)</span></a>
                @else
                    <a class="nav-link" href="{{ route('public.login')}}">Repair Order <span class="sr-only">(current)</span></a>

                @endauth
            </li>
            @auth
            <li style="background-color: #223140;border-radius: 15px;" class="nav-item active">
                <a class="nav-link" href="{{ route('user_profile')}}">Profile</a>
            </li>
            @endauth

            <li class="nav-item active">
                <a class="nav-link" href="#C2">Offers<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#C1">About Us<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#C3">Contact Us<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        @auth
            <a style=" text-decoration: none; color: white" href="{{route('logout')}}" class="btn btn-outline-success my-2 my-sm-0 mt-2 mt-md-0" onclick="event.preventDefault();
             document.getElementById('user-logout-form').submit();"> Logout</a>
            <form id="user-logout-form" method="post" action="{{route('logout')}}" class="d-none">
                @csrf
            </form>
        @else
            <a style=" text-decoration: none; color: white" href="{{ route('public.login') }}" class="btn btn-outline-success my-2 my-sm-0 mt-2 mt-md-0"> Sign In/up</a>
        @endauth
    </div>
</div>
<!-- end  -->
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url({{asset('img1/hi.jpg')}});">
        <div class="container text-center text-md-left2">
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-f5">
            	A New Way<br>
            	To Fix Your Phone
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-f4">
                The maintenance process is carried out
                proffissionally and
                <br> accurately by professional
                and traind technicians.
            </p>
            @auth
            <a href="{{route('order')}}" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Start Your Repair</a>
            @else
                <a href="{{route('public.login')}}" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Start Your Repair</a>
            @endauth
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h2 id="C1" class="text-center font-weight-bold my-5">ABOUT US</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset('img1/Webp.net-resizeimage (1).jpg')}}" alt="Smart Scan" class="mx-auto">
                <h4>Easy Order</h4>
                <p>Et usu ocurreret elaboraret doctus prodesse assueverit.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset('img1/WeCometoyou.jpg')}}" alt="We Come to you" class="mx-auto">
                <h4>We Come to you</h4>
                <p>The fully equipped maintenance team can
                    reach any customer via GPS quickly and accurately.</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="{{asset('img1/CACA.PNG')}}" alt="Phishing Detect" class="mx-auto">
                <h4>Quick maintenance</h4>
                <p>Fast maintenance in less than 24 hours.</p>
            </div>
        </div>
    </div>
    <!-- feature (skew background) -->
    <!-- price table -->
    <div class="container my-5 py-2" id="price-table">
        <h2 id="C2" class="text-center font-weight-bold d-block mb-3">Offers And Discount</h2>
        <div class="row">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5 ff">
                <h4 class="my-4">Offer 1</h4>
                <p class="font-weight-bold"> <span class="display-2 font-weight-bold">6</span>.JD</p>
                <ul class="list-unstyled">
                    <li>Change Charging Socket</li>
                    <li>For Any Device</li>
                    <li> Free Battery Check </li>
                    <li> Free Charging Cable  </li>
                </ul>
                {{--                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Offer</a>--}}
            </div>
            <div style="" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5 ff" >
                <h4 class="my-4">Offer 2</h4>
                <p class="font-weight-bold"> <span class="display-2 font-weight-bold">9</span>.JD</p>
                <ul class="list-unstyled">
                    <li>Change Battery</li>
                    <li>For Any Samsung Device</li>
                    <li> from 2016 To 2019 </li>
                    <li> Free Charging Cable  </li>
                </ul>
{{--                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Offer</a>--}}
            </div>
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5 ff">
                <h4 class="my-4">Offer 3</h4>
                <p class="font-weight-bold"> <span class="display-2 font-weight-bold">10</span>.JD</p>
                <ul class="list-unstyled">
                    <li>Change Screen</li>
                    <li>for</li>
                    <li>Iphone 6/6+/6s</li>
                    <li>Free Screen protector </li>
                </ul>
                {{--                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Offer</a>--}}
            </div>
        </div>
    </div>
    <!-- client -->
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url({{asset('img/contact-bk.jpg')}});">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 gg">
                    <h2 id="C3" class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                        Your questions and comments are important to us.
                        <br> Reach us by phone or mail.
                        <br>We have got everything covered for your needs.
                    </p>
                    <ul class="list-unstyled">
                        <li>Email : info@gtak.com</li>
                        <li>Phone : +962778870752</li>
                        <li>Address : Amman-Jordan</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('contact') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    	<div class="row">
	                        <div class="form-group col-md-6">
	                            <label for="name">Your Name</label>
	                            <input type="name" name="name" class="form-control" id="name">
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Your Email</label>
	                            <input type="email" name="email" class="form-control" id="Email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Message</label>
	                        <textarea class="form-control" name="message" id="message" rows="3"></textarea>
	                    </div>
                        <button style="color: white" type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<!-- copyright -->
<div class="jumbotron jumbotron-fluid" id="copyright">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                Copyright © 2021 G-Tak Team.
            </div>
            <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                <a href="#" class="d-inline-block text-center ml-2">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="#" class="d-inline-block text-center ml-2">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="#" class="d-inline-block text-center ml-2">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div>
    <!-- AOS -->
@include('cookieConsent::index')
    <script>
      AOS.init({
      });
    </script>
<script>
    $(document).ready(function () {
        $('.navbar .dropdown-item').on('click', function (e) {
            var $el = $(this).children('.dropdown-toggle');
            var $parent = $el.offsetParent(".dropdown-menu");
            $(this).parent("li").toggleClass('open');
            if (!$parent.parent().hasClass('navbar-nav')) {
                if ($parent.hasClass('show')) {
                    $parent.removeClass('show');
                    $el.next().removeClass('show');
                    $el.next().css({"top": -999, "left": -999});
                } else {
                    $parent.parent().find('.show').removeClass('show');
                    $parent.addClass('show');
                    $el.next().addClass('show');
                    $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
                }
                e.preventDefault();
                e.stopPropagation();
            }
        });
        $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
            $(this).find('li.dropdown').removeClass('show open');
            $(this).find('ul.dropdown-menu').removeClass('show open');
        });
    });
</script>
</body>
</html>
