<?php getHeader()?>
	<div class="container pd-tb" >
		<h1 class="css-h1News text-center h1-news" ><?php echo $infoNotice['Notice']['title']; ?></h1>
		<div class="content">
			<?php echo $infoNotice['Notice']['content']; ?>
		</div>
	</div>
<?php getFooter()?>