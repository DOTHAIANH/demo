<?php getHeader()?>



<section id="product" class="subpages">
		<div class="container">
			 <div class="row">
				<div class="col-12">
					<div class="sectionTitle text-center">
						<h1>Sản phẩm của Duyenthi</h1>
					</div>
				</div>
				<!-- <div class="col-12 mobileView d-block d-sm-none">					
					<form class="" action="" method="POST">
						<div class="d-flex justify-content-center">
							<div class="form-group">
								<select class="form-control" name="" id="">
									<option value="">Danh mục sản phẩm</option>
									<option value="">Danh mục sản phẩm 01</option>
									<option value="">Danh mục sản phẩm 02</option>
									<option value="">Danh mục sản phẩm 03</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control" name="" id="">
									<option value="">Giá sản phẩm</option>
									<option value="">Dưới 500.000đ</option>
									<option value="">Từ 500.000đ đến 2tr</option>
									<option value="">Trên 2tr</option>
								</select>
							</div>
							<button type="submit" class="btnFilter">Lọc</button>
						</div>
					</form>
				</div> -->
			</div>

			<?php 
				if(!empty($tmpVariable['listProduct'])){
					foreach ($tmpVariable['listProduct'] as $key => $value) {?>
						<div class="row listProductItem">
							<div class="col-12">
								<div class="align-items-center">
									<p class="titleProductList mr-auto"><?php echo $tmpVariable['listCategoryName'][$key];?></p>
								</div>
								<div class="moreProduct">
									<a href="/cat/<?php echo $tmpVariable['listCategorySlug'][$key];?>.html">Xem thêm <span class="iconify" data-icon="grommet-icons:form-next-link"></span></a>
								</div>
								<div id="listProducSlider-01" class="owl-carousel">
									<?php 
										foreach ($value as $key => $item) {?>
											<div class="product-item">
												<div class="productImages">
													<a href="/product/<?php echo $item['Product']['slug']; ?>.html"><img src="<?php echo $item['Product']['images'][0]; ?>" alt="" class="img-fluid"></a>
													<?php 
														foreach ($item['Product']['properties'] as $key => $value) {
															foreach ($value as $key => $gg) {
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
														<p><a href="/product/<?php echo $item['Product']['slug']; ?>.html" class=""><?php echo $item['Product']['title']; ?></a></p>
													</div>
													<div class="productPrice"><?php echo number_format($item['Product']['price']) ; ?></div>
												</div>
											</div>
									<?php	}
									?>
								</div>
							</div>
						</div>
						
				 <?php }
				}
			?> 
			<!-- <div class="row listProductItem">
				<div class="col-12">
					<div class="d-flex align-items-center">
						<h3 class="titleProductList mr-auto">Sản phẩm chuyên sâu</h3>
						<div class="moreProduct">
							<a href="listProduct.html">Xem thêm <span class="iconify" data-icon="grommet-icons:form-next-link"></span></a>
						</div>
					</div>
					<div id="listProducSlider-01" class="owl-carousel">
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product1.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">01 Plus 10ml</a></h3>
								</div>
								<div class="productPrice">309,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product2.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">02 Plus 100ml</a></h3>
								</div>
								<div class="productPrice">1,119,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product3.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">03 Plus 45ml</a></h3>
								</div>
								<div class="productPrice">500,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product1.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">04 Serum tái tạo da</a></h3>
								</div>
								<div class="productPrice">800,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product2.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">05 Vua trị mụn</a></h3>
								</div>
								<div class="productPrice">2,700,000₫</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row listProductItem">
				<div class="col-12">
					<div class="d-flex align-items-center">
						<h3 class="titleProductList mr-auto">Sản phẩm chăm sóc da nám - tàn nhang</h3>
						<div class="moreProduct">
							<a href="listProduct.html">Xem thêm <span class="iconify" data-icon="grommet-icons:form-next-link"></span></a>
						</div>
					</div>
					<div id="listProducSlider-02" class="owl-carousel">
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product1.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">01 Plus 10ml</a></h3>
								</div>
								<div class="productPrice">309,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product2.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">02 Plus 100ml</a></h3>
								</div>
								<div class="productPrice">1,119,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product3.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">03 Plus 45ml</a></h3>
								</div>
								<div class="productPrice">500,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product1.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">04 Serum tái tạo da</a></h3>
								</div>
								<div class="productPrice">800,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product2.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">05 Vua trị mụn</a></h3>
								</div>
								<div class="productPrice">2,700,000₫</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row listProductItem">
				<div class="col-12">
					<div class="d-flex align-items-center">
						<h3 class="titleProductList mr-auto">Sản phẩm chăm sóc da mụn</h3>
						<div class="moreProduct">
							<a href="listProduct.html">Xem thêm <span class="iconify" data-icon="grommet-icons:form-next-link"></span></a>
						</div>
					</div>
					<div id="listProducSlider-03" class="owl-carousel">
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product1.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">01 Plus 10ml</a></h3>
								</div>
								<div class="productPrice">309,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product2.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">02 Plus 100ml</a></h3>
								</div>
								<div class="productPrice">1,119,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product3.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">03 Plus 45ml</a></h3>
								</div>
								<div class="productPrice">500,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product1.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">04 Serum tái tạo da</a></h3>
								</div>
								<div class="productPrice">800,000₫</div>
							</div>
						</div>
						<div class="product-item">
							<div class="productImages">
								<a href="productDetail.html"><img src="<?php echo $urlThemeActive ?>images/product2.jpg" alt="" class="img-fluid"></a>
							</div>
							<div class="productInfo">
								<div class="productName">
									<h3><a href="productDetail.html" class="">05 Vua trị mụn</a></h3>
								</div>
								<div class="productPrice">2,700,000₫</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</section>


<?php getFooter()?>