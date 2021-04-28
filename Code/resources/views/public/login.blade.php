<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LOGIN</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img1/icon.png')}}"/>
    <link rel="stylesheet" href="{{asset('css1/custom1.css')}}">
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Create Account</h1>
            <div class="social-container">

            </div>

            <input id="name"  name="name" value="{{ old('name') }}"  type="text" placeholder="Name" />
            <div class="alert-danger">{{$errors->first('name')}}</div>
            <input id="email" name="email" value="{{ old('email') }}" type="email" placeholder="Email" />
            <div class="alert-danger">{{$errors->first('email')}}</div>
            <input id="phone" name="phone" value="{{ old('phone') }}" type="text" placeholder="Phone" />
            <div class="alert-danger">{{$errors->first('phone')}}</div>
            <input id="password" name="password" type="password" placeholder="Password" />
            <div class="alert-danger">{{$errors->first('password')}}</div>
            <input id="password-confirm" name="password_confirmation" type="password" placeholder="Confirm Password" />
            <div class="alert-danger">{{$errors->first('password_confirmation')}}</div>
            <button type="submit" > {{ __('Register') }}</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Sign in</h1>
            <div class="social-container">

            </div>

            <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Email" />
            <div class="alert-danger">{{$errors->first('email')}}</div>

            <input id="password" name="password" type="password" placeholder="Password" />
            <div class="alert-danger">{{$errors->first('password')}}</div>
{{--            <a href="#">Forgot your password?</a>--}}
            <br>
            <button type="submit"> {{ __('Login') }}</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>
        Copyright © 2021 G-Tak Team.
    </p>
</footer>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</body>
</html>
