
<?php $__env->startSection('controller','Cấu hình chung'); ?>
<?php $__env->startSection('action','Cập nhật'); ?>
<?php $__env->startSection('controller_route', route('backend.options.general')); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
        <div class="clearfix"></div>
		<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<form action="<?php echo e(route('backend.options.general.post')); ?>" method="POST">
			<?php echo csrf_field(); ?>
				<div class="nav-tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#activity" data-toggle="tab" aria-expanded="true">Thông tin chung</a>
					</li>
					
					<li class="">
						<a href="#activity2" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
					</li>
					
					<li class="">
						<a href="#activity5" data-toggle="tab" aria-expanded="true">Thông tin</a>
					</li>

					<li class="">
						<a href="#activity3" data-toggle="tab" aria-expanded="true">Bài viết</a>
					</li>

				</ul>
				<div class="tab-content">

					<div class="tab-pane active" id="activity">
						<div class="row">
							<div class="col-lg-2">
								<div class="form-group">
									<label>Favicon</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="<?php echo e(!empty($content->favicon) ? $content->favicon :  __IMAGE_DEFAULT__); ?>"  data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="<?php echo e(@$content->favicon); ?>" name="content[favicon]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="form-group">
									<label>Logo</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="<?php echo e(!empty($content->logo) ? $content->logo :  __IMAGE_DEFAULT__); ?>"  data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="<?php echo e(@$content->logo); ?>" name="content[logo]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>

							
						</div>

						<div class="row">
							
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Code Fanpages Facebook</label>
									<textarea name="content[code_facebook]" class="form-control" rows="10"><?php echo @$content->code_facebook; ?></textarea>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Code Google Analytics</label>
									<textarea name="content[google_analytics]" class="form-control" rows="10"><?php echo @$content->google_analytics; ?></textarea>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="">Script</label>
									<textarea name="content[script]" class="form-control" rows="10"><?php echo @$content->script; ?></textarea>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12">
								
								<div class="form-group">
									<label for="">Email nhận yêu cầu đặt hàng</label>
									<input type="email" class="form-control" name="content[email_admin]" value="<?php echo e(@$content->email_admin); ?>">
								</div>

								<div class="form-group">
									<label class="custom-checkbox">
										<input type="checkbox" name="content[index_google]" value="1" <?php echo e(@$content->index_google == 1 ? 'checked' : null); ?>> 
										Cho phép google tìm kiếm
									</label>
								</div>

							</div>
							
						</div>
					</div>

					<div class="tab-pane" id="activity5">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="">Tên công ty</label>
									<input type="text" class="form-control" name="content[name_company]" value="<?php echo e(@$content->name_company); ?>">
								</div>
								<div class="form-group">
									<label for="">Hotline</label>
									<input type="text" class="form-control" name="content[hotline]" value="<?php echo e(@$content->hotline); ?>">
								</div>
								<div class="form-group">
									<label for="">Facebook</label>
									<input type="text" class="form-control" name="content[facebook]" value="<?php echo e(@$content->facebook); ?>">
								</div>
								<div class="form-group">
									<label for="">Link Facebook</label>
									<input type="text" class="form-control" name="content[link_facebook]" value="<?php echo e(@$content->link_facebook); ?>">
								</div>
								<div class="form-group">
									<label for="">Địa chỉ</label>
									<input type="text" class="form-control" name="content[address]" value="<?php echo e(@$content->address); ?>">
								</div>
								<div class="form-group">
									<label for="">Email</label>
									<input type="text" class="form-control" name="content[email]" value="<?php echo e(@$content->email); ?>">
								</div>
								<div class="form-group">
									<label for="">Script</label>
									<textarea name="content[des_company]" class="form-control" rows="10"><?php echo @$content->des_company; ?></textarea>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="activity2">
						<div class="row">
							<div class="col-lg-2">
								<div class="form-group">
									<label>Hình ảnh đại diện khi chia sẻ</label>
									<div class="image">
										<div class="image__thumbnail">
											<img src="<?php echo e(!empty($content->logo_share) ? $content->logo_share :  __IMAGE_DEFAULT__); ?>"  data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
											<a href="javascript:void(0)" class="image__delete" 
											onclick="urlFileDelete(this)">
											<i class="fa fa-times"></i></a>
											<input type="hidden" value="<?php echo e(@$content->logo_share); ?>" name="content[logo_share]"  />
											<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-10">
								<div class="form-group">
									<label for="">Tên website</label>
									<input type="text" class="form-control" name="content[site_title]"
									value="<?php echo e(@$content->site_title); ?>">
								</div>

								<div class="form-group">
									<label for="">Mô tả ngắn</label>
									<textarea class="form-control" rows="5" 
									name="content[site_description]"><?php echo e(@$content->site_description); ?></textarea>
								</div>

								<div class="form-group">
									<label for="">Meta keyword</label>
									<input type="text" class="form-control" name="content[site_keyword]"
									value="<?php echo e(@$content->site_keyword); ?>">
								</div>

							</div>
						</div>
					</div>
					
					<div class="tab-pane" id="activity3">
						<div class="row">
			    			<div class="col-sm-12">
			    				<div class="form-group">
									<label for="">Bài viết nổi bật</label>
									<div class="form-group">
										<?php 
											if(!empty(@$content->post_ids)) {
                                				$postref = \App\Models\Post::whereIn('id', @$content->post_ids ?? [])->get();
											}
										?>
                                			<select name="content[post_ids][]" multiple="" data-type="private" class="form-control select_posts" style="width: 100%">
                                    			<?php $__currentLoopData = $postref ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                                            <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->name); ?></option>
		                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                			</select>
									</div>
								</div>
					        </div>
					    </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<button class="btn btn-primary" type="submit">Lưu lại</button>
				</div>
			</div>
		</form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/options/general.blade.php ENDPATH**/ ?>