@extends('backend.layouts.app')
@section('controller','Trang')
@section('controller_route',route('pages.list'))
@section('action','Danh sách')
@section('content')
	<div class="content">
		<div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
               	@include('flash::message')
               	<form action="{{ route('pages.build.post') }}" method="POST">
					{{ csrf_field() }}
					<input name="type" value="{{ $data->type }}" type="hidden">

					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="">Trang</label>
								<input type="text" class="form-control" value="{{ $data->name_page }} {{ request('lang') }}" disabled="">
				 				
								@if (\Route::has($data->route))
									<h5>
										<a href="{{ route($data->route) }}" target="_blank">
					                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>
					                        Link: {{ route($data->route) }}
					                    </a>
									</h5>
				                @endif
							</div>
							
						</div>
					</div>
					<div class="nav-tabs-custom">
				        <ul class="nav nav-tabs">
				        	<li class="active">
				            	<a href="#activity3" data-toggle="tab" aria-expanded="true">Banner</a>
				            </li>

							<li class="">
				            	<a href="#activity2" data-toggle="tab" aria-expanded="true">Ý nghĩa</a>
				            </li>
				           
							<li class="">
				            	<a href="#activity4" data-toggle="tab" aria-expanded="true">Tin tức</a>
				            </li>
				            
				            <li class="">
								<a href="#activity1" data-toggle="tab" aria-expanded="true">Câu hỏi</a>
							</li>
						</ul>
				    </div>
				    <?php if(!empty($data->content )){
						$content = json_decode($data->content);
					} ?>
				    <div class="tab-content">
				    	<div class="tab-pane active" id="activity3">
				    		<div class="row">
				    			<div class="col-sm-12">
				    				<div class="form-group">
										<div class="form-group">
											<label for="">Tiêu đề</label>
											<textarea name="content[banner][title]" class="content">{!! @$content->banner->title !!}</textarea>
										</div>

										<div class="form-group">
											<label for="">Mô tả</label>
											<textarea name="content[banner][desc]" class="content">{!! @$content->banner->desc !!}</textarea>
										</div>
									</div>
								</div>
						    </div>
				    	</div>
				    	
				    	<div class="tab-pane" id="activity1">
							<div class="row">
								<div class="col-sm-2">
									<div class="form-group">
										<label>Hình ảnh</label>
										<div class="image">
											<div class="image__thumbnail">
												<img src="{{ !empty(@$content->ques->banner) ?  @$content->ques->banner : __IMAGE_DEFAULT__ }}"
													 data-init="{{ __IMAGE_DEFAULT__ }}">
												<a href="javascript:void(0)" class="image__delete" onclick="urlFileDelete(this)">
													<i class="fa fa-times"></i>
												</a>
												<input type="hidden" value="{{ @$content->ques->banner }}" name="content[ques][banner]"  />
												<div class="image__button" onclick="fileSelect(this)"><i class="fa fa-upload"></i> Upload</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-10">
									<div class="form-group">
										<label for="">Tiêu đề</label>
										<input type="text" class="form-control" name="content[ques_title]" value="{{ @$content->ques_title }}">
									</div>
								</div>

								<div class="col-sm-12">
									<div class="repeater" id="repeater">
										<table class="table table-bordered table-hover question">
											<thead>
											<tr>
												<th style="width: 30px;">STT</th>
												<th>Câu hỏi</th>
												<th>Tiêu đề</th>
												<th>Mô tả</th>
												<th style="width: 20px"></th>
											</tr>
											</thead>
											<tbody id="sortable">
											@if (!empty(@$content->question))
												@foreach ($content->question as $id => $value)
													<?php $index = $loop->index + 1;?>
													@include('backend.repeater.row-question')
												@endforeach
											@endif
											</tbody>
										</table>
										<div class="text-right">
											<button class="btn btn-primary"
													onclick="repeater(event,this,'{{ route('get.layout') }}','.index', 'question', '.question')">Thêm
											</button>
										</div>
									</div>

								</div>
							</div>
						</div>
				    	<div class="tab-pane" id="activity2">
				    		<div class="row">
				    			<div class="col-sm-12">
				    				<div class="form-group">
										<div class="form-group">
											<label for="">Tiêu đề</label>
											<textarea name="content[ynghia][title]" class="content">{!! @$content->ynghia->title !!}</textarea>
										</div>

										<div class="form-group">
											<label for="">Mô tả</label>
											<textarea name="content[ynghia][desc]" class="content">{!! @$content->ynghia->desc !!}</textarea>
										</div>
									</div>
								</div>
						    </div>
				    	</div>

				    	<div class="tab-pane" id="activity4">
				    		<div class="row">
				    			<div class="col-sm-12">
				    				<div class="form-group">
										<div class="form-group">
											<label for="">Tiêu đề</label>
											<input type="text" class="form-control" value="{{ @$content->news->title }}" name="content[news][title]">
										</div>

										<div class="form-group">
											<label for="">Mô tả</label>
											<textarea name="content[news][desc]" class="content" cols="30" rows="10">{!! @$content->news->desc !!}</textarea>
										</div>

										<div class="form-group">
											<label for="">Bài viết nổi bật</label>
											<?php 
												if(!empty(@$content->post_ids)) {
                                    				$postref = \App\Models\Post::whereIn('id', @$content->post_ids ?? [])->get();
												}
											?>
                                    			<select name="content[post_ids][]" multiple="" data-type="blog" class="form-control select_posts" style="width: 100%">
                                        			@foreach($postref ?? [] as $item)
			                                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
			                                        @endforeach
                                    			</select>
											
										</div>
									</div>
						        </div>
						    </div>
				    	</div>

			           	<button type="submit" class="btn btn-primary">Lưu lại</button>
			        </div>
				</form>
			</div>
		</div>
	</div>
@stop
