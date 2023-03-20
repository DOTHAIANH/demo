@extends('backend.layouts.app')
@section('controller', 'Danh mục tin tức' )
@section('controller_route', route('categories.index'))
@section('action', 'Danh sách')
@section('content')
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="row">
        	<div class="col-sm-12">
	        	<form action="{!! updateOrStoreRouteRender( @$module['action'], $module['module'], @$data) !!}" method="POST">
	        		@csrf
					@if(isUpdate(@$module['action']))
				        {{ method_field('put') }}
				    @endif
	        		<div class="nav-tabs-custom">
		                <ul class="nav nav-tabs">
		                    <li class="active">
		                        <a href="#activity" data-toggle="tab" aria-expanded="true">Danh mục</a>
		                    </li>
		                    <li class="">
		                    	<a href="#setting1" data-toggle="tab" aria-expanded="true">Cấu hình seo VI</a>
		                    </li>
		                    <li class="">
		                    	<a href="#setting2" data-toggle="tab" aria-expanded="true">Cấu hình seo EN</a>
		                    </li>
		                    <li class="">
		                        <a href="#activity1" data-toggle="tab" aria-expanded="true">Banner</a>
		                    </li>
		                </ul>
		                <?php if(!empty(@$data->content_vi )){
							$content = json_decode(@$data->content_vi);
						} ?>
		                <div class="tab-content">
		                	<div class="tab-pane " id="activity1">
								<div class="repeater" id="repeater">
					                <table class="table table-bordered table-hover banners">
					                    <thead>
						                    <tr>
						                    	<th style="width: 30px;">STT</th>
						                    	<th>Hình ảnh</th>
						                    	<th style="width: 20px"></th>
						                    </tr>
					                	</thead>
					                    <tbody id="sortable">
											@if (!empty(@$content->banner))
												@foreach (@$content->banner as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-banner-vi')
												@endforeach
											@endif
					                    </tbody>
					                </table>
					                <div class="text-right">
					                    <button class="btn btn-primary" 
							            	onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'banner-vi', '.banners')">Thêm
							            </button>
					                </div>
					            </div>
		                    </div>
		                    <div class="tab-pane active" id="activity">
								<div class="form-group">
									<label for="">Tên danh mục VI</label>
									<input type="text" class="form-control" name="name_vi" value="{{ old('name_vi', @$data->name_vi) }}">
									<input type="hidden" class="form-control" name="type" value="{{ @$data->type }}">
								</div>
								<div class="form-group">
									<label for="">Tên danh mục EN</label>
									<input type="text" class="form-control" name="name_en" value="{{ old('name_en', @$data->name_en) }}">
								</div>
								<div class="form-group">
									<label for="">Đường dẫn tĩnh</label>
									<input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', @$data->slug) }}">
								</div>
		                    </div>
		                    <div class="tab-pane" id="setting1">
		                    	<div class="row">
		                    		<div class="col-sm-12">
		                    			<div class="form-group">
		                    				<label for="">Hình ảnh</label>
		                    				 <div class="image">
					                            <div class="image__thumbnail">
					                                <img src="{{ !empty(@$data->image_vi) ? @$data->image_vi : __IMAGE_DEFAULT__ }}" data-init="{{ __IMAGE_DEFAULT__ }}">
					                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
					                                    <i class="fa fa-times"></i></a>
					                                <input type="hidden" value="{{ old('image_vi', @$data->image_vi) }}" name="image_vi"/>
					                                <div class="image__button" onclick="fileSelect(this)">
					                                	<i class="fa fa-upload"></i>
					                                    Upload
					                                </div>
					                            </div>
					                        </div>
		                    			</div>
		                    		</div>
		                    		<div class="col-sm-12">
		                    			 <div class="form-group">
				                            <label>Title SEO</label>
				                            <input type="text" class="form-control" name="meta_title_vi" value="{!! old('meta_title_vi',  @$data->meta_title_vi) !!}">
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Description</label>
				                            <textarea name="meta_description_vi" id="" class="form-control" rows="5">{!! old('meta_description_vi', @$data->meta_description_vi) !!}</textarea>
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Keyword</label>
				                            <input type="text" class="form-control" name="meta_keyword_vi" value="{!! old('meta_keyword_vi',@$data->meta_keyword_vi) !!}">
				                        </div>
		                    		</div>
		                    	</div>
		                    </div>
		                    <div class="tab-pane" id="setting2">
		                    	<div class="row">
		                    		<div class="col-sm-12">
		                    			<div class="form-group">
		                    				<label for="">Hình ảnh</label>
		                    				 <div class="image">
					                            <div class="image__thumbnail">
					                                <img src="{{ !empty(@$data->image_en) ? @$data->image_en : __IMAGE_DEFAULT__ }}" data-init="{{ __IMAGE_DEFAULT__ }}">
					                                <a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
					                                    <i class="fa fa-times"></i></a>
					                                <input type="hidden" value="{{ old('image_en', @$data->image_en) }}" name="image_en"/>
					                                <div class="image__button" onclick="fileSelect(this)">
					                                	<i class="fa fa-upload"></i>
					                                    Upload
					                                </div>
					                            </div>
					                        </div>
		                    			</div>
		                    		</div>
		                    		<div class="col-sm-12">
		                    			 <div class="form-group">
				                            <label>Title SEO</label>
				                            <input type="text" class="form-control" name="meta_title_en" value="{!! old('meta_title_en',  @$data->meta_title_en) !!}">
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Description</label>
				                            <textarea name="meta_description_en" id="" class="form-control" rows="5">{!! old('meta_description_en', @$data->meta_description_en) !!}</textarea>
				                        </div>

				                        <div class="form-group">
				                            <label>Meta Keyword</label>
				                            <input type="text" class="form-control" name="meta_keyword_en" value="{!! old('meta_keyword_en',@$data->meta_keyword_en) !!}">
				                        </div>
		                    		</div>
		                    	</div>
		                    </div>
		                    <button type="submit" class="btn btn-primary">Lưu lại</button>
		                </div>
		            </div>
	        	</form>
	        </div>
	    </div>
	</div>
@stop