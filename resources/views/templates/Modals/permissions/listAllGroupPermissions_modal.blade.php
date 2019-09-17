
<div class="modal fade" id="allGroups_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('permissions.AllGroupPermissions') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 text-right" >
                        <a  onclick="viewAddGroupPermissionModal()"  class="btn btn-default btn-md waves-effect waves-light m-b-30" ><i class="md md-list"></i>{{ trans('permissions.add Group Permissions') }}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                <tr>
                                    <th >#</th>
                                    <th>{{ trans('permissions.nameEn') }}</th>
                                    <th>{{ trans('permissions.nameAr') }}</th>
                                    <th style="min-width: 90px;">{{ trans('permissions.action') }} <a href="javascript:void(0)" onclick="reloadAllGroupPermissions()" class="table-action-btn"><i class="md md-refresh"></i></a></th>
                                </tr>
                                </thead>

                                <tbody id="viewListAllGroupPermission_table">
                                    {{--@include('adminViews.permissions.templates.allGroupPermissions_template')--}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

