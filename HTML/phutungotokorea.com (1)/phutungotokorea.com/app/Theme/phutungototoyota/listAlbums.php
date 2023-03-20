<?php getHeader();?>
<section class="body-section blog">
	<h2>Thư viện ảnh</h2>
	<div class="row">
		<?php foreach($listAlbums as $album){ ?>
		<div class="an-article col-md-4 col-sm-6" style="height:185px;">
			<div class="row">
				<div class="media-container col-xs-12">
					<div class="inner">
						<img src="<?php echo $album['Album']['img'][0]['src'];?>" class="img-responsive" alt="">
						<div class="hover-overlay color"></div><!-- / hover-overlay -->
						<a  href="<?php echo $urlAlbums.$album['Album']['slug'].'.html';?>" class="icon"><img class="img-responsive" src="<?php echo $urlThemeActive;?>images/link_64px.png" alt=""></a>
					</div>
				</div><!-- / media-container -->
				<div class="content col-xs-12">
					<h3><a href="<?php echo $urlAlbums.$album['Album']['slug'].'.html';?>"><?php echo $album['Album']['title'];?></a></h3>
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