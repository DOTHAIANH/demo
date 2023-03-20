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
			<h1 class="rs"><a href="/" title="" class="header-logo"> <img src="<?php echo @$themeSettings['Option']['value']['logo']; ?>" alt="" style="width: 100%;"></a></h1>
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
										echo '<li><a href="' . $subMenu['url'] . '">' . $subMenu['name'] . '</a>
												
										';  
												if(!empty($subMenu['sub'])){
													echo '<ul class="menu-sub">';
												foreach ($subMenu['sub'] as $Menu){
                                        	echo '
                                        			<li><a href="' . $Menu['url'] . '">' . $Menu['name'] . '</a></li>';
                                        }
                                        echo '</ul>';
                                    }
                                    	
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