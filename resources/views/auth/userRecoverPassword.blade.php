<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>{{ trans('login.recoveryPage') }}</title>

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
                <h3 class="text-center"> {{ $member->name }}<strong class="text-custom">{{ trans('login.resetPassword') }}</strong> </h3>
            </div>


            <div class="panel-body">
                @if ($errors->any())
                    <div style="color: red;background: pink;border:1px solid red;padding: 10px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" class="form-horizontal m-t-20" action="{{ route('saveUserResetPassword') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="forget_token" value="{{ $member->forget_token }}" >
                    <input type="hidden" name="user_uuid" value="{{ $member->uuid }}" >
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <label>{{ trans('login.newPassword:') }}</label>
                            <input class="form-control" type="password" required="" name="password"  placeholder="{{ trans('login.newPassword') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <label>{{ trans('login.newConfirmPassword:') }}</label>
                            <input class="form-control" type="password" name="confirmPassword" required="" placeholder="{{ trans('login.confirmNewPassword') }}">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('confirmPassword') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">{{ trans('login.changePassword') }}</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>
</body>
</html>
