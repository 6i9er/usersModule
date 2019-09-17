<div class="modal fade" id="addUser_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('users.User Data') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form role="form" id="addNewUser_form">
                    <input type="hidden" id="addUser_uuid">
                    <div class="form-group">
                        <label for="addUser_name">{{ trans('users.Name ') }}</label>
                        {{--<input type="text" class="form-control" required id="addUser_name" placeholder="{{ trans('users.enterName') }}">--}}
                        <input type="text" class="form-control"  id="addUser_name" placeholder="{{ trans('users.enterName') }}">
                    </div>

                    <div class="form-group">
                        <label for="addUser_email">{{ trans('users.Email') }}</label>
                        <input type="email"  class="form-control" id="addUser_email" placeholder="{{ trans('users.enterEmail') }}">
                        {{--<input type="email" required class="form-control" id="addUser_email" placeholder="{{ trans('users.enterEmail') }}">--}}
                    </div>

                    <div class="form-group">
                        <label for="addUser_username">{{ trans('users.username') }}</label>
                        <input type="text"  class="form-control" id="addUser_username" placeholder="{{ trans('users.enterUsername') }}">
                        {{--<input type="text" required class="form-control" id="addUser_username" placeholder="{{ trans('users.enterUsername') }}">--}}
                    </div>

                    <div class="form-group">
                        <label for="addUser_password">{{ trans('users.password') }}</label>
                        <input type="password"  class="form-control" id="addUser_password" placeholder="{{ trans('users.enterUserPassword') }}">
                        {{--<input type="password" required class="form-control" id="addUser_password" placeholder="{{ trans('users.enterUserPassword') }}">--}}
                    </div>

                    <div class="form-group">
                        <label for="position">{{ trans('users.Choose User type') }}</label>
                        {{--<select id="addUser_userType" required class="selectpicker show-tick" tabindex="-1" aria-hidden="true">--}}
                        <select id="addUser_userType"  class="selectpicker show-tick" tabindex="-1" aria-hidden="true">
                            <option value="">{{ trans('users._select_') }}</option>
                            @foreach(\App\Enums\UsersEnums::$userTypes as $key => $userType)
                                <option value="{{ $key }}">{{ $userType }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="position">{{ trans('users.Choose User role') }}</label>
                        <select id="addUser_roles" class="selectpicker show-tick" multiple tabindex="-1" aria-hidden="true">
                            <option value="">{{ trans('users._select_') }}</option>
                            @foreach($roles as $role)
                                <option value="{{ $role->uuid }}">@if(app()->getLocale() == "ar"){{ $role->name_ar }} @else {{ $role->name_en }}@endif</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" id="addEditUser_errors">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-default waves-effect waves-light">{{ trans('permissions.save') }}</button>
                    <button type="button" data-dismiss="modal"  class="btn btn-danger waves-effect waves-light m-l-10">{{ trans('permissions.cancel') }}</button>
                </form>
            </div>

        </div>
    </div>
</div>
