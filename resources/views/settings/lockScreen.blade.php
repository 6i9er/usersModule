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

                        <div class="panel-body">
                            <form method="post" action="index.html" role="form" class="text-center">
                                <div class="user-thumb">
                                    <img src="{{ url('uploads/users/avatar-7.jpg') }}" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
                                </div>
                                <div class="form-group">
                                    <h3>Mina Amir</h3>
                                    <p class="text-muted">
                                        {{ trans('settings.enterYourPasswordToAccess.') }}
                                    </p>
                                    <div class="input-group m-t-30">
                                        <input type="password" class="form-control" placeholder="Password" required="">
                                        <span class="input-group-btn">
									<button type="submit" class="btn btn-pink w-sm waves-effect waves-light">
										{{ trans('settings.login') }}
									</button>
								</span>
                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <p>
                                {{ trans('settings.not') }} Mina Amir {{ trans('settings.?') }}<a href="{{ route('loginPage') }}" class="text-primary m-l-5"><b>{{ trans('settings.login') }}</b></a>
                            </p>
                        </div>
                    </div>

                </div>
@yield('modals')
<!-- Scripts -->
@include('layouts.scripts')
</body>
</html>
