<div class="modal fade" id="selectPermissions_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('users.SelectPermissions') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form role="form" id="permissionForm">

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="form-group">
                                <div class="checkbox checkbox-primary">
                                    <input class="selectAllPermission" id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        Select all
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr></hr>




                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="checkbox checkbox-primary">
                                    <input onclick="selectPermissions('selectPermission_1' , '1')" id="checkbox1" class="selectSubPermissions" type="checkbox">
                                    <label for="checkbox1">
                                        Group Name
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            Add
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            edit
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            delete
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            view
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox1" class="selectSubPermissions" type="checkbox">
                                    <label for="checkbox1">
                                        Group Name 2
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div >
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            list
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            Add
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            edit
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            delete
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            view
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default waves-effect waves-light">{{ trans('permissions.save') }}</button>
                    <button type="button" data-dismiss="modal"  class="btn btn-danger waves-effect waves-light m-l-10">{{ trans('permissions.cancel') }}</button>
                </form>
            </div>

        </div>
    </div>
</div>
