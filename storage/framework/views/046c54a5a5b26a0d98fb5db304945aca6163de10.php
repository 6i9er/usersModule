<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('layouts.flashMessages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('templates.breadcrumb' , [
        'pageTitle' => trans('sidebar.allUsers'),
        'links' => array(
            trans('sidebar.homePage') => url('/'),
            trans('sidebar.allUsers') => "" ,
        )
    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                
                <div class="row">
                    <div class="col-sm-12 text-right">
                        <a onclick="viewAddUserModal()"
                           class="btn btn-default btn-md waves-effect waves-light m-b-30"
                        ><i class="md md-add"></i><?php echo e(trans('users.Add User')); ?></a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover  m-0 table table-actions-bar">
                        <thead>
                        <tr>
                            <th >#</th>
                            <th><?php echo e(trans('users.name')); ?></th>
                            <th><?php echo e(trans('users.email')); ?></th>
                            <th><?php echo e(trans('users.username')); ?></th>
                            <th><?php echo e(trans('users.status')); ?></th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody id="viewUsersDiv">
                        <?php if(count($users)): ?>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('users.templates.allUser_template' , $user, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div> <!-- end col -->


    </div>






<?php $__env->stopSection(); ?>
<?php $__env->startSection('modals'); ?>
    <?php echo $__env->make('templates.Modals.users.addUserModal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo $__env->make('templates.scripts.modals', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('templates.scripts.forms', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('users.scripts.userScript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>