<?php global $themeSetting?>
<?php getHeader()?>
	<section id="contact" class="subpages">
		
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="contactBanner">
						<img src="<?php echo $urlThemeActive ?>images/contactbanner.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="row contactInfo">
				<div class="col-sm-6">
					<h2>Liên hệ với chúng tôi</h2>
					<h4><?php echo @$themeSetting['Option']['value']['company']; ?></h4>
					<address>
						<div class="d-flex text-tt">
				   			<img src="<?php echo $urlThemeActive ?>images/phone1.png">
				   			<p>
				   				<?php echo $contactSite['Option']['value']['fone']; ?>	
				   			</p>
						</div>
						<div class="d-flex text-tt">
							<img src="<?php echo $urlThemeActive ?>images/mail.png">
							<p></span> <?php echo $contactSite['Option']['value']['email']; ?></p>
							
						</div>
						<div class="d-flex text-tt">
							<img src="<?php echo $urlThemeActive ?>images/address.png">
							<p><?php echo $contactSite['Option']['value']['address']; ?></p>
						</div>
						<!-- <p><span class="iconify" data-icon="carbon:phone-ip"></span> <?php echo $contactSite['Option']['value']['fone']; ?></p>
						<p><span class="iconify" data-icon="fa-solid:envelope"></span> <?php echo $contactSite['Option']['value']['email']; ?></p>
						<p><span class="iconify" data-icon="gis:position"></span> <?php echo $contactSite['Option']['value']['address']; ?></p> -->
					</address>
				</div>
				<div class="col-sm-6">
					<form class="contactForm" action="" method="post">						
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<div class="styled-input">
										<input type="text"  name="fullName" required=""  />
										<label>Họ và tên*</label> 
									</div>
								</div>
								<div class="col-sm-6">
									<div class="styled-input">
										<input type="text" required="" name="address" />
										<label>Địa chỉ</label> 
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<div class="styled-input">
										<input type="tel" maxlength="11"  required="" name="fone">
										<label>Số điện thoại*</label> 
									</div>
								</div>
								<div class="col-sm-6">
									<div class="styled-input">
										<input type="email" required / name="email">
										<label>Email*</label> 
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<div class="styled-input">
										<textarea type="text" required="" name="content" rows="5" class="form-control" maxlength="3000"></textarea>
										<label>Lời nhắn cho chúng tôi</label> 
									</div>
								</div>
							</div>
						</div>
						<div class="form-group" style="margin-bottom: 20px;">
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
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<button type="submit" class="submitForm">Gửi đi</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="js/compairimage.js"></script>

<?php getFooter()?>

<?php if($tmpVariable['returnSend']['code'] !== -1){ 
		if($tmpVariable['returnSend']['code']==1) {
			$mess = 'Đã gửi thông tin liên hệ';
		}elseif ($tmpVariable['returnSend']['code']==0) {
			$mess = 'Sai mã captcha';
		}
		?>
        <div id="showC" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">Thông báo</div>
                        <button style="display: flex;align-items:center;justify-content: center;" type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="showMess"><?php echo $mess ?></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $('#showC').modal('show');
        </script>
    <?php } ?>