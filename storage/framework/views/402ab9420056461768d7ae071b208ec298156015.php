<div class="modal fade" id="addUser_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo e(trans('users.User Data')); ?></h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form role="form" id="addNewUser_form">
                    <input type="hidden" id="addUser_uuid">
                    <div class="form-group">
                        <label for="addUser_name"><?php echo e(trans('users.Name ')); ?></label>
                        
                        <input type="text" class="form-control"  id="addUser_name" placeholder="<?php echo e(trans('users.enterName')); ?>">
                    </div>

                    <div class="form-group">
                        <label for="addUser_email"><?php echo e(trans('users.Email')); ?></label>
                        <input type="email"  class="form-control" id="addUser_email" placeholder="<?php echo e(trans('users.enterEmail')); ?>">
                        
                    </div>

                    <div class="form-group">
                        <label for="addUser_username"><?php echo e(trans('users.username')); ?></label>
                        <input type="text"  class="form-control" id="addUser_username" placeholder="<?php echo e(trans('users.enterUsername')); ?>">
                        
                    </div>

                    <div class="form-group">
                        <label for="addUser_password"><?php echo e(trans('users.password')); ?></label>
                        <input type="password"  class="form-control" id="addUser_password" placeholder="<?php echo e(trans('users.enterUserPassword')); ?>">
                        
                    </div>

                    <div class="form-group">
                        <label for="position"><?php echo e(trans('users.Choose User type')); ?></label>
                        
                        <select id="addUser_userType"  class="selectpicker show-tick" tabindex="-1" aria-hidden="true">
                            <option value=""><?php echo e(trans('users._select_')); ?></option>
                            <?php $__currentLoopData = \App\Enums\UsersEnums::$userTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $userType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>"><?php echo e($userType); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="position"><?php echo e(trans('users.Choose User role')); ?></label>
                        <select id="addUser_roles" class="selectpicker show-tick" multiple tabindex="-1" aria-hidden="true">
                            <option value=""><?php echo e(trans('users._select_')); ?></option>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($role->uuid); ?>"><?php if(app()->getLocale() == "ar"): ?><?php echo e($role->name_ar); ?> <?php else: ?> <?php echo e($role->name_en); ?><?php endif; ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" id="addEditUser_errors">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-default waves-effect waves-light"><?php echo e(trans('permissions.save')); ?></button>
                    <button type="button" data-dismiss="modal"  class="btn btn-danger waves-effect waves-light m-l-10"><?php echo e(trans('permissions.cancel')); ?></button>
                </form>
            </div>

        </div>
    </div>
</div>
