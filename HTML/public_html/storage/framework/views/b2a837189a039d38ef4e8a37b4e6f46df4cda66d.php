<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
    <td class="index"><?php echo e($index); ?></td>
    <td>
        <div class="form-group">
            <input name="desc[<?php echo e($id); ?>][name]" class="form-control" style="width: 100%;" value="<?php echo @$value->name; ?>" >
        </div>
    </td>
    <td>
        <div class="form-group">
            <textarea name="desc[<?php echo e($id); ?>][desc]" class="form-control " id="contentRP<?php echo e($id); ?>" style="width: 100%;"><?php echo @$value->desc; ?></textarea>
        </div>
    </td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
<script>
    CKEDITOR.replace( 'contentRP<?php echo e($id); ?>' );
</script><?php /**PATH /home/tuvi/domains/tuvi.tuvanweb.com/public_html/resources/views/backend/repeater/row-desc.blade.php ENDPATH**/ ?>