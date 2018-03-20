<?php echo $__env->make('layouts/admin/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<!-- END NAVIGATION -->
	<?php echo $__env->make('layouts/admin/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- MAIN PANEL -->
	<div id="main" role="main">
		<!-- RIBBON -->
		<div id="ribbon">
			<span class="ribbon-button-alignment">
				<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
					<i class="fa fa-refresh"></i>
				</span>
			</span>
			<?php if( !empty($breadcrumbs['1']) ): ?>
				<?php echo Breadcrumbs::render($breadcrumbs['0'], $breadcrumbs['1']); ?>

			<?php else: ?>
				<?php echo Breadcrumbs::render($breadcrumbs['0']); ?>

			<?php endif; ?>
		</div>
		<div id="content">
			<?php $nameRoute = Request::route()->getName();?>
			<?php echo $__env->yieldContent('breadcrumbs_no_url'); ?>
			<?php echo $__env->yieldContent('content'); ?>
		</div>
	</div>
	<!-- PAGE FOOTER -->
<?php echo $__env->make('layouts/admin/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>