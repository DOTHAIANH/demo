
<?php $__env->startSection('controller','Tài khoản'); ?>
<?php $__env->startSection('action','Danh sách'); ?>
<?php $__env->startSection('controller_route', route('users.index')); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
               	<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           		<div class="btnAdd">
			      	<a href="<?php echo e(route('users.create')); ?>">
			          	<fa class="btn btn-primary"><i class="fa fa-plus"></i> Thêm tài khoản</fa>
			      	</a>
			    </div>

			    <table id="example1" class="table table-bordered table-striped">
			    	<thead>
			    		<tr>
			    			<th>STT</th>
			    			<th>Tên tài khoản</th>
			    			<th>Tên người dùng</th>
			    			<th>Số điện thoại</th>
			    			<th>Email</th>
			    			<th>Trạng thái</th>
			    			<th>Hành động</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    		<tr>
			    			<td><?php echo e($loop->index +1); ?></td>
			    			<td>
			    				<?php if(!empty($item->image)): ?>
			    					<img src="<?php echo e($item->image); ?>"  width="35px" height="35px" onerror="this.src='https://www.gravatar.com/avatar/?s=50'">
			    				<?php else: ?>
			    					<img src="<?php echo e(asset('uploads/user/no-image.png')); ?>">
			    				<?php endif; ?>
			    				&nbsp; &nbsp;
			    				<?php echo e($item->user_name); ?>

			    			</td>
			    			<td><?php echo e($item->name); ?></td>
			    			<td><?php echo e($item->phone); ?></td>
			    			<td><?php echo e($item->email); ?></td>
			    			<td>
			    				<?php if($item->status == 1 ): ?>
			    					<span class="label label-success">Đang hoạt động</span>
			    				<?php else: ?>
			    					<span class="label label-danger">Đang khóa</span>
			    				<?php endif; ?>
			    			<td>
		    					<?php if($item->user_name != 'gco_admin'): ?>
			    					<a href="<?php echo e(route('users.edit', $item->id )); ?>">
			    						<i class="fa fa-pencil fa-fw"></i> Sửa
			    					</a> &nbsp; &nbsp; &nbsp;
			    					<a href="javascript:;" class="btn-destroy" data-href="<?php echo e(route( 'users.destroy',  $item->id )); ?>"
			    						data-toggle="modal" data-target="#confim">
			    						<i class="fa fa-trash-o fa-fw"></i> Xóa
			    					</a>
		    					<?php endif; ?>
			    			</td>
			    		</tr>
			    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		    		</tbody>
		    	</table>
           </div>
        </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/users/list.blade.php ENDPATH**/ ?>