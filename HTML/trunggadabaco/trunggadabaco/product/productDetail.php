<?php getHeader();?>
<?php
	$linkHang = getListManufacturer();
	global $contactSite;
?>
	<link href="<?php echo $urlThemeActive; ?>css/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
	<script src="<?php echo $urlThemeActive; ?>js/magiczoomplus.js" type="text/javascript"></script>

	<section class="productDetail pb_50 min600">
		<div class="title_bg text-center">
			<h3 class="rs"><?php echo $tmpVariable['data']['Product']['title']; ?></h3>
			<ul class="list-inline rs">
				<li class="list-inline-item"><a href="">Trang chủ</a></li>
				<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="list-inline-item"><a href="">Sản phẩm</a></li>
				<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="list-inline-item"><?php echo $tmpVariable['data']['Product']['title']; ?></li>
			</ul>
		</div>
		<div class="container">
			<div class="pdetail_main">
				<div class="row">
					<div class="col-sm-5">
						<div class="row app-figure" id="zoom-fig">
							<div class="col-sm-12 img_zoom">
								<a id="Zoom-1" class="MagicZoom" href="<?php echo @$tmpVariable['data']['Product']['images']['0'];?>">
									<img src="<?php echo @$tmpVariable['data']['Product']['images']['0'];?>" alt=""/>
								</a> 
							</div>
							<div class="selectors col-sm-12">
								<div id="demo">
									<div id="owl-demo1" class="owl-carousel slide1">
										<?php
										foreach ($tmpVariable['data']['Product']['images'] as $key => $value) {
											echo '<div class="item">
													<a data-zoom-id="Zoom-1" href="'.$value.'" data-image="'.$value.'">
														<img srcset="'.$value.'" src="'.$value.'"/>
													</a>
												</div>';
										}
										?>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-sm-7">
						<div class="pdetail_des">
							<h3 class="rs"><?php echo $tmpVariable['data']['Product']['title']; ?></h3>
							<span class="pd_gia"><?php if($tmpVariable['data']['Product']['price']>0){echo number_format($tmpVariable['data']['Product']['price']).'đ';}else{echo"Liên hệ";}?></span>
							<p class="mt_20">Nhà sản xuất: <strong><?php echo @$linkHang['Option']['value']['category'][$tmpVariable['data']['Product']['manufacturerId']]['name'];?></strong></p>
							<p class="mt_20">Tình trạng: <strong>Còn hàng</strong></p>
							<p class="mt_20">Mã hàng: <strong><?php if (!empty($tmpVariable['data']['Product']['code'])) {echo $tmpVariable['data']['Product']['code'];} else {echo '';}?></strong></p>
							<!-- <p>Số lượng:  <input type="number" name="numberOrder" id="numberOrder" value="1" min="1"></p> -->
							<p>Số lượng:
								<div class="number-input">
									<button onclick="this.parentNode.querySelector('.quantity').stepDown();" ></button>
									<input class="quantity" min="0" name="numberOrder" id="numberOrder" value="5" type="number" min="5">
									<button onclick="this.parentNode.querySelector('.quantity').stepUp()" class="plus"></button>
								</div>
							</p>
							<a href="javascript:void(0)" onclick="addToCart('<?php echo $tmpVariable['data']['Product']['id']; ?>');" class="cart_btn2 mt_20">Thêm vào giỏ</a>
							<p class="mt_20">Gọi đặt mua: <strong><a href=""><?php if(!empty($contactSite['Option']['value']['fone'])) echo $contactSite['Option']['value']['fone'];?></a></strong> để nhanh chóng đặt hàng</p>
							
						</div>
					</div>
				</div>
			</div>
			<div class="pdetail_banner mt_40">
				<img src="<?php echo $urlThemeActive; ?>images/bg_pro.jpg" class="img-responsive" alt="">
			</div>
			<div class="mota mt_40">
				<ul class="nav nav-tabs text-center rs pro_tab" role="tablist">
					<li class="nav-item active">
						<a class="nav-link" href="#tab11" role="tab" data-toggle="tab">Thông tin</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab22" role="tab" data-toggle="tab">Bình luận</a>
					</li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane in active" id="tab11"><?php echo $tmpVariable['data']['Product']['info'] ?></div>
					<div role="tabpanel" class="tab-pane" id="tab22"><?php if (function_exists('showCommentFacebook')) showCommentFacebook($urlNow, 5); ?></div>
				</div>
			</div>
			<div class="splq mt_40">
				<div class="title_page text-center">
					<h3 class="rs">Sản phẩm liên quan</h3>
				</div>
				<div class="row">
					<?php
					if (!empty($tmpVariable['otherData'])) {
						foreach ($tmpVariable['otherData'] as $product) {
							if ($product['Product']['price'] > 0) {
								$price= number_format($product['Product']['price']).'đ';
							} else {
								$price= "Liên hệ";
							}
							echo '<div class="col-sm-6 col-md-3">
									<div class="sp_item">
										<div class="sp_img">
											<img src="'.@$product['Product']['images'][0].'" class="img-responsive" alt="">
											<a href="'.$product['Product']['urlProductDetail'].'" class="pop_xn"></a>
										</div>
										<div class="sp_text">
											<a href="'.$product['Product']['urlProductDetail'].'" class="sp_text_name">'.@$product['Product']['title'].'</a>
											<div class="sp_text_price">'.$price.'</div>
										</div>
									</div>
								</div>';
						}
					}
					?>
				</div>
			</div>
		</section>
<script type="text/javascript">
	var urlPluginCart= "/cart/";

	function addToCart(idProductShow) {
		var numberOrder= $('#numberOrder').val();
		$.ajax({
	      type: "POST",
	      url: "/saveOrderProduct_addProduct",
	      data: {id:idProductShow,numberOrder:numberOrder}
	    }).done(function( msg ) { 	
			window.location= urlPluginCart;
		});
	}
</script>
<?php getFooter(); ?>