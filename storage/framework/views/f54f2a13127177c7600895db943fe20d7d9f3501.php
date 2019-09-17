<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><?php echo e(trans('sidebar.settings')); ?><span class="m-l-5"><i class="fa fa-cog"></i></span></button>
            <ul class="dropdown-menu drop-menu-right" role="menu">
                <li><a href="<?php echo e(route('userChangePassword')); ?>"><?php echo e(trans('users.changePassword')); ?></a></li>
                <li><a href="<?php echo e(route('userChangeProfilePicture')); ?>"><?php echo e(trans('users.changeProfilePicture')); ?></a></li>
                <li><a href="<?php echo e(route('userChangeSettings')); ?>"><?php echo e(trans('users.otherSettings')); ?></a></li>
            </ul>
        </div>

        <h4 class="page-title"><?php echo e($pageTitle); ?></h4>
        <ol class="breadcrumb">
            <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $urlName => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php if($url): ?><a href="<?php echo e($url); ?>"><?php echo e($urlName); ?></a><?php else: ?> <?php echo e($urlName); ?> <?php endif; ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>


    </div>
</div>