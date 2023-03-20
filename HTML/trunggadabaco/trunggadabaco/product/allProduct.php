<?php getHeader();?>

	<section class="cart pb_50 min600">
		<div class="title_bg text-center">
			<h3 class="rs">Sản phẩm</h3>
			<ul class="list-inline rs">
				<li class="list-inline-item"><a href="/">Trang chủ</a></li>
				<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="list-inline-item">Sản phẩm</li>
			</ul>
		</div>
		<div class="container">
			<div class="cart_main mt_20">
				<?php
					if(!empty($tmpVariable['listData'])){
						echo '	<div class="list_sp">
									<div class="row">';
										foreach($tmpVariable['listData'] as $product){
											if ($product['Product']['price'] > 0) {
												$price= number_format($product['Product']['price']).'đ';
											} else {
												$price= "Liên hệ";
											}
											echo '<div class="col-sm-6 col-md-3">
													<div class="sp_item">
														<div class="sp_img">
															<img src="'.@$product['Product']['images'][0].'" class="img-responsive" alt="">
															<a href="'.$product['Product']['urlProductDetail'].'" class="pop_xn"></a>
														</div>
														<div class="sp_text">
															<a href="'.$product['Product']['urlProductDetail'].'" class="sp_text_name">'.@$product['Product']['title'].'</a>
															<div class="sp_text_price">'.$price.'</div>
														</div>
													</div>
												</div>';
										}
										
						echo '		</div>
								</div>';
					}
				?>
				<?php
				if ($tmpVariable['page'] > 5) {
					$startPage = $tmpVariable['page'] - 5;
				} else {
					$startPage = 1;
				}

				if ($tmpVariable['totalPage'] > $tmpVariable['page'] + 5) {
					$endPage = $tmpVariable['page'] + 5;
				} else {
					$endPage = $tmpVariable['totalPage'];
				}

				if($tmpVariable['totalPage']>1){
				?>
				<div class="col-sm-12">
					<div class="direc">
						<ul class="pagination">
							<li class="disabled"><a href="<?php $tmpVariable['urlPage'] . $tmpVariable['back'] ?>">&laquo;</a></li>
							<?php for ($i = $startPage; $i <= $endPage; $i++) { ?>
								<li class="<?php
								if ($i == $tmpVariable['page']) {
									echo 'active';
								}
								?>"><a href="<?php echo $tmpVariable['urlPage'] . $i; ?>"><?php echo $i; ?></a></li>
							<?php }
							?>

							<li><a href="<?php $tmpVariable['urlPage'] . $tmpVariable['next'] ?>">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>
<?php getFooter(); ?>