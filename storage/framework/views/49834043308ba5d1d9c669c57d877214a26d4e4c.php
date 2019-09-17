<?php if(session()->has('success')): ?>
    <div class="alert alert-success text-center animated fadeIn">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            <?php echo session()->get('success'); ?>

        </strong>
    </div>
<?php endif; ?>

<?php if(session()->has('errors')): ?>
<div class="alert alert-danger text-center animated fadeIn">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>
        <?php if(gettype(session()->get('errors') == "array")): ?>
            <?php $__currentLoopData = session()->get('errors'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $error; ?><br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <?php echo session()->get('errors'); ?>

        <?php endif; ?>
    </strong>
</div>
<?php endif; ?>