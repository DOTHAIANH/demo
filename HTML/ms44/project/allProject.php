<?php getHeader()?>
<div class="list-proj container pd-top-bot">
	<div class="title-pr text-center">
		<h3><span>TẤT CẢ DỰ ÁN</span></h3>
	</div>
	<div class="container">            
		<div class="row">
			<?php 
				$project = $tmpVariable['listData'];
				if(!empty($project)){
					foreach ($project as $value) {
						$url='/project/'.$value['Project']['slug'].'.html';
						echo '
							<div class="col-md-6 col-sm-4 mg-top30 wow fadeInLeft "  data-wow-duration="1.5s">
								<div class="item-pr">
									<div class="avarta"><a href="'.$url.'"><img src="'.$value['Project']['images'][0].'" class="img-fluid w-100" alt=""></a></div>
									<div class="info text-center">
										<h3><a href="'.$url.'">'.$value['Project']['name'].'</a></h3>
									</div>
								</div>
							</div>
						';
					}
				}
			?>
		</div>
    </div>
     <?php
				if ($tmpVariable['page'] > 5) {
					$startPage = $tmpVariable['page'] - 5;
				} else {
					$startPage = 1;
				}

				if ($tmpVariable['totalPage'] > $tmpVariable['page'] + 5) {
					$endPage = $tmpVariable['page'] + 5;
				} else {
					$endPage = $tmpVariable['totalPage'];
				}

				if($tmpVariable['totalPage']>1){
				?>
				<div class="col-sm-12 wow fadeInUp  " data-wow-delay=".25s">
					<div class="direc " >
						<ul class="pagination">
							<li class="disabled"><a href="<?php echo $tmpVariable['urlPage'] . $tmpVariable['back'] ?>" class="css-phantrang">&laquo;</a></li>
							<?php for ($i = $startPage; $i <= $endPage; $i++) { ?>
								<li class="<?php
								if ($i == $tmpVariable['page']) {
									echo 'active';
								}
								?>"><a href="<?php echo $tmpVariable['urlPage'] . $i; ?>" class="css-phantrang"><?php echo $i; ?></a></li>
							<?php }
							?>

							<li><a href="<?php echo $tmpVariable['urlPage'] . $tmpVariable['next'] ?>" class="css-phantrang">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<?php }?>    
</div>
			
<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/slick.min.js"></script> 
<?php getFooter()?>