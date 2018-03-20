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
							'url'=> route('category-edit', $category->id)
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
									<label class="col-md-2 control-label">Tên danh mục</label>
									<div class="col-md-10">
										<input class="form-control" value="<?php echo e($category->name); ?>" name="name" placeholder="Tên danh mục" type="text">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-2 control-label">Danh mục cha</label>
									<div class="col-md-10">
										<select name="parent" class="form-control">
											<option value="1">Danh mục cha</option>
											<?php if (!empty($categories)) :?>
												<?php foreach($categories as $key => $cate) : ?>
													<?php $space = str_repeat('——', $cate->level - 1);
													$option_name = $space.$cate->name;

													$disable = '';
													if($cate->left >= $category->left && $cate->left < $category->right)
														$disable = "disabled";

													$selected 	 = '';
													if($cate->id == $category->parent) $selected = "selected";?>

													<option <?php echo e($selected); ?> value="<?php echo e($cate->id); ?>" <?php echo e($disable); ?>>
														<?php echo $option_name;?>
													</option>
												<?php endforeach; ?>
											<?php endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Hình ảnh</label>
									<div class="col-md-10">
										<input name="image" class="form-control" type="file">
										<?php if(!empty($category->image)): ?>
											<?php echo Html::image(
												$category->image,
												$category->name,
												array(
													'class' =>'img-thumbnail img-responsive maxwform'
												)); ?>

										<?php endif; ?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Tình trạng</label>
									<div class="col-md-10">
										<?php
											if($category->status == 1){
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
					                    <textarea class="ckeditor form-control" name="description" id="description" rows="10">
					                    	<?php echo $category->description;?>
					                    </textarea>
					                    <script>
					                        CKEDITOR.replace( 'description' , {
												customConfig	: '<?php echo e(asset("/ckeditor/config-user-sign.js")); ?>'
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