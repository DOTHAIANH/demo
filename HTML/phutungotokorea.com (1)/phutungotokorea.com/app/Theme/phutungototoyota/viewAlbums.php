<?php getHeader();?>
<section class="body-section blog">
	<h2>Thư viện ảnh</h2>
	<div class="row">
		<?php foreach($infoAlbum['Album']['img'] as $img){ ?>
		<div class="an-article col-md-4 col-sm-6" style="height:190px;">
			<div class="row">
				<div class="media-container col-xs-12">
					<div class="inner">
						<img src="<?php echo $img['src'];?>" class="img-responsive" alt="">
						<div class="hover-overlay color"></div><!-- / hover-overlay -->
						<a data-lightbox-gallery="gallery1" href="<?php echo $img['src'];?>" class="nivo-lightbox icon"><img class="img-responsive" src="<?php echo $urlThemeActive;?>images/link_64px.png" alt=""></a>
					</div>
				</div><!-- / media-container -->
				<div class="content col-xs-12">
					<h3><?php echo $img['alt'];?></h3>
				</div><!-- / content -->
			</div><!-- / row -->
		</div><!-- an-article -->
		<?php }?>
	</div><!-- / row -->
</section><!-- / products -->
<?php getSidebar();?>
<?php getFooter();?>