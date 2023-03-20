<?php getHeader();?>
	<link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/style_ms1.css">
	<section class="cart pb_50 min600">
		<div class="title_bg text-center">
			<h3 class="rs"><?php echo $category['name'];?></h3>
			<ul class="list-inline rs">
				<li class="list-inline-item"><a href="/">Trang chủ</a></li>
				<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="list-inline-item"><?php echo $category['name'];?></li>
			</ul>
		</div>
		<div class="container">
			<div class="cart_main mt_20">
				<?php
					if(!empty($listNotices)){
						echo '	<div class="box7_main list-tin">
									<div class="row">';
									foreach($listNotices as $notice){
										$urlNotice = getUrlNotice($notice['Notice']['id']);
										echo '<div class="col-sm-4 wow fadeInUp "  data-wow-duration="1.5s">
												<div class="new_item">
													<a href="'.$urlNotice.'" class="new_img test-shine">
														<img src="'.$notice['Notice']['image'].'" class="img-responsive thumbImg" alt="">
													</a>
													<div class="new_date">
														<i class="fa fa-calendar" aria-hidden="true"></i> '.date('d/m/Y',$notice['Notice']['time']).'
													</div>
													<div class="new_text">
														<a href="'.$urlNotice.'" class="new_name">'.$notice['Notice']['title'].'</a>
														<p class="rs"> '.$notice['Notice']['introductory'].' ...</p>
													</div>
												</div>
											</div>';
									}
						echo '		</div>
								</div>';
					}
				?>
				<?php
				if ($page > 5) {
					$startPage = $page - 5;
				} else {
					$startPage = 1;
				}

				if ($totalPage > $page + 5) {
					$endPage = $page + 5;
				} else {
					$endPage = $totalPage;
				}

				if($totalPage>1){
				?>
				<div class="col-sm-12">
					<div class="direc">
						<ul class="pagination">
							<li class="disabled"><a href="<?php $urlPage . $back ?>">&laquo;</a></li>
							<?php for ($i = $startPage; $i <= $endPage; $i++) { ?>
								<li class="<?php
								if ($i == $page) {
									echo 'active';
								}
								?>"><a href="<?php echo $urlPage . $i; ?>"><?php echo $i; ?></a></li>
							<?php } ?>

							<li><a href="<?php $urlPage . $next ?>">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/slick.min.js"></script> 
<?php getFooter(); ?>