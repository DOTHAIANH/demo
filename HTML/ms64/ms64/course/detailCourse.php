<?php getHeader()?>
<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive ?>css/baguetteBox.css">
		<!-- <?php debug($tmpVariable);?> -->
		<div class="container ">
			<div class="row pd-bt">
				<div class="col-md-6 col-12">
					<img src="<?php echo $tmpVariable['data']['Course']['images'][0]?>" class="img-fluid" style="width: 100%; border-radius: 10px;box-shadow: 1px 1px 1px 1px #d2cece; ">
				</div>
				<div class="col-md-6 col-12" style="color: #29662b">
					<div class="content">
						<h1 style="font-size: 24px;">HÀNH TRÌNH ĐIỀU TRỊ</h1>
						<?php echo $tmpVariable['data']['Course']['info']?>
					</div>	
				</div>
			</div>
				<p class="h1-course">HÌNH ẢNH</p>
			<div class="row pd-bt">
				<?php 
					if (!empty($tmpVariable['data']['Course']['images'])) {
						foreach ($tmpVariable['data']['Course']['images'] as $key => $value) {?>
							<div class="col-sm-6">
								<div class="baguetteBoxOne demo gallery">
									<div class="comparison-slider">
										<a href="<?php echo $value?>">
											<img src="<?php echo $value?>" alt="" class="img-fluid">
										</a>
										
									</div>
								</div>
							</div>
				<?php }
					}
				?>
				
			</div>
		</div>
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