
<?php $__env->startSection('controller', 'Bài viết'); ?>
<?php $__env->startSection('controller_route', route('number.index') ); ?>
<?php $__env->startSection('action','Danh sách'); ?>
<?php $__env->startSection('content'); ?>
	<div class="content">
		<div class="clearfix"></div>
		<div class="box box-primary">
            <div class="box-body">
				<?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<form action="<?php echo route('number.postMultiDel'); ?>" method="POST">
			        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			        <div class="btnAdd">
			            <a href="<?php echo e(route('number.create',['type'=> request('type')])); ?>">
			                <fa class="btn btn-primary"><i class="fa fa-plus"></i> Thêm</fa>
			            </a>
			            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn xóa không ?')"><i
			                        class="fa fa-trash-o"></i> Xóa
			            </button>
			        </div>
			        <table id="table-ajax" class="table table-bordered table-striped table-hover">
			            <thead>
			            <tr>
			                <th width="10px"><input type="checkbox" name="chkAll" id="chkAll"></th>
			                <th width="10px">STT</th>
			                <th>Tiêu đề</th>
			                <th width="100px">Trạng thái</th>
			                <th width="100px">Thao tác</th>
			            </tr>
			            </thead>
			            <tbody>

			            </tbody>
			        </table>
			    </form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        jQuery(document).ready(function ($) {
            $('#table-ajax').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    'url': '<?php echo route('number.index'); ?>',
                },
                columns: [
                    {data: 'checkbox', name: 'checkbox'},
                    {data: 'DT_RowIndex',name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action'},
                ],
                'columnDefs': [{
                    'targets': [0, 1],
                    'orderable': false,
                    'searchable': false,
                }],
                language: {
                    "sProcessing": "Đang xử lý...",
                    "sLengthMenu": "Xem _MENU_ mục",
                    "sZeroRecords": "Không tìm thấy dòng nào phù hợp",
                    "sInfo": "Đang xem _START_ đến _END_ trong tổng số _TOTAL_ mục",
                    "sInfoEmpty": "Đang xem 0 đến 0 trong tổng số 0 mục",
                    "sInfoFiltered": "(được lọc từ _MAX_ mục)",
                    "sInfoPostFix": "",
                    "sSearch": "Tìm:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "Đầu",
                        "sPrevious": "Trước",
                        "sNext": "Tiếp",
                        "sLast": "Cuối"
                    }
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/number/list.blade.php ENDPATH**/ ?>