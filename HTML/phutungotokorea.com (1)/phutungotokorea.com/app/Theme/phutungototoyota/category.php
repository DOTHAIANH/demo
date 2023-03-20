<?php getHeader();?>
<section class="body-section blog">
	<h2><?php echo $category['name'];?></h2>
	<div class="row">
		<?php foreach($listNotices as $notice){ $urlNotice= getUrlNotice($notice['Notice']['id']);?>
		<div class="an-article col-md-4 col-sm-6 wow fadeInUp wHighlight" data-wow-delay=".4s">
			<div class="row">
				<div class="media-container col-xs-12">
					<div class="inner">
						<img src="<?php echo $notice['Notice']['image'];?>" class="img-responsive" alt="">
						<div class="hover-overlay color"></div><!-- / hover-overlay -->
						<a  href="<?php echo $urlNotice;?>" class="icon"><img class="img-responsive" src="<?php echo $urlThemeActive;?>images/link_64px.png" alt=""></a>
					</div>
				</div><!-- / media-container -->
				<div class="content col-xs-12">
					<h3><a href="<?php echo $urlNotice;?>"><?php echo $notice['Notice']['title'];?></a></h3>
					<div class="stat-wrapper">
						<?php $today= getdate($notice['Notice']['time']);?>
						<span class="stat"><i class="fa fa-calendar"></i><a href="#"> <?php echo $today['mday'].'/'.$today['mon'].'/'.$today['year'];?> </a></span>
					</div><!-- / stat-wrapper -->
					<span class="brief"><?php echo $notice['Notice']['introductory'];?></span>
				</div><!-- / content -->
			</div><!-- / row -->
		</div><!-- an-article -->
		<?php }?>
	</div><!-- / row -->
	
	<ul class="custom-pagination text-center">
		<li><a href="<?php echo $urlPage.$back;?>">First</a></li>
		<li><a href="<?php echo $urlPage.$back;?>"><i class="fa fa-chevron-left"></i></a></li>
		<?php
            if( ($page-2)>0 ) $headPage=$page-2;else $headPage=1;
            if( ($page+2) <= $totalPage) $endPage=$page+2;else $endPage=$totalPage;
        
			for($i=$headPage;$i<=$endPage;$i++)
			{
				$classPage= '';
				if($i==$page) $classPage= 'class="active"';
				echo '<li '.$classPage.'><a href="'.$urlPage.$i.'">'.$i.'</a></li>';
			}
		?>
		<li><a href="<?php echo $urlPage.$next;?>"><i class="fa fa-chevron-right"></i></a></li>
		<li><a href="<?php echo $urlPage.$next;?>">Last</a></li>
	</ul>
</section><!-- / products -->
<?php getSidebar();?>
<?php getFooter();?>