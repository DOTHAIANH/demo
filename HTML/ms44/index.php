<?php
    global $ThemeSettings;
?>
<?php getHeader()?>

<main>
	<section class="banner wow fadeInLeft  "  data-wow-duration="1s">
		<div class="slide-banner">
			<?php
                        if(!empty($tmpVariable['album']['Album']['img'])){
                            foreach ($tmpVariable['album']['Album']['img'] as $img) {
                                echo'
                                     <div class="item">
                                             <a href=""><img src="'.$img['src'].'" class="img-fluid w-100"></a>
                                    </div>
                                ';
                            }
                        }
              ?>
			<!-- <div class="item"><a href=""><img src="<?php echo $urlThemeActive; ?>images/banner.png" class="img-fluid w-100" alt=""></a></div>
			<div class="item"><a href=""><img src="<?php echo $urlThemeActive; ?>images/banner.png" class="img-fluid w-100" alt=""></a></div>
			<div class="item"><a href=""><img src="<?php echo $urlThemeActive; ?>images/banner.png" class="img-fluid w-100" alt=""></a></div> -->
		</div>
	</section>
	<div class="banner">	
	</div>

	<section class="box-project ">
		<div class="container">
			<div class="title text-center">
				<h2>DỰ ÁN</h2>
			</div>
			<div class="list-proj ">
				<div class="title-pr">
					<h3><span><?php echo $ThemeSettings['Option']['value']['namduan1'] ;?></span></h3>
				</div>
				<div class="multiple-items row" >             
						<?php
							$projects = $tmpVariable['listProjectCateogy'];
							 //debug($projects);
							if(!empty($projects)){
								foreach ($projects as  $value) {
									foreach ($value as $item) {
										$url='/project/'.$item['Project']['slug'].'.html';
										// debug($item['Project']['images']);
										echo'
										<div class="item col-md-6 col-12 wow fadeInUp "  data-wow-duration="1.5s">
												<a href="'.$url.'">
													<div class="item-pr">
														<div class="avarta">
															<img src="'.$item['Project']['images'][0].'" class="img-fluid w-100" alt="">
														</div>
														<div class="info text-center">
															<h3><a href="'.$url.'">'.$item['Project']['name'].'</a></h3>
														</div>
													</div>
												</a>
										</div>

									';
									}
								}
							}			
						?>
					
				</div>
					<div class="col-md-12">
						<div class="btn-cong text-center"><a href="<?php echo $ThemeSettings['Option']['value']['linkxt1'] ;?>">XEM THÊM</a></div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="list-proj container">
				<div class="title-pr">
					<h3><span><?php echo $ThemeSettings['Option']['value']['namduan2'] ;?></span></h3>
				</div>
				<div class="multiple-items row">  
						<?php
							$projects = $tmpVariable['listProjectCateogy2'];
							 //debug($projects);
							if(!empty($projects)){
								foreach ($projects as  $value) {
									foreach ($value as $item) {
										$url='/project/'.$item['Project']['slug'].'.html';
										echo'
										<div class="item col-md-6 col-12 wow fadeInLeft  "  data-wow-duration="1.5s">
										
											<div class="item-pr">
												<div class="avarta">
													<img src="'.$item['Project']['images'][0].'" class="img-fluid w-100" alt="">
												</div>
												<a href="'.$url.'">
													<div class="info text-center">
														<h3><a href="'.$url.'">'.$item['Project']['name'].'</a></h3>
													</div>
												</a>
											</div>
										
										</div>

									';
									}
								}
							}			
						?>            
				</div>
					<div class="col-md-12">
						<div class="btn-cong text-center"><a href="<?php echo $ThemeSettings['Option']['value']['linkxt2'] ;?>">XEM THÊM</a></div>
					</div>
			</div>
	</section>
</main>

<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/slick.min.js"></script> 
<?php getFooter();?>     
      
      