<?php getHeader();?>

	<section class="cart pb_50 min600">
		<div class="title_bg text-center">
			<h3 class="rs">Hình ảnh</h3>
			<ul class="list-inline rs">
				<li class="list-inline-item"><a href="/">Trang chủ</a></li>
				<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="list-inline-item">Hình ảnh</li>
			</ul>
		</div>
		<div class="container">
			<div class="cart_main mt_20">
				<?php
					if(!empty($listAlbums)){
						echo '	<div class="box7_main">
									<div class="row">';
									foreach($listAlbums as $notice){
										$urlNotice = '/'. $notice['Album']['slug'].'.html';
										echo '<div class="col-sm-4">
												<div class="new_item">
													<a href="'.$urlNotice.'" class="new_img test-shine">
														<img src="'.$notice['Album']['img'][0]['src'].'" class="img-responsive" alt="">
													</a>
													
													<div class="new_text">
														<a href="'.$urlNotice.'" class="new_name">'.$notice['Album']['title'].'</a>
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
							<?php }
							?>

							<li><a href="<?php $urlPage . $next ?>">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>
<?php getFooter(); ?>