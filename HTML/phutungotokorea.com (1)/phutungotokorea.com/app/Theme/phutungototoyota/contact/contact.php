<?php getHeader();?>

<script type="text/javascript">
	function checkTitle()
	{
		var title= document.getElementById("title").value;
		if(title != "")
		{
			return true;
		}
		else
		{
			alert("Bạn chưa điền tiêu đề !");
			return false;
		}
	}
</script> 
<section class="body-section products-grid">
	
	<div class="title-wrapper">
		<h2>Liên hệ</h2>
	</div>
	<div class="row">
		<div class="l-dmain">
			<div class="l-center">
				<div class="dm-list" style="margin-top: 0;">
					
					<div class="sapo_tin">
						<form role="form" style="width: 450px;float: left;margin-right: 15px;margin-left: 15px;" class="custom-form row" onsubmit="return checkTitle();" method="post" action="">
							<div class="col-xs-12">
								<?php
		                            if ($tmpVariable['returnSend']['code'] == 1) {
		                                $mess = '<h5 style="color: green;" ><span class="glyphicon glyphicon-ok"></span> Gửi liên hệ thành công!</h5>';
		                            } elseif ($tmpVariable['returnSend']['code'] == 0) {
		                                $mess = '<h5 class="text-align-center" style="color: red;" ><span class="glyphicon glyphicon-remove"></span> Bạn nhập sai mã xác nhận!</h5>';
		                            } else {
		                                $mess = '';
		                            }
		                            echo $mess;
		                        ?>
								<div class="form-group" style="margin-bottom: 20px">
									<label for="fullname">Tên đầy đủ<span class="form-require"> (*)</span></label>
									<input type="text" class="form-control" id="fullname" name="fullName" placeholder="Tên đầy đủ" required>
								</div>
								<div class="form-group" style="margin-bottom: 20px">
									<label for="fullname">Địa chỉ<span class="form-require"> (*)</span></label>
									<input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ" required>
								</div>
								<div class="form-group">
									<label for="email">Email<span class="form-require"> (*)</span></label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<label for="fone">Điện thoại<span class="form-require"> (*)</span></label>
									<input type="text" class="form-control" id="fone" name="fone" placeholder="Điện thoại" required>
								</div>
								<div class="form-group">
									<label for="message">Tin nhắn<span class="form-require"> (*)</span></label>
									<textarea id="message" class="form-control" rows="5" placeholder="Ghi chú" name="content" required></textarea>
								</div>
								<div class="form-group">
									<label for="fone">File mô tả<span class="form-require"></span></label>
									<input type="text" class="form-control" id="file" name="file" placeholder="Đường dẫn download file mô tả">
									<p>Hãy up file mô tả, hình ảnh sản phẩm bạn muốn gửi cho chúng tôi lên <a target="_blank" href="http://upfile.vn/">Upfile</a>, <a target="_blank" href="https://www.fshare.vn/">Fshare</a> , <a target="_blank" href="https://www.mediafire.com/">Mediafire</a> sau đó điền link download file bạn up lên tại đây</p>
								</div>
								<div class="form-group">
									<label for="fone">Mã xác nhận<span class="form-require"> (*)</span></label>
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
									<button type="submit" onclick="return checkTitle();" class="custom-btn btn-float">Gửi</button>
								</div>
							</div><!-- / col-sm-6 -->
						</form>
						
						<div class="link_box" style="float: left;width: 42%;">
							<?php echo @$tmpVariable['contact']['Option']['value']['info'];?>
						</div>
						<div style="clear:both;margin-left: 10px;">
							<?php echo @$tmpVariable['contact']['Option']['value']['map'];?>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div><!-- / row -->
	
</section>
				

<?php getSidebar();?>
<?php getFooter();?>