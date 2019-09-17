<tr >
    <td> <?php echo e($role->id); ?> </td>
    <td><?php echo e($role->name_en); ?> </td>
    <td><?php echo e($role->name_ar); ?> </td>
    <td>
        <?php if((in_array(Auth::user()->user_type , \App\Enums\UsersEnums::$systemIds)) || (in_array("editRoles" , $userPermissions))): ?>
            <a href="<?php echo e(route('adminGetRoleData' , $role->uuid)); ?>" target="_blank" class="table-action-btn "><i class="md md-edit"></i></a>
        <?php endif; ?>
        
    </td>
</tr>