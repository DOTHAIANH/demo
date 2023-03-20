<?php
$id = isset($id) ? $id : (int)round(microtime(true) * 1000);
$types = [
    'text'     => 'Text',
    'select'   => 'Select',
    'radio'    => 'Radio',
    'password' => 'Password',
];
?>
<tr>
    <td class="index">{{ $index }}</td>
    <td>
        <div class="form-group">
            <label for="">Loại</label>
            <select name="attributes[field][{{ $id }}][type]" class="form-control">
                @foreach($types as $key => $val)
                    <option value="{{ $key }}" {{ $key == @$value->type ? 'selected' : null }}>{{ $val }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="attributes[field][{{ $id }}][name]"
                   value="{{ @$value->name }}">
        </div>


        <div class="form-group">
            <label for="">Label</label>
            <input type="text" class="form-control" name="attributes[field][{{ $id }}][label]"
                   value="{{ @$value->label }}">
        </div>


        <div class="form-group">
            <label for="">Placeholder</label>
            <input type="text" class="form-control" name="attributes[field][{{ $id }}][placeholder]"
                   value="{{ @$value->placeholder }}">
        </div>

        <div class="form-group">
            <label for="">Giá trị (Các giá trị ngăn cách nhau bởi dấu , )</label>
            <input type="text" class="form-control" name="attributes[field][{{ $id }}][value]"
                   value="{{ @$value->value }}">
        </div>


        <div class="form-group">
            <label for="">Bắt buộc</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="attributes[field][{{ $id }}][required]"
                       id="rad{{ $id }}1" value="1"
                        {{ !empty($value) ? (@$value->required == 1 ? 'checked' : null) : 'checked' }}
                >
                <label class="form-check-label" for="rad{{ $id }}1">
                    Có
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="attributes[field][{{ $id }}][required]"
                       id="rad{{ $id }}2" value="0"
                        {{ !empty($value) ? (@$value->required == 0 ? 'checked' : null) : '' }}
                >
                <label class="form-check-label" for="rad{{ $id }}2">
                    Không
                </label>
            </div>

        </div>

    </td>
    <td style="text-align: center;">
        <a href="javascript:void(0);" onclick="$(this).closest('tr').remove()" class="text-danger buttonremovetable"
           title="Xóa">
            <i class="fa fa-minus"></i>
        </a>
    </td>
</tr>