<?php global $themeSetting?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?php echo $urlThemeActive; ?>images/logoweb100.png" width="300%;"/> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $urlThemeActive ?>css/owl.theme.default.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Arsenal&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $urlThemeActive ?>css/style.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
	<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
	<?php mantan_header(); 
    if (function_exists('showSeoHome')) {
            showSeoHome();
        }
        if (function_exists('showContentShareFacebook')) {
            showContentShareFacebook();
        }
    ?>
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 logo-pc">
					<div class="listLogo d-flex align-items-center justify-content-around">
						<a href="/"><img src="<?php echo $themeSetting['Option']['value']['logo1'] ?>" class="img-fluid" alt=""></a>
						<a href="/"><img src="<?php echo $themeSetting['Option']['value']['logo2'] ?>" class="img-fluid" alt=""></a>
						<a href="/"><img src="<?php echo $themeSetting['Option']['value']['logo3'] ?>" class="img-fluid" alt=""></a>
					</div>
				</div>

				<div class="col-sm-12 logo-mobie">
					<div class="listLogo d-flex align-items-center justify-content-around">
						<a href="/"><img src="<?php echo $themeSetting['Option']['value']['logo4'] ?>" class="img-fluid" alt=""></a>
						<a href="/"><img src="<?php echo $themeSetting['Option']['value']['logo5'] ?>" class="img-fluid" alt=""></a>
						<a href="/"><img src="<?php echo $themeSetting['Option']['value']['logo6'] ?>" class="img-fluid" alt=""></a>
					</div>
				</div>
			</div>	
		</div>
		<div class="bg-light start-header start-style">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="navbar navbar-expand-md navbar-light">	

							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menutop" aria-controls="menutop" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse" id="menutop">
								<ul class="navbar-nav mr-auto py-4 py-md-0">
										<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
											<a class="nav-link" href="/">
												<span class="iconify d-none d-sm-block" data-icon="fa-solid:home"></span>
												<span class="d-block d-sm-none">Trang chủ</span>
											</a>
										</li>
									 <?php  
			                                $menus = getMenusDefault();  
			                                if (!empty($menus)) {  
			                                    foreach ($menus as $categoryMenu) {  
			                                        if (!empty($categoryMenu['sub'])) { ?>
			                                        <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
														<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><?php echo ($categoryMenu['name']); ?></a>
														<div class="dropdown-menu">
															<?php foreach ($categoryMenu['sub'] as $subMenu) { ?>
							                                   <a class="dropdown-item" href="<?php echo ($subMenu['url']); ?>"><?php echo ($subMenu['name']); ?></a>
							                                 <?php }  ?> 
														</div>
													</li>
			                         <?php   } else {  ?> 
						                         <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
													<a class="nav-link" href="<?php echo ( $categoryMenu['url']); ?>"><?php echo ($categoryMenu['name']); ?></a>
												</li>  
			                        <?php   } }} 
			                            ?> 
								</ul>
							</div>
							<div class="search-div">
								<!-- <form role="search" method="get" class="search-form" action="">
									<label>
										<input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />
									</label>
									<input type="submit" class="search-submit" value="Search" />
								</form> -->
								<img class="fa-searchs btn_search" src="<?php echo $urlThemeActive ?>images/2.png">
								<!-- <i class="fas fa-search fa-searchs"></i> -->
								<!-- <form action="/search/" method="get">
									<div class="inputs">
										<input type="text"  placeholder="Nhập tên sản phẩm cần tìm" name="key" value="<?php echo @$_GET['key'];?>">
										<button type="submit">
											<i class="fas fa-search"></i>
										</button>
									</div>
								</form>  -->
							</div>
						</nav>		
					</div>
				</div>
			</div>
		</div>
	</header>
