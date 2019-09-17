<?php $__env->startSection('content'); ?>


            <?php echo $__env->make('templates.breadcrumb' , [
                'pageTitle' => trans('roles.allRoles'),
                'links' => array(
                    trans('permissions.homePage') => route('/'),
                    trans('permissions.allRoles') => "",
                )
            ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <?php if(in_array(Auth::user()->user_type , \App\Enums\UsersEnums::$systemIds) || in_array("addRoles" , $userPermissions)): ?>
                                        <a onclick='viewModalAction("addEditRole_modal")'
                                           class="btn btn-default btn-md waves-effect waves-light m-b-30"
                                        ><i class="md md-add"></i><?php echo e(trans('permissions.AddRole')); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                    <tr>
                                        <th >#</th>
                                        <th><?php echo e(trans('permissions.nameEn')); ?></th>
                                        <th><?php echo e(trans('permissions.nameAr')); ?></th>
                                        <th style="min-width: 90px;"><?php echo e(trans('permissions.action')); ?> </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?php if(count($roles)): ?>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo $__env->make('roles.templates.allRoles_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <?php /* echo $permissions->render(); */?>
                            </div>
                        </div>

                    </div> <!-- end col -->

                </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('modals'); ?>
    <?php echo $__env->make('templates.Modals.roles.permissionsModal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    
    <?php echo $__env->make('roles.scripts.addRolesScript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('roles.scripts.rolesScript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('templates.scripts.modals', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>