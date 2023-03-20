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
                        <form action="{{ route('home.login') }}" method="POST">
                            @csrf
                            <div class="box-form-user">
                                <div class="title-user text-center">
                                    <img src="{{ __BASE_URL__ }}/images/tab-about.png" class="img-fluid" alt=""><span>ĐĂNG NHẬP</span>
                                </div>

                                @include('frontend.components.message')

                                <div class="list-form-user">
                                    <div class="item">
                                        <label>Tài khoản</label>
                                        <input type="text" placeholder="Email hoặc Tài Khoản" name="user_name" required>
                                    </div>
                                    <div class="item">
                                        <label>Mật khẩu</label>
                                        <input type="password" placeholder="Nhập mật khẩu" name="password" required>
                                    </div>
                                    <div class="item">
                                        <input type="submit" class="btn-login" value="Đăng nhập">
                                    </div>
                                    <div class="item text-center">
                                        <p>hoặc</p>
                                        <div class="l-fb">
                                            <a href="{{ url('redirect/facebook')}}"><img src="{{ __BASE_URL__ }}/images/login-fb.png" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="note-user">
                                            <span>Chưa có tài khoản? <a href="{{ route('home.register') }}">Đăng ký ngay</a></span>
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
@endsection