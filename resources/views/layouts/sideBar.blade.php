<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="{{ url('uploads/users/avatar-7.jpg') }}" alt="" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('userChangeSettings') }}"><i class="md md-settings"></i> {{ trans('users.settings') }}</a></li>
                        <li><a href="{{ route('lockScreen') }}"><i class="md md-lock"></i> {{ trans('navBar.lockScreen') }}</a></li>
                        <li><a href="javascript:void(0)"><i class="md md-settings-power"></i> {{ trans('navBar.logout') }}</a></li>
                    </ul>
                </div>
                <p class="text-muted m-0">User Type</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-home"></i> <span> {{ trans('sidebar.adminPannel') }} </span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('users') }}">{{ trans('sidebar.users') }}</a></li>
                        <li><a href="{{ route('permissions') }}">{{ trans('sidebar.permissions') }}</a></li>
                        <li><a href="{{ route('getAllRoles') }}">{{ trans('sidebar.roles') }}</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->