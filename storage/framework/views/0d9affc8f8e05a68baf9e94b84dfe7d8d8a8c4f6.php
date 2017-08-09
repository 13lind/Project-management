<?php $__env->startSection('content'); ?>

    <link href="<?php echo e(asset('css/homepage.css')); ?>" rel="stylesheet">


    <div>
        <nav class = "left-nav">
            <ul style="list-style: none;">
                <li><h2><a href="/findcar">Find a Car</a></h2></li>
                <li><h2><a href="/triphistory">Trip History</a></h2></li>
                <li><h2><a href="/profile">Profile</a></h2></li>
                <li><h2><a href="/payment">Payment</a></h2></li>
                <li><h2><a href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a></h2></li>

            </ul>
        </nav>
    </div>
    <div class = "centre-console">
        <div class="container" >
            <div>
                
                    <div class="panel panel-default" >
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            Welcome!
                        </div>
                    </div>
                
            </div>
        </div>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>