<footer>
	<div class="fter-top">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="item-fter">
						<h4><?php echo e($site_info->name_company); ?></h4>
						<div class="desc">
							<?php echo $site_info->des_company; ?>

						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-fter">
						<h4>LIÊN HỆ</h4>
						<div class="social">
							<ul>
								<li><a href="<?php echo e($site_info->link_facebook); ?>" target="_blank"><img src="<?php echo e(__BASE_URL__); ?>/images/social-1.png" class="img-fluid" alt=""><span>Facebook: <?php echo e($site_info->facebook); ?></span></a></li>
								<li><a href="mailto:<?php echo e($site_info->email); ?>" target="_blank"><img src="<?php echo e(__BASE_URL__); ?>/images/social-2.png" class="img-fluid" alt=""><span><?php echo e($site_info->email); ?></span></a></li>
								<li><a href="tel:<?php echo e($site_info->hotline); ?>" target="_blank"><img src="<?php echo e(__BASE_URL__); ?>/images/social-3.png" class="img-fluid" alt=""><span><?php echo e($site_info->hotline); ?></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-fter">
						<h4>CHÍNH SÁCH VÀ ĐIỀU KHOẢN</h4>
						<div class="link-fter">
							<ul>
								<?php 
									if(!empty($site_info->post_ids)) {
                        				$postft = \App\Models\Post::whereIn('id', $site_info->post_ids ?? [])->get();
									}
								?>
								<?php $__currentLoopData = $postft ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><a href="<?php echo e(route('single.blog',$item->slug)); ?>"><?php echo e($item->name); ?></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- 	<div class="copyright">
		<div class="container">
			<p class="mb-0">©2022 Design By LeeAnh</p>
		</div>
	</div> -->
</footer><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/frontend/teamplate/footer.blade.php ENDPATH**/ ?>