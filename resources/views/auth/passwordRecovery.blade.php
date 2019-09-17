<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title>{{ trans('login.cmsPasswordRecoveryTitlePage') }}</title>

    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('css/responsive.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class=" card-box">
            <div class="panel-heading">
                <h3 class="text-center"> {{ trans('login.resetPassword') }}</h3>
            </div>

            <div class="panel-body">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div style="color: red;background: pink;border:1px solid red;padding: 10px;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('sendUserRecovery') }}" role="form" class="text-center">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                        </button>
                        {{ trans('login.enterYour') }} <b>{{ trans('login.email') }}</b> {{ trans('login.andInstructionsWillBeSentForYou') }}
                    </div>
                    <div class="form-group m-b-0">
                        <div class="input-group">
                            {{ csrf_field() }}
                            <input type="email" name="email" class="form-control" placeholder="{{ trans('login.enterEmail') }}" required="">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-pink w-sm waves-effect waves-light">
                                    {{ trans('login.reset') }}
                                </button>
                            </span>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>
</body>
</html>
