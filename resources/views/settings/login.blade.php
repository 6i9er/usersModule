<?php
$rtl = (app()->getLocale() == "ar") ? "-rtl" : "" ;
$direction = (app()->getLocale() == "ar") ? "left" : "right" ;
?>

        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link rel="shortcut icon" href="{{url('images/favicon_7.ico')}}">
    <title>minaamir.com | @yield('title') </title>
    <!-- Styles -->
    @include('layouts.styles')
    @yield('styles')
    <script src="{{ url('js/modernizr.min.js') }}"></script>
</head>
<body class="fixed-left">
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">
    <div class=" card-box">
        <div class="panel-heading">
            <h3 class="text-center"> Sign In to <strong class="text-custom">UBold</strong> </h3>
        </div>


        <div class="panel-body">
            <form class="form-horizontal m-t-20" action="index.html">

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="{{ trans('settings.usernameOrEmail') }}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="{{trans('settings.password')}}">
                    </div>
                </div>


                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">{{ trans('settings.login') }}</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="{{ route('resetPage') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i> {{ trans('settings.forgetYourPassword?') }}</a>
                    </div>
                </div>
            </form>

        </div>
    </div>


</div>
@yield('modals')
<!-- Scripts -->
@include('layouts.scripts')
</body>
</html>
