<?php getHeader();
	global $themeSetting;
?>


	<!-- <?php debug($tmpVariable);?> -->
	<div class="bannerCoure">
		<img src="<?php echo $themeSetting['Option']['value']['imgCourse'] ?>" class="img-fluid" style="width: 100%">
	</div>
  <div class="course">
    <div class="container ">
    <h1 class="h1-course">THANH XUÂN CỦA DUYENTHI</h1>
    <div class="row pd-bt">
      <?php 
        if(!empty($tmpVariable['listData'])){
          foreach ($tmpVariable['listData'] as $key => $value) {?>
            <div class="col-md-4 col-6" style="margin-top: 15px;">
              <a href="<?php echo $value['Course']['urlCourseDetail']?>" class="fa-img">
                <img src="<?php echo $value['Course']['images'][0]?>" class="img-fluid" style="border-radius: 10px; box-shadow: 1px 1px 1px 1px #d2cece;">
              </a>
            </div>  
      <?php }
        }
      ?>
    </div>

     <?php
                         $page = $tmpVariable['page'];
                         $next = $tmpVariable['next'];
                         $back = $tmpVariable['back'];
                         $totalPage = $tmpVariable['totalPage'];
                         $urlPage = $tmpVariable['urlPage'];


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
                            <ul class="pagination">
                                <!-- li class="pagination-first"><a href="<?php echo $urlPage.'1'?>"> First </a></li> -->
                                <li class="pagination-prev">
                                  <a href="<?php echo $urlPage . $back ?>" rel="prev">
                                    <i class="fas fa-backward"></i>
                                  </a></li>
                                <?php for ($i = $startPage; $i <= $endPage; $i++) { ?>
                                    <li class="pagination-num <?php
                                    if ($i == $page) {
                                        echo ' current';
                                    }
                                    ?>"><a href="<?php echo $urlPage . $i; ?>"><?php echo $i; ?></a></li>
                                <?php }
                                ?>
                                <li class="pagination-next">
                                  <a href="<?php echo $urlPage . $next ?>" rel="next">
                                    <i class="fas fa-forward"></i>
                                  </a>
                                </li>
                                <!-- <li class="pagination-last"><a href="<?php echo $urlPage . $totalPage ?>"> Last </a> </li> -->
                            </ul>
                        <?php }?>
  </div>
  </div>
	
<?php getFooter()?>