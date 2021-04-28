<html>
<head>
    <style>
        .bg-success {
            background-color:rgba(0,0,0,0.3)!important;
        }
        .btn-primary {
            color: #fff;
            background-color: #223140;
            border-color: #223140;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #d64b50;
            border-color: #d64b50;
        }
    </style>
</head>

<div class="js-cookie-consent cookie-consent fixed-bottom bg-success p-2 text-light text-center">

    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>

    <button style="" class="js-cookie-consent-agree cookie-consent__agree btn btn-sm btn-primary">
        {{ trans('cookieConsent::texts.agree') }}
    </button>

</div>
</html>
