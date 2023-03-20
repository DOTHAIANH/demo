@section("css")
<link rel="stylesheet" type="text/css" href="{{ url('public/backend/bootstrap-duallistbox.css')}}">
@endsection
@extends('backend.layouts.app') 
@section('controller', $module['name'] )
@section('controller_route', route($module['module'].'.index'))
@section('action','Thêm')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
               	@include('flash::message')
               	<form action="{{ route('role.store') }}" method="POST" autocomplete="off">
               		@csrf()
	           		<div class="col-md-12">
						<label>Tên</label>
			            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
			    	</div>
			    	<div class="col-md-12">
			    		<div class="form-group">
					    <select multiple="multiple" size="10" name="permission[]"  id="select-permission"> 
							@foreach($permission as $value)
								<option value="{{$value->id}}">{{$value->description}}</option>
							@endforeach
					    </select>
						</div>
			    	</div>
			    	<div class="form-group">
	                	<button type="submit" class="btn btn-primary">Thêm mới</button>
	                </div>
	            </form>
           </div>
        </div>
	</div>
	
@stop

@section('scripts')
<script src="{{ url('public/backend/jquery.bootstrap-duallistbox.min.js')}}"></script>
<script type="text/javascript">
    var demo1 = $('#select-permission').bootstrapDualListbox();
</script>
@endsection
