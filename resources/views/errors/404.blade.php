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
    <div class="ex-page-content text-center">
        <div class="text-error"><span class="text-primary">4</span><i class="ti-face-sad text-pink"></i><span class="text-info">4</span></div>
        <h2>{{ trans('errors.Who0ps! Page not found') }}</h2><br>
        <p class="text-muted">{{ trans('errors.This page cannot found or is missing.') }}</p>
        <p class="text-muted">{{ trans('errors.Use the navigation above or the button below to get back and track.') }}</p>
        <br>
        <a class="btn btn-default waves-effect waves-light" href="{{ url('/') }}"> {{ trans('errors.Return Home') }}</a>

    </div>
</div>
@yield('modals')
<!-- Scripts -->
@include('layouts.scripts')
</body>
</html>
