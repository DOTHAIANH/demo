<?php 
    require_once("config/dbhelp.php");
    $fullname = $email = $phone_number = $content = $created_at = '';
    if(!empty($_POST)) {
        $fullname = getPost('fullname');
        $email = getPost('email');
        $phone_number = getPost('phone_number');
        $content = getPost('content');
        $created_at = date('Y-m-d H:i:s');

        $sql = "INSERT INTO contact (fullname,email,phone_number,content,created_at)
        VALUES ('$fullname','$email','$phone_number','$content','$created_at')";
        execute($sql);
        echo"<script>alert('Bạn đã gửi liên hệ thành công')</script>";
    }
?>


<!--Main content  -->
    <section class="bread-crumb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="list-inline">
                        <ul>
                            <li>
                                <i class="fa-solid fa-house"></i>
                                <a href="">
                                    <span>Trang chủ</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa-solid fa-angle-right"></i>
                            </li>
                            <li>
                                <span>LIÊN HỆ</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="container contact">
            <div class="box-heading relative">
                <h1 class="title-head page_title">LIÊN HỆ
                </h1>
            </div>
            <div class="contact-box-info clearfix margin-bottom-30">
                <div class="row">
                    <div class="col-md-4 items">
                        <div class="icon f-left">
                            <i class="fa fa fa-map-marker"></i>
                        </div>
                        <div>
                            54 P. Lê Thanh Nghị, Đồng Tâm, Hai Bà Trưng, Hà Nội
                        </div>
                    </div>
                    <div class="col-md-2 items">
                        <div class="icon f-left">
                            <i class="fa fa fa-mobile-phone"></i>
                        </div>
                        <div>
                            <a href="callto:0000000">0123456789</a>
                            <a href="callto:0000000">012345678901</a>
                        </div>
                    </div>
                    <div class="col-md-3 items">
                        <div class="icon f-left">
                            <i class="fa fa fa-envelope-o"></i>
                        </div>
                        <div class="info">
                            <a href="mailto:">123123@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="box-maps relative">
            <div class="iFrameMap">
                <div class="google-map">
                    <div class="contact_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7602397366118!2d105.83994611415694!3d21.002245894060575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad389c0a12df%3A0x24aa1e437c63f4e3!2zQXB0ZWNoIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1658345654784!5m2!1svi!2s"
                            id="map" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="container relative">
                <div class=" page_contact margin-bottom-40">
                    <h2 class="title-head">
                        <span>Gửi thông tin liên hệ</span>
                    </h2>
                    <form method="post">
                        <div class="form-group">
                            <input required type="text" name="fullname" placeholder="Họ tên*" id="fullname" class="form-control">
                        </div>
                        <div class="form-group">
                            <input required type="email" name="email" placeholder="Email*" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input required type="text" name="phone_number" placeholder="Điện thoại*" id="phone_number" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="content" id="content" cols="30" rows="5" class="form-control" placeholder="Nhập nội dung*"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input class="btn btn-style btn-primary btn-full" type="submit" value="GỬI LIÊN HỆ">
                        </div>
                    </form>
                </div>
            </div>
        </section>