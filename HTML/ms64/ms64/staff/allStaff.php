 <!-- <?php debug($tmpVariable);?>  -->
<?php getHeader()?>
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
							if(!empty($tmpVariable['listData'])){
								foreach ($tmpVariable['listData'] as  $value) {
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
<?php getFooter()?>