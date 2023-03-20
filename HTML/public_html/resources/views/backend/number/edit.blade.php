@extends('backend.layouts.app')
@section('controller', 'Con số')
@section('controller_route', route('number.index') )
@section('action','Chỉnh sửa')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
		@include('flash::message')
		<form action="{{ route('number.update', $data->id) }}" method="POST">
			@csrf
			@method('PUT')
			<div class="row">
				<div class="col-sm-9">
		            <div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity1" data-toggle="tab" aria-expanded="true">Thông tin</a>
		                    </li>
		                    <li class="">
		                        <a href="#mp3" data-toggle="tab" aria-expanded="true">Thông tin</a>
		                    </li>
		                    <li class="">
		                    	<a href="#setting1" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
		                    </li>
		                  
		                </ul>
		                <div class="tab-content">
		                    <div class="tab-pane " id="mp3">
		                        <div class="row">
			                		<div class="col-sm-12">
										<div class="repeater" id="repeater">
											<table class="table table-bordered table-hover desc">
												<thead>
												<tr>
													<th style="width: 30px;">STT</th>
													<th>FIle</th>
													<th>Mô tả</th>
													<th style="width: 20px"></th>
												</tr>
												</thead>
												<tbody id="sortable">
												@php
													$desc = json_decode($data->desc);
												@endphp
												@if (!empty(@$desc))
													@foreach (@$desc as $id => $value)
														<?php $index = $loop->index + 1;?>
														@include('backend.repeater.row-desc')
													@endforeach
												@endif
												</tbody>
											</table>
											<div class="text-right">
												<button class="btn btn-primary"
														onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'desc', '.desc')">Thêm
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>


		                    <div class="tab-pane active" id="activity1">
		                        <div class="row">
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Tiêu đề</label>
											<input type="hidden" value="{{ @$data->type }}" name="type">
		                                    <input type="text" class="form-control" name="name" id="name" value="{!! old('name', @$data->name) !!}" required="">
		                                </div>
		            					<div class="form-group">
		                                    <label>Link</label>
		                                    <input type="text" class="form-control" name="slug" value="{!! old('slug', @$data->slug) !!}" >
		                                </div>
		                            </div>
		                            <div class="col-sm-6">
		                                <div class="form-group">
		                                    <label>Con số</label>
		                                    <select name="conso" class="form-control" >
		                                    	<option value="0">Chọn</option>
		                                    	<option value="1" {{ @$data->conso == 1 ? 'selected' : '' }}>1</option>
		                                    	<option value="2" {{ @$data->conso == 2 ? 'selected' : '' }}>2</option>
		                                    	<option value="3" {{ @$data->conso == 3 ? 'selected' : '' }}>3</option>
		                                    	<option value="4" {{ @$data->conso == 4 ? 'selected' : '' }}>4</option>
		                                    	<option value="5" {{ @$data->conso == 5 ? 'selected' : '' }}>5</option>
		                                    	<option value="6" {{ @$data->conso == 6 ? 'selected' : '' }}>6</option>
		                                    	<option value="7" {{ @$data->conso == 7 ? 'selected' : '' }}>7</option>
		                                    	<option value="8" {{ @$data->conso == 8 ? 'selected' : '' }}>8</option>
		                                    	<option value="9" {{ @$data->conso == 9 ? 'selected' : '' }}>9</option>
		                                    	<option value="10" {{ @$data->conso == 10 ? 'selected' : '' }}>10</option>
		                                    	<option value="11" {{ @$data->conso == 11 ? 'selected' : '' }}>11</option>
		                                    	<option value="22" {{ @$data->conso == 22 ? 'selected' : '' }}>22</option>
		                                    	<option value="33" {{ @$data->conso == 33 ? 'selected' : '' }}>33</option>
		                                    	<option value="134" {{ @$data->conso == 134 ? 'selected' : '' }}>13/4</option>
		                                    	<option value="135" {{ @$data->conso == 135 ? 'selected' : '' }}>13/5</option>
		                                    	<option value="167" {{ @$data->conso == 167 ? 'selected' : '' }}>16/7</option>
		                                    	<option value="191" {{ @$data->conso == 191 ? 'selected' : '' }}>19/1</option>
		                                    	<option value="intro" {{ @$data->conso == 'intro' ? 'selected' : '' }}>Lời mở đầu</option>
		                                    	<option value="form" {{ @$data->conso == 'form' ? 'selected' : '' }}>Điền thông tin</option>
		                                    	<option value="form_success" {{ @$data->conso == 'form_success' ? 'selected' : '' }}>Điền thông tin thành công</option>
		                                    	<option value="end" {{ @$data->conso == 'end' ? 'selected' : '' }}>Lời kết</option>
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="col-sm-6">
		                                <div class="form-group">
		                                    <label>Chủ đề</label>
		                                    <select name="type" class="form-control" >
		                                    	<option value="0">Chọn</option>
		                                    	<option value="intro" {{ 'intro' == $data->type ? 'selected' : null }}>Lời dẫn</option>
		                                    	<option value="end" {{ 'end' == $data->type ? 'selected' : null }}>Lời kết</option>
		                                    	@foreach(\App\Models\Number::getType() as $key => $item)
				                                    <option value="{{ $key }}" {{ $key == $data->type ? 'selected' : null }}>{{ $item }}</option>
				                                @endforeach
		                                    </select>
		                                </div>
		                            </div>
		                            <div class="col-sm-12">
		                                <div class="form-group">
		                                    <label>Nội dung</label>
		                                    <textarea class="content" name="content">{!! old('content', @$data->content) !!}</textarea>
		                                </div>
		                            </div>
		                        </div>
		                    </div>

		                    <div class="tab-pane" id="setting1">
		                        <div class="form-group">
		                            <label>Title SEO</label>
		                            <label style="float: right;">Số ký tự đã dùng: <span id="countTitle">{{ $data->meta_title != null ? mb_strlen( $data->meta_title, 'UTF-8') : 0 }}/70</span></label>
		                            <input type="text" class="form-control" name="meta_title"
		                                   value="{!! old('desc', isset($data->meta_title) ? $data->meta_title : null ) !!}"
		                                   id="meta_title">
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Description</label>
		                            <label style="float: right;">Số ký tự đã dùng: <span id="countMeta">{{ $data->meta_description != null ? mb_strlen( $data->meta_description, 'UTF-8') : 0 }}/360</span></label>
		                            <textarea name="meta_description" class="form-control" id="meta_description"
		                                      rows="5">{!! old('meta_description', isset($data->meta_description) ? $data->meta_description : null ) !!}</textarea>
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Keyword</label>
		                            <input type="text" class="form-control" name="meta_keyword"
		                                   value="{!! old('meta_keyword', isset($data->meta_keyword) ? $data->meta_keyword : null ) !!}">
		                        </div>

		                    </div>

		                  
		                </div>
		            </div>
				</div>
				<div class="col-sm-3">
					<div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Đăng</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group">
		                       	<label class="custom-checkbox">
	                                <input type="checkbox" name="status" value="1" {{ @$data->status == 1 ? 'checked' : null }}> Hiển thị
	                            </label>
			                    
	                            <div class="form-group text-right">
			                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Lưu lại</button>
			                    </div>
			                   
		                    </div>
		                </div>
		            </div>

		         <!--    <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">File MP3</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group file" style="text-align: center;">
                                <input type="text" value="{{ old('mp3', @$data->mp3) }}" class="form-control pb-3" name="mp3"  />
                                <div class="image__button" onclick="fileUpload(this)">
                                	<i class="fa fa-upload"></i>
                                    Chọn file
                                </div>
		                    </div>
		                </div>
		            </div> -->

		            <div class="box box-success">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Ảnh đại diện</h3>
		                </div>
		                <div class="box-body">
		                    <div class="form-group" style="text-align: center;">
		                        <div class="image">
		                            <div class="image__thumbnail">
		                                <img src="{{ !empty($data->image) ? $data->image : __IMAGE_DEFAULT__ }}"
		                                     data-init="{{ __IMAGE_DEFAULT__ }}">
		                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
		                                    <i class="fa fa-times"></i></a>
		                                <input type="hidden" value="{{ old('image', @$data->image) }}" name="image"/>
		                                <div class="image__button" onclick="fileSelect(this)">
		                                	<i class="fa fa-upload"></i>
		                                    Upload
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
				</div>
			</div>
		</form>
	</div>
@stop
@section('css')
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ url('public/backend/plugins/taginput/bootstrap-tagsinput.css') }}">
@endsection
@section('scripts')
	
	
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
		});
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
	<script src="{{ url('public/backend/plugins/taginput/bootstrap-tagsinput.min.js') }}"></script>
	<script>
		jQuery(document).ready(function($) {
			$('input[name="time_published"]').click(function(){
			   	if($(this).val() == 2){
			   		$('.time_published_value').show('slow/400/fast');
			   	}else{
			   		$('.time_published_value').hide('slow/400/fast');
			   	}
			});
			$('#tags-input').tagsinput({
			  	
			});
		});
	</script>
@endsection

