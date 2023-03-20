@extends('frontend.master')
@section('main')
<main>
    <section class="banner-detail">
        <div class="container">
            <div class="title-detail-head">
                <h1>{!! @$data->name !!}</h1>
                <div class="date">Ngày đăng: @php 
                                    $date = \Carbon\Carbon::parse(@$data->from_date);
                                    echo $date->format('d/m/Y');
                                @endphp
                </div>
            </div>
        </div>
    </section>
    <section class="box-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="content-detail">
                        <div class="detail">
                            {!! @$data->content !!}
                        </div>
                        @if(@$data->type == 'blog')
                        <div class="box-comment">
                            <div class="title-bar">Bình luận ({{ count($data->comments) }})</div>
                            <div class="frm-comment">
                                <form action="{{ route('comment', ['productId' => $data->id]) }}" method="POST" class="sendContact">
                                    @csrf
                                    <textarea name="content" placeholder="Nhập bình luận của bạn"></textarea>
                                    <input type="hidden" placeholder="Nhập Email" name="email" class="txt_field field_email" required>
                                    <input type="hidden" placeholder="Nhập name" name="name" class="txt_field field_name" required>
                                        
                                        <input type="button" value="Gửi" class="btn_comment log @if(!auth('member')->check()) d-none @endif">
                                        <input type="button" value="Gửi" class="btn_comment unlog @if(auth('member')->check()) d-none @endif" data-toggle="modal" data-target="#modal_alert_3">
                                </form>
                            </div>

                            <div class="modal fade" id="modal_alert_3">
                                <div class="modal-dialog dialog-login">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="content-alert text-center">
                                                <a href="javascript:void(0)" class="close-popup" data-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.png" class="img-fluid" alt=""></a>
                                                <h3 class="mb-0 pt-0">Bình luận với email</h3>
                                                <div class="frm-login">
                                                        <p style="color: red;" class="error"></p>
                                                        <div class="item">
                                                            <input type="text" placeholder="Nhập Email" name="email_res" class="txt_field" required>
                                                            <div class="icon">
                                                                <img src="{{ __BASE_URL__ }}/images/log-1.png" class="img-fluid log-abs" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <input type="text" placeholder="Nhập Tên" name="name_res" class="txt_field" required>
                                                            <div class="icon">
                                                                <img src="{{ __BASE_URL__ }}/images/log-2.png" class="img-fluid log-abs" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="item text-center"><input type="button" value="Hoàn Tất" class="btn_field submitfield"></div>
                                                    
                                                    <div class="item"><p>Hoặc đăng nhập bằng</p></div>
                                                    <div class="item"><a href=""><img src="{{ __BASE_URL__ }}/images/fb.png" class="img-fluid" alt=""></a></div>
                                                    <div class="item"><a href=""><img src="{{ __BASE_URL__ }}/images/mail.png" class="img-fluid" alt=""></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal_alert_2">
                                <div class="modal-dialog dialog-alert">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="content-alert text-center">
                                                <a href="javascript:void(0)" class="close-popup" data-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.png" class="img-fluid" alt=""></a>
                                                <div class="icon"><img src="{{ __BASE_URL__ }}/images/alert-error.png" class="img-fluid" alt=""></div>
                                                <h3 class="mb-0">Thông báo</h3>
                                                <p>Bạn chưa nhập nội dung bình luận.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="modal_alert_1">
                                <div class="modal-dialog dialog-alert">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="content-alert text-center">
                                                <a href="javascript:void(0)" class="close-popup" data-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.png" class="img-fluid" alt=""></a>
                                                <div class="icon"><img src="{{ __BASE_URL__ }}/images/alert-success.png" class="img-fluid" alt=""></div>
                                                <h3 class="mb-0">Thông báo</h3>
                                                <p>Đã gửi bình luận thành công!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-cmt">
                                @if(count($comments))
                                @foreach($comments as $comment)
                                <div class="item-cmt">
                                    <div class="top">
                                        <div class="left">
                                            <div class="user-cmt">
                                                <div class="avr"><img src="{{ __BASE_URL__ }}/images/cmt.png" class="img-fluid" alt=""></div>
                                                <h6>{{ !empty($comment->name) ? $comment->name : ""  }} {{ !empty($comment->email) ? '/ '.$comment->email : ""  }}</h6>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <img src="{{ __BASE_URL__ }}/images/date.png" class="img-fluid" alt=""><span>{{ date('d/m/Y',strtotime($comment->created_at)) }}</span>
                                        </div>
                                    </div>
                                    <div class="desc">{!! $comment->content !!}</div>
                                </div>
                                @endforeach
                                @endif
                                
                                <!-- <div class="view-all-cmt text-center"><a href="">Xem tất cả bình luận</a></div> -->
                            </div>
                        </div>
                        @endif    
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="side-bar-detail">
                        <div class="new-bar">
                            <div class="title-bar">Bài viết phổ biến</div>
                            <div class="list-new-bar">
                                @foreach(@$postOther as $key => $v)
                                <div class="item-blog">
                                    <div class="avarta"><a href="{{ route('single.blog',$v->slug) }}"><img src="{{ $v->image }}" class="img-fluid w-100" alt="{{ $v->name }}"></a></div>
                                    <div class="info">
                                        <h3><a href="{{ route('single.blog',$v->slug) }}">{{ $v->name }}</a></h3>
                                        <div class="view-detail"><a href="{{ route('single.blog',$v->slug) }}">Xem chi tiết</a></div> 
                                    </div>
                                </div>
                                @endforeach    
                            </div>
                        </div>
                        @if(@$data->type == 'blog')
                        <div class="banner-bar"><img src="{{ __BASE_URL__ }}/images/bn-bar.png" class="img-fluid w-100" alt=""></div>
                        @endif    
                    </div>
                </div>
                @if(@$data->type == 'blog')
                <div class="col-md-12">
                    <div class="other-blog">
                        <div class="title-bar">Bài viết cùng chuyên mục</div>
                        <div class="list-other-blog">
                            <div class="row">
                                @foreach(@$category->Posts()->orderByDesc('posts.created_at')->take(2)->get() ?? [] as $k => $v)
                                <div class="col-md-4">
                                    <div class="item-blog">
                                        <div class="avarta"><a href="{{ route('single.blog',$v->slug) }}"><img src="{{ $v->image }}" class="img-fluid w-100" alt="{{ $v->name }}"></a></div>
                                        <div class="info">
                                            <h3><a href="{{ route('single.blog',$v->slug) }}">{{ $v->name }}</a></h3>
                                            <div class="view-detail"><a href="{{ route('single.blog',$v->slug) }}">Xem chi tiết</a></div> 
                                        </div>
                                    </div>
                                </div>
                                @endforeach    
                            </div>
                        </div>
                    </div>
                </div>
                @endif    
            </div>
        </div>
    </section>
</main>
@endsection
@section('script')
<script type="text/javascript">
    var name = window.localStorage.getItem('name');
    var email = window.localStorage.getItem('email');
        console.log(name)
    $('.field_name').val(name);
    $('.field_email').val(email);
    if (name === null || email === null) {
        console.log('ok')
        $('.unlog').removeClass('d-none');
        $('.log').addClass('d-none');
    }else{
        $('.unlog').addClass('d-none');
        $('.log').removeClass('d-none');
    }
    $('.submitfield').click(function () {
        if ($('input[name=name_res]').val() == '' || $('input[name=email_res]').val() == '') {
            $('.error').text('Bạn chưa nhập đủ thông tin');
        }else{
            window.localStorage.setItem('name', $('input[name=name_res]').val())
            window.localStorage.setItem('email', $('input[name=email_res]').val())
            var name = window.localStorage.getItem('name');
            var email = window.localStorage.getItem('email');
            $('.field_name').val(name);
            $('.field_email').val(email);
            if (name != '' || email != '') {
                $('.unlog').addClass('d-none');
                $('.log').removeClass('d-none');
            }else{
                $('.unlog').removeClass('d-none');
                $('.log').addClass('d-none');
            }
            $('#modal_alert_3').modal('hide');
        }
    });
    $('.log').click(function () {
        if ($('textarea').val() == '') {
            $('#modal_alert_2').modal('show');
        }else{
            $('#modal_alert_1').modal('show');
            setTimeout(function(){
                $('.sendContact').submit();
            }, 1000);
        }
    });
</script>
@endsection
