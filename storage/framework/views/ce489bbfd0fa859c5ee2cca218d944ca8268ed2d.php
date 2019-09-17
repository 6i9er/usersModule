<?php if(!isset($is_edit) || $is_edit == "0"): ?>
    <tr id="user_<?php echo e($user->uuid); ?>">
<?php endif; ?>
    <td>
        <?php echo e($user->id); ?>

    </td>

    <td ><?php echo e($user->name); ?></td>

    <td>
        <?php echo e($user->email); ?>

    </td>
    <td>
        <?php echo e($user->username); ?>

    </td>
    <td>
        <span class="label label-success"><?php if($user->user_status == "0"): ?><?php echo e(trans('users.blocked')); ?><?php else: ?> <?php echo e(trans('users.active')); ?> <?php endif; ?></span>
    </td>
    <td class="text-center">
        <a  href="javascript:void(0)" onclick='viewEditUserModal("<?php echo e($user->uuid); ?>")'  class="table-action-btn"><i class="md md-edit"></i></a>
        <a  href="javascript:void(0)" go-href="<?php echo e(route('userResetPasswordByAdmin' , $user->uuid)); ?>" id="resetPassword_<?php echo e($user->uuid); ?>" show-msg="<?php echo e(trans('users.are you sure you want to reset this user password ??')); ?>" onclick='confirmAction("resetPassword_<?php echo e($user->uuid); ?>")'  class="table-action-btn"><i class="md md-track-changes"></i></a>
        <?php if($user->user_status == "1"): ?>
            <a  href="javascript:void(0)" go-href="<?php echo e(route('userBlock' , $user->uuid)); ?>"  id="blockPassword_<?php echo e($user->uuid); ?>" show-msg="<?php echo e(trans('users.are you sure you want to block this user  ??')); ?>" onclick='confirmAction("blockPassword_<?php echo e($user->uuid); ?>")'  class="table-action-btn"><i class="md   md-lock"></i></a>
        <?php elseif($user->user_status == "0"): ?>
            <a  href="javascript:void(0)" go-href="<?php echo e(route('userUnBlock' , $user->uuid)); ?>"  id="blockPassword_<?php echo e($user->uuid); ?>" show-msg="<?php echo e(trans('users.are you sure you want to un block this user  ??')); ?>" onclick='confirmAction("blockPassword_<?php echo e($user->uuid); ?>")'  class="table-action-btn"><i class="md  md-lock-open"></i></a>
        <?php else: ?>
            <a  href="javascript:void(0)" go-href="<?php echo e(route('userBlock' , $user->uuid)); ?>"  id="blockPassword_<?php echo e($user->uuid); ?>" show-msg="<?php echo e(trans('users.are you sure you want to block this user  ??')); ?>" onclick='confirmAction("blockPassword_<?php echo e($user->uuid); ?>")'  class="table-action-btn"><i class="md   md-lock"></i></a>

        <?php endif; ?>
    </td>
<?php if(!isset($is_edit) || $is_edit == "0"): ?>
    </tr>
<?php endif; ?>