@extends('layouts.app')

@section('content')


            @include('templates.breadcrumb' , [
                'pageTitle' => trans('roles.allRoles'),
                'links' => array(
                    trans('permissions.homePage') => route('/'),
                    trans('permissions.allRoles') => "",
                )
            ])


{{-- page Content --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    @if(in_array(Auth::user()->user_type , \App\Enums\UsersEnums::$systemIds) || in_array("addRoles" , $userPermissions))
                                        <a onclick='viewModalAction("addEditRole_modal")'
                                           class="btn btn-default btn-md waves-effect waves-light m-b-30"
                                        ><i class="md md-add"></i>{{ trans('permissions.AddRole') }}</a>
                                    @endif
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                    <tr>
                                        <th >#</th>
                                        <th>{{ trans('permissions.nameEn') }}</th>
                                        <th>{{ trans('permissions.nameAr') }}</th>
                                        <th style="min-width: 90px;">{{ trans('permissions.action') }} </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @if(count($roles))
                                            @foreach($roles as $role)
                                                @include('roles.templates.allRoles_template')
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <?php /* echo $permissions->render(); */?>
                            </div>
                        </div>

                    </div> <!-- end col -->

                </div>

@endsection
@section('modals')
    @include('templates.Modals.roles.permissionsModal')
@endsection

@section('scripts')
    {{--
    listAllGroupPermission
        0- dont open any models
        1- open After Finish Modal
    --}}
    @include('roles.scripts.addRolesScript')
    @include('roles.scripts.rolesScript')
    @include('templates.scripts.modals')
@endsection

@section('styles')
@endsection