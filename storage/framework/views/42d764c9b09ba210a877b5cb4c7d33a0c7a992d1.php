<!DOCTYPE html>
<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<html>
	<body style="background-color: #f5f8fa">
		<?php echo $__env->yieldContent('content'); ?>
	</body>
</html>