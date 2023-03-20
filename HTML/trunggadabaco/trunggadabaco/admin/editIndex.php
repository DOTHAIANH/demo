<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<link href="<?php echo $urlThemeActive; ?>images/icon.png" type="image/ico" rel="icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="<?php echo $urlThemeActive; ?>js/jquery-2.2.4.js"></script>
	<link rel="stylesheet" href="<?php echo $urlThemeActive; ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive; ?>css/bootstrap-theme.min.css" >
	<script src="<?php echo $urlThemeActive; ?>js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/owl.theme.default.css">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700&amp;subset=vietnamese" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/style.css">
	<?php
	global $themeSettings;
	mantan_header();
	if (function_exists('showSeoHome')) {
		showSeoHome();
	}
	if (function_exists('showContentShareFacebook')) {
		showContentShareFacebook();
	}
	?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46139140-14"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-46139140-14');
	</script>

</head>
<body>
	<header class="">
		<div class="container h_80 flex_center">
			<h1 class="rs"><a  title="" class="header-logo"> <img  onclick="editThemeMedia('<?php echo @$themeSettings['Option']['value']['logo']; ?>', 'logo');"  src="<?php echo @$themeSettings['Option']['value']['logo']; ?>" alt="" style="width: 8	0%; height: 60px;"></a></h1>
			<nav class="header-menu">
				<ul class="list-inline rs">
					<?php  
						$menus = getMenusDefault();  
						if (!empty($menus)) {  
							foreach ($menus as $categoryMenu) {  
								if (!empty($categoryMenu['sub'])) {  
									echo '<li class="list-inline-item hassub">  
									<a href="javascript:void(0);" title="">' . $categoryMenu['name'] . '<span class="caret"></span></a>  

									<ul class="rs list-unstyled menusub">';  
									foreach ($categoryMenu['sub'] as $subMenu) {  
										echo '<li><a href="' . $subMenu['url'] . '">' . $subMenu['name'] . '</a></li>';  
									}  
									echo '</ul>  


									</li>  ';  
								} else {  
									echo '<li class="list-inline-item">  
									<a  href="' . $categoryMenu['url'] . '">' . $categoryMenu['name'] . '</a>  
									</li> ';  
								}  
							}  
						}  
					?> 
				</ul>
			</nav>
			<div class="hamburger hamburger--squeeze hide_web">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
			<ul class="rs list-inline icon_right">
				<li class="list-inline-item"><a href="javascript:void(0);" class="icon_search"><i class="fa fa-search" aria-hidden="true"></i></a></li>
				<li class="list-inline-item"><a href="/cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="num_shop"><?php
							if(isset($_SESSION['orderProducts'])){
								$listOrderProduct= $_SESSION['orderProducts'];
							}else{
								$listOrderProduct= array();
							}
							echo count($listOrderProduct);
						?></span></a></li>
			</ul>

			<div class="search_w">
				<form action="/search/" method="get">
					<div class="display_flex">
						<input type="text" class="form-control" value="<?php echo @$_GET['key'];?>" placeholder="Nhập từ khóa tìm kiếm" name="key">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
					
				</form>
			</div>
		</div>
	</header>
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
			<h3 class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['headline1']; ?>', 'headline1');" ><?php echo @$themeSettings['Option']['value']['headline1']; ?></h3>
			<p class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['topcontent1']; ?>', 'topcontent1');" ><?php echo @$themeSettings['Option']['value']['topcontent1']; ?></p>
			
		</div>
		<div class="box2_1">
			<h3 class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['headline2']; ?>', 'headline2');"><?php echo @$themeSettings['Option']['value']['headline2']; ?></h3>
			<p class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['topcontent2']; ?>', 'topcontent2');"><?php echo @$themeSettings['Option']['value']['topcontent2']; ?></p>
			
		</div>
		<div class="box2_1">
			<h3 class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['headline3']; ?>', 'headline3');"><?php echo @$themeSettings['Option']['value']['headline3']; ?></h3>
			<p class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['topcontent3']; ?>', 'topcontent3');" ><?php echo @$themeSettings['Option']['value']['topcontent3']; ?></p>
			
		</div>
		<div class="box2_1">
			<h3 class="rs"  onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['headline4']; ?>', 'headline4');" ><?php echo @$themeSettings['Option']['value']['headline4']; ?></h3>
			<p class="rs"  onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['topcontent4']; ?>', 'topcontent4');" ><?php echo @$themeSettings['Option']['value']['topcontent4']; ?></p>
			
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
							<img src="<?php echo @$themeSettings['Option']['value']['imgabout1']; ?>" onclick="editThemeMedia('<?php echo @$themeSettings['Option']['value']['imgabout1']; ?>', 'imgabout1');"  alt="">
							<h4 class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['abouttitle1']; ?>', 'abouttitle1');" ><?php echo @$themeSettings['Option']['value']['abouttitle1']; ?></h4>
							<p class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['aboutcontent1']; ?>', 'aboutcontent1');" ><?php echo @$themeSettings['Option']['value']['aboutcontent1']; ?></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="box3_item">
							<img src="<?php echo @$themeSettings['Option']['value']['imgabout2']; ?>"onclick="editThemeMedia('<?php echo @$themeSettings['Option']['value']['imgabout2']; ?>', 'imgabout2');" alt="">
							<h4 class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['abouttitle2']; ?>', 'abouttitle2');" ><?php echo @$themeSettings['Option']['value']['abouttitle2']; ?></h4>
							<p class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['aboutcontent2']; ?>', 'aboutcontent2');" ><?php echo @$themeSettings['Option']['value']['aboutcontent2']; ?></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="box3_item">
							<img src="<?php echo @$themeSettings['Option']['value']['imgabout3']; ?>" onclick="editThemeMedia('<?php echo @$themeSettings['Option']['value']['imgabout3']; ?>', 'imgabout3');"alt="">
							<h4 class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['abouttitle3']; ?>', 'abouttitle3');" ><?php echo @$themeSettings['Option']['value']['abouttitle3']; ?></h4>
							<p class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['aboutcontent3']; ?>', 'aboutcontent3');" ><?php echo @$themeSettings['Option']['value']['aboutcontent3']; ?></p>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="box3_item">
							<img src="<?php echo @$themeSettings['Option']['value']['imgabout4']; ?>" onclick="editThemeMedia('<?php echo @$themeSettings['Option']['value']['imgabout4']; ?>', 'imgabout4');" alt="">
							<h4 class="rs" onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['abouttitle4']; ?>', 'abouttitle4');" ><?php echo @$themeSettings['Option']['value']['abouttitle4']; ?></h4>
							<p class="rs"onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['aboutcontent4']; ?>', 'aboutcontent4');" ><?php echo @$themeSettings['Option']['value']['aboutcontent4']; ?></p>
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
			<p class="rs"><?php if(!empty($themeData['Option']['value']['gioithieutrangchu'])) echo $themeData['Option']['value']['gioithieutrangchu'];?></p>
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
										<p onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['facebook']; ?>', 'facebook');"><?php echo @$themeSettings['Option']['value']['facebook']; ?></p>
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
		<div onclick="editThemeEditer(this.innerHTML,'textfooter')"><?php echo @$themeSettings['Option']['value']['textfooter']; ?></div>
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
	<?php echo @$themeSettings['Option']['value']['messenger'];?>

		<?php include('codeEdit.php');?>
</body>
</html>