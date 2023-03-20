<?php getHeader();?>
<!-- View News -->
<section class="body-section blog-detail">
	<h2><?php echo $infoNotice['Notice']['title'];?></h2>
	
	<div class="stat-wrapper">
		<?php 
			if(isset($infoNotice['Notice']['time']) && $infoNotice['Notice']['time']>0){ 
				$today= getdate($infoNotice['Notice']['time']);
				echo '<span style="float:left;margin-right:10px;" class="stat"><i class="fa fa-calendar"></i><a href="#">'.$today['mday'].'/'.$today['mon'].'/'.$today['year'].'</a></span>';
			}

			if(function_exists('showShareFacebook')) 
			{
				showShareFacebook($urlNow,$infoNotice['Notice']['title'],$infoNotice['Notice']['introductory'],'Phụ tùng ôtô TTC',$infoNotice['Notice']['image'],'article');
			}
			if(function_exists('showLikeFacebook')) showLikeFacebook();
			if(function_exists('showButtonGPlus')) showButtonGPlus();
		?>
	</div><!-- / stat-wrapper -->
	<br/>
	<hr>
	
	<div class="content">
		<?php echo $infoNotice['Notice']['content'];?>
	</div><!-- / content -->
</section><!-- / products -->

<div class="body-section related-articles">
	<h2>Nhận xét</h2>
	<?php if(function_exists('showCommentFacebook')) showCommentFacebook($urlNow,5);?>
</div><!-- / facebook-plugin row -->

<section class="body-section related-articles">
	<?php
		if(isset($otherNotices) && count($otherNotices)>0){
			echo '<h2>Tin tức khác</h2><ul>';
			foreach($otherNotices as $notice)
			{
				echo '<li><a href="'.getUrlNotice($notice['Notice']['id']).'">'.$notice['Notice']['title'].'</a>';

				if(isset($notice['Notice']['time'])){
					$today= getdate($notice['Notice']['time']);
					echo '<span class="date"> ('.$today['mday'].'/'.$today['mon'].'/'.$today['year'].')</span>';
				}

				echo '</li>';
			}
			echo '</ul>';
		}
	?>
</section><!-- / body-section related-articles -->
				
<?php getSidebar();?>
<?php getFooter();?>