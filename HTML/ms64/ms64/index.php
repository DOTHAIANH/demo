
<?php getHeader()?>
<?php global $themeSetting?>
<!-- <?php debug($tmpVariable);?> -->
	<section id="slider" style="position: relative;">
		<div class="iconmay" >
			<img id="img1" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img2" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img3" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img4" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img5" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img6" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img7" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img8" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img9" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img10" src="<?php echo $urlThemeActive; ?>images/anc.png">
			<img id="img11" src="<?php echo $urlThemeActive; ?>images/anc.png">
		</div>
		<div id="bannerSlider" class="owl-carousel ">
				<?php
                        if(!empty($tmpVariable['album']['Album']['img'])){
                            foreach ($tmpVariable['album']['Album']['img'] as $img) { ?>
                              
                                <div class="item tem" >
									<img src="<?php echo $img['src']?>" class="img-fluid" alt="">
									
								</div>
								
								
					<?php }
					}
				?>
		</div>
	</section>
	<section id="aboutUs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sectionTitle text-center">
						<p><?php echo $themeSetting['Option']['value']['titleAbout'] ?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 aboutUs">
					<div class="infoAbout">
						<?php echo $themeSetting['Option']['value']['contentAbout'] ?>
					</div>
					<div id="aboutUsSlider" class="owl-carousel owl-theme">
						<?php
                        if(!empty($tmpVariable['album2']['Album']['img'])){
                            foreach ($tmpVariable['album2']['Album']['img'] as $img) {
                                echo'
								<img src="'.$img['src'].'" class="img-fluid" alt="">
								';
							}
					}
				?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="hotProduct">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sectionTitle text-center">
						<p>Sản phẩm nổi bật</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- <?php debug($tmpVariable['listNewProduct']);?>  -->
					<div id="productSlider" class="owl-carousel">
						<?php 
							 $product = $tmpVariable['listNewProduct'] ;
							if(!empty($product)){
								foreach ($product as  $item) {
									$url = '/product/'.$item['Product']['slug'].'.html';
									echo'
										<div class="product-item">
											<div class="productImages">
												<a href="'.$url.'"><img src="'.$item['Product']['images'][0].'" alt="" class="img-fluid"></a>';
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
									echo'	</div>
											<div class="productInfo">
												<div class="productName">
													<p><a href="'.$url.'" class="">'.$item['Product']['title'].'</a></p>
												</div>
											</div>
										</div>
									';
								}
							}
						?>
					</div>

					<div class="viewMore text-center">
						<a href="/allCatergory">Xem thêm <span class="iconify" data-icon="ant-design:double-right-outlined"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="listManager">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sectionTitle text-center">
						<p>Giám đốc kinh doanh của Duyenthi</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div id="listManagerSlider" class="owl-carousel">
						<?php 
							if(!empty($tmpVariable['listStaff'])){
								foreach ($tmpVariable['listStaff'] as  $value) {
									$url = 'detailStaff/'.$value['Staff']['staff']['slug']. '.html';
									echo '
										<div class="item">
											<a href="'.$url.'">
												<div class="managerItem">
													<div class="managerImage">
														<img src="'.$value['Staff']['staff']['images'][0].'" class="img-fluid" alt="">
													</div>
													<div class="managerInfo">
														<div class="managerPosition">'.$value['Staff']['staff']['positons'].'</div>
														<div class="managerName">'.$value['Staff']['staff']['name'].'</div>
													</div>
												</div>
											</a>
										</div>
									';
								}
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="whyChoose">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sectionTitle text-center">
						<p>Tại sao bạn nên chọn Duyenthi</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-6" style="margin-top: 30px;">
					<div class="whyChoose-item">
							<div class="whyChooseIcon">
								<img src="<?php echo $themeSetting['Option']['value']['imgReason1'] ?>" alt="" class="img-fluid">
							</div>
							<div class="whyChooseInfo">
								<div class="whyChooseReason"><?php echo $themeSetting['Option']['value']['titleReason1'] ?></div>
								<div class="whyChooseDes"><?php echo $themeSetting['Option']['value']['contentReason1'] ?></div>
							</div>
					</div>
				</div>
				<div class="col-md-3 col-6" style="margin-top: 30px;">
					<div class="whyChoose-item">
							<div class="whyChooseIcon">
								<img src="<?php echo $themeSetting['Option']['value']['imgReason2'] ?>" alt="" class="img-fluid">
							</div>
							<div class="whyChooseInfo">
								<div class="whyChooseReason"><?php echo $themeSetting['Option']['value']['titleReason2'] ?></div>
								<div class="whyChooseDes"><?php echo $themeSetting['Option']['value']['contentReason2'] ?></div>
							</div>
					</div>
				</div>
				<div class="col-md-3 col-6" style="margin-top: 30px;">
					<div class="whyChoose-item">
							<div class="whyChooseIcon">
								<img src="<?php echo $themeSetting['Option']['value']['imgReason3'] ?>" alt="" class="img-fluid">
							</div>
							<div class="whyChooseInfo">
								<div class="whyChooseReason"><?php echo $themeSetting['Option']['value']['titleReason3'] ?></div>
								<div class="whyChooseDes"><?php echo $themeSetting['Option']['value']['contentReason3'] ?></div>
							</div>
					</div>
				</div>
				<div class="col-md-3 col-6" style="margin-top: 30px;">
					<div class="whyChoose-item">
							<div class="whyChooseIcon">
								<img src="<?php echo $themeSetting['Option']['value']['imgReason4'] ?>" alt="" class="img-fluid">
							</div>
							<div class="whyChooseInfo">
								<div class="whyChooseReason"><?php echo $themeSetting['Option']['value']['titleReason4'] ?></div>
								<div class="whyChooseDes"><?php echo $themeSetting['Option']['value']['contentReason4'] ?></div>
							</div>
					</div>
				</div>
				<!-- <div class="col-12">
					<div id="whyChooseSlider" class="owl-carousel">
						<div class="whyChoose-item">
							<div class="whyChooseIcon">
								<img src="<?php echo $themeSetting['Option']['value']['imgReason1'] ?>" alt="" class="img-fluid">
							</div>
							<div class="whyChooseInfo">
								<div class="whyChooseReason"><?php echo $themeSetting['Option']['value']['titleReason1'] ?></div>
								<div class="whyChooseDes"><?php echo $themeSetting['Option']['value']['contentReason1'] ?></div>
							</div>
						</div>
						<div class="whyChoose-item">
							<div class="whyChooseIcon">
								<img src="<?php echo $themeSetting['Option']['value']['imgReason2'] ?>" alt="" class="img-fluid">
							</div>
							<div class="whyChooseInfo">
								<div class="whyChooseReason"><?php echo $themeSetting['Option']['value']['titleReason2'] ?></div>
								<div class="whyChooseDes"><?php echo $themeSetting['Option']['value']['contentReason2'] ?></div>
							</div>
						</div>
						<div class="whyChoose-item">
							<div class="whyChooseIcon">
								<img src="<?php echo $themeSetting['Option']['value']['imgReason3'] ?>" alt="" class="img-fluid">
							</div>
							<div class="whyChooseInfo">
								<div class="whyChooseReason"><?php echo $themeSetting['Option']['value']['titleReason3'] ?></div>
								<div class="whyChooseDes"><?php echo $themeSetting['Option']['value']['contentReason3'] ?></div>
							</div>
						</div>
						<div class="whyChoose-item">
							<div class="whyChooseIcon">
								<img src="<?php echo $themeSetting['Option']['value']['imgReason4'] ?>" alt="" class="img-fluid">
							</div>
							<div class="whyChooseInfo">
								<div class="whyChooseReason"><?php echo $themeSetting['Option']['value']['titleReason4'] ?></div>
								<div class="whyChooseDes"><?php echo $themeSetting['Option']['value']['contentReason4'] ?></div>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>
	<section class="videos sectionTitle">
		<div class="container">
			<p class="p-video text-center">VIDEO</p>
			<div class="row">
				<div class="col-md-4 col-12">
					<?php echo $themeSetting['Option']['value']['video1'] ?>
				</div>
				<div class="col-md-4 col-12">
					<?php echo $themeSetting['Option']['value']['video2'] ?>
				</div>	
				<div class="col-md-4 col-12">
					<?php echo $themeSetting['Option']['value']['video3'] ?>
				</div>			
			</div>
		</div>
	</section>
	
<?php getFooter()?>
	