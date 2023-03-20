@extends('frontend.master')
@section('main')
    <main style="background: url('{{ __BASE_URL__ }}/images/bn-about.jpg') no-repeat center;background-size: cover;">
        <section class="form-user">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="avar-user text-center"><img src="{{ __BASE_URL__ }}/images/avar-user.png" class="img-fluid" alt=""></div>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('home.auth.otp.post') }}" method="POST">
                            @csrf
                            <div class="box-form-user">
                                <div class="title-user text-center">
                                    <img src="{{ __BASE_URL__ }}/images/tab-about.png" class="img-fluid" alt=""><span>ĐĂNG NHẬP</span>
                                </div>

                                @include('frontend.components.message')

                                <p class="text-center">Vui lòng nhập mã otp được gửi đến email của bạn</p>

                                <div class="list-form-user">
                                    <div class="item">
                                        <label>Otp</label>
                                        <input type="text" placeholder="" name="otp" required>
                                    </div>
                                    <div class="item">
                                        <input type="submit" class="btn-login" value="Đăng nhập">
                                        <a href="{{ route('home.login') }}" style="display: block;color: white; padding-top: 10px">Hủy bỏ ?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection