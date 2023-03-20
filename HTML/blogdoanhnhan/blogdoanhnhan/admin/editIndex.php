
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
</head>
<body>
	<!-- start header -->

	<header id="" class="header has-sticky sticky-jump ">
  	
			<nav class="navbar navbar-expand-lg navbar-light  menu  navstyle " >
				<div class="container  hohoho">
					<a class="navbar-brand" href="javascript:void(0);" onclick="editThemeMedia('<?php echo @$themeSettings['Option']['value']['logo']; ?>', 'logo');"><img  src="<?php echo @$themeSettings['Option']['value']['logo']; ?>" width="80%" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse navitems" id="navbarTogglerDemo02">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu style_ul">
							<?php  
									$menus = getMenusDefault();  
									if (!empty($menus)) {  
										foreach ($menus as $categoryMenu) {  
											if (!empty($categoryMenu['sub'])) {  
												echo '<li class="nav-item dropdown active ">  
												<a class="nav-link dropdown-toggle"  title=""  style="color: white;font-size: 16px;font-weight:400 ">' . $categoryMenu['name'] . '<span class="caret"></span></a>  

												<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: black; ">';  
												foreach ($categoryMenu['sub'] as $subMenu) {  
														echo '<a class="dropdown-item">' . $subMenu['name'] . '</a>
                                    							';
                                    						}
                                    							
												echo '</div>  
												</li>  ';  
													
											} else {  
												echo '<li class="nav-item dropdown active ">  
												<a class="nav-link dropdown-toggle"   style="color: white;font-size: 16px;font-weight:400 ">' . $categoryMenu['name'] . '</a>  
												</li> ';  
											}  
										}  
									}  
								?> 
						</ul>




						
						
						
				</div>
			</nav>
		</header>












		<section class="main">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row ">

							<?php

						if(!empty($tmpVariable['listData'])){
							foreach($tmpVariable['listData'] as $item){
								$urlNotice = getUrlNotice($item['Notice']['id']);
								echo '<div class="col-md-5">
								        <div class="pt-5">
								          <a target="_blank" href="/notices/addNotices/'.$item['Notice']['id'].'" title=""><img src = "'.$item['Notice']['image'].'" alt ="" style="width:100%;" height="100%"; "></a>
								        </div>
								      </div>

								      <div class="col-md-7">
								         <div class="pt-5">
								        <a target="_blank" href="/notices/addNotices/'.$item['Notice']['id'].'" title=""><h1 style="font-size: 1.4rem;color:black; text-decoration: none; font-weight:bold" >'.$item['Notice']['title'].'</h1></a>
								         <p>'.$item['Notice']['introductory'].'</p>
								        <p><i class="far fa-calendar-minus"></i> '.date('d/m/Y',$item['Notice']['time']).'</p>
								         </div>	
								      </div>
								      <hr style="width: 100%; border: 1px solid black">';
							}
						}
					?>
						<br>
					
					</div>


					
					<ul class="pagination justify-content-center">
						<?php
						if($tmpVariable['page']>5){
							$tmpVariable['startPage']= $tmpVariable['page']-5;
						}else{
							$tmpVariable['startPage']= 1;
						}

						if($tmpVariable['totalPage']>$tmpVariable['page']+5){
							$tmpVariable['endPage']= $tmpVariable['page']+5;
						}else{
							$tmpVariable['endPage']= $tmpVariable['totalPage'];
						}
						
						echo '
						<li class="page-item">
						<a href="'.$tmpVariable['urlPage'].$tmpVariable['back'].'" class="page-link">Trang trước</a>
						</li>
						';
						for($i=$tmpVariable['startPage'];$i<=$tmpVariable['endPage'];$i++){
							echo '
							<li class="page-item">
							<a href="'.$tmpVariable['urlPage'].$i.'" class="page-link">'.$i.'</a>
							</li>
							';
						}
						echo '
						<li class="page-item">
						<a href="'.$tmpVariable['urlPage'].$tmpVariable['next'].'" class="page-link">Trang sau</a>
						</li>
						';
						?>
					</ul>
			



					
				</div>







					<div class="col-md-4 pt-5">
						<div class="card ">
							<div class="card-header">
								<div class=" text-white main">

									<div class="text-center button" id="myBtnContainer">
										<button class="btn  active" onclick="filterSelection('nature')"><b><i class="fas fa-bolt"></i> Xu hướng</b> </button>
										<button class="btn " onclick="filterSelection('cars')"><b><i class="fas fa-heart"></i> Đọc nhiều</b> </button>

									</div>


								</div>

							</div>


							<div class="card-body" >
								<div class="">
									<div class="column nature pt-3">
										<div class="row">
										<?php
											global $modelNotice;
											$news= $modelNotice->getOtherNotice(array(2),6);

											if(!empty($news)){
												foreach($news as $item){
													$urlNotice = getUrlNotice($item['Notice']['id']);
													echo '<div class="col-md-5 pt-3">

													<a target="_blank" href="/notices/addNotices/'.$item['Notice']['id'].'" title=""><img src = "'.$item['Notice']['image'].'" alt ="" style="width:100%;"></a>

													</div>

													<div class="col-md-7 pt-3">
													<a target="_blank" href="/notices/addNotices/'.$item['Notice']['id'].'" title=""><h1 style="font-size: 1rem;color:black; text-decoration: none; font-weight:bold" >'.$item['Notice']['title'].'</h1></a>
													</div>
													';
												}
											}
											?>
										</div>

									</div>
									
									
								
								

									
									
									

								</div>


								<div class="">
									<div class="column cars pt-3">
										<div class="row">
											<?php
											global $modelNotice;
											$news= $modelNotice->getOtherNotice(array(3),6);

											if(!empty($news)){
												foreach($news as $item){
													$urlNotice = getUrlNotice($item['Notice']['id']);
													echo '<div class="col-md-5 pt-3">

													<a target="_blank" href="/notices/addNotices/'.$item['Notice']['id'].'" title=""><img src = "'.$item['Notice']['image'].'" alt ="" style="width:100%;"></a>

													</div>

													<div class="col-md-7 pt-3">
													<a target="_blank" href="/notices/addNotices/'.$item['Notice']['id'].'" title=""> <h1 style="font-size: 1rem;color:black; text-decoration: none; font-weight:bold" >'.$item['Notice']['title'].'</h1></a>
													</div>
													';
												}
											}
											?>
										</div>
									</div>
									
									
									
									
								</div>
							




							</div>
						</div>
						<br>


						

						<div class="card">
							<div class="card-header">
								<h5>BÀI VIẾT MỚI</h5>
								
							</div>
							<div class="row pt-3">
								<?php
								global $modelNotice;
								$news= $modelNotice->getNewNotice(10);

								if(!empty($news)){
									foreach($news as $item){
										$urlNotice = getUrlNotice($item['Notice']['id']);
										echo '<div class="col-md-5 pt-3">
										<a target="_blank" href="/notices/addNotices/'.$item['Notice']['id'].'" title=""><img src = "'.$item['Notice']['image'].'" alt ="" style="width:100%"></a>
										</div>

										<div class="col-md-7 pt-3">
										<a target="_blank" href="/notices/addNotices/'.$item['Notice']['id'].'" title=""><h1 style="font-size: 1rem;color:black; text-decoration: none; font-weight:bold" >'.$item['Notice']['title'].'</h1></a>
										</div>';
									}
								}
								?>
							</div>
							
							
							
						
							
						</div>
					</div>
					
				</div>
				
			</div>
			
		</section>

			




	






	<footer class="footer text-center" style="background-color: black; height: 40px">
			<p class="pt-2" style="color: white"><span onclick="editThemeText('<?php echo @$themeSettings['Option']['value']['titleLearn']; ?>', 'titleLearn');"><?php echo @$themeSettings['Option']['value']['titleLearn']; ?></span> | Thiết kế bởi <a href="http://manmoweb.com/" target="_bank" title="" style="text-decoration: none; font-weight: bold; color: white;">MANMOWEB</a></p>
		</footer>
	



		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/all.min.js"></script>
		<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/owl.carousel.min.js"></script>


		<script>
			filterSelection("all")
			function filterSelection(c) {
				var x, i;
				x = document.getElementsByClassName("column");
				if (c == "all") c = "nature";
				for (i = 0; i < x.length; i++) {
					w3RemoveClass(x[i], "show");
					if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
				}
			}

			function w3AddClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
				}
			}

			function w3RemoveClass(element, name) {
				var i, arr1, arr2;
				arr1 = element.className.split(" ");
				arr2 = name.split(" ");
				for (i = 0; i < arr2.length; i++) {
					while (arr1.indexOf(arr2[i]) > -1) {
						arr1.splice(arr1.indexOf(arr2[i]), 1);     
					}
				}
				element.className = arr1.join(" ");
			}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace("active", "");
		this.className += "active";
	});
}
</script>

<script type="text/javascript">
			$(document).ready(function(){
				$(window).scroll(function(event){
					var pos_body = $('html,body').scrollTop();
					if (pos_body>20) {
						$('.menu').addClass('co-dinh-menu');
					}
					else{
						$('.menu').removeClass('co-dinh-menu');
					}
				});
			}); 
		</script>

		


	
	<?php include('codeEdit.php');?>

	</body>
	</html>


		