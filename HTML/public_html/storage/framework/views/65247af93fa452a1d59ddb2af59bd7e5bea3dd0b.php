<header>
    <div class="header-menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-6 col-sm-6">
                    <div class="logo"><a href="<?php echo e(asset('/')); ?>"><img src="<?php echo e($site_info->logo); ?>" class="img-fluid" alt="<?php echo e($site_info->name_company); ?>"></a></div>
                </div>
                <div class="col-md-9 col-6 col-sm-6">
                    <div class="btn-bar text-right d-none"><a href="javascript:void(0)"><img src="<?php echo e(__BASE_URL__); ?>/images/bar.svg" class="img-fluid" alt="<?php echo e($site_info->name_company); ?>"></a></div>
                    <div class="h-menu">
                        <div class="close-menu d-none"><a href="javascript:void(0)"><img src="<?php echo e(__BASE_URL__); ?>/images/close.svg" class="img-fluid" alt="<?php echo e($site_info->name_company); ?>"></a></div>
                        <ul>
                            <?php $__currentLoopData = $menuMain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="<?php echo e(asset($item->url)); ?>"><img src="<?php echo e($item->icon); ?>" class="img-fluid" alt="<?php echo e($item->title); ?>"><?php echo e($item->title); ?></a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/frontend/teamplate/header.blade.php ENDPATH**/ ?>