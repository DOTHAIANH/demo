<?php getHeader();?>
	<link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/style_ms1.css">
	<section class="cart pb_50 min600">
		<div class="page-breadcrumb">
	        <div class="container">
	            <div class="row">
	                <div class="col-12">
	                	<ul class="list-inline rs">
							<li class="list-inline-item"><a href="/" style="color: #29662b ">TRANG CHỦ / </a></li>
							<!-- <li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li> -->
							<li class="list-inline-item" style="text-transform: uppercase;">Danh sách album / </li>
							<li class="list-inline-item" style="text-transform: uppercase;"><?php echo $category['name'];?></li>
						</ul>
	                	<h1 class="rs clsH3Blog h1-news"><?php echo $category['name'];?></h1>
	                </div>
	                
	            </div>
	        </div>
	    </div>
		<div class="container">
			<div class="cart_main mt_20">
				<?php
					//var_dump($listVideos);
					if(!empty($listAlbums)){ ?>
						<div class="box7_main">
									<div class="row">
							<?php		foreach($listAlbums as $notice){
										$urlNotice = getUrlAlbum($notice['Album']['id']);
										 ?>
										<div class="col-sm-4 text-center" style="padding: 5px;">
												<div class="new_item">
													<a href="<?php echo $urlNotice;?>" target="_blank" class="new_img test-shine">
														<img src="<?php echo $notice['Album']['img'][0]['src'];?>" class="img-responsive" alt="" style="width: 100%;">
													</a>
													
													<?php echo date('d/m/Y',$notice['Album']['time'])?><br/>
													
													<div class="new_text">
														<h1 class="new_name"><?php echo $notice['Album']['title']?></h1>
													</div>
												</div>
											</div>
									<?php } ?>
								</div>
								</div>
				
				<?php
			}
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
							<?php }
							?>

							<li><a href="<?php $urlPage . $next ?>">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</section>
<?php getFooter(); ?>