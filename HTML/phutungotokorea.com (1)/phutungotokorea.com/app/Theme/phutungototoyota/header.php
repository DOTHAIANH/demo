<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="">	
	<link rel="shortcut icon" href="<?php echo $urlThemeActive;?>images/favicon.png">

	<!-- Mobile specific meta -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="<?php echo $urlThemeActive;?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive;?>css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive;?>css/jquery-ui-1.10.4.custom.min.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive;?>plugin/nivo/nivo-lightbox.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive;?>plugin/nivo/themes/default/default.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive;?>plugin/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive;?>plugin/owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive;?>plugin/owl-carousel/owl.transitions.css">

	<link rel="stylesheet" href="<?php echo $urlThemeActive;?>css/style.css">

	<!-- JS files -->
	<script src="<?php echo $urlThemeActive;?>js/jquery-1.11.0.min.js"></script>
	<script src="<?php echo $urlThemeActive;?>js/jquery.browser.min.js"></script>
	<script src="<?php echo $urlThemeActive;?>js/bootstrap.min.js"></script>
	<script src="<?php echo $urlThemeActive;?>plugin/nivo/nivo-lightbox.min.js"></script>
	<script src="<?php echo $urlThemeActive;?>plugin/smoothscroll/ScrollToPlugin.min.js"></script>
	<script src="<?php echo $urlThemeActive;?>js/jquery.tablesorter.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="<?php echo $urlThemeActive;?>plugin/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php echo $urlThemeActive;?>js/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="<?php echo $urlThemeActive;?>js/jquery.easing.js"></script>
	<script src="<?php echo $urlThemeActive;?>js/script.js"></script>
	<script src="<?php echo $urlThemeActive;?>js/wow.js"></script>
	<script>
	    if($(window).innerWidth() > 991){
			new WOW().init(); 
		}
	</script>
	<!-- Font -->
	<?php mantan_header();?>

	<?php if( function_exists('showSeoHome') ) showSeoHome();?>
	<?php if( function_exists('showContentShareFacebook') ) showContentShareFacebook();?>
	<?php //debug('4');die;?>
	<link rel="canonical" href="<?php echo $urlNow;?>" />
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68620076-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
	
	<!-- H E A D E R -->
	<header>
		<span class="sr-only">Liên hệ</span>
		<div class="top">
			<div class="container">
				<div class="hotline col-sm-6 wow fadeInLeft wHighlight" data-wow-delay=".35s">
					<div class="hotlineText"><span>Hotline: </span><?php echo $contactSite['Option']['value']['fone']; ?></div>
				</div><!-- / col-sm-6 -->
				<div class="social col-sm-6 wow fadeInRight wHighlight" data-wow-delay=".35s">
					<a rel="nofollow" href="https://phutungotottc.com"><img src="<?php echo $urlThemeActive;?>images/vn.png" /></a>
					<a rel="nofollow" href="https://www.google.com/translate?hl=en&ie=UTF8&sl=auto&tl=en&u=http%3A%2F%2Fphutungotottc.com%2F"><img src="<?php echo $urlThemeActive;?>images/en.png" /></a>
				
					<a rel="nofollow" href="mailto:<?php echo $contactSite['Option']['value']['email'];?>" target="_blank" data-original-title="Email"><i class="fa fa-envelope"></i></a>
					<a rel="nofollow" href="https://www.facebook.com/phutungotochinhhangttc" target="_blank" data-original-title="Facebook"><i class="fa fa-facebook-square"></i></a>
					<a rel="nofollow" href="https://plus.google.com/109460261984193573877" target="_blank" data-original-title="Googleplus"><i class="fa fa-google-plus-square"></i></a>
				</div><!-- / col-sm-6 -->
			</div><!-- / container -->
		</div><!-- / top -->
		<div class="inner">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-6 wow fadeInLeft wHighlight" data-wow-delay=".35s">
						<div id="logo"><a href="<?php echo $urlHomes;?>"><img width="150" class="img-responsive" src="<?php echo $urlThemeActive;?>images/logo2.png"></a></div>
						
					</div><!-- / col-sm-6 -->
					<div class="quick-access col-md-7 col-sm-6 wow fadeInRight wHighlight" data-wow-delay=".35s">
						<div class="inner">
							
							<div class="welcome-msg">
								<?php 
									global $phutungotottcThemeSettings;
									echo @$phutungotottcThemeSettings['Option']['value']['textHeader'];
								?>
							</div>


							<div class="link-group">
								<?php if(!isset($_SESSION['infoUser'])){ ?>
									<a rel="nofollow" href="<?php if(function_exists('getLinkLogin')) echo getLinkLogin();?>"><i class="fa fa-key"></i> Đăng nhập</a>
									<a rel="nofollow" href="<?php if(function_exists('getLinkRegister')) echo getLinkRegister();?>"><i class="fa fa-plus"></i> Đăng ký</a>
								<?php }else{ ?>
									Xin chào <a href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['infoUser']['User']['user']?></a>
									<a rel="nofollow" href="<?php if(function_exists('getLinklogout')) echo getLinklogout();?>"><i class="fa fa-arrow-left"></i> Đăng xuất</a>
								<?php }?>
								<a rel="nofollow" href="<?php if(function_exists('getLinkCart')) echo getLinkCart();?>" id="cart" class="cart">Giỏ hàng 
									<span class="badge badge-custom-1" id="numberOrderProduct">
										<?php
											if(isset($_SESSION['orderProducts'])){
												$listOrderProduct= $_SESSION['orderProducts'];
											}else{
												$listOrderProduct= array();
											}
											echo count($listOrderProduct);
										?>
									</span>
								</a>
							</div>
						</div><!-- / inner -->
						<?php 

							global $modelOption;
							$listProductCategory= $modelOption->getOption('productCategory');

							if(isset($_GET['key'])){
								$keySearch= $_GET['key'];
							}else{
								$keySearch= '';
							}

							$linkSearch= (function_exists('getLinkSearch'))?getLinkSearch():'';
		
							echo ' <form role="search" class="search form-horizontal" action="'.$linkSearch.'" onsubmit="return processSearch();">
										<select name="category" class="form-control" id="categoryGlobal">
											<option selected="" value="">Tất cả</option>';

											if(isset($listProductCategory['Option']['value']['category']) && count($listProductCategory['Option']['value']['category'])>0){
												foreach($listProductCategory['Option']['value']['category'] as $cat)
												{
													if(isset($_GET['category']) && $cat['id']==$_GET['category'])
													{
														echo '<option selected="" value="'.$cat['id'].'">'.$cat['name'].'</option>';
													}
													else
													{
														echo '<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
													}

													if(isset($cat['sub']) && count($cat['sub'])>0){
														foreach ($cat['sub'] as $sub) {
															if(isset($_GET['category']) && $sub['id']==$_GET['category'])
															{
																echo '<option selected="" value="'.$sub['id'].'">&nbsp;&nbsp;&nbsp;'.$sub['name'].'</option>';
															}
															else
															{
																echo '<option value="'.$sub['id'].'">&nbsp;&nbsp;&nbsp;'.$sub['name'].'</option>';
															}
														}
													}
												}
											}
							
							echo	   '</select>
										<div class="form-group input-group">
											<input type="text" name="key" id="keyGlobal" value="'.str_replace('-', ' ', $keySearch).'" placeholder="Nhập từ khóa ..." class="form-control">
											<span class="input-group-btn">
												<button onclick="processSearch();" type="button">Tìm kiếm <i class="fa fa-search"></i></button>
											</span>
										</div>
									</form>';
						?>
						

					</div><!-- / quick-access -->

				</div><!-- / row -->
			</div><!-- / container -->
		</div><!-- / inner -->
	</header>
	<!-- / H E A D E R -->

	<!-- N A V -->
	<div class="container">
		<span class="sr-only">Điều hướng AutoPart</span>
		<nav class="st-nav" role="navigation">
			<div class="st-collapse-button">
				<button type="button" data-target="#main-nav">
					<!-- <span class="">Toggle navigation</span> -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div><!-- / st-collapse-button -->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="st-nav-inner">
				<ul id="main-nav" class="st-navbar">
					<?php
						$menus= getMenusDefault();

						if($menus){
							foreach($menus as $categoryMenu)
							{
								if(isset($categoryMenu['sub']) && count($categoryMenu['sub'])>0)
								{
									echo ' <li class="st-dropdown">
												<span class="collapse-toggle"></span>
												<a href="'.$categoryMenu['url'].'" >'.$categoryMenu['name'].'</a>
												<ul class="st-dropdown-menu">';
													foreach($categoryMenu['sub'] as $subMenu)
													{
														echo '<li><a href="'.$subMenu['url'].'">'.$subMenu['name'].'</a></li>';
													}
									echo		'</ul>
											</li>';
								}
								else
								{
									if($urlNow!=$categoryMenu['url'])
									{
										echo '<li><a href="'.$categoryMenu['url'].'">'.$categoryMenu['name'].'</a></li>';
									}
									else
									{
										echo '<li  class="active"><a href="'.$categoryMenu['url'].'">'.$categoryMenu['name'].'</a></li>';
									}
								}
							}
						}
					?>
				</ul><!-- / navbar-nav -->
			</div><!-- /.navbar-collapse -->
		</nav>
	</div><!-- container -->
	<!-- / N A V -->

	<!-- M A I N   C O N T E N T -->
	<div id="content-wrapper" class="homepage">
		<div class="container">
			<div class="inner">
				<div class="body-wrapper col-md-9 col-sm-8 float-right-sm">