<?php
$rtl = (app()->getLocale() == "ar") ? "-rtl" : "" ;
$direction = (app()->getLocale() == "ar") ? "left" : "right" ;
?>

        <!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <link rel="shortcut icon" href="<?php echo e(url('images/favicon_7.ico')); ?>">
    <title>minaamir.com | <?php echo $__env->yieldContent('title'); ?> </title>
    <!-- Styles -->
    <?php echo $__env->make('layouts.styles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('styles'); ?>
    <script src="<?php echo e(url('js/modernizr.min.js')); ?>"></script>
</head>
<body class="fixed-left">
<div class="account-pages"></div>
<div class="clearfix"></div>

<div class="wrapper-page">
    <div class="ex-page-content text-center">
        <div class="text-error"><span class="text-primary">4</span><i class="ti-face-sad text-pink"></i><span class="text-info">4</span></div>
        <h2><?php echo e(trans('errors.Who0ps! Page not found')); ?></h2><br>
        <p class="text-muted"><?php echo e(trans('errors.This page cannot found or is missing.')); ?></p>
        <p class="text-muted"><?php echo e(trans('errors.Use the navigation above or the button below to get back and track.')); ?></p>
        <br>
        <a class="btn btn-default waves-effect waves-light" href="<?php echo e(url('/')); ?>"> <?php echo e(trans('errors.Return Home')); ?></a>

    </div>
</div>
<?php echo $__env->yieldContent('modals'); ?>
<!-- Scripts -->
<?php echo $__env->make('layouts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
