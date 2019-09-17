<?php
$rtl = (app()->getLocale() == "ar") ? "-rtl" : "" ;
$direction = (app()->getLocale() == "ar") ? "left" : "right" ;
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{-- Meta Tags --}}
    @include('layouts.metaTags')
    @yield('metaTags')
    <link rel="shortcut icon" href="{{url('images/favicon_1.ico')}}">
    <title>minaamir.com | @yield('title') </title>
    <!-- Styles -->
    @include('layouts.styles')
    @yield('styles')
    <script src="{{ url('js/modernizr.min.js') }}"></script>
</head>
<body class="fixed-left">
{{-- Loader --}}
<div id="loader"  >
    <div class="circle"></div>
    <div class="circle-small"></div>
    <div class="circle-big"></div>
    <div class="circle-inner-inner"></div>
    <div class="circle-inner"></div>
</div>

    <div id="wrapper">
        {{-- NavBar--}}
        @include('layouts.navBar')
        @include('layouts.sideBar')
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    @yield('content')
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
        @include('layouts.footer')
    </div>
    @yield('modals')
    <!-- Scripts -->
    @include('layouts.scripts')
</body>
</html>
