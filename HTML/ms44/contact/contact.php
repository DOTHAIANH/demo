<?php getHeader();?>
	<link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/style_ms1.css">
	<section class="cart pb_50 min600">
		<div class="title_bg text-center">
			<h3 class="rs">Liên hệ</h3>
			<ul class="list-inline rs">
				<li class="list-inline-item"><a href="/">Trang chủ</a></li>
				<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="list-inline-item">Liên hệ</li>
			</ul>
		</div>
		<div class="container">
			<div class="cart_main">
				<div class="cart_btn mt_20">
					<div class="row">
						<div class="col-md-8 col-md-offset-2" style="margin: 0 auto;">
							<form action="" method="post" class="cart_form2">
								<h2 class="text-center">Thông tin liên hệ</h2>
								<div class="form-group">
									<label for="">Họ tên: </label>
									 <input type="text" class="form-control"  name="fullName" placeholder="Vui lòng nhập họ và tên">
								</div>
								<div class="form-group">
									<label for="">Số điện thoại: </label>
									<input type="tel" maxlength="11" class="form-control" required="" name="fone">
								</div>
								<div class="form-group">
									<label for="">Email: </label>
									<input type="email" class="form-control" required="" name="email">
								</div>
								<div class="form-group">
									<label for="">Địa chỉ: </label>
									<input type="text" maxlength="255" class="form-control" required="" name="address">
								</div>
								<div class="form-group">
									<label for="">Ghi chú: </label>
									<textarea name="content" rows="5" class="form-control" maxlength="3000"></textarea>
								</div>
								<div class="form-group">
									<label for="">Mã xác nhận: </label>
									<div class="row">
                                        <div class="col-sm-6">
                                            <input name="" class="pm-form-textfield captcha_contact form-control" type="text" disabled="" value="<?php echo $tmpVariable['capchaCode']; ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="captcha" required="required" value="" class="form-control" placeholder="">
                                        </div>
                                        
                                    </div>
								</div>
								<div class="form-group text-center">
									<button type="submit" class="cart_btn2">Gửi liên hệ</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Thông báo</h4>
				</div>
				<div class="modal-body">
					<p>
						<?php
							global $showPopup;
                            if ($tmpVariable['returnSend']['code'] == 1) {
                            	$showPopup= 1;
                                $mess = '<h5 style="color: green;" ><span class="glyphicon glyphicon-ok"></span> Gửi liên hệ thành công!</h5>';
                            } elseif ($tmpVariable['returnSend']['code'] == 0) {
                            	$showPopup= 1;
                                $mess = '<h5 class="text-align-center" style="color: red;" ><span class="glyphicon glyphicon-remove"></span> Bạn nhập sai mã xác nhận!</h5>';
                            } else {
                                $mess = '';
                            }
                            echo $mess;
                        ?>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
				</div>
			</div>

		</div>
	</div>
	<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/slick.min.js"></script> 
<?php getFooter(); ?>