<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Profile</title>
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
            margin-left: 90px!important;
        }
        .btn-primary {
            color: #fff;
            background-color: #d64b50;
            border-color: #d64b50;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #223140;
            border-color: #223140;
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
    </style>
</head>
<body>
<!-- start -->
<div class="navbar navbar-expand-md navbar-dark bg-dark mb-44" role="navigation">
    <a class="navbar-brand" href="{{ route('home')}}"><img style="width:200px;  padding-left:5px; position:relative; top:5px;" src="{{asset('img1/log2.png')}}" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="{{ route('user_profile')}}">Profile<span class="sr-only">(current)</span></a>
                </li>
            @endauth
{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="{{ route('home')}}">Offers<span class="sr-only">(current)</span></a>--}}
{{--            </li>--}}

{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="{{ route('home')}}">About Us<span class="sr-only">(current)</span></a>--}}
{{--            </li>--}}

{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="{{ route('home')}}">Contact Us<span class="sr-only">(current)</span></a>--}}
{{--            </li>--}}
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
<div class="container">
    <h1 style="color:#223140; ">Edit Profile</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            {{--            <div class="text-center">--}}
            {{--                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">--}}
            {{--                <h6>Upload a different photo...</h6>--}}

            {{--                <input type="file" class="form-control">--}}
            {{--            </div>--}}
        </div>
        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            {{--            <div class="alert alert-info alert-dismissable">--}}
            {{--                <a class="panel-close close" data-dismiss="alert">×</a>--}}
            {{--                <i class="fa fa-coffee"></i>--}}
            {{--                This is an <strong>.alert</strong>. Use this to show important messages to the user.--}}
            {{--            </div>--}}
            <h3 style="color:#223140; ">Personal info</h3>
            <form action="{{ route('user_edit_profile') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label">Name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="User_Name" type="text" value="{{auth()->user()->name}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="User_Email" type="text" value="{{auth()->user()->email}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Phone:</label>
                    <div class="col-lg-8">
                        <input class="form-control" name="User_Phone" type="text" value="{{auth()->user()->phone}}">
                    </div>
                </div>
                <form method="POST" action="{{ route('change.password') }}">
                    @csrf
                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                    <div class="form-group">
                        <label class="col-md-3 control-label">Current Password</label>
                        <div class="col-md-8">
                            <input class="form-control" name="current_password" value="" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">New password:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="new_password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                            <span></span>
                            <input type="reset" class="btn btn-default" value="Cancel">
                        </div>
                    </div>
                </form>
            </form>
        </div>
    </div>
</div>
<hr>
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
<script src="{{asset('js1/aos.js')}}"></script>
<script>
    AOS.init({
    });
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
@include('sweet::alert')
</body>
</html>
