<?php getHeader();?>
	<?php
		global $themeData;
		global $contactSite;
		global $showPopup;
		global $themeSettings;

		             
		if (function_exists('getSliderBanner')) {
			$infoSliderBanner = getSliderBanner();
			if (!empty($infoSliderBanner['slider']['Album']['img'])) {
				echo '<section class="box1">
						<div class="owl-carousel owl-theme owl_slider">';
							foreach($infoSliderBanner['slider']['Album']['img'] as $slider){
								echo '	<div class="item">
											<img src="'.$slider['src'].'" class="img-responsive" alt="">
										</div>';
							}
				echo	'</div>
					</section>';
			}
		}
	?>
	
	<section class="box2 display_flex">
		<div class="box2_1">
			<h3 class="rs"><?php echo @$themeSettings['Option']['value']['headline1']; ?></h3>
			<p class="rs"><?php echo @$themeSettings['Option']['value']['topcontent1']; ?></p>
			
		</div>
		<div class="box2_1">
			<h3 class="rs"><?php echo @$themeSettings['Option']['value']['headline2']; ?></h3>
			<p class="rs"><?php echo @$themeSettings['Option']['value']['topcontent2']; ?></p>
			
		</div>
		<div class="box2_1">
			<h3 class="rs"><?php echo @$themeSettings['Option']['value']['headline3']; ?></h3>
			<p class="rs"><?php echo @$themeSettings['Option']['value']['topcontent3']; ?></p>
			
		</div>
		<div class="box2_1">
			<h3 class="rs"><?php echo @$themeSettings['Option']['value']['headline4']; ?></h3>
			<p class="rs"><?php echo @$themeSettings['Option']['value']['topcontent4']; ?></p>
			
		</div>
	</section>
	
	<section class="box3 p50">
		<div class="container">
			<div class="title_page text-center">
				<h3 class="rs">Về chúng tôi</h3>
				<p class="rs"></p>
			</div>
			<div class="box3_main">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="box3_item">
							<img src="<?php echo @$themeSettings['Option']['value']['imgabout1']; ?>" alt="">
							<h4 class="rs"><?php echo @$themeSettings['Option']['value']['abouttitle1']; ?></h4>
							<p class="rs"><?php echo @$themeSettings['Option']['value']['aboutcontent1']; ?></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="box3_item">
							<img src="<?php echo @$themeSettings['Option']['value']['imgabout2']; ?>" alt="">
							<h4 class="rs"><?php echo @$themeSettings['Option']['value']['abouttitle2']; ?></h4>
							<p class="rs"><?php echo @$themeSettings['Option']['value']['aboutcontent2']; ?></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="box3_item">
							<img src="<?php echo @$themeSettings['Option']['value']['imgabout3']; ?>" alt="">
							<h4 class="rs"><?php echo @$themeSettings['Option']['value']['abouttitle3']; ?></h4>
							<p class="rs"><?php echo @$themeSettings['Option']['value']['aboutcontent3']; ?></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="box3_item">
							<img src="<?php echo @$themeSettings['Option']['value']['imgabout4']; ?>" alt="">
							<h4 class="rs"><?php echo @$themeSettings['Option']['value']['abouttitle4']; ?></h4>
							<p class="rs"><?php echo @$themeSettings['Option']['value']['aboutcontent4']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<?php
		if(!empty($tmpVariable['listCategory']['Option']['value']['category'])){
			echo '<section class="box4 p50">
					<div class="container">
						<div class="title_page text-center">
							<h3 class="rs">Danh mục sản phẩm</h3>
						</div>
						<div class="box4_main">
							<ul class="nav nav-tabs text-center rs box4_tab" role="tablist">
								<li class="nav-item active">
									<a class="nav-link" href="#tabAll" role="tab" data-toggle="tab">Tất cả</a>
								</li>';
							foreach($tmpVariable['listCategory']['Option']['value']['category'] as $category){
								if(!empty($tmpVariable['listProduct'][$category['id']])){
									echo '<li class="nav-item">
											<a class="nav-link" href="#tab'.$category['id'].'" role="tab" data-toggle="tab">'.$category['name'].'</a>
										</li>';
								}
							}
					echo '	</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane in active" id="tabAll">
									<div class="list_sp">
										<div class="row">';
										foreach($tmpVariable['listCategory']['Option']['value']['category'] as $category){
											if(!empty($tmpVariable['listProduct'][$category['id']])){
												foreach($tmpVariable['listProduct'][$category['id']] as $product){
													if ($product['Product']['price'] > 0) {
														$price= number_format($product['Product']['price']).'đ';
													} else {
														$price= "Liên hệ";
													}
													echo '<div class="col-sm-6 col-md-3">
															<div class="sp_item">
																<div class="sp_img">
																	<img src="'.@$product['Product']['images'][0].'" class="img-responsive" alt="">
																	<a href="'.$product['Product']['urlProductDetail'].'" class="pop_xn"></a>
																</div>
																<div class="sp_text">
																	<a href="'.$product['Product']['urlProductDetail'].'" class="sp_text_name">'.@$product['Product']['title'].'</a>
																	<div class="sp_text_price">'.$price.'</div>
																</div>
															</div>
														</div>';
												}
											}
										}
									echo '</div>
									</div>
								</div>';
							foreach($tmpVariable['listCategory']['Option']['value']['category'] as $category){
								if(!empty($tmpVariable['listProduct'][$category['id']])){
									echo '<div role="tabpanel" class="tab-pane" id="tab'.$category['id'].'">
											<div class="list_sp">
												<div class="row">';
												foreach($tmpVariable['listProduct'][$category['id']] as $product){
													if ($product['Product']['price'] > 0) {
														$price= number_format($product['Product']['price']).'đ';
													} else {
														$price= "Liên hệ";
													}
													echo '<div class="col-sm-6 col-md-3">
															<div class="sp_item">
																<div class="sp_img">
																	<img src="'.@$product['Product']['images'][0].'" class="img-responsive" alt="">
																	<a href="'.$product['Product']['urlProductDetail'].'" class="pop_xn"></a>
																</div>
																<div class="sp_text">
																	<a href="'.$product['Product']['urlProductDetail'].'" class="sp_text_name">'.@$product['Product']['title'].'</a>
																	<div class="sp_text_price">'.$price.'</div>
																</div>
															</div>
														</div>';
												}
									echo '		</div>
											</div>
										</div>';
								}
							}
					echo '	</div>
						</div>
					</div>
				</section>';
		}
	?>
				
			
		
	<section class="box5">
		<div class="container">
			<h3 class="rs">Hotline</h3>
			<h2 class="rs"><?php if(!empty($contactSite['Option']['value']['fone'])) echo $contactSite['Option']['value']['fone'];?></h2>
			<p class="rs"><?php if(!empty($themeSettings['Option']['value']['gioithieutrangchu'])) echo $themeSettings['Option']['value']['gioithieutrangchu'];?></p>
		</div>
	</section>
	
	<?php
		if(!empty($tmpVariable['listNoticeNew'])){
			echo '<section class="box7 p50">
					<div class="container">	
						<div class="title_page text-center">
							<h3 class="rs">Tin tức mới nhất</h3>
						</div>
						<div class="box7_main">
							<div class="row">';
							foreach($tmpVariable['listNoticeNew'] as $notice){
								$urlNotice = getUrlNotice($notice['Notice']['id']);
								echo '<div class="col-sm-4">
										<div class="new_item">
											<a href="'.$urlNotice.'" class="new_img test-shine">
												<img src="'.$notice['Notice']['image'].'" class="img-responsive" alt="">
											</a>
											<div class="new_date">
												<i class="fa fa-calendar" aria-hidden="true"></i> '.date('d/m/Y',$notice['Notice']['time']).'
											</div>
											<div class="new_text">
												<a href="'.$urlNotice.'" class="new_name">'.$notice['Notice']['title'].'</a>
												<p class="rs"> '.$notice['Notice']['introductory'].' ...</p>
											</div>
										</div>
									</div>';
							}
			echo '			</div>
						</div>
					</div>
				</section>';
		}
	?>
			
	<?php
		if(!empty($tmpVariable['listAlbum']['Album']['img'])){
			echo '<section class="box8 p50">
					<div class="container">
						<div class="title_page text-center">
							<h3 class="rs">Đối tác</h3>
						</div>
						<div class="box8_main">
							<div class="owl-carousel owl-theme owl_box8">';
							foreach($tmpVariable['listAlbum']['Album']['img'] as $img){
								echo '<div class="item">
										<img src="'.$img['src'].'" class="img-responsive" alt="">
									</div>';
							}
				echo '		</div>
						</div>
					</div>
				</section>';
		}
	?>

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
						if(!empty($_GET['status'])){
							$showPopup= 1;
							echo 'Gửi yêu cầu đặt hàng thành công';
						}
						?>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
				</div>
			</div>

		</div>
	</div>
	
	

	<?php if(function_exists('showPopupHome')) showPopupHome();?>
<?php getFooter(); ?>