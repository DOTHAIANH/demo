<?php getHeader();?>
<?php global $themeSettings;?>
		<section class="contact_main">
			
			<div class="container contact_content">
				<div class="row">
					<div class="col-md-8 pt-5">
						<h1 style="font-weight:bold; font-size : 30px; color: black ">ĐĂNG KÝ NHẬN THÔNG BÁO BLOG MỚI</h1>

						
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Họ và tên</label>
									    <input type="text" class="form-control"  name="fullName" placeholder="Vui lòng nhập họ và tên">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Số điện thoại</label>
									<input type="text" class="form-control" name="fone" placeholder="Vui lòng nhập số điện thoại">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Vui lòng nhập email">
							</div>
							

							<div class="form-group">
								<label>Nội dung</label>
								<textarea class="form-control" name="content" placeholder="Vui lòng để lại nội dung liên hệ của bạn"></textarea>
							</div>
							
							<button style="float: right" type="submit" class="btn btn-info"><i class="fab fa-telegram-plane"></i> Gửi</button>
						</form>
					</div>

					<div class="col-md-4 pt-5">
						<h1 style="font-weight:bold; font-size : 30px; color: black ">THÔNG TIN LIÊN HỆ</h1>
							
						<ul>
							<li>299-Kim Mã- Ba Đình - Hà Nội</li>
						</ul>
						
					</div>
					
				</div>
			</div>
		</section>
		<br>


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
								$mess = '<h5 style="color: black;" ><span class="glyphicon glyphicon-ok"></span> Đăng ký nhận thông báo thành công!</h5>';
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





		<footer class="footer text-center" style="background-color: black; height: 40px">
			<p class="pt-2" style="color: white">Copyright 2020 © Blogdoanhnhan | Thiết kế bởi <a href="http://manmoweb.com/" target="_bank" title="" style="text-decoration: none; font-weight: bold; color: white;">MANMOWEB</a></p>
		</footer>


		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/all.min.js"></script>
		<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/owl.carousel.min.js"></script>


		<script type="text/javascript">
	<?php
		if(isset($tmpVariable['returnSend']['code']) && $tmpVariable['returnSend']['code']>=0){
			echo '$("#myModal").modal("show");';
		}
	?>
	
</script>
	



		
	</body>
	</html>
	
	


	

		
		

