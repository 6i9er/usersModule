<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>{{ trans('login.cmsLoginTitlePage') }}</title>

    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .help-block{
            color: red;
        }
    </style>
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>
<body>
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class=" card-box">
            <div class="panel-heading">
                <h3 class="text-center"> {{ trans('login.Sign In to ') }}<strong class="text-custom">{{ trans('login.cms') }}</strong> </h3>
            </div>


            <div class="panel-body">
                @if ($errors->any())
                    <div style="color: red;background: pink;border:1px solid red;padding: 10px;">
                        <ul>

                            <li>{{ $errors->first() }}</li>
                        </ul>
                    </div>
                @endif
                <form method="post" class="form-horizontal m-t-20" action="{{ route('firstLogin') }}">
                    {{ csrf_field() }}
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="email"  placeholder="{{ trans('login.usernameOrEmail') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="{{ trans('login.password') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" name="rememberMe" type="checkbox">
                                <label for="checkbox-signup">
                                    {{ trans('login.rememberMe') }}
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">{{ trans('login.login') }}</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12">
                            <a href="{{ route('getUserRecovery') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i> {{ trans('login.forgetYourPassword?') }}</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</body>
</html>
{{--@extends('layouts.app')--}}

{{--@section('content')--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Login</div>--}}

                    {{--<div class="panel-body">--}}
                        {{--<form class="form-horizontal" method="POST" action="{{ route('login') }}">--}}
                            {{--{{ csrf_field() }}--}}

                            {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--<div class="checkbox">--}}
                                        {{--<label>--}}
                                            {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-8 col-md-offset-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--Login--}}
                                    {{--</button>--}}

                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                        {{--Forgot Your Password?--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}
