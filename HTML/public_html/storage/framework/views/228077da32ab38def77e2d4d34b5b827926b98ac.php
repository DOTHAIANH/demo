
<?php $__env->startSection('controller', 'Đại lý'); ?>
<?php $__env->startSection('controller_route', route('daily.index') ); ?>
<?php $__env->startSection('action','Thêm mới'); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="clearfix"></div>
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<form action="<?php echo e(route('daily.store')); ?>" method="POST">
			<?php echo csrf_field(); ?>
			<input type="hidden" value="<?php echo e(request('type')); ?>" name="type">
			<div class="row">
				<div class="col-sm-12">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity1" data-toggle="tab" aria-expanded="true">Thông tin</a>
		                    </li>
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane active" id="activity1">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tên</label>
		                                    <input type="text" class="form-control" name="name" value="<?php echo old('name'); ?>" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Số điện thoại</label>
		                                    <input type="text" class="form-control" name="phone" value="<?php echo old('phone'); ?>" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Email</label>
		                                    <input type="text" class="form-control" name="email" value="<?php echo old('email'); ?>" required="">
		                                </div>
		                                <div class="form-group">
		                                    <label>Địa chỉ</label>
		                                    <input type="text" class="form-control" name="address" value="<?php echo old('address'); ?>" required="">
		                                </div>
		                            </div>
		                            <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Ngày sinh</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" class="form-control datepicker" name="birthday"
                                                   value="<?php echo e(empty(@$data->birthday) ? date('d-m-Y') :  date('d-m-Y', strtotime(@$data->birthday) )); ?>" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pt-1">
                                        <label>Giới tính</label>
                                        <label class="custom-checkbox">
                                            <input type="radio" name="sex"
                                                   value="1" checked> Nữ 
                                        </label>
                                        <label class="custom-checkbox">
                                            <input type="radio" name="sex"
                                                   value="2"> Nam 
                                        </label>
                                    </div>
		                        </div>
		                    </div>
		                
		                    <div class="form-group text-right">
		                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
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
<link rel="stylesheet" href="<?php echo e(url('public/backend/plugins/datepicker/daterangepicker.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
	<script src="<?php echo e(url('public/backend/plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
	<script type="text/javascript">
	    $('.datepicker').datepicker({
	        format: 'dd-mm-yyyy',
	        defaultDate: new Date()
	    });
	</script>
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
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/daily/add.blade.php ENDPATH**/ ?>