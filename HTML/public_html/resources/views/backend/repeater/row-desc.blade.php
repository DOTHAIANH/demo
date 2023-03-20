<?php $id = isset($id) ? $id : (int) round(microtime(true) * 1000); ?>
<tr>
    <td class="index">{{ $index }}</td>
    <td>
        <div class="form-group">
            <input name="desc[{{$id}}][name]" class="form-control" style="width: 100%;" value="{!! @$value->name !!}" >
        </div>
    </td>
    <td>
        <div class="form-group">
            <textarea name="desc[{{$id}}][desc]" class="form-control " id="contentRP{{ $id }}" style="width: 100%;">{!! @$value->desc !!}</textarea>
        </div>
    </td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable" title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>
<script>
    CKEDITOR.replace( 'contentRP{{ $id }}' );
</script>