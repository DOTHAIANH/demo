
<?php $__env->startSection('main'); ?>
<main>
    <section class="box-blog">
    	<?php $__currentLoopData = @$data['post']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key == 0): ?>
        <div class="blog-top">
            <div class="container">
                <div class="title text-center">
                    <h2><?php echo e($value->name); ?></h2>
                </div>
                <div class="list-blog-top">
                    <div class="row">
						
                        <div class="col-md-8">
                            <div class="list-blog-left">
                            	<?php $__currentLoopData = $value->Posts()->orderByDesc('posts.created_at')->take(2)->get() ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="item-blog-top">
                                    <div class="avarta"><a href="<?php echo e(route('single.blog',$v->slug)); ?>"><img src="<?php echo e($v->image); ?>" class="img-fluid w-100" alt="<?php echo e($v->name); ?>"></a></div>
                                    <div class="info">
                                        <h3><a href="<?php echo e(route('single.blog',$v->slug)); ?>"><?php echo e($v->name); ?></a></h3>
                                        <div class="desc">
                                            <?php echo $v->desc; ?>

                                        </div>
                                        <div class="link-detail"><a href="<?php echo e(route('single.blog',$v->slug)); ?>">Xem chi tiết</a></div>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div> 
                        </div>
                        <?php $__currentLoopData = $value->Posts()->orderByDesc('posts.created_at')->skip(2)->take(1)->get() ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="blog-right">
                                <div class="avarta"><a href="<?php echo e(route('single.blog',$v->slug)); ?>"><img src="<?php echo e($v->image); ?>" class="img-fluid w-100" alt="<?php echo e($v->name); ?>"></a></div>
                                <div class="info">
                                    <h3><a href="<?php echo e(route('single.blog',$v->slug)); ?>"><?php echo e($v->name); ?></a></h3>
                                    <div class="desc"><?php echo $v->desc; ?></div>
                                    <div class="link-detail"><a href="<?php echo e(route('single.blog',$v->slug)); ?>">Xem chi tiết</a></div>
                                </div>
                            </div>
                        </div>
     					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="list-news-cate">
            <div class="container">
                <div class="box-news">
                    <div class="title-news text-center">
                        <h2><?php echo e($value->name); ?></h2>
                    </div>
                    <div class="list-news">
                        <div class="row">
							<?php $__currentLoopData = $value->Posts()->orderByDesc('posts.created_at')->take(8)->get() ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4 col-sm-6" >
			                        <div class="item-blog">
			                            <div class="avarta"><a href="<?php echo e(route('single.blog',$v->slug)); ?>"><img src="<?php echo e($v->image); ?>" class="img-fluid w-100" alt="<?php echo e($v->name); ?>"></a></div>
			                            <div class="info">
			                                <h3><a href="<?php echo e(route('single.blog',$v->slug)); ?>"><?php echo e($v->name); ?></a></h3>
			                                <div class="view-detail"><a href="<?php echo e(route('single.blog',$v->slug)); ?>">Xem chi tiết</a></div> 
			                            </div>
			                        </div>
			                    </div>
     						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                            <div class="col-md-12">
                                <!-- <div class="pagination">
                                    <ul>
                                        <li><a href="" class="active">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                    </ul>
                                </div> -->
                                <div class="col-md-12">
			                        <div class="view-more text-center"><a href="<?php echo e(route('category',$value->slug)); ?>"><img src="<?php echo e(__BASE_URL__); ?>/images/view-detail.png" class="img-fluid"><span style="color: #222;">Xem thêm</span></a></div>
			                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>    
     	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    

    </section>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/frontend/pages/news/index.blade.php ENDPATH**/ ?>