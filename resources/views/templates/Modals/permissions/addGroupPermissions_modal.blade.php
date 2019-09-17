
<div class="modal fade" id="addGroupPermission_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('permissions.Group Permission Data') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form role="form" id="addEditGroupPermission_form">
                            <input type="hidden" name="addEditGroupPermission_UUID" id="addEditGroupPermission_UUID">
                            <div class="form-group">
                                <label for="addEditGroupPermission_name_ar">{{ trans('permissions.Name ar') }}</label>
                                <input type="text" class="form-control" required id="addEditGroupPermission_name_ar" placeholder="{{ trans('permissions.enter Name ar') }}">
                            </div>

                            <div class="form-group">
                                <label for="addEditGroupPermission_name_en">{{ trans('permissions.Name en') }}</label>
                                <input type="text" class="form-control" required id="addEditGroupPermission_name_en" placeholder="{{ trans('permissions.enter name en') }}">
                            </div>

                            <div class="row">
                                <div class="col-sm-12" id="addEditGroupPermission_errors">

                                </div>
                            </div>

                            <div class="text-right">
                                <button type="button" data-dismiss="modal" id="closeAddEditGroupPermission_modal" class="btn btn-danger waves-effect waves-light m-l-10">{{ trans('permissions.cancel') }}</button>
                                <button type="submit" class="btn btn-default waves-effect waves-light ">{{ trans('permissions.save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

