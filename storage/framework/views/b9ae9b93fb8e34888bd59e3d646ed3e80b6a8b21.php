<link href="<?php echo e(asset('css/homepage.css')); ?>" rel="stylesheet">

<?php if(Auth::guest()): ?>
<?php else: ?>
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
<?php endif; ?>
