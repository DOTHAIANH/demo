<?php getHeader();?>
	<link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/style_ms1.css">
	<section class="cart pb_50 min600 viewNew">
		<div class="title_bg text-center">
			<h3 class="rs"><?php echo $infoNotice['Notice']['title']; ?></h3>
			<ul class="list-inline rs">
				<li class="list-inline-item"><a href="/" style="font-weight: 600;">Trang chủ</a></li>
				<li class="list-inline-item" ><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<!-- <li class="list-inline-item"><a href="/">Tin tức</a></li> -->
				<!-- <li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li> -->
				<li class="list-inline-item" style="font-weight: 600;"><?php echo $infoNotice['Notice']['title']; ?></li>
			</ul>
		</div>
		<div class="container">
			<div class="cart_main mt_20">
				<?php echo $infoNotice['Notice']['content']; ?>
			</div>
		</div>
	</section>
<?php getFooter(); ?>