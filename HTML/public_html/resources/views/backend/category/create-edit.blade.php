@extends('backend.layouts.app')
@section('controller', 'Danh mục sản phẩm' )
@section('controller_route', route('category.index'))
@section('action', renderAction(@$module['action']))
@section('content')
	<div class="content">
		<div class="clearfix"></div>

       	@include('flash::message')
       	<form action="{!! updateOrStoreRouteRender( @$module['action'], $module['module'], @$data) !!}" method="POST">
			@csrf
			@if(isUpdate(@$module['action']))
		        {{ method_field('put') }}
		    @endif
		    <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#activity" data-toggle="tab" aria-expanded="true">Danh mục sản phẩm</a>
                    </li>
                    <li class="">
                    	<a href="#setting" data-toggle="tab" aria-expanded="true">Cấu hình seo</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="activity">
						<div class="form-group">
							<label for="">Tên danh mục</label>
							<input type="text" class="form-control" name="name" id="name" value="{{ old('name', @$data->name) }}">
						</div>

						<div class="form-group">
							<label for="">Đường dẫn tĩnh</label>
							<input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', @$data->slug) }}">
						</div>
						<div class="form-group">
							<label for="">Danh mục cha</label>
							<select name="parent_id" class="form-control">
								<option value="0">Danh mục cha</option>
                               	<?php menuMulti( $categories , 0 , '' ,   old( 'parent_id', @$data->parent_id )); ?>
							</select>
						</div>

                    </div>
                    <div class="tab-pane" id="setting">
                    	<div class="row">
                    		<div class="col-sm-2">
                    			<div class="form-group">
                    				<label for="">Hình ảnh</label>
                    				 <div class="image">
			                            <div class="image__thumbnail">
			                                <img src="{{ !empty(@$data->image) ? @$data->image : __IMAGE_DEFAULT__ }}"
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
                    		<div class="col-sm-10">
                    			 <div class="form-group">
		                            <label>Title SEO</label>
		                            <input type="text" class="form-control" name="meta_title" value="{!! old('meta_title', @$data->meta_title) !!}">
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Description</label>
		                            <textarea name="meta_description" id="" class="form-control" rows="5">{!! old('meta_description', @$data->meta_description) !!}</textarea>
		                        </div>

		                        <div class="form-group">
		                            <label>Meta Keyword</label>
		                            <input type="text" class="form-control" name="meta_keyword" value="{!! old('meta_keyword', @$data->meta_keyword) !!}">
		                        </div>
                    		</div>
                    	</div>
                    </div>

					<div class="form-group">
						<label class="custom-checkbox">
							@if(isUpdate(@$module['action']))
								<input type="checkbox" name="show_home_page"
									   value="1" {{ @$data->show_home_page == 1 ? 'checked' : null }}> Hiển thị trên trang chủ
							@else
								<input type="checkbox" name="show_home_page" value="1" checked> Hiển thị trên trang chủ
							@endif
						</label>
					</div>



                    <button type="submit" class="btn btn-primary">Lưu lại</button>
                </div>
            </div>
		</form>

	</div>
@stop
