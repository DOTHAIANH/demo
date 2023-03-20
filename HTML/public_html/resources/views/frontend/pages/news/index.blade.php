@extends('frontend.master')
@section('main')
<main>
    <section class="box-blog">
    	@foreach(@$data['post'] as $key => $value)
        @if($key == 0)
        <div class="blog-top">
            <div class="container">
                <div class="title text-center">
                    <h2>{{ $value->name }}</h2>
                </div>
                <div class="list-blog-top">
                    <div class="row">
						
                        <div class="col-md-8">
                            <div class="list-blog-left">
                            	@foreach($value->Posts()->orderByDesc('posts.created_at')->take(2)->get() ?? [] as $k => $v)
                                <div class="item-blog-top">
                                    <div class="avarta"><a href="{{ route('single.blog',$v->slug) }}"><img src="{{ $v->image }}" class="img-fluid w-100" alt="{{ $v->name }}"></a></div>
                                    <div class="info">
                                        <h3><a href="{{ route('single.blog',$v->slug) }}">{{ $v->name }}</a></h3>
                                        <div class="desc">
                                            {!! $v->desc !!}
                                        </div>
                                        <div class="link-detail"><a href="{{ route('single.blog',$v->slug) }}">Xem chi tiết</a></div>
                                    </div>
                                </div>
                                @endforeach
                            </div> 
                        </div>
                        @foreach($value->Posts()->orderByDesc('posts.created_at')->skip(2)->take(1)->get() ?? [] as $k => $v)
                        <div class="col-md-4">
                            <div class="blog-right">
                                <div class="avarta"><a href="{{ route('single.blog',$v->slug) }}"><img src="{{ $v->image }}" class="img-fluid w-100" alt="{{ $v->name }}"></a></div>
                                <div class="info">
                                    <h3><a href="{{ route('single.blog',$v->slug) }}">{{ $v->name }}</a></h3>
                                    <div class="desc">{!! $v->desc !!}</div>
                                    <div class="link-detail"><a href="{{ route('single.blog',$v->slug) }}">Xem chi tiết</a></div>
                                </div>
                            </div>
                        </div>
     					@endforeach    
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="list-news-cate">
            <div class="container">
                <div class="box-news">
                    <div class="title-news text-center">
                        <h2>{{ $value->name }}</h2>
                    </div>
                    <div class="list-news">
                        <div class="row">
							@foreach($value->Posts()->orderByDesc('posts.created_at')->take(8)->get() ?? [] as $key => $v)
                                <div class="col-md-4 col-sm-6" >
			                        <div class="item-blog">
			                            <div class="avarta"><a href="{{ route('single.blog',$v->slug) }}"><img src="{{ $v->image }}" class="img-fluid w-100" alt="{{ $v->name }}"></a></div>
			                            <div class="info">
			                                <h3><a href="{{ route('single.blog',$v->slug) }}">{{ $v->name }}</a></h3>
			                                <div class="view-detail"><a href="{{ route('single.blog',$v->slug) }}">Xem chi tiết</a></div> 
			                            </div>
			                        </div>
			                    </div>
     						@endforeach    
                            <div class="col-md-12">
                                <!-- <div class="pagination">
                                    <ul>
                                        <li><a href="" class="active">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                    </ul>
                                </div> -->
                                <div class="col-md-12">
			                        <div class="view-more text-center"><a href="{{ route('category',$value->slug) }}"><img src="{{ __BASE_URL__ }}/images/view-detail.png" class="img-fluid"><span style="color: #222;">Xem thêm</span></a></div>
			                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif    
     	@endforeach    

    </section>
</main>
@endsection
