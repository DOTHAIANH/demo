</div>

<aside id="sidebar" class="col-md-3 col-sm-4">
	<div class="sidebar-inner">

		<?php
			if( function_exists('getListNameManufacturer') ){ 
				$listData= getListNameManufacturer();

				if(isset($listData['Option']['value']['category']) && count($listData['Option']['value']['category'])>0){
					foreach($listData['Option']['value']['category'] as $cat){
						echo '<div class="sidebox categories col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".4s">
								<h3>Phụ tùng ô tô '.$cat['name'].'</h3>';

								if(isset($cat['sub']) && count($cat['sub'])>0){
									echo '<ul class="custom-collapse-list">';

									foreach($cat['sub'] as $sub){
										echo '<li class="level-1">';
										if(isset($sub['sub']) && count($sub['sub'])>0){
											echo '<span class="collapse-toggle"></span>
												  <a href="'.$sub['urlManufacturer'].'"> '.$sub['name'].'</a>';
											echo '    <ul class="level-2"><div class="inner">';
												foreach($sub['sub'] as $sub2){
													echo '<a href="'.$sub2['urlManufacturer'].'"> '.$sub2['name'].'</a>';
												}	
											echo '</div></ul>';
										}else{
											echo '<a href="'.$sub['urlManufacturer'].'"> '.$sub['name'].'</a>';
										}
										echo '</li>';
									}

									echo '</ul>';
								}

						echo '</div>';
					}
				}
			}
		?>

		
		<div class="sidebox categories col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".4s">
			<h3>Phụ tùng ô tô</h3>
			<?php 
				if( function_exists('getListCategory') ){
					$listData= getListCategory();

					echo '<ul class="custom-collapse-list">';
					if(isset($listData['Option']['value']['category']) && count($listData['Option']['value']['category'])>0){
						foreach($listData['Option']['value']['category'] as $cat)
						{
							echo '<li class="level-1">';
							
							if(isset($cat['sub']) && count($cat['sub'])>0)
							{
								echo '<span class="collapse-toggle"></span>
									  <a href="'.$cat['url'].'"> '.$cat['name'].'</a>';
								echo '<ul class="level-2"><div class="inner">';
								foreach($cat['sub'] as $sub)
								{
									echo '<li><a href="'.$sub['url'].'"> '.$sub['name'].'</a></li>';
								}
								echo '</div></ul>';
							}
							else
							{
								echo '<a href="'.$cat['url'].'"> '.$cat['name'].'</a>';
							}
							
							echo '</li>';
						}
					}
					echo '</ul>';
				}

			?>
		</div><!-- / categories -->
		
		<div class="sidebox online-support col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".4s">
			<h3>Hỗ trợ trực tuyến</h3>
			<?php 
				if( function_exists('getListSupport') ){
					$listSupport= getListSupport();

					if(count($listSupport)>0){
						foreach($listSupport as $group){
							echo '  <h4>'.@$group['name'].'</h4>
					    			<div class="row">';
					    		  	foreach($group['listSupport'] as $support){
						    		  	echo '<div class="col-sm-6 col-xs-4">';
						    		  	if($support['typeNick']=='yahoo'){ 
						    		  		echo '<a href="ymsgr:sendim?'.$support['nick'].'">
				                          			<img class="img-responsive" width="80" border="0" src="http://opi.yahoo.com/online?u='.$support['nick'].'&amp;m=g&amp;t='.$support['style'].'">
				                      			</a>';
				                      	}elseif($support['typeNick']=='skype'){ 
				                      		echo '<a href="https://zalo.me/'.$support['nick'].'" title="Chat with me via Zalo ">
													<img width="80"  border="0"  src="'.$urlThemeActive.'images/Logo_Zalo.png" alt="Chat with me via Zalo">
									  			</a>';
				                      	}
				                      
						    		  	echo '<p>'.$support['info'].'</p></div>';
					    		    }
					    	echo '</div>';
						}
					}
				}
			?>
		</div><!-- online-support -->

		<div class="sidebox advance-filter col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".4s">
			<h3>Tìm kiếm nâng cao</h3>
			<?php 
				$modelOption= new Option();
				$listCategory= $modelOption->getOption('productCategory');
				$urlPluginProduct= $urlHomes.'/app/Plugin/product/';
				$priceFromMax= 10000000;

				if(isset($_GET['price'])){
					$price= explode(';', $_GET['price']);
					$priceTo= (isset($price[0]))? (int) $price[0]:0;
					$priceFrom= (isset($price[1]))? (int) $price[1]:$priceFromMax;
				}else{
					$priceTo= 0;
					$priceFrom= $priceFromMax;
				}
			?>
			<link rel="stylesheet" href="<?php echo $urlThemeActive;?>slidePrice/css/jslider.css" type="text/css">
			<link rel="stylesheet" href="<?php echo $urlThemeActive;?>slidePrice/css/jslider.blue.css" type="text/css">
			<link rel="stylesheet" href="<?php echo $urlThemeActive;?>slidePrice/css/jslider.plastic.css" type="text/css">
			<link rel="stylesheet" href="<?php echo $urlThemeActive;?>slidePrice/css/jslider.round.css" type="text/css">
			<link rel="stylesheet" href="<?php echo $urlThemeActive;?>slidePrice/css/jslider.round.plastic.css" type="text/css">
		    <!-- end -->
			<!-- bin/jquery.slider.min.js -->
			<script type="text/javascript" src="<?php echo $urlThemeActive;?>slidePrice/js/jshashtable-2.1_src.js"></script>
			<script type="text/javascript" src="<?php echo $urlThemeActive;?>slidePrice/js/jquery.numberformatter-1.2.3.js"></script>
			<script type="text/javascript" src="<?php echo $urlThemeActive;?>slidePrice/js/tmpl.js"></script>
			<script type="text/javascript" src="<?php echo $urlThemeActive;?>slidePrice/js/jquery.dependClass-0.1.js"></script>
			<script type="text/javascript" src="<?php echo $urlThemeActive;?>slidePrice/js/draggable-0.1.js"></script>
			<script type="text/javascript" src="<?php echo $urlThemeActive;?>slidePrice/js/jquery.slider.js"></script>
			
	 		<form role="search" action="<?php if(function_exists('getLinkSearch')) echo getLinkSearch();?>" ondblclick="this.submit();" onsubmit="return processSearchSidebar();">
				<div class="search">
					<div class="form-group input-group">
						<input type="text" placeholder="Nhập từ khóa ..." class="form-control" name="key" value="<?php echo str_replace('-', ' ', @$_GET['key']);?>" id="keySidebar">
						<span class="input-group-btn">
							<button type="submit">Tìm kiếm</button>
						</span>
					</div>
					
					<h4 class="classify" data-collapse-target="#timkiemnangcao_nhomphutung">Nhóm hàng</h4>
					<div class="custom-collapse" id="timkiemnangcao_nhomphutung">
					<?php
						if(isset($listCategory['Option']['value']['category']) && count($listCategory['Option']['value']['category'])>0){
							foreach($listCategory['Option']['value']['category'] as $cat)
							{
								showListCategorySelect($cat,0,'category');
						
							}
						}
					?>
					</div>
					
					<h4 class="classify" data-collapse-target="#timkiemnangcao_hangxe">Hãng sản xuất</h4>
					<div class="custom-collapse" id="timkiemnangcao_hangxe">
						<?php
							$listManufacturer= $modelOption->getOption('productManufacturer');

							if(isset($listManufacturer['Option']['value']['category']) && count($listManufacturer['Option']['value']['category'])>0){
								foreach($listManufacturer['Option']['value']['category'] as $cat)
								{
									showListCategorySelect($cat,0,'manufacturer');
							
								}
							}
						?>
					</div><!-- / custom-collapse -->
					
					<h4 class="classify" >Khoảng giá</h4>
				  	<div class="layout-slider" style="float:left;margin-right: 5px;margin-top: -20px;">
				     	<span style="display: inline-block; padding: 0 5px;">
				      	<input id="Slider1" type="slider" name="price" value="<?php echo (int)  $priceTo;?>;<?php echo (int)  $priceFrom;?>" />
				      </span> 
				    </div>
				    <script type="text/javascript" charset="utf-8">
				      jQuery("#Slider1").slider({ from: 0, to: <?php echo $priceFromMax;?>, step: 500, smooth: true, round: 0, dimension: "&nbsp;", skin: "plastic" });
				    </script>
				    <br/>
				</div>
			</form>
		</div><!-- online-support -->

		<div class="sidebox links col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".4s">
			<h3>Liên kết</h3><!-- / sidebar-heading -->
			<ul>
				<?php
					global $phutungotottcThemeSettings;
					if(isset($phutungotottcThemeSettings['Option']['value']['idLinkWebCategorySidebar']) && function_exists('getListLinkWeb')){
						$getListLinkWeb= getListLinkWeb($phutungotottcThemeSettings['Option']['value']['idLinkWebCategorySidebar']);
						if(count($getListLinkWeb)>0){
							foreach($getListLinkWeb as $components){
								echo '<li><a target="_blank" href="'.$components['link'].'">'.$components['name'].'</a></li>';
							}
						}
					}
				?>
			</ul>
		</div><!-- / brands -->

		<div class="sidebox facebook-fanpage col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".4s">
			<h3>AutoParts Facebook</h3>
			<?php if( function_exists('showLikeFanpage') ) showLikeFanpage();?>
		</div><!-- / statistic -->

		<div class="sidebox statistic col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".4s">
			<h3>Thống kê</h3>
			<?php if( function_exists('showStatic') ) showStatic();?>
		</div><!-- / statistic -->

		<div class="sidebox statistic col-xs-12 wow fadeInUp wHighlight"  data-wow-delay=".35s">
			<h3>Tin tức</h3>
			<div class="row">
				<?php
					global $modelNotice;
					$listNews= $modelNotice->getNewNotice(6);
					foreach($listNews as $news){
						echo '<div class="col-sm-12 col-xs-12" style="margin-bottom: 15px;">
								<a href="/'.$news['Notice']['slug'].'.html"><img src="'.$news['Notice']['image'].'" class="img-responsive" />
								'.$news['Notice']['title'].'</a>
							</div>
							';
					}
				?>
			</div>
		</div>
	</div><!-- / sidebar-inner -->
</aside><!-- sidebar -->