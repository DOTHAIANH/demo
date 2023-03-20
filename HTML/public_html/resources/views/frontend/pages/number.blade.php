@extends('frontend.master')
@section('main')
<main>
    <section class="box-homepage result-banner result-old-1">
        <div class="container">
            <div class="content-home text-center">
                <div class="txt-result-home">
                    <p  data-aos="fade-down">Xin Chúc mừng!</p>
                    <p  data-aos="fade-up">Kết quả tra cứu của <span>{{ $data['name'] ?? '' }}</span> đã sẵn sàng</p>
                    <div class="view-result"  data-aos="zoom-out" data-aos-delay="600"><a href="{{ route('result',['name' => request('name'),'day' => request('day'),'month' => request('month'),'year' => request('year')]) }}">XEM NGAY</a></div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

