

<!-- list item-->
<a href="javascript:void(0);" class="list-group-item">
    <div class="media">
        <div class="pull-left p-r-10">
            <em class="fa fa-user-plus noti-pink"></em>
        </div>
        <div class="media-body">
            <h5 class="media-heading"><?php echo e(trans('navBar.newUserRegistered')); ?></h5>
            <p class="m-0">
                <small><?php echo e(trans('navBar.newUser',['name'=> "Mina Amir"])); ?></small>
                
            </p>
        </div>
    </div>
</a>

<!-- list item-->
<a href="javascript:void(0);" class="list-group-item">
    <div class="media">
        <div class="pull-left p-r-10">
            <em class="fa fa-cog noti-warning"></em>
        </div>
        <div class="media-body">
            <h5 class="media-heading"><?php echo e(trans('navBar.newSetting')); ?></h5>
            <p class="m-0">
                <small><?php echo e(trans('navBar.thanksForUpdatingYourSetting')); ?></small>
            </p>
        </div>
    </div>
</a>

