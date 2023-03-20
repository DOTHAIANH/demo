@section("css")
<link rel="stylesheet" type="text/css" href="{{ url('public/backend/bootstrap-duallistbox.css')}}">
@endsection
@extends('backend.layouts.app') 
@section('controller', $module['name'] )
@section('controller_route', route($module['module'].'.index'))
@section('action','Sửa')
@section('content')
    <div class="content">
		<div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
               	@include('flash::message')
	           	<form action="{{ route('role.update', $role->id) }}" method="POST" autocomplete="off">
					{!! method_field('PUT') !!}
		            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
		           	<div class="col-md-12">
						<label>Tên</label>
			            <input type="text" class="form-control" name="name" placeholder="Name" value="{{$role->name}}">
			    	</div>
			    	<div class="col-md-12">
			    		<div class="form-group">
					    	<select multiple="multiple" size="10" name="permission[]"  id="select-permission"> 
								@foreach($permission as $value)
				                    {{$selected = in_array( $value->id, $rolePermissions ) ? ' selected="selected" ' : ''}}    
									   <option value="{{$value->id}}" {{$selected}}>{{$value->description}}</option>
								@endforeach
						    </select>
						</div>
						<div class="form-group">
		                	<button type="submit" class="btn btn-primary">Cập nhật</button>
		                </div>
		    		</div>
			    </form>
        	</div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ url('public/backend/jquery.bootstrap-duallistbox.min.js')}}"></script>
<script type="text/javascript">
    var demo1 = $('#select-permission').bootstrapDualListbox();
</script>
@endsection
