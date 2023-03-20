<?php global $themeSettings;getHeader();?>
		<section class="section10">

			<div class="container">
				<div class="baiviet pt-3 text-center" >
					<h1 style="text-transform: uppercase; font-size: 25px"><?php echo $category['name'];?></h1>
				</div>
				<br>
				
				<div class="row">
					<?php
						if(!empty($listNotices)){
							foreach($listNotices as $item){
								$urlNotice = getUrlNotice($item['Notice']['id']);
								echo '<div class="col-md-4">
										<div class = "img-thumbnail">
											<img src = "'.$item['Notice']['image'].'" alt ="" style="width:100%;height:200px ">
										</div>

										<div class ="item">
											<p><a href="'.$urlNotice.'" title="" style="color:black;font-weight: bold; font-size: 18px;text-decoration: none;overflow: hidden;text-overflow: ellipsis; -webkit-line-clamp: 2;-webkit-box-orient: vertical;display: -webkit-box; ">'.$item['Notice']['title'].'</a></p>
											
										</div>	
									</div>';
							}
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
							<?php } ?>

							<li><a href="<?php $urlPage . $next ?>">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<?php }?>
				</div>	

				
			</div>
		</section>
		<br>
		<div class="container">
					<div class="text-center pt-2">
						<h1 style="font-size: 15px"><i><?php echo $category['content'];?></i></h1>
					</div>					
				</div>
				<br>
<?php getFooter();?>