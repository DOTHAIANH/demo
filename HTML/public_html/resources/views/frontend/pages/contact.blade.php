@extends('frontend.master')
@section('main')
<main>
    <section class="box-contact">
        <div class="container">
            <div class="title text-center">
                <h2>Liên Hệ</h2>
            </div>
            <div class="content-contact">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-contact">Chúng tôi có thể giúp gì cho bạn?</div>
                        <div class="frm-contact">
                            <form action="{{ route('pages.contact.post') }}" method="post" class="sendContact">
                                @csrf()
                                <div class="item-ctn"><input type="text" name="name" placeholder="Họ và tên" class="txt_field"></div>
                                <div class="item-ctn"><input type="text" name="phone" placeholder="Điện thoại" class="txt_field"></div>
                                <div class="item-ctn"><input type="text" name="email" placeholder="Email" class="txt_field"></div>
                                <div class="item-ctn"><textarea name="content" placeholder="Nội dung"></textarea></div>
                                <div class="item-ctn"><input type="button" value="Gửi yêu cầu" class="btn_field submitfield"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="txt-form">
                            <div class="title-contact">Thông Tin Liên Hệ</div>
                            <div class="info-contact">
                                <ul>
                                    <li><img src="{{ __BASE_URL__ }}/images/pl-1.png" class="img-fluid" alt=""><span><strong>Địa chỉ:</strong> {{ $site_info->address }} </span></li>
                                    <li><img src="{{ __BASE_URL__ }}/images/pl-2.png" class="img-fluid" alt=""><span><strong>Hotline:</strong> {{ $site_info->hotline }}</span></li>
                                    <li><img src="{{ __BASE_URL__ }}/images/pl-3.png" class="img-fluid" alt=""><span><strong>Email:</strong> {{ $site_info->email }}</span></li>
                                    <li><img src="{{ __BASE_URL__ }}/images/pl-4.png" class="img-fluid" alt=""><span><strong>Website:</strong> Zenway.vn</span></li>
                                    <li><img src="{{ __BASE_URL__ }}/images/pl-5.png" class="img-fluid" alt=""><span><strong>Fanpage:</strong> {{ $site_info->facebook }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- popup-alert -->
        <div class="modal fade" id="modal_alert_2">
            <div class="modal-dialog dialog-alert">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="content-alert text-center">
                            <a href="javascript:void(0)" class="close-popup" data-dismiss="modal"><img src="{{ __BASE_URL__ }}/images/close.png" class="img-fluid" alt=""></a>
                            <div class="icon"><img src="{{ __BASE_URL__ }}/images/alert-success.png" class="img-fluid" alt=""></div>
                            <h3>Thông báo</h3>
                            <p>Đã gửi yêu cầu của bạn!</p>
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
                            <div class="icon"><img src="{{ __BASE_URL__ }}/images/alert-error.png" class="img-fluid" alt=""></div>
                            <h3>Thông báo</h3>
                            <p>Vui lòng điền đầy đủ thông tin của <br>bạn trước khi gửi!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end popup-alert -->
    </section>
</main>
@endsection
@section('script')
<script type="text/javascript">
    $('.submitfield').click(function () {
        if ($('textarea').val() == '' || $('input[name=phone]').val() == '' || $('input[name=email]').val() == '' || $('input[name=name]').val() == '') {
            $('#modal_alert_1').modal('show');
        }else{
            $('#modal_alert_2').modal('show');
            setTimeout(function(){
            $('.sendContact').submit();
            }, 1000);
        }
    });
</script>
@endsection
