<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Car Share</title>

        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/welcomepage.css')); ?>" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>



        <div class="flex-center position-ref full-height">

            

            <?php if(Route::has('login')): ?>
                <div class="top-right links">


                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>

                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>

                    <a href="<?php echo e(url('/aboutus')); ?>">About</a>
                    <a href="<?php echo e(url('/contact')); ?>">Contact</a>
                </div>
            <?php endif; ?>

            
        </div>
        
    </body>
    
</html>
