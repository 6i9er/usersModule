@extends('layouts.app')
@section('content')

    @include('layouts.flashMessages')
    @include('templates.breadcrumb' , [
        'pageTitle' => trans('sidebar.allUsers'),
        'links' => array(
            trans('sidebar.homePage') => url('/'),
            trans('sidebar.allUsers') => "" ,
        )
    ])

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {{--@include('users.addUser')--}}
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a onclick="viewAddUserModal()"
                           class="btn btn-default btn-md waves-effect waves-light m-b-30"
                        ><i class="md md-add"></i>{{ trans('users.Add User') }}</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover  m-0 table table-actions-bar">
                        <thead>
                        <tr>
                            <th >#</th>
                            <th>{{ trans('users.name') }}</th>
                            <th>{{ trans('users.email') }}</th>
                            <th>{{ trans('users.username') }}</th>
                            <th>{{ trans('users.status') }}</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="viewUsersDiv">
                        @if(count($users))
                            @foreach($users as $user)
                                @include('users.templates.allUser_template' , $user)
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div> <!-- end col -->


    </div>






@endsection
@section('modals')
    @include('templates.Modals.users.addUserModal')
@endsection

@section('scripts')
    @include('templates.scripts.modals')
    @include('templates.scripts.forms')
    @include('users.scripts.userScript')
@endsection

@section('styles')
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
{{--    <link href="{{ url('plugins/custombox/css/custombox.css') }}" rel="stylesheet">--}}
@endsection