{{--<div class="modal fade" id="addEditRole_modal">--}}
    {{--<div class="modal-dialog">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>--}}
                {{--<h4 class="modal-title">{{ trans('users.SelectPermissions') }}</h4>--}}

            {{--</div>--}}
            {{--<div class="container"></div>--}}
            {{--<div class="modal-body">--}}
                {{--<form role="form" id="addEditRole_form">--}}
                    {{--<input type="hidden" id="addEditRole_UUID">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-12 text-center">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="addEditRole_name_en">{{ trans('roles.roleNameEN') }}</label>--}}
                                {{--<input type="text" class="form-control" required id="addEditRole_name_en" placeholder="{{ trans('permissions.enterRoleNameEN') }}">--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="addEditRole_name_ar">{{ trans('roles.roleNameAR') }}</label>--}}
                                {{--<input type="text" class="form-control" required id="addEditRole_name_ar" placeholder="{{ trans('permissions.enterRoleNameAR') }}">--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class="checkbox checkbox-primary">--}}
                                    {{--<input class="selectAllPermission" id="checkbox1" type="checkbox">--}}
                                    {{--<label for="checkbox1">--}}
                                        {{--{{ trans('roles.selectAll') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<hr></hr>--}}




                        {{--@if(count($groupPermissions))--}}
                            {{--<div class="row">--}}
                            {{--@foreach($groupPermissions as $groupPermission)--}}
                                {{--<div class="col-sm-12 " style="border:1px solid #000;">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<div class="checkbox checkbox-primary">--}}
                                            {{--<input  id="checkbox1" class="selectSubPermissions" type="checkbox">--}}
                                            {{--<label for="checkbox1" >--}}
                                                {{--{{ $groupPermission->name_en }} :--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--@if( count($groupPermission->permissions))--}}
                                    {{--<div class="row">--}}
                                    {{--@foreach($groupPermission->permissions as $permission)--}}
                                            {{--<div class="col-sm-3">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<div class="checkbox checkbox-primary">--}}
                                                        {{--<input id="{{ $permission->uuid }}" value="{{ $permission->uuid }}" class="subPermissions" type="checkbox">--}}
                                                        {{--<label for="{{ $permission->uuid }}">--}}
                                                            {{--{{ $permission->name_en }}--}}
                                                        {{--</label>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                    {{--@endforeach--}}
                                    {{--</div>--}}
                                {{--@endif--}}


                            {{--@endforeach--}}
                            {{--</div>--}}
                        {{--@else--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-12 ">--}}
                                    {{--<p class="alert alert-danger">{{ trans('roles.noGroupPermissionsFound') }}</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                    {{--</div>--}}

                    {{--<div class="row">--}}
                        {{--<div class="col-sm-12" id="addEditRole_errors">--}}

                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<button type="button" onclick="addEditRoles()" class="btn btn-default waves-effect waves-light">{{ trans('permissions.save') }}</button>--}}
                    {{--<button type="button" data-dismiss="modal"  class="btn btn-danger waves-effect waves-light m-l-10">{{ trans('permissions.cancel') }}</button>--}}
                {{--</form>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<div class="modal fade" id="addEditRole_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('users.addNewRole') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form role="form" id="addEditRole_form">
                    <input type="hidden" id="addEditRole_UUID">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="form-group">
                                <label for="addEditRole_name_en">{{ trans('roles.roleNameEN') }}</label>
                                <input type="text" class="form-control" required id="addEditRole_name_en" placeholder="{{ trans('permissions.enterRoleNameEN') }}">
                            </div>
                            <div class="form-group">
                                <label for="addEditRole_name_ar">{{ trans('roles.roleNameAR') }}</label>
                                <input type="text" class="form-control" required id="addEditRole_name_ar" placeholder="{{ trans('permissions.enterRoleNameAR') }}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="checkbox checkbox-primary">
                                    <input class="selectAllPermission" id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        {{ trans('roles.selectAll') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>

                        @if(count($groupPermissions))
                            <div class="row">
                                @foreach($groupPermissions as $groupPermission)
                                    <div class="col-sm-12">
                                        <div class="portlet ">
                                            <div class="portlet-heading bg-info">
                                                <h3 class="portlet-title">
                                                    {{ $groupPermission->name_en }} :
                                                    ( <span class="selectSubPermissions" clicked="1">
                                                        <a href="javascript:void(0)">{{ trans('permissions.selectAll') }}</a>
                                                    </span> )
                                                </h3>
                                                <div class="portlet-widgets">
                                                    <a data-toggle="collapse" data-parent="#groupPermission_{{$groupPermission->uuid}}" href="#groupPermission_{{$groupPermission->uuid}}"><i class="ion-minus-round"></i></a>
                                                    <span class="divider"></span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div id="groupPermission_{{$groupPermission->uuid}}" class="panel-collapse collapse in">
                                                <div class="portlet-body">
                                                    @if( count($groupPermission->permissions))
                                                        <div class="row">
                                                            @foreach($groupPermission->permissions as $permission)
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="{{ $permission->uuid }}" value="{{ $permission->uuid }}" class="subPermissions" type="checkbox">
                                                                            <label for="{{ $permission->uuid }}">
                                                                                @if(app()->getLocale() == "en") {{ $permission->name_en }} @else {{ $permission->name_ar }} @endif
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <p class="alert alert-danger">{{ trans('roles.noGroupPermissionsFound') }}</p>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-sm-12" id="addEditRole_errors">

                        </div>
                    </div>
                    <button type="button" data-dismiss="modal"  class="btn btn-danger waves-effect waves-light m-l-10">{{ trans('permissions.cancel') }}</button>
                    <button type="button" onclick="addEditRoles()" class="btn btn-default waves-effect waves-light">{{ trans('permissions.save') }}</button>
                </form>
            </div>

        </div>
    </div>
</div>
