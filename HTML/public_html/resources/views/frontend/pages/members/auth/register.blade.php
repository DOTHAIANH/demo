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

                        <form action="{{ route('home.register') }}" method="POST">
                            @csrf
                            <div class="box-form-user">
                                <div class="title-user text-center">
                                    <img src="{{ __BASE_URL__ }}/images/tab-about.png" class="img-fluid" alt=""><span>ĐĂNG KÝ</span>
                                </div>

                                @include('frontend.components.message')

                                <div class="list-form-user">
                                    <div class="item">
                                        <label>Tên tài khoản</label>
                                        <input type="text" placeholder="Tên của bạn" name="user_name" required value="{{ old('user_name') }}">
                                    </div>
                                    <div class="item">
                                        <label>Nhập địa chỉ email</label>
                                        <input type="text" placeholder="Nhập email" name="email" required value="{{ old('email') }}">
                                    </div>
                                    <div class="item">
                                        <label>Mật khẩu</label>
                                        <input type="password" placeholder="Nhập mật khẩu" name="password">
                                    </div>
                                    <div class="item">
                                        <label>Nhập lại Mật khẩu</label>
                                        <input type="password" placeholder="Nhập lại mật khẩu" name="password_confirmation">
                                    </div>
                                    <div class="item">
                                        <input type="submit" class="btn-login" value="Đăng ký">
                                    </div>
                                    <div class="item text-center">
                                        <p>hoặc</p>
                                        <div class="l-fb">
                                            <a href=""><img src="{{ __BASE_URL__ }}/images/regis-fb.png" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="note-user">
                                            <span>Đã có tài khoản? <a href="{{ route('home.login') }}">Đăng nhập ngay</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop