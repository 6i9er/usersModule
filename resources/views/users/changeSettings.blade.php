@extends('layouts.app')

@section('content')

    @include('templates.breadcrumb' , [
        'pageTitle' => trans('users.changePassword'),
        'links' => array(
            "homePage" => url('/'),
            trans('users.changePassword') => "" ,
        )
    ])

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {{--@include('users.addUser')--}}
                <div class="form-group">
                    <label for="email">{{ trans('users.email') }}</label>
                    <input type="text" class="form-control" id="email" placeholder="{{ trans('users.enterYourEmail') }}">
                </div>
                <div class="form-group">
                    <label for="name">{{ trans('users.name') }}</label>
                    <input type="text" class="form-control" id="name" placeholder="{{ trans('users.enterYourName') }}">
                </div>

                <div class="row">
                    <label>{{ trans('users.signature') }}</label>
                    <div class="summernote">

                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 text-right">
                        <button type="button" class="btn btn-success" >{{ trans('users.save') }}</button>
                        <button type="reset" class="btn btn-danger" >{{ trans('users.cancel') }}</button>
                    </div>
                </div>

            </div>

        </div> <!-- end col -->


    </div>

@endsection
@section('modals')

@endsection

@section('scripts')
    @include('users.scripts.changePasswordScript')
@endsection

@section('styles')
    <link href="{{ url('plugins/summernote/summernote.css') }}" rel="stylesheet" />
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
    {{--    <link href="{{ url('plugins/custombox/css/custombox.css') }}" rel="stylesheet">--}}
@endsection