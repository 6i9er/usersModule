<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">{{ trans('sidebar.settings') }}<span class="m-l-5"><i class="fa fa-cog"></i></span></button>
            <ul class="dropdown-menu drop-menu-right" role="menu">
                <li><a href="{{ route('userChangePassword') }}">{{ trans('users.changePassword') }}</a></li>
                <li><a href="{{ route('userChangeProfilePicture') }}">{{ trans('users.changeProfilePicture') }}</a></li>
                <li><a href="{{ route('userChangeSettings') }}">{{ trans('users.otherSettings') }}</a></li>
            </ul>
        </div>

        <h4 class="page-title">{{ $pageTitle }}</h4>
        <ol class="breadcrumb">
            @foreach($links as $urlName => $url)
                <li>@if($url)<a href="{{$url}}">{{$urlName}}</a>@else {{$urlName}} @endif</li>
            @endforeach
        </ol>


    </div>
</div>