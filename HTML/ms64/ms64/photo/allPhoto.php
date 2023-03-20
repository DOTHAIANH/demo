
<?php getHeader()?>

	<section id="product" class="subpages">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sectionTitle text-center">
						<h1 >Ảnh sử dụng sản phẩm của Duyenthi</h1>
					</div>
				</div>
			</div>
			<?php
				if(!empty($tmpVariable['listData'])){
					foreach ($tmpVariable['listData'] as  $value) { ?>
									<div class="row listProductItem">
									<div class="col-12">
										<div class="d-flex align-items-center">
											<p class="titleProductList mr-auto"><?php echo $value['photo']['Photo']['name']?></p>
											<div class="moreProduct">
												<a href="/detailPhoto/<?php echo $value['photo']['Photo']['slug']?>.html">Xem thêm <span class="iconify" data-icon="grommet-icons:form-next-link"></span></a>
											</div>
										</div>
									</div>
							<?php 
								if(!empty($value['photo']['Photo']['images'])){?>
									<div class="col-sm-4">
										<div class="comparison-slider-wrapper">
											<div class="comparison-slider">
												<!-- <div class="overlay"><strong>Sau</strong></div> -->

												<img src="<?php echo @$value['photo']['Photo']['images'][0]?>" alt="">
												<div class="resize">
													<!-- <div class="overlay"><strong>Trước</strong></div> -->
													<!-- <img src="<?php echo $value['photo']['Photo']['images'][0]?>" alt=""> -->
												</div>
												<div class="divider"></div>
											</div>
										</div>
									</div>
							<div class="col-sm-4">
								<div class="comparison-slider-wrapper">
									<div class="comparison-slider">
										<!-- <div class="overlay"><strong>Sau</strong></div> -->
										<img src="<?php echo @$value['photo']['Photo']['images'][1]?>" alt="">
										<div class="resize">
											<!-- <div class="overlay"><strong>Trước</strong></div> -->
										</div>
										<div class="divider"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="comparison-slider-wrapper">
									<div class="comparison-slider">
										<!-- <div class="overlay"><strong>Sau</strong></div> -->
										<img src="<?php echo @$value['photo']['Photo']['images'][2]?>" alt="">
										<div class="resize">
											<!-- <div class="overlay"><strong>Trước</strong></div> -->
											<!-- <img src="images/compair6.jpg" alt=""> -->
										</div>
										<div class="divider"></div>
									</div>
								</div>
							</div>

						<?php	}
							?>
						</div>	
				<?php	}
				}
			?>

		</section>

		<script type="text/javascript" src="js/compairimage.js"></script>

<?php getFooter()?>