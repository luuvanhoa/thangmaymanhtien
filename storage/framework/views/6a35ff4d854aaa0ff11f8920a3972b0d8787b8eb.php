<?php $__env->startSection('breadcrumbs_no_url'); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
			<h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-th-list"></i> Thêm bài viết mới</h1>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<section id="widget-grid" class="">
		<div class="row">
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-editbutton="false">
				<div>
					<div class="widget-body">
						<?php echo Form::open(array(
							'id' => 'submit_form',
							'class' => 'form-horizontal ',
							'method' => 'POST',
							'enctype' => "multipart/form-data",
							'url'=> route('post-add')
						)); ?>

							<fieldset>
								<legend>Nhập thông tin bài viết</legend>
								<?php if(count($errors) > 0): ?>
									<div class="alert alert-danger">
										<ul>
										<?php foreach($errors->all() as $error): ?>
											<li><?php echo e($error); ?></li>
										<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>

								<div class="form-group">
									<label class="col-md-2 control-label">Tiêu đề bài viết</label>
									<div class="col-md-10">
										<?php echo Form::text('title', '', array(
											'id' => 'title',
											'placeholder' => 'Tiêu đề bài viết',
											'class' => 'form-control'
										)); ?>

									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Lead</label>
									<div class="col-md-10">
										<?php echo Form::textarea('lead', '', array(
											'id' => 'lead',
											'placeholder' => 'Lead',
											'rows' => 3,
											'class' => 'form-control'
										)); ?>

									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Description</label>
									<div class="col-md-10">
										<?php echo Form::textarea('description', '', array(
											'id' => 'description',
											'placeholder' => 'Description',
											'rows' => 3,
											'class' => 'form-control'
										)); ?>

									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Ảnh thumbnail bài viết</label>
									<div class="col-md-10">
										<input name="thumbnail" class="form-control" type="file">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Danh mục bài viết</label>
									<div class="col-md-10">
										<?php echo Form::select('category_id',
											$cate,
											'',
											array( 'class' => 'form-control' )
										); ?>

									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Tình trạng</label>
									<div class="col-md-10">
										<div class="radio radio-primary radio-custom">
								            <?php echo e(Form::radio('status', 1, false, ['id' => 'active'])); ?>

								            <label for="active" class="radio-sinline">Hiển thị</label>
								        </div>
								        <div class="radio radio-primary radio-custom">
								            <?php echo e(Form::radio('status', 0, true, ['id' => 'inactive'])); ?>

								            <label for="inactive" class="radio-sinline">Không hiển thị</label>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Nội dung bài viết</label>
									<div class="col-md-10">
										<script src="<?php echo e(asset('/ckeditor/ckeditor.js')); ?>"></script>
										<?php echo Form::textarea('content', null, [
											'class' => 'ckeditor form-control',
											'id' => 'content_'
										]); ?>

					                    <script>
					                        CKEDITOR.replace( 'content_' , {
												customConfig	: '<?php echo e(asset("/ckeditor/config-post.js")); ?>'
											});
					                    </script>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label"></label>
									<div class="col-md-10">
										<button type="button" class="btn btn-default" onclick="window.history.back();">Trở lại</button>
										<button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
									</div>
								</div>
							</fieldset>
						<?php echo Form::close(); ?>

					</div>
					<!-- end widget content -->
				</div>
				<!-- end widget div -->
			</div>
			</article>
		</div>
	</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_js'); ?>

<?php echo Html::script('js/make-url-friendly.js'); ?>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>