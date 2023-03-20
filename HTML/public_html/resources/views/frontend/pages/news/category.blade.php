@extends('frontend.master')
@section('main')
<main>
    <section class="box-blog">
        <div class="list-news-cate blog-top">
            <div class="container">
                <div class="box-news">
                    <div class="title-news text-center">
                        <h2>{{ @$data['content']->name }}</h2>
                    </div>
                    <div class="list-news">
                        <div class="row">
                            @foreach(@$data['post'] as $key => $v)
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
                                <div class="pagination">
                                    <ul>
                                        {!! @$data['post']->appends(request()->except('page'))->links() !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
