<?php getHeader();?>
<link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/style_ms1.css">
<style type="text/css">
.gallery a {
    width: 240px;
    height: 150px;
    display: inline-block;
    overflow: hidden;
    margin: 4px 6px;
    box-shadow: 0 0 4px -1px #000;
}
.gallery img{
	width: 240px;
    height: 150px !important;
}
</style>
<link rel='stylesheet' href='<?php echo $urlThemeActive; ?>css/baguetteBox.css'>
<script src='<?php echo $urlThemeActive; ?>js/baguetteBox.js'></script>


<section class="cart pb_50 min600 viewNew">
	<div class="title_bg text-center">
		<h3 class="rs"><?php echo $infoAlbum['Album']['title'];?></h3>
		<ul class="list-inline rs">
			<li class="list-inline-item"><a href="/">Trang chủ</a></li>
			<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
			<li class="list-inline-item"><a href="/">Hình ảnh</a></li>
			<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
			<li class="list-inline-item"><?php echo $infoAlbum['Album']['title'];?></li>
		</ul>
	</div>
	<div class="container">
		<div class="cart_main mt_20">
			<div class="baguetteBoxOne gallery">
				<?php
				$dem =0;
				if (isset($infoAlbum['Album']['img'])) {
					foreach ($infoAlbum['Album']['img'] as $img) {
						$dem ++;
						?>
						<a href="<?php echo $img['src']; ?>" ><img src="<?php echo $img['src']; ?>" alt=""></a>
					<?php }
				}?>
			</div>
		</div>
	</div>
</section>

<script>
	baguetteBox.run('.baguetteBoxOne', {

	});
	
</script>

<?php getFooter(); ?>