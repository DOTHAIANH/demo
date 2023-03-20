<?php global $themeSettings;?>
<div class="col-md-4 intro_left">
	<div class="panel_header" style="background-color: <?php echo @$themeSettings['Option']['value']['color']; ?>">
		<p style="font-size: 98%;" class="text-center">TIN TỨC</p>
	</div>
	<div class="panel_body">
			<?php
				global $modelNotice;
				$news= $modelNotice->getNewNotice(5);

				if(!empty($news)){
					foreach($news as $item){
						$urlNotice = getUrlNotice($item['Notice']['id']);
						echo '
						<div class="row intro_left_item">
							<div class="col-md-4 col-4 col-sm-4">
								<img src="'.$item['Notice']['image'].'" width="100%">
							</div>
							<div class="col-md-8 col-8 col-sm-8">
								<a href="'.$item['Notice']['slug'].'.html">'.$item['Notice']['title'].'</a>
								<p><i class="far fa-calendar-minus"></i> '.date('d/m/Y',$item['Notice']['time']).'</p>
							</div>
						</div>';
					}
				}
			?>					
	</div>
	<br>
	<div class="panel_footer">
		<p>CHUYÊN MỤC</p>
		<ul class="intro_left_nav">
			<?php
				global $modelOption;
				$listBlogCategory= $modelOption->getOption('categoryNotice');
				if(!empty($listBlogCategory['Option']['value']['category'])){
					foreach($listBlogCategory['Option']['value']['category'] as $item){
						echo'
								<li>
									<a href="'.$item['slug'].'.html"><i class="fas fa-arrow-right"></i> '.$item['name'].'</a>
								</li>
								<div class="dropdown-divider"></div>
							';
					}
				}
			?>
		</ul>
	</div>
</div>