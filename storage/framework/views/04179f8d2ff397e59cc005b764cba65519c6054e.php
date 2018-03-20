<?php $__env->startSection('breadcrumbs_no_url'); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
			<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-user"></i> Bài viết</h1>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<section id="widget-grid" class="">
		<div class="row">
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="false">
					<header>
						<span class="widget-icon"> <i class="fa fa-table"></i> </span>
						<h2>Danh sách</h2>
					</header>

					<div>
						<!-- widget content -->
						<div class="widget-body no-padding">
							<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
								<thead>
								<tr>
									<th>ID</th>
									<th>Tiêu đề</th>
									<th>Author</th>
									<th>Danh mục</th>
									<th>Tình trạng</th>
									<th>Ngày tạo</th>
									<th>Chức năng</th>
								</tr>
								</thead>
								<tbody>
								<?php if(!empty($posts)): ?>
									<?php foreach($posts as $key => $post): ?>
										<?php if($post->status == 0)
											$status = '<i data-toggle="tooltip" title="Hiển thị bài viết này?" onclick="changeStatus('.$post->id.', '.$post->status.')" class="fa fa-minus-circle inactive-red"></i>';
										else $status = '<i data-toggle="tooltip" title="Ẩn bài viết này?" onclick="changeStatus('.$post->id.', '.$post->status.')" class="fa fa-chevron-circle-down active-blue"></i>';?>
										<tr>
											<td><?php echo e($post->id); ?> </td>
											<td><a href="<?php echo e(route('post-edit',$post->id)); ?>"> <?php echo e($post->title); ?></a></td>
											<td><?php echo e($post->author_id); ?></td>
											<td><?php echo e($post->category_id); ?></td>
											<td class="status-td" id="<?php echo e($post->id); ?>"><?php echo $status; ?></td>
											<td><?php echo e($post->created_at); ?></td>
											<td class="action-td" role="gridcell" aria-describedby="jqgrid_act">
												<a href="<?php echo e(route('post-edit',$post->id)); ?>" data-toggle="tooltip"
												   title="Chỉnh sửa danh mục" class="btn btn-xs btn-default">
													<i class="fa fa-pencil"></i>
												</a>
												<a href="<?php echo e(route('post-del',$post->id)); ?>" data-toggle="tooltip"
												   title="Xóa danh mục" class="btn btn-xs btn-default">
													<i class="fa fa-times"></i>
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								<?php endif; ?>
								</tbody>
							</table>
						</div>
						<!-- end widget content -->
					</div>
				</div>
			</article>
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_js'); ?>
	<script type="text/javascript">
		function changeStatus(id,status){
			var status_change = (status == 0) ? 1 : 0;
			$.ajax({
				type 	: "POST",
				url		: "<?php echo route('post-status');?>",
				headers : {'X-CSRF-TOKEN': token},
				data 	: {
					id	: id,
					status : status_change
				},
				success: function (response) {
					if ( status_change == 1 )
						var icon_status = '<i onclick="changeStatus('+id+', '+status_change+')"'+
								'data-toggle="tooltip" title="Ẩn bài viết này?"'+
								'class="fa fa-chevron-circle-down active-blue"></i>';
					else
						var icon_status = '<i onclick="changeStatus('+id+', '+status_change+')"'+
								'data-toggle="tooltip" title="Hiển thị bài viết này?"'+
								'class="fa fa-minus-circle inactive-red"></i>';
					$('#'+id).html(icon_status);
					$('[data-toggle="tooltip"]').tooltip();
				}
			});
		}
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>