<?php getHeader();?>
<?php global $themeSettings;?>
		<section class="contact_main">
			<br>
			<div class="container contact_content">
				<div class="row">
					<div class="col-md-12">
						<h3 style=" color: #291112">THÔNG TIN LIÊN HỆ</h3>
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label style=" color: #291112">Họ và tên</label>
									    <input type="text" class="form-control"  name="fullName" placeholder="Vui lòng nhập họ và tên">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label style=" color: #291112">Số điện thoại</label>
									<input type="text" class="form-control" name="fone" placeholder="Vui lòng nhập số điện thoại">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label style=" color: #291112">Email</label>
								<input type="email" class="form-control" name="email" placeholder="Vui lòng nhập email">
							</div>
							<div class="form-group">
								<label style=" color: #291112">Nội dung</label>
								<textarea class="form-control" name="content" placeholder="Vui lòng để lại nội dung liên hệ của bạn"></textarea>
							</div>
							<div class="form-group">
									<label for="" style=" color: #291112">Mã xác nhận: </label>
									<div class="row">
                                        <div class="col-sm-6">
                                            <input name="" class="pm-form-textfield captcha_contact form-control" type="text" disabled="" value="<?php echo $tmpVariable['capchaCode']; ?>">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="captcha" required="required" value="" class="form-control" placeholder="">
                                        </div>
                                        
                                    </div>
								</div>
							<button style="float: right" type="submit" class="btn btn-info"><i class="fab fa-telegram-plane"></i> Gửi</button>
						</form>
					</div>
					
				</div>
			</div>
		</section>
		<br><br>


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
                                $mess = '<h5 style="color: #291112;" ><span class="glyphicon glyphicon-ok"></span> Gửi liên hệ thành công!</h5>';
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




		
		


<?php getFooter();?>