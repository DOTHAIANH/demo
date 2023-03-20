<?php getHeader()?>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive ?>css/grid-gallery.min.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive ?>css/baguetteBox.css">
	<!--  <?php debug($tmpVariable);?> -->
	 <section class="container" style="padding-bottom: 30px;">
	 	 <div id="gg-screen"></div>
		  <h1 class="" style="font-size: 24px;font-weight: 600;color: #29662b; text-transform: uppercase; padding: 20px 0px;  "><?php echo $tmpVariable['data']['photo']['Photo']['name']?></h1>
		 
		   <div class="row listProductItem">
		   		<?php 
		  		if(!empty($tmpVariable['data']['photo']['Photo']['images'])){
		  			foreach ($tmpVariable['data']['photo']['Photo']['images'] as $key => $value) {?>
		  				<div class="col-sm-4">
							<div class="comparison-slider-wrapper demo gallery">
								<div class="comparison-slider">
									<a href="<?php echo $value?>">
										<img src="<?php echo $value?>" alt="" class="img-fluid">
									</a>
									
								</div>
							</div>
						</div>
		  		<?php	}
		  		}

		  	?> 
		   </div>
	 </section>
	<!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="<?php echo $urlThemeActive ?>js/baguetteBox.js"></script>
<script>
    baguetteBox.run('.demo', {
  captions: true, // display image captions.
  buttons: 'auto', // arrows navigation
  fullScreen: false,
  noScrollbars: false,
  bodyClass: 'baguetteBox-open',
  titleTag: false,
  async: false,
  preload: 2,
  animation: 'slideIn', // fadeIn or slideIn
  verlayBackgroundColor: 'rgba(0,0,0,.8)'
});
</script>
<?php getFooter()?>