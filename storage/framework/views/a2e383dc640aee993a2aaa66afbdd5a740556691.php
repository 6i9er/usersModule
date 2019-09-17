<?php
$rtl = (app()->getLocale() == "ar") ? "-rtl" : "" ;
$direction = (app()->getLocale() == "ar") ? "left" : "right" ;
?>
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    
    <?php echo $__env->make('layouts.metaTags', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('metaTags'); ?>
    <link rel="shortcut icon" href="<?php echo e(url('images/favicon_1.ico')); ?>">
    <title>minaamir.com | <?php echo $__env->yieldContent('title'); ?> </title>
    <!-- Styles -->
    <?php echo $__env->make('layouts.styles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('styles'); ?>
    <script src="<?php echo e(url('js/modernizr.min.js')); ?>"></script>
</head>
<body class="fixed-left">

<div id="loader"  >
    <div class="circle"></div>
    <div class="circle-small"></div>
    <div class="circle-big"></div>
    <div class="circle-inner-inner"></div>
    <div class="circle-inner"></div>
</div>

    <div id="wrapper">
        
        <?php echo $__env->make('layouts.navBar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('layouts.sideBar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <?php echo $__env->yieldContent('content'); ?>
                </div> <!-- container -->
            </div> <!-- content -->
        </div>
        <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    <?php echo $__env->yieldContent('modals'); ?>
    <!-- Scripts -->
    <?php echo $__env->make('layouts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
