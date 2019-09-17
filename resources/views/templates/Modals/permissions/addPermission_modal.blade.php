 <div class="modal fade" id="addPermission_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('permissions.Permission Data') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form role="form" id="addEditPermission_form">
                    <input type="hidden" value="" id="addEditPermission_UUID">
                    <div class="row">
                        <div class="col-sm-12 text-right" >
                            <a  onclick="viewListGroupPermissionModal()"   class="btn btn-default btn-md waves-effect waves-light m-b-30" ><i class="md md-list"></i>{{ trans('permissions.List All Group Permissions') }}</a>
                            <a  onclick="viewAddGroupPermissionModal()"  class="btn btn-default btn-md waves-effect waves-light m-b-30" ><i class="md md-list"></i>{{ trans('permissions.add Group Permissions') }}</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="addEditPermission_name_ar">{{ trans('permissions.Name ar') }}</label>
                        <input type="text" class="form-control" required id="addEditPermission_name_ar" placeholder="{{ trans('permissions.Enter Name ar') }}">
                    </div>

                    <div class="form-group">
                        <label for="addEditPermission_name_en">{{ trans('permissions.Name en') }}</label>
                        <input type="text" class="form-control" required id="addEditPermission_name_en" placeholder="{{ trans('permissions.Name en') }}">
                    </div>
                    <div class="form-group">
                        <label for="addEditPermission_permission_name">{{ trans('permissions.permissionName') }}</label>
                        <input type="text" class="form-control" required id="addEditPermission_permission_name" placeholder="{{ trans('permissions.enterPermissionName') }}">
                    </div>

                    <div class="form-group">
                        <label for="addEditPermission_groupPermission">{{ trans('permissions.Choose Group Permission') }}</label>
                        <select class="form-control" tabindex="-1" aria-hidden="true" id="addEditPermission_groupPermission">


                            <optgroup label="groups" id="selectGroupPermissionName">

                            </optgroup>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-sm-12" id="addEditPermission_errors">

                        </div>
                    </div>

                    <button type="button" data-dismiss="modal" id="closeAddEditPermission_modal"  class="btn btn-danger waves-effect waves-light m-l-10">{{ trans('permissions.cancel') }}</button>
                    <button type="submit" class="btn btn-default waves-effect waves-light">{{ trans('permissions.save') }}</button>
                </form>
            </div>

        </div>
    </div>
</div>
