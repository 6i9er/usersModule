
    
        
            
                
                

            
            
            
                
                    
                    
                        
                            
                                
                                
                            
                            
                                
                                
                            
                            
                            
                                
                                    
                                    
                                        
                                    
                                
                            
                        
                        




                        
                            
                            
                                
                                    
                                        
                                            
                                            
                                                
                                            
                                        
                                    
                                
                                
                                    
                                    
                                            
                                                
                                                    
                                                        
                                                        
                                                            
                                                        
                                                    
                                                
                                            
                                    
                                    
                                


                            
                            
                        
                            
                                
                                    
                                
                            
                        
                    

                    
                        

                        
                    
                    
                    
                
            

        
    



<div class="modal fade" id="addEditRole_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title"><?php echo e(trans('users.addNewRole')); ?></h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form role="form" id="addEditRole_form">
                    <input type="hidden" id="addEditRole_UUID">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="form-group">
                                <label for="addEditRole_name_en"><?php echo e(trans('roles.roleNameEN')); ?></label>
                                <input type="text" class="form-control" required id="addEditRole_name_en" placeholder="<?php echo e(trans('permissions.enterRoleNameEN')); ?>">
                            </div>
                            <div class="form-group">
                                <label for="addEditRole_name_ar"><?php echo e(trans('roles.roleNameAR')); ?></label>
                                <input type="text" class="form-control" required id="addEditRole_name_ar" placeholder="<?php echo e(trans('permissions.enterRoleNameAR')); ?>">
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="checkbox checkbox-primary">
                                    <input class="selectAllPermission" id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        <?php echo e(trans('roles.selectAll')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <?php if(count($groupPermissions)): ?>
                            <div class="row">
                                <?php $__currentLoopData = $groupPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupPermission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-12">
                                        <div class="portlet ">
                                            <div class="portlet-heading bg-info">
                                                <h3 class="portlet-title">
                                                    <?php echo e($groupPermission->name_en); ?> :
                                                    ( <span class="selectSubPermissions" clicked="1">
                                                        <a href="javascript:void(0)"><?php echo e(trans('permissions.selectAll')); ?></a>
                                                    </span> )
                                                </h3>
                                                <div class="portlet-widgets">
                                                    <a data-toggle="collapse" data-parent="#groupPermission_<?php echo e($groupPermission->uuid); ?>" href="#groupPermission_<?php echo e($groupPermission->uuid); ?>"><i class="ion-minus-round"></i></a>
                                                    <span class="divider"></span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div id="groupPermission_<?php echo e($groupPermission->uuid); ?>" class="panel-collapse collapse in">
                                                <div class="portlet-body">
                                                    <?php if( count($groupPermission->permissions)): ?>
                                                        <div class="row">
                                                            <?php $__currentLoopData = $groupPermission->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <div class="checkbox checkbox-primary">
                                                                            <input id="<?php echo e($permission->uuid); ?>" value="<?php echo e($permission->uuid); ?>" class="subPermissions" type="checkbox">
                                                                            <label for="<?php echo e($permission->uuid); ?>">
                                                                                <?php if(app()->getLocale() == "en"): ?> <?php echo e($permission->name_en); ?> <?php else: ?> <?php echo e($permission->name_ar); ?> <?php endif; ?>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <p class="alert alert-danger"><?php echo e(trans('roles.noGroupPermissionsFound')); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <div class="col-sm-12" id="addEditRole_errors">

                        </div>
                    </div>
                    <button type="button" data-dismiss="modal"  class="btn btn-danger waves-effect waves-light m-l-10"><?php echo e(trans('permissions.cancel')); ?></button>
                    <button type="button" onclick="addEditRoles()" class="btn btn-default waves-effect waves-light"><?php echo e(trans('permissions.save')); ?></button>
                </form>
            </div>

        </div>
    </div>
</div>
