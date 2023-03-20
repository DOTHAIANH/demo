<?php getHeader();?>
	<link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/style_ms1.css">
	<section class="cart pb_50 min600">
		<div class="page-breadcrumb">
	        <div class="container">
	            <div class="row">
	                <div class="col-12">
	                	<ul class="list-inline rs">
							<li class="list-inline-item"><a href="/" style="color: #29662b ">TRANG CHỦ / </a></li>
							<!-- <li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li> -->
							<li class="list-inline-item" style="text-transform: uppercase;">Danh sách album / </li>
							<li class="list-inline-item" style="text-transform: uppercase;"><?php echo $infoAlbum['Album']['title'];?></li>
						</ul>
	                	<h1 class="rs clsH3Blog h1-news"><?php echo $infoAlbum['Album']['title'];?></h1>
	                </div>
	                
	            </div>
	        </div>
	    </div>
		<div class="container">
			<div class="cart_main mt_20">
				<?php
					//var_dump($listVideos);
					if(!empty($infoAlbum['Album']['img'])){ ?>
						<div class="box7_main">
							<div class="row">
							<?php	foreach($infoAlbum['Album']['img'] as $notice){ ?>
								<div class="col-sm-3 col-md-2 text-center" style="padding: 5px;">
									<div class="new_item">
										<a href="<?php echo @$notice['link'];?>" target="_blank" class="new_img test-shine">
											<img src="<?php echo $notice['src'];?>" class="img-responsive" alt="">
										</a>
									</div>
								</div>
							<?php } ?>
							</div>
						</div>
				<?php }?>
				
			</div>
		</div>
	</section>
<?php getFooter(); ?>