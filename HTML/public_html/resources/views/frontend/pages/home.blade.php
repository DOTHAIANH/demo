@extends('frontend.master')
@section('css')
<style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
</style>
@endsection
@section('main')
<main>
    <section class="box-banner">
        <div class="num-abs abs-1">1</div>
        <div class="num-abs abs-2">2</div>
        <div class="num-abs abs-3">3</div>
        <div class="num-abs abs-4">4</div>
        <div class="num-abs abs-5">5</div>
        <div class="num-abs abs-6">6</div>
        <div class="num-abs abs-7">7</div>
        <div class="num-abs abs-8">8</div>
        <div class="num-abs abs-9">9</div>
        <div class="content-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="txt-banner">
                            <div class="info-banner">
                                <h1 class="text-uppercase" data-aos="fade-down">{!! @$content->banner->title !!}</h1>
                                <div class="desc" data-aos="fade-up">
                                    {!! @$content->banner->desc !!}
                                </div>
                                <div class="form-banner text-center" data-aos="zoom-out" data-aos-delay="600">
                                    <form action="{{ route('number') }}" method="get">
                                        <div class="item-frm"><input type="text" placeholder="Họ và Tên" name="name" class="txt_field" required></div>
                                        <div class="item-frm">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-4"><input required type="number" name="day" placeholder="Ngày" class="txt_field" onKeyUp="if(this.value>31){this.value='31';}else if(this.value<0){this.value='1';}" /></div>
                                                <div class="col-md-4 col-sm-4 col-4"><input required type="number" name="month" placeholder="Tháng" class="txt_field" onKeyUp="if(this.value>12){this.value='12';}else if(this.value<0){this.value='1';}" /></div>
                                                <div class="col-md-4 col-sm-4 col-4"><input required type="number" name="year" placeholder="Năm sinh" class="txt_field" onKeyUp="if(this.value>new Date().getFullYear()){this.value=new Date().getFullYear();}else if(this.value<0){this.value='1950';}" /></div>
                                            </div>
                                        </div>
                                        <div class="item-frm"><input type="submit" value="TRA CỨU" class="btn_field"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-number text-center">
        <div class="container">
            <div class="title" data-aos="fade-up">
                <h2>{!! @$content->ynghia->title !!}</h2>
            </div>
            <div class="desc-title" data-aos="fade-up">
                {!! @$content->ynghia->desc !!}
            </div>
            <div class="list-number">
                <div class="row justify-content-center">
                    @foreach(@$number ?? [] as $key => $item)
                    <div class="col-md-4 col-sm-4 col-6" data-aos="zoom-in" data-aos-delay="{{ $key + 1 }}00">
                        <div class="item-number">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#modal_popup_number_{{ $key + 1 }}"></a>
                            <div class="icon"><img src="{{ $item->image }}" class="img-fluid" alt="{{ $item->name }}"></div>
                            <div class="info">
                                <h3>{{ $item->name }}</h3>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- popup number -->
        @foreach(@$number ?? [] as $key => $item)
        <div class="modal fade" id="modal_popup_number_{{ $key + 1 }}">
            <div class="modal-dialog dialog-number">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="content-popup">
                            <a href="javascript:void(0)" class="close-popup" data-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.png" class="img-fluid" alt="{{ $item->name }}"></a>
                            <div class="info-number">
                                <div class="ico-number text-center"><img src="{{ $item->image }}" class="img-fluid" alt="{{ $item->name }}"></div>
                                <h3  class="text-center">{{ $item->name }}</h3>
                                <div class="desc">
                                    {!! $item->content !!}
                                </div>
                                <div class="link-detail text-center"><a href="{!! $item->slug !!}"><img src="{{ __BASE_URL__ }}/images/view-detail.png" class="img-fluid" alt=""><span>Xem thêm</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- end popup number -->
    </section>
    <section class="box-blog-home">
        <div class="container">
            <div class="title text-center" data-aos="fade-up">
                <h2>{{ @$content->news->title }}</h2>
            </div>
            <div class="desc-title" data-aos="fade-up">
                {!! @$content->news->desc !!}
            </div>
            <div class="list-blog">
                <div class="row">
                    @foreach(@$news ?? [] as $key => $item)
                    <div class="col-md-4 col-sm-6"  data-aos="zoom-in">
                        <div class="item-blog">
                            <div class="avarta"><a href="{{ route('single.blog',$item->slug) }}"><img src="{{ $item->image }}" class="img-fluid w-100" alt="{{ $item->name }}"></a></div>
                            <div class="info">
                                <h3><a href="{{ route('single.blog',$item->slug) }}">{{ $item->name }}</a></h3>
                                <div class="view-detail"><a href="{{ route('single.blog',$item->slug) }}">Xem chi tiết</a></div> 
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12"  data-aos="fade-up">
                        <div class="view-more text-center"><a href="{{ route('news') }}"><img src="{{ __BASE_URL__ }}/images/view-detail.png" class="img-fluid"><span>Xem thêm</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-faq" id="faq">
        <div class="container">
            <div class="title text-center"  data-aos="fade-up">
                <h2>{{ @$content->ques_title }}</h2>
            </div>
            <div class="content-faq">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-faq">
                            @foreach(@$content->question ?? [] as $key => $item)
                            <div class="item-faq"  data-aos="fade-up">
                                <div class="quess">
                                    <div class="icon"><img src="{{ __BASE_URL__ }}/images/icon-faq.svg" class="img-fluid" alt=""></div>
                                    <div class="txt-quess">{{ $item->name }}</div>
                                    <div class="icon-arr"><img src="{{ __BASE_URL__ }}/images/arrow.png" class="img-fluid" alt=""></div>
                                </div>
                                <div class="answer">
                                    <div class="top">
                                        <div class="user"><img src="{{ __BASE_URL__ }}/images/user-1.png" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <h6>{!! $item->desc !!}</h6>
                                        </div>
                                    </div>
                                    {!! $item->content !!}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avarta-faq text-center"  data-aos="fade-up"><img src="{{ @$content->ques->banner }}" class="img-fluid" alt="{{ @$content->ques_title }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('script')
<script>
    function isNumeric (evt) {
        if(this.value>31){this.value='31';}else if(this.value<0){this.value='0';};
    }
</script>
@endsection
