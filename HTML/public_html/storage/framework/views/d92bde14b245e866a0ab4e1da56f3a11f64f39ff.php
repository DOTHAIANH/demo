
<?php $__env->startSection('controller','Trang'); ?>
<?php $__env->startSection('controller_route',route('pages.list')); ?>
<?php $__env->startSection('action','Danh sách'); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
               	<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               	<form action="<?php echo e(route('pages.build.post')); ?>" method="POST">
					<?php echo e(csrf_field()); ?>

					<input name="type" value="<?php echo e($data->type); ?>" type="hidden">

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="">Trang</label>
								<input type="text" class="form-control" value="<?php echo e($data->name_page); ?> <?php echo e(request('lang')); ?>" disabled="">
				 				
								<?php if(\Route::has($data->route)): ?>
									<h5>
										<a href="<?php echo e(route($data->route)); ?>" target="_blank">
					                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
					                        Link: <?php echo e(route($data->route)); ?>

					                    </a>
									</h5>
				                <?php endif; ?>
							</div>
							
						</div>
					</div>
					<div class="nav-tabs-custom">
				        <ul class="nav nav-tabs">
				        	<li class="active">
				            	<a href="#activity3" data-toggle="tab" aria-expanded="true">Banner</a>
				            </li>

							<li class="">
				            	<a href="#activity2" data-toggle="tab" aria-expanded="true">Ý nghĩa</a>
				            </li>
				           
							<li class="">
				            	<a href="#activity4" data-toggle="tab" aria-expanded="true">Tin tức</a>
				            </li>
				            
				            <li class="">
								<a href="#activity1" data-toggle="tab" aria-expanded="true">Câu hỏi</a>
							</li>
						</ul>
				    </div>
				    <?php if(!empty($data->content )){
						$content = json_decode($data->content);
					} ?>
				    <div class="tab-content">
				    	<div class="tab-pane active" id="activity3">
				    		<div class="row">
				    			<div class="col-sm-12">
				    				<div class="form-group">
										<div class="form-group">
											<label for="">Tiêu đề</label>
											<textarea name="content[banner][title]" class="content"><?php echo @$content->banner->title; ?></textarea>
										</div>

										<div class="form-group">
											<label for="">Mô tả</label>
											<textarea name="content[banner][desc]" class="content"><?php echo @$content->banner->desc; ?></textarea>
										</div>
									</div>
								</div>
						    </div>
				    	</div>
				    	
				    	<div class="tab-pane" id="activity1">
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label>Hình ảnh</label>
										<div class="image">
											<div class="image__thumbnail">
												<img src="<?php echo e(!empty(@$content->ques->banner) ?  @$content->ques->banner : __IMAGE_DEFAULT__); ?>"
													 data-init="<?php echo e(__IMAGE_DEFAULT__); ?>">
												<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
													<i class="fa fa-times"></i>
												</a>
												<input type="hidden" value="<?php echo e(@$content->ques->banner); ?>" name="content[ques][banner]"  />
												<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-10">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<input type="text" class="form-control" name="content[ques_title]" value="<?php echo e(@$content->ques_title); ?>">
									</div>
								</div>

								<div class="col-sm-12">
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover question">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Câu hỏi</th>
												<th>Tiêu đề</th>
												<th>Mô tả</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											<?php if(!empty(@$content->question)): ?>
												<?php $__currentLoopData = $content->question; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<?php $index = $loop->index + 1;?>
													<?php echo $__env->make('backend.repeater.row-question', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php endif; ?>
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary"
													onclick="repeater(event,this,'<?php echo e(route('get.layout')); ?>','.index', 'question', '.question')">Thêm
											</button>
										</div>
									</div>

								</div>
							</div>
						</div>
				    	<div class="tab-pane" id="activity2">
				    		<div class="row">
				    			<div class="col-sm-12">
				    				<div class="form-group">
										<div class="form-group">
											<label for="">Tiêu đề</label>
											<textarea name="content[ynghia][title]" class="content"><?php echo @$content->ynghia->title; ?></textarea>
										</div>

										<div class="form-group">
											<label for="">Mô tả</label>
											<textarea name="content[ynghia][desc]" class="content"><?php echo @$content->ynghia->desc; ?></textarea>
										</div>
									</div>
								</div>
						    </div>
				    	</div>

				    	<div class="tab-pane" id="activity4">
				    		<div class="row">
				    			<div class="col-sm-12">
				    				<div class="form-group">
										<div class="form-group">
											<label for="">Tiêu đề</label>
											<input type="text" class="form-control" value="<?php echo e(@$content->news->title); ?>" name="content[news][title]">
										</div>

										<div class="form-group">
											<label for="">Mô tả</label>
											<textarea name="content[news][desc]" class="content" cols="30" rows="10"><?php echo @$content->news->desc; ?></textarea>
										</div>

										<div class="form-group">
											<label for="">Bài viết nổi bật</label>
											<?php 
												if(!empty(@$content->post_ids)) {
                                    				$postref = \App\Models\Post::whereIn('id', @$content->post_ids ?? [])->get();
												}
											?>
                                    			<select name="content[post_ids][]" multiple="" data-type="blog" class="form-control select_posts" style="width: 100%">
                                        			<?php $__currentLoopData = $postref ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                                            <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->name); ?></option>
			                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    			</select>
											
										</div>
									</div>
						        </div>
						    </div>
				    	</div>

			           	<button type="submit" class="btn btn-primary">Lưu lại</button>
			        </div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/pages/layout/home.blade.php ENDPATH**/ ?>