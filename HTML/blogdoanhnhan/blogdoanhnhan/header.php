
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/style.css">
	<!-- Latest compiled and minified CSS & JS -->

	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive; ?>css/owl.theme.default.min.css">
	<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4071798844598987"
     crossorigin="anonymous"></script>
</head>
<body>
	<!-- start header -->

	<header id="" class="header has-sticky sticky-jump " >
  	
			<nav class="navbar navbar-expand-lg navbar-light  menu  navstyle " style="background-color: <?php echo @$themeSettings['Option']['value']['color']; ?>">
				<div class="container  hohoho">
					<a class="navbar-brand" href="/"><img class="img_logo" src="<?php echo @$themeSettings['Option']['value']['logo']; ?>"  alt="" width="50%"  style="background-color: <?php echo @$themeSettings['Option']['value']['color1']; ?>;"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
					<div class="collapse navbar-collapse navitems" id="navbarTogglerDemo02">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu style_ul">
							<?php  
									$menus = getMenusDefault();  
									if (!empty($menus)) {  
										foreach ($menus as $categoryMenu) {  
											if (!empty($categoryMenu['sub'])) {  
												echo '<li class="nav-item dropdown active pl-2 ">  
												<a class="nav-link dropdown-toggle" href="' . $categoryMenu['url'] . '" title=""  style="color: white;font-size: 14px;font-weight:400 ">' . $categoryMenu['name'] . '<span class="caret"></span></a>  

												<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: black; ">';  
												foreach ($categoryMenu['sub'] as $subMenu) {  
														echo '<a class="dropdown-item"  href="' . $subMenu['url'] . '">' . $subMenu['name'] . '</a>
                                    							';
                                    						}
                                    							
												echo '</div>  
												</li>  ';  
													
											} else {  
												echo '<li class="nav-item dropdown active pl-3 ">  
												<a class="nav-link dropdown-toggle" href="' . $categoryMenu['url'] . '"  style="color: white;font-size: 14px;font-weight:400 ">' . $categoryMenu['name'] . '</a>  
												</li> ';  
											}  
										}  
									}  
								?> 
						</ul>




						
						
						
				</div>
			
			</nav>
		</header>