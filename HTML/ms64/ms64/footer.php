<?php global $themeSetting?>
<footer>
	<div class="img-footer">
		<img src="<?php echo $urlThemeActive ?>images/duyenthif.png">
	</div>
		
		<section id="footNews">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div id="footNewsSlider" class="owl-carousel">
						<?php
							global $modelNotice;
		                       $notice= $modelNotice->getOtherNotice(array((int)  $themeSetting['Option']['value']['idtintuc']),9);
		                       // debug($notice);
		                       if(!empty($notice)){
		                       		foreach ($notice as  $value) {
		                       			$url = getUrlNotice($value['Notice']['id']);
		                       			echo'
		                       				<div class="footNewsItem">
												<div class="footNewsImages">
													<a href="'.$value['Notice']['key'].'" target="_blank"><img src="'.$value['Notice']['image'].'" alt="" class="img-fluid"></a>
												</div>
												<div class="footNewsInfo">
													<div class="footNewsName">
														<p><a href="'.$value['Notice']['key'].'" class="" target="_blank">'.$value['Notice']['title'].'</a></p>
													</div>
												</div>
											</div>
		                       			';
		                       		}
		                       }
						?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="footLogo">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="listLogo d-flex align-items-center justify-content-around">
							<a href=""><img src="<?php echo @$themeSetting['Option']['value']['logof1']; ?>" class="img-fluid" alt=""></a>
							<a href=""><img src="<?php echo @$themeSetting['Option']['value']['logof2']; ?>" class="img-fluid" alt=""></a>
							<a href=""><img src="<?php echo @$themeSetting['Option']['value']['logof3']; ?>" class="img-fluid" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="footInfo" style="padding-top: 30px;" >
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-12">
						<span class="information_footer1">THÔNG TIN LIÊN HỆ</span>
						<p class="information_footer2"><?php echo @$themeSetting['Option']['value']['company']; ?></p>
						<p>Địa chỉ: <?php echo $contactSite['Option']['value']['address']; ?></p>
						<p >Điện thoại: <a href="tel:<?php echo $contactSite['Option']['value']['fone']; ?>" style="color: white;"><?php echo $contactSite['Option']['value']['fone']; ?></a></p>
						<p>Mail: <?php echo $contactSite['Option']['value']['email']; ?></p>
						<p>Mở cửa:  <?php echo @$themeSetting['Option']['value']['timeOpenDoor']; ?></p>
						<p>Facebook: <?php echo @$themeSetting['Option']['value']['facebook']; ?></p>
					</div>
					<div class="col-md-6 col-12 right" >
						<span class="information_footer1">CHÍNH SÁCH VÀ QUY ĐỊNH</span>
						<?php 
							$linkWeb = getListLinkWeb($themeSetting['Option']['value']['idchinhsach']);
							if (!empty($linkWeb)) {
								foreach ($linkWeb as $key => $value) { ?>
									<p><a class="right_a" href="<?php echo $value['link']; ?>"><?php echo $value['name']; ?></a></p>
									
					<?php  	}
							}
							
						?>
					</div>
				</div>
			</div>
		</section>

		
	</footer>
	<div class="tab-bos">
		<div class="row tab-bos">
			<div class="col-3 text-center">
				<a href="/"><img src="<?php echo $urlThemeActive ?>images/1.png"></a>
				<p>Trang Chủ</p>
			</div>
			<div class="col-3 text-center"  >
				<img src="<?php echo $urlThemeActive ?>images/2.png" class="btn_search">
				<p>Tìm Kiếm</p>
			</div>
			<div class="col-3 text-center">
				<a href="/allCatergory"><img src="<?php echo $urlThemeActive ?>images/3.png" style="width: 38px;height: 32px;"></a>
				<p>Sản Phẩm</p>
			</div>
			<div class="col-3 text-center">
				<a href="/allPhoto"><img src="<?php echo $urlThemeActive ?>images/4.png"></a>
				<p>Ảnh</p>
			</div>
		</div>
	</div>
	<div class="modal1" id="btn_searchC">
		<div class="abc">		
		</div>
		<div  class="modal2" >	
			<form action="/search/" method="get">
					<!-- <i  id="btn_searchC" class="far fa-times-circle i-close"></i> -->
					<input type="text" class="input-popup"  placeholder="Nhập tên sản phẩm cần tìm" name="key" value="<?php echo @$_GET['key'];?>">
					<button type="submit" class="btn-popup">
						<i class="fas fa-search"></i>
					</button>

			</form> 
		</div>
	</div>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="<?php echo $urlThemeActive ?>js/owl.carousel.js"></script>
	<script src="<?php echo $urlThemeActive ?>js/owl2row.js"></script>
	<script type="text/javascript" src="<?php echo $urlThemeActive ?>js/main.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script> -->
	<script type="text/javascript">
		$('body').on('click', 'div.fourteen button.btn-search', function(event) {
			event.preventDefault();
			var $input = $('div.fourteen input');
			$input.focus();
			if ($input.val().length() > 0) {
				//submit form
			}
		});
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	    $(".btn_search").click(function(){
	       $(".modal1").toggleClass("modal11");   
	    });
	});

	$(document).ready(function(){
	    $(".abc").click(function(){
	       $(".modal1").removeClass("modal11");  
	        $('.modal1').css('display','none');  
	    });
	});
 </script>
</body>
</html>