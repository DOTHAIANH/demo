
<?php $__env->startSection('controller',''); ?>
<?php $__env->startSection('controller_route', route('backend.home')); ?>
<?php $__env->startSection('action',''); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-primary">
		            <div class="box-body">
		            	<div class="table-translate">
					        <table class="table table-hover">
					            <thead>
					                <tr>
					                    <th width="30px">STT</th>
					                    <th width="">Tên trang</th>
					                    <th width="">Liên kết</th>
					                </tr>
					            </thead>
					            <tbody class="table-body-pro">
					                <?php $__currentLoopData = $dataPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                    <tr>
					                        <td><?php echo e($loop->index + 1); ?></td>
					                        <td><?php echo e($item->name_page); ?></td>
					                        <td>
					                            <?php if(\Route::has($item->route)): ?>
					                                <a href="<?php echo e(route($item->route)); ?>" target="_blank">
					                                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
					                                    Link: <?php echo e(route($item->route)); ?>

					                                </a>
					                            <?php else: ?>
					                            	---------------
					                            <?php endif; ?>
					                        </td>
					                    </tr>
					                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					            </tbody>
					        </table>
					    </div>
		            </div>
		        </div>
	        </div>
		</div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/home.blade.php ENDPATH**/ ?>