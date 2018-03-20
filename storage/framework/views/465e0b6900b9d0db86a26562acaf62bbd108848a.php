<?php echo $__env->make('layouts/fronts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- MAIN PANEL -->
	<div id="page" class="home-page">
		<?php echo $__env->yieldContent('content'); ?>
		<?php echo $__env->make('layouts/fronts/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
	<!-- PAGE FOOTER -->
<?php echo $__env->make('layouts/fronts/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>