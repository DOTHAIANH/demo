<?php getHeader();?>

	<section class="cart pb_50 min600 viewNew">
		<div class="title_bg text-center">
			<h3 class="rs"><?php echo $infoNotice['Notice']['title']; ?></h3>
			<ul class="list-inline rs">
				<li class="list-inline-item"><a href="/">Trang chủ</a></li>
				<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="list-inline-item"><a href="/">Tin tức</a></li>
				<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="list-inline-item"><?php echo $infoNotice['Notice']['title']; ?></li>
			</ul>
		</div>
		<div class="container">
			<div class="cart_main mt_20">
				<?php echo $infoNotice['Notice']['content']; ?>
			</div>
		</div>
	</section>
<?php getFooter(); ?>