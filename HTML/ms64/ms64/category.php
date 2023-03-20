<?php getHeader()?>
<link rel="stylesheet" type="text/css" title="" href="<?php echo $urlThemeActive; ?>css/style_ms1.css">
	<section class="cart pb_50 pt-50 min600">
		<!-- ::::::  Start  Breadcrumb Section  ::::::  -->
	    <div class="page-breadcrumb">
	        <div class="container">
	            <div class="row">
	                <div class="col-12">
	                	<ul class="list-inline rs">
							<li class="list-inline-item"><a href="/" style="color: #29662b ">TRANG CHỦ / </a></li>
							<!-- <li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li> -->
							<li class="list-inline-item" style="text-transform: uppercase;"><?php echo $category['name'];?></li>
						</ul>
	                	<h1 class="rs clsH3Blog h1-news" ><?php echo $category['name'];?></h1>
	                </div>
	                
	            </div>
	        </div>
	    </div> <!-- ::::::  End  Breadcrumb Section  ::::::  -->
		<div class="container">
			<div class="cart_main mt_20">
				<?php
					if(!empty($listNotices)){ ?>
						<div class="box7_main list-tin">
							<div class="row">
								<?php foreach($listNotices as $notice){
									$urlNotice = getUrlNotice($notice['Notice']['id']) ?>
									<div class="col-12 col-sm-6 col-md-4 blog-feed my_padding my_m_b_30">
										<div class="box_blog">
                                        <!-- Start Blog Feed Image -->
                                        <div class="blog-feed__img-box">
                                            <a href="<?php echo $urlNotice ?>" class="blog-feed__img--link">
                                                <img class="img-fluid" src="<?php echo $notice['Notice']['image'] ?>" alt="">
                                            </a>
                                        </div> <!-- End  Blog Feed Image -->
                                        <!-- Start  Blog Feed Content -->
                                        <div class="blog-feed__content ">
                                            <a href="<?php echo $urlNotice ?>" class="blog-feed__link"><?php echo $notice['Notice']['title'] ?></a>
                                            
                                            <div class="blog-feed__post-meta">
                                               	<p class="p-news"> <a href="<?php echo $urlNotice ?>">Xem Thêm  <i class="fas fa-arrow-right"></i> </a></p>
                                                
                                            </div>
                                            
                                        </div> <!-- End  Blog Feed Content -->
                                    	</div>
                                    </div>
									<!--  -->
										
								<?php 
								} ?>
							</div>
						</div>
					<?php
					} ?>
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

				if($totalPage>1){ ?>
                        <!-- post pagination -->
                    <div class="page-pagination">
                        <ul class="page-pagination__list">
                            <li class="page-pagination__item"><a class="page-pagination__link"  href="<?php echo $urlPage . $back ?>">Trước</a>
                            </li>
                            <?php for ($i = $startPage; $i <= $endPage; $i++) { ?>
                                    <li class="page-pagination__item"><a class="page-pagination__link <?php echo $i==$page?'active" ':'" href="'.$urlPage.$i.'"' ?>"><?php echo $i; ?></a></li>
                            <?php 
                        	} ?>

                            <li class="page-pagination__item"><a class="page-pagination__link"  href="<?php echo $urlPage . $next ?>">Sau</a>
                            </li>
                          </ul>
                    </div>
                <?php } ?>
			</div>
		</div>
	</section>
<?php getFooter()?>