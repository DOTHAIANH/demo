
<?php $__env->startSection('controller', 'Con số'); ?>
<?php $__env->startSection('controller_route', route('number.index') ); ?>
<?php $__env->startSection('action','Chỉnh sửa'); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="clearfix"></div>
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<form action="<?php echo e(route('number.update', $data->id)); ?>" method="POST">
			<?php echo csrf_field(); ?>
			<?php echo method_field('PUT'); ?>
			<div class="row">
				<div class="col-sm-9">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity1" data-toggle="tab" aria-expanded="true">Thông tin</a>
		                    </li>
		                    <li class="">
		                        <a href="#mp3" data-toggle="tab" aria-expanded="true">Thông tin</a>
		                    </li>
		                    <li class="">
		                    	<a href="#setting1" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
		                    </li>
		                  
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane " id="mp3">
		                        <div class="row">
			                		<div class="col-sm-12">
										<div class="repeater" id="repeater">
											<table class="table table-bordered table-hover desc">
												<thead>
												<tr>
													<th style="width: 30px;">STT</th>
													<th>FIle</th>
													<th>Mô tả</th>
													<th style="width: 20px"></th>
												</tr>
												</thead>
												<tbody id="sortable">
												<?php
													$desc = json_decode($data->desc);
												?>
												<?php if(!empty(@$desc)): ?>
													<?php $__currentLoopData = @$desc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<?php $index = $loop->index + 1;?>
														<?php echo $__env->make('backend.repeater.row-desc', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
													<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<?php endif; ?>
												</tbody>
											</table>
											<div class="text-right">
												<button class="btn btn-primary"
														onclick="repeater(event,this,'<?php echo e(route('get.layout')); ?>','.index', 'desc', '.desc')">Thêm
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>


		                    <div class="tab-pane active" id="activity1">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tiêu đề</label>
											<input type="hidden" value="<?php echo e(@$data->type); ?>" name="type">
		                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo old('name', @$data->name); ?>" required="">
		                                </div>
		            					<div class="form-group">
		                                    <label>Link</label>
		                                    <input type="text" class="form-control" name="slug" value="<?php echo old('slug', @$data->slug); ?>" >
		                                </div>
		                            </div>
		                            <div class="col-sm-6">
		                                <div class="form-group">
		                                    <label>Con số</label>
		                                    <select name="conso" class="form-control" >
		                                    	<option value="0">Chọn</option>
		                                    	<option value="1" <?php echo e(@$data->conso == 1 ? 'selected' : ''); ?>>1</option>
		                                    	<option value="2" <?php echo e(@$data->conso == 2 ? 'selected' : ''); ?>>2</option>
		                                    	<option value="3" <?php echo e(@$data->conso == 3 ? 'selected' : ''); ?>>3</option>
		                                    	<option value="4" <?php echo e(@$data->conso == 4 ? 'selected' : ''); ?>>4</option>
		                                    	<option value="5" <?php echo e(@$data->conso == 5 ? 'selected' : ''); ?>>5</option>
		                                    	<option value="6" <?php echo e(@$data->conso == 6 ? 'selected' : ''); ?>>6</option>
		                                    	<option value="7" <?php echo e(@$data->conso == 7 ? 'selected' : ''); ?>>7</option>
		                                    	<option value="8" <?php echo e(@$data->conso == 8 ? 'selected' : ''); ?>>8</option>
		                                    	<option value="9" <?php echo e(@$data->conso == 9 ? 'selected' : ''); ?>>9</option>
		                                    	<option value="10" <?php echo e(@$data->conso == 10 ? 'selected' : ''); ?>>10</option>
		                                    	<option value="11" <?php echo e(@$data->conso == 11 ? 'selected' : ''); ?>>11</option>
		                                    	<option value="22" <?php echo e(@$data->conso == 22 ? 'selected' : ''); ?>>22</option>
		                                    	<option value="33" <?php echo e(@$data->conso == 33 ? 'selected' : ''); ?>>33</option>
		                                    	<option value="134" <?php echo e(@$data->conso == 134 ? 'selected' : ''); ?>>13/4</option>
		                                    	<option value="135" <?php echo e(@$data->conso == 135 ? 'selected' : ''); ?>>13/5</option>
		                                    	<option value="167" <?php echo e(@$data->conso == 167 ? 'selected' : ''); ?>>16/7</option>
		                                    	<option value="191" <?php echo e(@$data->conso == 191 ? 'selected' : ''); ?>>19/1</option>
		                                    	<option value="intro" <?php echo e(@$data->conso == 'intro' ? 'selected' : ''); ?>>Lời mở đầu</option>
		                                    	<option value="form" <?php echo e(@$data->conso == 'form' ? 'selected' : ''); ?>>Điền thông tin</option>
		                                    	<option value="form_success" <?php echo e(@$data->conso == 'form_success' ? 'selected' : ''); ?>>Điền thông tin thành công</option>
		                                    	<option value="end" <?php echo e(@$data->conso == 'end' ? 'selected' : ''); ?>>Lời kết</option>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="col-sm-6">
		                                <div class="form-group">
		                                    <label>Chủ đề</label>
		                                    <select name="type" class="form-control" >
		                                    	<option value="0">Chọn</option>
		                                    	<option value="intro" <?php echo e('intro' == $data->type ? 'selected' : null); ?>>Lời dẫn</option>
		                                    	<option value="end" <?php echo e('end' == $data->type ? 'selected' : null); ?>>Lời kết</option>
		                                    	<?php $__currentLoopData = \App\Models\Number::getType(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                                    <option value="<?php echo e($key); ?>" <?php echo e($key == $data->type ? 'selected' : null); ?>><?php echo e($item); ?></option>
				                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Nội dung</label>
		                                    <textarea class="content" name="content"><?php echo old('content', @$data->content); ?></textarea>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="tab-pane" id="setting1">
		                        <div class="form-group">
		                            <label>Title SEO</label>
		                            <label style="float: right;">Số ký tự đã dùng: <span id="countTitle"><?php echo e($data->meta_title != null ? mb_strlen( $data->meta_title, 'UTF-8') : 0); ?>/70</span></label>
		                            <input type="text" class="form-control" name="meta_title"
		                                   value="<?php echo old('desc', isset($data->meta_title) ? $data->meta_title : null ); ?>"
		                                   id="meta_title">
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Description</label>
		                            <label style="float: right;">Số ký tự đã dùng: <span id="countMeta"><?php echo e($data->meta_description != null ? mb_strlen( $data->meta_description, 'UTF-8') : 0); ?>/360</span></label>
		                            <textarea name="meta_description" class="form-control" id="meta_description"
		                                      rows="5"><?php echo old('meta_description', isset($data->meta_description) ? $data->meta_description : null ); ?></textarea>
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Keyword</label>
		                            <input type="text" class="form-control" name="meta_keyword"
		                                   value="<?php echo old('meta_keyword', isset($data->meta_keyword) ? $data->meta_keyword : null ); ?>">
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
		                    <div class="form-group">
		                       	<label class="custom-checkbox">
	                                <input type="checkbox" name="status" value="1" <?php echo e(@$data->status == 1 ? 'checked' : null); ?>> Hiển thị
	                            </label>
			                    
	                            <div class="form-group text-right">
			                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
			                    </div>
			                   
		                    </div>
		                </div>
		            </div>

		         <!--    <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">File MP3</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group file" style="text-align: center;">
                                <input type="text" value="<?php echo e(old('mp3', @$data->mp3)); ?>" class="form-control pb-3" name="mp3"  />
                                <div class="image__button" onclick="fileUpload(this)">
                                	<i class="fa fa-upload"></i>
                                    Chọn file
                                </div>
		                    </div>
		                </div>
		            </div> -->

		            <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Ảnh đại diện</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group" style="text-align: center;">
		                        <div class="image">
		                            <div class="image__thumbnail">
		                                <img src="<?php echo e(!empty($data->image) ? $data->image : __IMAGE_DEFAULT__); ?>"
		                                     data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
		                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                <input type="hidden" value="<?php echo e(old('image', @$data->image)); ?>" name="image"/>
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
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo e(url('public/backend/plugins/taginput/bootstrap-tagsinput.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
	
	
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
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


<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/number/edit.blade.php ENDPATH**/ ?>