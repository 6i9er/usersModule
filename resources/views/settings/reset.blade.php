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
            <h3 class="text-center"> {{ trans('settings.resetPassword') }} </h3>
        </div>

        <div class="panel-body">
            <form method="post" action="#" role="form" class="text-center">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                        ×
                    </button>
                    {{ trans('settings.enterYour') }} <b>{{ trans('settings.email') }}</b> {{ trans('settings.andInstructionsWillBeSendToYou') }}
                </div>
                `

            </form>
        </div>
    </div>


</div>

@yield('modals')
<!-- Scripts -->
@include('layouts.scripts')
</body>
</html>
