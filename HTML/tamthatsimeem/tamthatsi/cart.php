<?php getHeader();?>

<link rel="stylesheet" type="text/css" href="<?php echo $urlThemeActive;?>css/cart.css">

<?php
	if(isset($_SESSION['orderProducts'])){
		$listOrderProduct= $_SESSION['orderProducts'];
	}else{
		$listOrderProduct= array();
	}
	$numberProduct= count($listOrderProduct);
?>


	<section class="cart pb_50 min600">
		<div class="title_bg text-center">
			<h3 class="rs">Giỏ hàng</h3>
			<ul class="list-inline rs">
				<li class="list-inline-item"><a href="">Trang chủ</a></li>
				<li class="list-inline-item"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
				<li class="list-inline-item">Giỏ hàng</li>
			</ul>
		</div>
		<div class="container">
			<div class="cart_main mt_20">
				<h3 class="rs gh_text">Giỏ hàng của bạn (<?php echo $numberProduct;?> sản phẩm)</h3>
				<?php if($numberProduct>0){ ?>
				<form action="/saveOrderProduct_reloadOrder" method="post" class="form_cart" id="formCart">
					<div class="table-responsive">
						<table class="rs table table-bordered text-center" width="100%">
							<tbody>
								<tr>
									<td>Ảnh</td>
									<td>Sản phẩm</td>
									<td>Giá bán</td>
									<td>Số lượng</td>
									<td>Tổng tiền</td>
									<td>Xóa</td>
								</tr>
								<?php
									$total= 0;
									foreach($_SESSION['orderProducts'] as $product){
										if(isset($product['Product']['codeDiscountInput']) && $product['Product']['codeDiscountInput']!='' && in_array($product['Product']['codeDiscountInput'], $product['Product']['codeDiscount']))
										{
											$priceShow= $product['Product']['priceDiscount'];
											$discount= true;
										}
										else
										{
											$priceShow= $product['Product']['price'];
											$discount= false;
										}

										$money= $priceShow*$product['Product']['numberOrder'];
										$total += $money;
										echo '	<tr>
													<td class="cart_img"><img src="'.$product['Product']['images'][0].'" class="img-responsive" alt=""></td>
													<td>'.$product['Product']['title'].'</td>
													<td>'.number_format($priceShow).'</td>
													<td class="cart_inumber">'.number_format($product['Product']['numberOrder']).'</td>
													<td>'.number_format($money).'</td>
													<td><a href="javascript:void(0);" onclick="deleteProductCart(\''.$product['Product']['id'].'\');"><i class="fa fa-trash-o"></i></a>
													</td>
												</tr>';
									}
								?>
								<tr>
									<td colspan="2">
										<a href="javascript:void(0);" onclick="clearCart();" class="cart_btn1">Xóa toàn bộ giỏ hàng</a>
									</td>
									<td colspan="2">
										<input onchange="reloadForm();" id="codeDiscount" class="form-control" type="text" value="<?php echo @$_SESSION['codeDiscountInput'];?>" name="codeDiscount" placeholder="Nhập mã giảm giá">
									</td>
									<td colspan="2" class="text-right sum_money"><strong>Thành tiền:</strong> <span><?php echo number_format($total).'đ'; ?></span>
										<p style="font-family: arial;font-weight: bold;">Chưa bao gồm phí vận chuyển</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
				<div class="cart_btn mt_20">
					<div class="container">
						
						<div class="">
							<form action="<?php echo $urlHomes.'saveOrderProduct_addOrder';?>" method="post" class="cart_form2">
								<input type="hidden" name="redirect" value="/">
								<h2 class="text-center">Thanh toán</h2>
								<div class="form-group">
									<label for="">Họ tên: </label>
									<input type="text" maxlength="255" class="form-control" required="" name="fullname">
								</div>
								<div class="form-group">
									<label for="">Số điện thoại: </label>
									<input type="tel" maxlength="11" class="form-control" required="" name="phone">
								</div>
								<div class="form-group">
									<label for="">Email: </label>
									<input type="email" class="form-control" required="" name="email">
								</div>
								<div class="form-group">
									<label for="">Địa chỉ: </label>
									<input type="text" maxlength="255" class="form-control" required="" name="address">
								</div>
								<div class="form-group">
									<label for="">Ghi chú: </label>
									<textarea name="note" rows="5" class="form-control" maxlength="3000"></textarea>
								</div>
								<div class="form-group text-center">
									<button type="submit" class="cart_btn2">Gửi đơn hàng</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			<?php }else{ ?>
				<div class="cart_btn mt_20">
					<div class="row">Bạn chưa có sản phẩm nào trong giỏ hàng</div>
				</div>
			<?php }?>
			</div>
		</div>
	</section>
<script type="text/javascript">
	var urlHomes= "<?php echo $urlHomes; ?>";
    var urlPluginCart= "<?php echo getLinkCart(); ?>";
	
	function deleteProductCart(idProduct)
	{
		var r= confirm('Bạn có chắc chắn muốn xóa không?');
		if(r)
		{
			$.ajax({
		      type: "POST",
		      url: "/saveOrderProduct_deleteProductCart",
		      data: {idProduct:idProduct}
		    }).done(function( msg ) { 	
			  		window.location= urlPluginCart;
			})
			.fail(function() {
					alert('Quá trình xử lý bị lỗi !');
					return false;
			});
		}
	}
	
	function clearCart()
	{
		var r= confirm('Bạn có chắc chắn muốn làm trống giỏ hàng không?');
		if(r)
		{
			$.ajax({
		      type: "POST",
		      url: "/saveOrderProduct_clearCart",
		      data: {}
		    }).done(function( msg ) { 	
			  		window.location= urlPluginCart;
			})
			.fail(function() {
					alert('Quá trình xử lý bị lỗi !');
					return false;
			});
		}
	}

	function reloadForm()
	{
		$( "#formCart" ).submit();
	}
</script>	

<?php getFooter(); ?>