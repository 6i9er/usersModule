<!-- Top Bar Start -->
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="{{ url('/') }}" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Ub<i class="md md-album"></i>ld</span></a>
            <!-- Image Logo here -->
            <!--<a href="index.html" class="logo">-->
            <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
            <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
            <!--</a>-->
        </div>
    </div>

    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button id="menuBtn" class="button-menu-mobile open-left waves-effect waves-light">
                        <i class="md md-menu"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>

                <!-- Start  System Links Section -->
                <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">{{ trans('navBar.CMS') }}<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">{{ trans('navBar.aboutUs') }}</a></li>
                            <li><a href="#">{{ trans('navBar.contactUs') }}</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- End  System Links Section -->

                <ul class="nav navbar-nav navbar-right pull-right">
                    <!-- Start Notification Section -->
                    <li class="dropdown top-menu-item-xs">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                            <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="notifi-title"><span class="label label-default pull-right">New 3</span>{{ trans('navBar.notifications') }}</li>
                            <li class="list-group slimscroll-noti notification-list">
                                @include('layouts.templates.notificationNavBar')
                            <li>
                                <a href="javascript:void(0);" class="list-group-item text-right">
                                    <small class="font-600">{{ trans('navBar.seeAllNotifications') }}</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Notification Section -->
                    <!-- Start Full Screen Section -->
                    <li class="hidden-xs">
                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                    </li>
                    <!-- End Full Screen Section -->
                    <!-- Start Setting Menu  Section -->
                    <li class="dropdown top-menu-item-xs">
                        <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{{ url('uploads/users/avatar-7.jpg') }}" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                            <li><a href="{{ url('language/ar') }}"><i class="ti-settings m-r-10 text-custom"></i> {{ trans('navBar.arabicTranslate') }}</a></li>
                            <li><a href="{{ url('language/en') }}"><i class="ti-settings m-r-10 text-custom"></i> {{ trans('navBar.englishTranslate') }}</a></li>
                            <li><a href="{{ route('lockScreen') }}"><i class="ti-lock m-r-10 text-custom"></i> {{ trans('navBar.lockScreen') }}</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ route('logout') }}"><i class="ti-power-off m-r-10 text-danger"></i> {{ trans('navBar.logout') }}</a></li>
                        </ul>
                    </li>
                    <!-- End Setting Menu  Section -->
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->