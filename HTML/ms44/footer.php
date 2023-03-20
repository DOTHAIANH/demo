<?php
    global $ThemeSettings;
?>
<footer>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wow fadeInLeft  "  data-wow-duration="1s">
					<div class="item-ft">
						<div class="desc">
							<h4><?php echo $ThemeSettings['Option']['value']['namecty'] ;?></h4>
							<br>
							<ul>
								<li><a href="">Địa Chỉ: <?php echo $contactSite['Option']['value']['address']; ?></a></li>
								<li><a href="">Giờ Làm Việc:  <?php echo $ThemeSettings['Option']['value']['timework'] ;?></a></li>
							</ul>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft "  data-wow-duration="1.5s">
					<div class="item-ft">
						<div class="title-ft">THÔNG TIN LIÊN HỆ</div>
						<div class="link-ft">
							<ul>
								<li><a href="">Hotline: <?php echo $contactSite['Option']['value']['fone']; ?></a></li>
								<li><a href="">Email: <?php echo $contactSite['Option']['value']['email']; ?></a></li>
								<li><a href="">Website:<?php echo $ThemeSettings['Option']['value']['website'] ;?></a></li>
							
							</ul>
							<div class="social">
								<ul class="list-inline">
									<li class="list-inline-item"><a href="<?php echo $ThemeSettings['Option']['value']['linkfa'] ;?>"><img src="<?php echo $urlThemeActive; ?>images/sc-1.png" class="img-fluid" alt=""></a></li>
									<li class="list-inline-item"><a href="<?php echo $ThemeSettings['Option']['value']['linkyt'] ;?>"><img src="<?php echo $urlThemeActive; ?>images/sc-2.png" class="img-fluid" alt=""></a></li>
									<li class="list-inline-item"><a href="https://zalo.me/<?php echo $contactSite['Option']['value']['fone']; ?>"><img src="<?php echo $urlThemeActive; ?>images/sc-3.png" class="img-fluid" alt=""></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 wow fadeInLeft  "  data-wow-duration="2s">
					<div class="item-ft">
						<div class="title-ft">HỖ TRỢ KHÁCH HÀNG</div>
						<div class="link-ft">
							<ul>
								<?php 
                                        global $themeData;
                                        if(!empty(@$ThemeSettings['Option']['value']['idlienket'])){  
                                            if(function_exists("getListLinkWeb")){
                                                $cua=getListLinkWeb( @$ThemeSettings['Option']['value']['idlienket']);
                                                if($cua){
                                                    foreach ($cua as $key => $value1) {
                                                        echo' <li class=""><a href="'.$value1['link'].'">'.$value1['name'].'</a></li>  ';
                                                    }
                                                }
                                            }
                                        }
                                    ?>
							</ul>
							<br>
							<img src="<?php echo $ThemeSettings['Option']['value']['logof'] ;?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ft-bott text-center">
		<div class="container">
			<a href="https://manmoweb.com/">Disegn By Mần Mò Web</a>
		</div>
	</div>

	 <div class="hotline-phone-ring-wrap">
		<div class="hotline-phone-ring">
			<div class="hotline-phone-ring-circle"></div>
			<div class="hotline-phone-ring-circle-fill"></div>
			<div class="hotline-phone-ring-img-circle">
				<a href="tel:<?php echo $contactSite['Option']['value']['fone']; ?>" class="pps-btn-img">
					<img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
				</a>
			</div>
		</div>
		<div class="hotline-bar">
			<a href="tel:<?php echo $contactSite['Option']['value']['fone']; ?>">
				<span class="text-hotline"><?php echo $contactSite['Option']['value']['fone']; ?></span>
			</a>
		</div>
	</div>

<!-- 
	<a href="https://zalo.me/<?php echo $contactSite['Option']['value']['fone']; ?>" title="" class="chatzalo"><img src="<?php echo $urlThemeActive; ?>images/sc-3.png" width="30px"></a>
	<a href="<?php echo $ThemeSettings['Option']['value']['linkfa'] ;?>" title="" class="face"><i class="fa fa-facebook-f" aria-hidden="true"></i></a> -->
	<!-- <a href="<?php echo @$themeSettings['Option']['value']['facebook']; ?>" title="" class="phone"><i class="fa fa-phone"></i></a> -->
	<!-- <a href="tel:<?php if(!empty($contactSite['Option']['value']['fone'])) echo $contactSite['Option']['value']['fone'];?>" title="" class="phone"><i class="fa fa-phone" data-toggle="tooltip" data-placement="top" title="Call us"></i></a> -->
</footer>
<!--Link js-->  
<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/private.js"></script> 
<script type="text/javascript" src="<?php echo $urlThemeActive; ?>js/main.js"></script>

</body>
</html> 

