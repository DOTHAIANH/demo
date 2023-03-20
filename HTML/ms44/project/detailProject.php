
<?php getHeader()?>
<!-- <link rel="stylesheet" href="<?php echo $urlThemeActive; ?>css/docs.theme.min.css"> -->
    <link rel="stylesheet" href="<?php echo $urlThemeActive; ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $urlThemeActive; ?>css/owl.theme.default.min.css">
    <script src="<?php echo $urlThemeActive; ?>js/owl.carousel.js"></script>
    <link rel='stylesheet' href='<?php echo $urlThemeActive; ?>css/baguetteBox.css'>
	<script src='<?php echo $urlThemeActive; ?>js/baguetteBox.js'></script>

    <section id="demos">
        <div class="">
            <div class="large-12 columns wow fadeInRight  "  data-wow-duration="1.8s">
                <div class="loop owl-carousel owl-theme baguetteBoxOne gallery">
                	<?php
							$detail = $tmpVariable['data'];
							// debug($detail);
							if(!empty($detail)){
								foreach ($detail['Project']['images'] as $value) {
									// debug($detail);
									echo'
										<div class="items">
											<img src="'.$value.'" class="img-fluid w-100" alt="">
										</div>
										';
								}						
							}
						?>  
                </div>
            </div>
         </div>
                <script>
                    $('.loop').owlCarousel({
					    center: true,
					    items:1,
					    nav: true,
					    loop:true,
					    margin:10,
					    responsive:{
					        600:{
					            items:2
					        }
					    }
					});
						$('.nonloop').owlCarousel({
						    center: true,
						    items:2,
						    loop:false,
						    margin:10,
						    responsive:{
						        600:{
						            items:4
						        }
						    }
						});
                </script>
            </div>
        </div>
    </section>
	<br><br>
	<div class="infor container">
		<div class="row">
			<div class="col-md-8 col-12 wow fadeInLeft  "  data-wow-duration="1.5s">
				<h1 class="name-project"><?php echo $tmpVariable['data']['Project']['name']?></h1>
				<div class="title">
					<?php echo $tmpVariable['data']['Project']['info']?>
				</div>
			</div>
			<div class="col-md-4 col-12  wow fadeInRight  "  data-wow-duration="1.8s">
				<div class="img-product">
					<img src="<?php echo $tmpVariable['data']['Project']['images'][0]?>">
					
				</div>
			</div>
		</div>
			
	</div>

	<div class="box-news">
		<div class="container">
			<div class="title text-center">
				<h2>Các Dự Án Khác</h2>
			</div>
	      	<div class="row">
	          	<?php
					$otherProjects = $tmpVariable['otherProject'];
					//debug($otherProjects);
					if(!empty($otherProjects)){
						foreach ($otherProjects as $value) {
							foreach ($value as $item) {
								$url='/project/'.$item['slug'].'.html';
								echo '
										<div class="col-md-6 mg-top30 wow fadeInDown  "  data-wow-duration="1.8s"><a href="">
											<div class="item-pr">
												<div class="avarta">
													<img src="'.$item['images'][0].'" class="img-fluid w-100" alt="">
												</div>
												<div class="info text-center">
													<h3><a href="'.$url.'">'.$item['name'].'</a></h3>
												</div>
											</div>
										</div>

								';
							}
						}
					}
				?>

				<div class="col-md-12 mg-top30">
					<div class="btn-cong text-center"><a href="/allProject">XEM TẤT CẢ DỰ ÁN</a></div>
				</div>
	          </div>
		</div>
	</div>

	
<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/slick.min.js"></script> 
<?php getFooter()?>


