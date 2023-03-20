<?php getHeader()?>
	<!-- <?php debug($tmpVariable);?> -->
	 <div class="page-breadcrumb" style="padding: 50px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <!--  <h1 class="rs clsH3Blog"><?php echo str_replace('+', ' ', $_GET['key']); ?></h1> -->
                    <ul class="list-inline rs">
                        <li class="list-inline-item" style="font-size: 22px; font-weight: 500;">KẾT QUẢ TÌM KIẾM</li>
                    </ul>
                </div>
            </div>
           <div class="row">
			<?php 
				if(!empty($tmpVariable['listData'])){
					foreach ($tmpVariable['listData'] as $key => $value) { ?>
						<div class="col-sm-3">
							<div class="product-item">
								<div class="productImages">
									<a href="/product/<?php echo $value['Product']['slug']; ?>.html"><img src="<?php echo $value['Product']['images'][0]?>" alt="" class="img-fluid"></a>
									<?php 
										foreach ($value['Product']['properties'] as $key => $value2) {
											foreach ($value2 as $key => $gg) {
												if($gg === 1){
													echo'
													<div class="propeties">
														<p>HÀNG TẶNG</p>
													</div>
													';
												}
												else{
													echo'
													<div style="display: none;" class="propeties">
														<p>HÀNG TẶNG</p>
													</div>
													';
												}
											}
											
										}
									?>
								</div>
								<div class="productInfo">
									<div class="productName">
										<p><a href="/product/<?php echo $value['Product']['slug']; ?>.html" class=""><?php echo $value['Product']['title']?></a></p>
									</div>
									<div class="productPrice"><?php echo number_format($value['Product']['price']) ?>₫</div>
								</div>
							</div>
						</div>
			<?php	}
				}
			?>
			</div>
			
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
				<div class="col-sm-12 wow fadeInUp  " data-wow-delay=".25s">
					<div class="direc " >
						<ul class="pagination">
							<li class="disabled"><a href="<?php echo $tmpVariable['urlPage'] . $tmpVariable['back'] ?>" class="prev">&laquo;</a></li>
							<?php for ($i = $startPage; $i <= $endPage; $i++) { ?>
								<li class="pageNumber <?php
								if ($i == $tmpVariable['page']) {
									echo 'active';
								}
								?>"><a href="<?php echo $tmpVariable['urlPage'] . $i; ?>" class="css-phantrang"><?php echo $i; ?></a></li>
							<?php }
							?>

							<li><a href="<?php echo $tmpVariable['urlPage'] . $tmpVariable['next'] ?>" class="next">&raquo;</a></li>
						</ul>
					</div>
				</div>
			<?php }?> 
		
        </div>
    </div>
<?php getFooter()?>