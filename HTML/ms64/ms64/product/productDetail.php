
<?php getHeader();	
	// debug($tmpVariable);
?>
	<section id="productDetail" class="subpages">
		<div class="container">
			<div class="row productDetail d-flex align-items-stretch justify-content-center">
				<div class="col-sm-6">
					<div class="pdImage">
						<img src="<?php echo $tmpVariable['data']['Product']['images'][0]; ?>" class="img-fluid" alt="" >
					</div>
				</div>
				<div class="col-sm-6">
					<div class="pDinfo">
						<h1 class="pDName"><?php echo $tmpVariable['data']['Product']['title']; ?></h1>
						<p class="pDCost"><?php if($tmpVariable['data']['Product']['price']>0){echo number_format($tmpVariable['data']['Product']['price']).'đ';}else{echo"Liên hệ";}?></p>
						<div class="accordion" id="pDInfo2">
							<div class="card">
								<div class="card-head" id="headingOne">
									<p class="mb-0 mota" data-toggle="collapse" data-target="#pDDes" aria-expanded="true" aria-controls="pDDes">
										Mô tả
									</p>
								</div>

								<div id="pDDes" class="collapse show" aria-labelledby="headingOne" data-parent="#pDInfo2">
									<div class="card-body">
										<?php echo $tmpVariable['data']['Product']['description']; ?>
									</div>
								</div>
							</div>
							<!-- <div class="card">
								<div class="card-head" id="headingTwo">
									<p class="mb-0 collapsed mota" data-toggle="collapse" data-target="#pDContent" aria-expanded="false" aria-controls="pDContent">
										Thông tin sản phẩm
									</p>
								</div>
								<div id="pDContent" class="collapse" aria-labelledby="headingTwo" data-parent="#pDInfo2">
									<div class="card-body">
										<?php echo $tmpVariable['data']['Product']['info']; ?>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<?php 
				if(!empty($tmpVariable['data']['Product']['info'])){ ?>
				<div class="cards" style="margin-top: 30px; position: relative;">
					<div class="card-head text-center" id="headingTwo">
						<p class="mb-0 collapsed mota p-tt" >
							Thông tin sản phẩm
						</p>
					</div>
					<div >
						<div class="card-body card-bodys">
							<?php echo $tmpVariable['data']['Product']['info']; ?>
						</div>
					</div>
					<div class=" gradient"></div>
				</div>
				<div class="text-center" style="padding: 30px 0px;">
					<button class="btn-click" id="btn_click">
						Xem Thêm Nội Dung  <i class="far fa-angle-double-down"></i>
					</button>	
				</div>

		<?php	} ?>
		
			<div class="row relateProduct">
				<div class="col-12">
					<div class="d-flex align-items-center text-center">
						<p class="titleProductList mr-auto">Sản phẩm liên quan</p>							
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				if(!empty($tmpVariable['otherData'])){
					foreach($tmpVariable['otherData'] as $product){
						if ($product['Product']['price'] > 0) {
							$price= number_format($product['Product']['price']).'đ';
						} else {
							$price= "Liên hệ";
						}?>
							<div class="col-sm-3 col-6">
								<div class="product-item">
									<div class="productImages">
										<a href="<?php echo $product['Product']['urlProductDetail']?>"><img src="<?php echo $product['Product']['images']['0'];?>" alt="" class="img-fluid"></a>
									</div>
									<div class="productInfo">
										<div class="productName">
											<p><a href="<?php echo $product['Product']['urlProductDetail']?>" class=""><?php echo $product['Product']['title'];?></a></p>
										</div>
										<div class="productPrice"><?php echo number_format($product['Product']['price']);?>đ</div>
									</div>
								</div>
							</div>
				<?php	
					}
				}
				?> 
			</div>
		</div>
	</section>

<script type="text/javascript">
	$(document).ready(function(){
	    $("#btn_click").click(function(){
	       $(".card-body").removeClass("card-bodys");
	       $(".gradient").removeClass("gradient");
	       $(".btn-click").addClass("none");
	       // $(".btn-add").addClass("show");
	    });
	});
 </script>
	<?php getFooter();?>