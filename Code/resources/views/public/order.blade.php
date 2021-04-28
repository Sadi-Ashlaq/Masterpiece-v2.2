<!DOCTYPE html>
<html>
<head>
{{-- Google map API    AIzaSyDTYZhDthRP9gzMg0NBZ-4LpfU44iTIekg--}}
{{--    10024--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css1/order.css')}}">
    <title>Repair Order</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img1/icon.png')}}"/>
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
        .btn1-outline-success {
            color: #fff;
            background-color: transparent!important;
            background-image: none!important;
            border-color: #204973!important;
        }
        .btn1-outline-success:hover {
            color: #fff!important;
            background-color: #204973!important;
            border-color: #28a745!important;
        }
        .btn1-outline-success:hover {
            color: #fff!important;
            background-color: #204973!important;
            border-color: #223140!important;
        }
        .btn1 {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
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
        </ul>
        @auth
            <a style=" text-decoration: none; color: white" href="{{route('logout')}}" class="btn1 btn1-outline-success my-2 my-sm-0 mt-2 mt-md-0" onclick="event.preventDefault();
             document.getElementById('user-logout-form').submit();"> Logout</a>
            <form id="user-logout-form" method="post" action="{{route('logout')}}" class="d-none">
                @csrf
            </form>
        @else
            <a style=" text-decoration: none; color: white" href="{{ route('public.login') }}" class="btn1 btn1-outline-success my-2 my-sm-0 mt-2 mt-md-0"> Sign In/up</a>
        @endauth
    </div>
</div>
<br>
<h2 style="padding-left: 3rem">Your Repair Starts Here.</h2>
<br>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="{{ route('orderfomr') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-50">
                        <h3>Tell us what device you have</h3>
                        <div class="rs-select2--light rs-select2--md">
                            <label for="cc-payment" class="control-label mb-1">Choose Your Cell Phone</label>
                            <select  style="width: 75px; margin-left: 15px" class="js-select2" name="Phone_Brand">
                                <option selected="selected">None</option>
                                @foreach ($brands as $Brand)

                                    <option value="{{$Brand->id}}">{{$Brand->Brand_Name}}</option>

                                @endforeach
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div style="display: none;" class="form-group">
                            <label class="col-lg-3 control-label">Phone:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="UserPhone" type="text" value="{{auth()->user()->phone}}">
                            </div>
                        </div>
                        <div style="display: none;" class="form-group">
                            <label class="col-lg-3 control-label">Name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="Username" type="text" value="{{auth()->user()->name}}">
                            </div>
                        </div>

                        <br>
                        <div class="rs-select2--light rs-select2--md">
                            <label for="cc-payment" class="control-label mb-1">Choose Your Phone Brand</label>
                            <select style="width: 75px" class="js-select2" name="Device">
                                <option selected="selected">None</option>
                                @foreach ($phones as $Phone)

                                    <option value="{{$Phone->Phone_Name}}">{{$Phone->Phone_Name}}</option>

                                @endforeach
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <br>
                        <div class="rs-select2--light rs-select2--md">
                            <label for="cc-payment" class="control-label mb-1">Choose Your Phone Color</label>
                            <select style="width: 75px; margin-left: 5px" class="js-select2" name="Color">
                                <option selected="selected">None</option>
                                <option value="Whit">whit</option>
                                <option value="Black">Black</option>
                                <option value="Ros Gold">Ros Gold</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <br>
                        <h3>Tell us what's broken.</h3>
                        <br>
                        <label class="container">
                            <input name="Damage[Broken_Screen]" type="checkbox">  Broken Screen
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <input name="Damage[Water_Damage]" type="checkbox">  Water Damage
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <input name="Damage[Back_Cover]" type="checkbox"> Back Cover
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <input name="Damage[Short_Battery_Life]" type="checkbox">  Short Battery Life
                        </label>
                        <label class="container">
                            <input name="Damage[Wont_Charge]" type="checkbox"> Wont Charge
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <input name="Damage[Camera_Doesnt_Work]" type="checkbox"> Camera Doesnt Work
                            <span class="checkmark"></span>
                        </label>
                        <label class="container">
                            <input name="Damage[Speaker_Doesnt_Work]" type="checkbox"> Speaker Doesnt Work
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="col-50">
                        <h3>Choose an appointment time.</h3>
                        <div class="icon-container datepicker">
                            <input style="width:380px" type="datetime-local" id="meeting-time"
                                   name="AppointmentTime" value="2021-04-21T11:30">
                        </div>
                        <div class="col-50">
                            <h3>check your location</h3>
                            <input style="width: 250px; background-color:#D64B50; color: white; " value="Press to get location" type="button" onclick="getLocation()"></input>
                            <p id="demo"></p>
                            </div>
            </form>
            <br>
                        <div class="col-50">
                            <h3>Repair Details</h3>
                            <br>
                            <div class="col-25">
                                <div class="container">
                                    <p>Device: <span class="price">Iphone 12</span></p>
                                    <p>Damage: <span class="price">Broken Screen</span></p>
                                    <p>Price: <span class="price">$30</span></p>
                                    <hr>
                                </div>
                            </div>
                    </div>
                </div>
                <input type="submit" value="Order" class="btn">
        </div>
    </div>
</div>
<script>
    var x = document.getElementById("demo");
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position) {

        x.innerHTML = "Success<br>"+"Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }
    function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "We cant come to you, You denied the request for location."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                x.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "An unknown error occurred."
                break;
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
@include('sweet::alert')
</body>
</html>
