<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <title><?php echo e(trans('login.cmsLoginTitlePage')); ?></title>

    <link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('css/core.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('css/components.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('css/icons.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('css/pages.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('css/responsive.css')); ?>" rel="stylesheet" type="text/css" />
    <style>
        .help-block{
            color: red;
        }
    </style>
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="assets/js/modernizr.min.js"></script>

</head>
<body>
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class=" card-box">
            <div class="panel-heading">
                <h3 class="text-center"> <?php echo e(trans('login.Sign In to ')); ?><strong class="text-custom"><?php echo e(trans('login.cms')); ?></strong> </h3>
            </div>


            <div class="panel-body">
                <?php if($errors->any()): ?>
                    <div style="color: red;background: pink;border:1px solid red;padding: 10px;">
                        <ul>

                            <li><?php echo e($errors->first()); ?></li>
                        </ul>
                    </div>
                <?php endif; ?>
                <form method="post" class="form-horizontal m-t-20" action="<?php echo e(route('firstLogin')); ?>">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="email"  placeholder="<?php echo e(trans('login.usernameOrEmail')); ?>">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="<?php echo e(trans('login.password')); ?>">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" name="rememberMe" type="checkbox">
                                <label for="checkbox-signup">
                                    <?php echo e(trans('login.rememberMe')); ?>

                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit"><?php echo e(trans('login.login')); ?></button>
                        </div>
                    </div>

                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12">
                            <a href="<?php echo e(route('getUserRecovery')); ?>" class="text-dark"><i class="fa fa-lock m-r-5"></i> <?php echo e(trans('login.forgetYourPassword?')); ?></a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</body>
</html>



    
        
            
                
                    

                    
                        
                            

                            
                                

                                
                                    

                                    
                                        
                                        
                                    
                                    
                                
                            

                            
                                

                                
                                    

                                    
                                        
                                        
                                    
                                    
                                
                            

                            
                                
                                    
                                        
                                            
                                        
                                    
                                
                            

                            
                                
                                    
                                        
                                    

                                    
                                        
                                    
                                
                            
                        
                    
                
            
        
    

