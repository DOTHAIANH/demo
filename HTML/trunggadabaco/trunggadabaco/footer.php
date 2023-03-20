<?php global $themeSettings; ?>

	<section class="box9 p50">
		<div class="container">
			<div class="box9_main">
				<div class="row">
					<div class="col-md-6">
						<h3 class="rs">Đăng ký nhận tin khuyến mại</h3>
					</div>
					<div class="col-md-6">
						<form class="box9_form display_flex" method="post" action="add-subscribe">
							<input type="email" placeholder="Nhập email của bạn" maxlength="255" class="form-control" name="email">
							<input type="submit" class="" value="Đăng ký" name="">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="p50">
		<div class="container">
			<div class="row flex_mb">
				<div class="col-sm-6 col-md-4">
					<div class="footer1">
						<h3 class="rs">Địa chỉ</h3>
						<ul class="list_menu_update cf rs mt_20">
							<li>
								<span class='icon_fl'><i class="fa fa-map-marker"></i></span>
								<span class='icon_fr'><span><?php if(!empty($contactSite['Option']['value']['address'])) echo $contactSite['Option']['value']['address'];?> </span></span>
							</li>
							<li>
								<span class='icon_fl'><i class="fa fa-phone"></i></span>
								<span class='icon_fr'>
									<span>
										<a href=""><?php if(!empty($contactSite['Option']['value']['fone'])) echo $contactSite['Option']['value']['fone'];?></a> 
									</span>
								</span>
							</li>
							<li>
								<span class='icon_fl'><i class="fa fa-envelope"></i></span>
								<span class='icon_fr'>
									<span>
										<a href=""><?php if(!empty($contactSite['Option']['value']['email'])) echo $contactSite['Option']['value']['email'];?> </a>
									</span>
								</span>
							</li>
							<li>
								<span class='icon_fl'><i class="fa fa-facebook" aria-hidden="true"></i></span>
								<span class='icon_fr'>
									<span>
										<a href="<?php echo @$themeSettings['Option']['value']['facebook']; ?>"><?php echo @$themeSettings['Option']['value']['facebook']; ?></a>
									</span>
								</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-2">
					<div class="footer1">
						<h3 class="rs">Sản phẩm</h3>
						<ul class="rs list-unstyled f_ul">
							<?php
								global $modelOption;
									$listBlogCategory= getListCategory();
								/*	debug($listBlogCategory);*/
									if(!empty($listBlogCategory['Option']['value']['category'])){
									foreach($listBlogCategory['Option']['value']['category'] as $item){
									echo'<li>
											<a href="'.getLinkCat().$item['slug'].'.html"> '.$item['name'].'</a>
										</li>';
									}
								}
							?>
							
						</ul>
						
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="footer1">
						<h3 class="rs">Chính sách</h3>
						<ul class="rs list-unstyled f_ul">
							<?php
								global $modelNotice;
								$allPage= $modelNotice->getAllPage();
								/*debug($allPage);*/
									foreach($allPage as $items){
									echo'<li>
											<a href="'.$items['Notice']['slug'].'.html"> '.$items['Notice']['title'].'</a>
										</li>';
								}
							?>
								
							</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="footer1">
						<h3 class="rs">Thống kê</h3>
						<?php 
						if(function_exists('getStatic')){
							$static= getStatic();
							echo '<ul class="rs list-unstyled f_ul">
							<li class="display_flex"><img src="'.$urlThemeActive.'images/tk1.png" class="img-responsive" alt=""> Đang truy cập: '.number_format(rand(1,10)).'</li>
							<li class="display_flex"><img src="'.$urlThemeActive.'images/tk2.png" class="img-responsive" alt=""> Hôm nay: '.number_format($static['Option']['value']['mday']).'</li>
							<li class="display_flex"><img src="'.$urlThemeActive.'images/tk3.png" class="img-responsive" alt=""> Tháng hiện tại: '.number_format($static['Option']['value']['mon']).'</li>
							<li class="display_flex"><img src="'.$urlThemeActive.'images/tk4.png" class="img-responsive" alt=""> Tổng lượt truy cập: '.number_format($static['Option']['value']['total']).'</li>
							</ul>';
						}
						?>
						
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="banquyen">
		<p><?php echo @$themeSettings['Option']['value']['textfooter']; ?></p>
		<p><center>Website được xây dựng bởi <a href="http://manmoweb.com/" title="Công cụ tạo web tự động" target="blank">Mần Mò Web</a></center></p>
	</div>
	<div class="backtop">
		<span id="toTop" class="icon_top"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
	</div>

	<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/owl.carousel.js"></script>
	<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/main.js"></script>

	<script type="text/javascript">
		<?php
		global $showPopup;
		if(isset($showPopup) && $showPopup== 1){
			echo "$(window).on('load',function(){
					$('#myModal').modal('show');
				});";
		}
		?>
	</script>


</body>
</html>