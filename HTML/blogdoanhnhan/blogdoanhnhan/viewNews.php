<?php getHeader();global $themeSettings; ?>
	<section class="intro_main">
		<div class="container">
			<img src="<?php echo @$themeSettings['Option']['value']['banner']; ?>" width="100%">
			<div class="alert alert-info" role="alert" style="background-color: <?php echo @$themeSettings['Option']['value']['color']; ?>">
				<a href="/">Trang chủ</a> /  <a href="<?php echo $infoNotice['Notice']['slug']; ?>.html"><?php echo $infoNotice['Notice']['title']; ?></a>
			</div>
			<div class="row">
				<div class="col-md-8 col-12">
					<h1 style="color: #07357A; font-weight: bold;font-size: 25px"><?php echo $infoNotice['Notice']['title']; ?></h1>
					<p><?php echo date('d/m/Y', $infoNotice['Notice']['time']);?></p>
					
					<hr>
					<div class="text-center" style="margin-bottom: 15px">
						
					</div>
					<div class="content_viewNews" style="width: 100%">
						<?php echo $infoNotice['Notice']['content']; ?>
					</div>
					<hr>
					
				</div>
				<?php getSidebar();?>
			</div>
		</div>
	</section>
<?php getFooter(); ?>