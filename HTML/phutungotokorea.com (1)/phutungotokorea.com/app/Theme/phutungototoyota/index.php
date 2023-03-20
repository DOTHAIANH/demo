<?php getHeader();?>
<!-- S L I D E R -->
<?php 
	if( function_exists('getSliderBanner') ){ 
		$infoSliderBanner= getSliderBanner();
		if($infoSliderBanner){
		?>
		<section class="body-section slider">
			<link rel="stylesheet" href="<?php echo $urlThemeActive.'plugin/nivo/style.css';?>">
			<link rel="stylesheet" href="<?php echo $urlThemeActive.'plugin/owl-carousel/owl.carousel.css';?>">
			<script src="<?php echo $urlThemeActive.'plugin/nivo/nivo-lightbox.min.js';?>"></script>
			<script src="<?php echo $urlThemeActive.'plugin/owl-carousel/owl.carousel.min.js';?>"></script>
			
			<style>
				.body-section.slider .st-slider .a-slider{
					height: <?php echo $infoSliderBanner['idSlider']['Option']['value']['height'];?> !important;
				}
				.owl-carousel {
				    width: <?php echo $infoSliderBanner['idSlider']['Option']['value']['width'];?> !important;
				}
			</style>
			<div class="body-section slider">
				<!-- <div class=""> -->
				<div class="st-slider">
					<?php foreach($infoSliderBanner['slider']['Album']['img'] as $image){ ?>
					<div class="a-slider">
						<div class="a-slider-inner">
							<a href="<?php echo @$image['link'];?>">
								<img width="100%" class="img-responsive" style="height:<?php echo $infoSliderBanner['idSlider']['Option']['value']['height'];?>" src="<?php echo $image['src'];?>" />
								<?php
									if(isset($image['alt']) && $image['alt']!='')
									{
										echo '<p>'.$image['alt'].'</p>';
									}
								?>
							</a>
						</div>
					</div>
					<?php }?>
				</div><!-- / st-slider -->
		
				<!-- </div> --><!-- / container -->
			</div><!-- / slider -->
			
			
			<script type="text/javascript">
				$(".st-slider").owlCarousel({
					// Most important owl features
					items : 1,
					itemsCustom : false,
					itemsDesktop : [1199,1],
					itemsDesktopSmall : [991,1],
					itemsTablet: [767,1],
					itemsTabletSmall: false,
					itemsMobile : [479,1],
					singleItem : true,
					itemsScaleUp : false,
		
					//Basic Speeds
					slideSpeed : 1000,
					paginationSpeed : 1000,
					rewindSpeed : 500,
		
					//Autoplay
					autoPlay : 5000,
					stopOnHover : true,
		
					// Navigation
					navigation : false,
					navigationText : ["prev","next"],
					rewindNav : true,
					scrollPerPage : false,
		
					//Pagination
					pagination : true,
					paginationNumbers: false,
		
					// Responsive 
					responsive: true,
					responsiveRefreshRate : 100,
					responsiveBaseWidth: window,
		
					// CSS Styles
					baseClass : "owl-carousel",
					theme : "owl-theme",
		
					//Lazy load
					lazyLoad : false,
					lazyFollow : true,
					lazyEffect : "fade",
		
					//Auto height
					autoHeight : false,
		
					//JSON 
					jsonPath : false, 
					jsonSuccess : false,
		
					//Mouse Events
					dragBeforeAnimFinish : true,
					mouseDrag : true,
					touchDrag : true,
		
					//Transitions
					transitionStyle : "fadeUp",
		
					// Other
					addClassActive : false,
		
				});
			</script>
		</section>
<?php	} 
	} ?>
<!-- / slider -->

<!-- P R O D U C T S -->
<?php 
	if( function_exists('showListProduct') )
	{ 
		$conditions= array('hot'=>1);
		$title= 'Phụ tùng ô tô bán chạy';
		$limit= 12;
		showListProduct($title,$limit,$conditions);
	}
?>
<?php 
	if( function_exists('showListProduct') )
	{ 
		$title= 'Phụ tùng ô tô khuyến mại';
		$limit= 12;

		$today= getdate();
		$conditions['dateDiscountStart']= array('$lte' => $today[0]);
		$conditions['dateDiscountEnd']= array('$gte' => $today[0]);
		$conditions['lock']= 0;

		showListProduct($title,$limit,$conditions);
	}
?>
<?php 
	if( function_exists('showListProduct') )
	{ 
		$title= 'Phụ tùng ô tô mới';
		$limit= 12;
		showListProduct($title,$limit);
	}
?>

<?php
	$manufacturer= getListNameManufacturer();
	//debug($category);die;
	if(!empty($manufacturer['Option']['value']['category'])){
		$linkManufacturer= getLinkManufacturer();
		foreach($manufacturer['Option']['value']['category'] as $category){
			if(!empty($category['sub'])){
				echo '<section class="body-section products-grid">
						<h2>Phụ tùng ô tô chính hãng các dòng xe '.$category['name'].'</h2>
						<div class="row">';
						foreach($category['sub'] as $components){
							$components['urlManufacturer']= $linkManufacturer.$components['slug'].'.html';
							echo '<div class="a-product col-lg-2 col-md-3 col-sm-4 wow bounceInDown wHighlight" data-wow-delay=".35s" data-prdid="" style="height:auto">
									<div class="inner">
										<div class="media-container listLogo">
											<a href="'.@$components['urlManufacturer'].'"><img class="img-responsive" src="'.@$components['image'].'" alt=""></a>
										</div>
										<div class="brief">
											<h3><a href="'.@$components['urlManufacturer'].'" class="prd-name">'.@$components['name'].'</a></h3>
										</div>
									</div>
								</div>';
						}
				echo '	</div>
					</section>';
			}
		}
	}
	
?>

<?php if( function_exists('showPopupHome') ) showPopupHome();?>
<?php getSidebar();?>
<?php getFooter();?>						