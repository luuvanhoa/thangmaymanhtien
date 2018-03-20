<?php $__env->startSection('breadcrumbs_no_url'); ?>
	<div class="row">
		<div class="col-xs-12 col-sm-7 col-md-7 col-lg-6">
			<h1 class="page-title txt-color-blueDark">
			<i class="fa-fw fa fa-th-list"></i> Chỉnh sửa danh mục</h1>
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
							'url'=> route('post-edit', $post->id)
						)); ?>

							<fieldset>
								<legend>Chỉnh sửa danh mục</legend>
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
										<input class="form-control" value="<?php echo e($post->title); ?>" name="title" placeholder="Tiêu đề bài viết" type="text">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Lead</label>
									<div class="col-md-10">
										<?php echo Form::textarea('lead',$post->lead, array(
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
										<?php echo Form::textarea('description', $post->description, array(
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
										<?php if(!empty($post->thumbnail)): ?>
											<?php echo Html::image(
												$post->thumbnail,
												$post->thumbnail,
												array(
													'class' =>'img-thumbnail img-responsive maxwform'
												)); ?>

										<?php endif; ?>
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Danh mục bài viết</label>
									<div class="col-md-10">

										<select name="category_id" class="form-control">
											<?php $option = '';  ?>
											<?php if (!empty($categories)) :
												foreach($categories as $key => $cate) :
													$selected = '';
													if ($key == $post->category_id){
														$selected = "selected";
													}
													echo '<option '.$selected.' value="'.$key.'">'.$cate.'</option>';
												endforeach;
											endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Tình trạng</label>
									<div class="col-md-10">
										<?php
											if($post->status == 1){
												$inactive = ''; $active = 'checked';
											} else {
												$inactive = 'checked'; $active = '';
											}
										?>
										<div class="radio radio-primary radio-custom">
								            <input type="radio" name="status" id="active" value="1" <?php echo e($active); ?> >
								            <label for="active" class="radio-sinline">Hiển thị</label>
								        </div>
								        <div class="radio radio-primary radio-custom">
								            <input type="radio" name="status" id="inactive" value="0" <?php echo e($inactive); ?>>
								            <label for="inactive" class="radio-sinline">Không hiển thị</label>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Mô tả</label>
									<div class="col-md-10">
										<script src="<?php echo e(asset('/ckeditor/ckeditor.js')); ?>"></script>
					                    <textarea class="ckeditor form-control" name="content" id="content_" rows="10">
					                    	<?php echo $post->content;?>
					                    </textarea>
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
										<button type="submit" class="btn btn-primary">Lưu danh mục</button>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>