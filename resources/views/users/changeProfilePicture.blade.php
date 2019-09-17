@extends('layouts.app')

@section('content')

    @include('templates.breadcrumb' , [
        'pageTitle' => trans('users.changeProfilePicture'),
        'links' => array(
            "homePage" => url('/'),
            trans('users.changeProfilePicture') => "" ,
        )
    ])

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-sm-12">
                        <input type='file' id="imgInp" />
                        <img id="blah" height="100px" width="100px" src="#" alt="{{ trans('users.selectYourNewProfilePicture') }}" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-right">
                <br><br>
                        <button class="btn btn-success">{{ trans('users.save') }}</button>
                        <button type="reset" class="btn btn-danger">{{ trans('users.cancel') }}</button>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->


    </div>

@endsection
@section('modals')

@endsection

@section('scripts')
    @include('users.scripts.changeProfilePictureScript')
    @include('templates.scripts.loadImage')
@endsection

@section('styles')
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
    {{--    <link href="{{ url('plugins/custombox/css/custombox.css') }}" rel="stylesheet">--}}
@endsection