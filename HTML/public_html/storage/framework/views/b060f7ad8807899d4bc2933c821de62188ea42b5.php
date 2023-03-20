
<?php $__env->startSection('controller', 'Con số'); ?>
<?php $__env->startSection('controller_route', route('number.index') ); ?>
<?php $__env->startSection('action','Thêm mới'); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="clearfix"></div>
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<form action="<?php echo e(route('number.store')); ?>" method="POST">
			<?php echo csrf_field(); ?>
			<input type="hidden" value="<?php echo e(request('type')); ?>" name="type">
			<div class="row">
				<div class="col-sm-9">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity1" data-toggle="tab" aria-expanded="true">Bài viết</a>
		                    </li>
		                    <li class="">
		                    	<a href="#setting1" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
		                    </li>
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity1">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tiêu đề</label>
		                                    <input type="text" class="form-control" name="name"  value="<?php echo old('name'); ?>" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Link</label>
		                                    <input type="text" class="form-control" name="slug" value="<?php echo old('slug'); ?>" >
		                                </div>
		                            </div>
		                            <div class="col-sm-6">
		                                <div class="form-group">
		                                    <label>Con số</label>
		                                    <select name="conso" class="form-control" >
		                                    	<option value="0">Chọn</option>
		                                    	<option value="1">1</option>
		                                    	<option value="2">2</option>
		                                    	<option value="3">3</option>
		                                    	<option value="4">4</option>
		                                    	<option value="5">5</option>
		                                    	<option value="6">6</option>
		                                    	<option value="7">7</option>
		                                    	<option value="8">8</option>
		                                    	<option value="9">9</option>
		                                    	<option value="10">10</option>
		                                    	<option value="11">11</option>
		                                    	<option value="22">22</option>
		                                    	<option value="33">33</option>
		                                    	<option value="intro">Lời mở đầu</option>
		                                    	<option value="form" >Điền thông tin</option>
		                                    	<option value="form_success">Điền thông tin thành công</option>
		                                    	<option value="end">Lời kết</option>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="col-sm-6">
		                                <div class="form-group">
		                                    <label>Chủ đề</label>
		                                    <select name="type" class="form-control" >
		                                    	<option value="0">Chọn</option>
		                                    	<option value="intro">Lời dẫn</option>
		                                    	<option value="end">Lời kết</option>
		                                    	<?php $__currentLoopData = \App\Models\Number::getType(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                                    <option value="<?php echo e($key); ?>"><?php echo e($item); ?></option>
				                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Nội dung</label>
		                                    <textarea class="content" name="content"><?php echo old('content'); ?></textarea>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                
		                    <div class="tab-pane" id="setting1">
		                        <div class="form-group">
		                            <label>Title SEO</label>
		                            <input type="text" class="form-control" name="meta_title" value="<?php echo old('meta_title'); ?>">
		                        </div>
		                        <div class="form-group">
		                            <label>Meta Description</label>
		                            <textarea name="meta_description" id="" class="form-control" rows="5"><?php echo old('meta_description'); ?></textarea>
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Keyword</label>
		                            <input type="text" class="form-control" name="meta_keyword" value="<?php echo old('meta_keyword'); ?>">
		                        </div>
		                    </div>

		                  
		                </div>
		            </div>
				</div>
				<div class="col-sm-3">
					<div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Đăng</h3>
		                </div>
		                <div class="box-body">
		                    
		                    <label class="custom-checkbox">
                                <input type="checkbox" name="status" value="1" checked=""> Hiển thị
                            </label>
                            
		                    <div class="form-group text-right">
		                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
		                    </div>
		                </div>
		            </div>

		            <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Ảnh đại diện</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group" style="text-align: center;">
		                        <div class="image">
		                            <div class="image__thumbnail">
		                                <img src="<?php echo e(old('image') ?  old('image') : __IMAGE_DEFAULT__); ?>"
		                                     data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
		                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                <input type="hidden" value="<?php echo e(old('image')); ?>" name="image"/>
		                                <div class="image__button" onclick="fileSelect(this)">
		                                	<i class="fa fa-upload"></i>
		                                    Upload
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>

				</div>
			</div>
		</form>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="<?php echo e(url('public/backend/plugins/taginput/bootstrap-tagsinput.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
	<script src="<?php echo e(url('public/backend/plugins/taginput/bootstrap-tagsinput.min.js')); ?>"></script>
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
			$('#tags-input').tagsinput({
			  	
			});
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/number/add.blade.php ENDPATH**/ ?>