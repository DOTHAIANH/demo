			</div><!-- / inner -->
		</div><!-- / container -->

	</div><!-- / content-wrapper -->
	<!-- / M A I N   C O N T E N T -->

	<!-- F O O T E R -->
	<footer class="container">
		<div class="footer-header">
			<h4>Phụ Tùng Ô Tô Toyota TTC</h4>
			<span class="hotline">Hotline: <?php echo $contactSite['Option']['value']['fone']; ?></span>
		</div><!-- / footer-header -->
		<div class="inner">
			<div class="pre-bottom">
				<div class="logo col-sm-2 col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".2s">
					<a href="<?php echo $urlHomes;?>"><img width="150" class="img-responsive" src="<?php echo $urlThemeActive;?>images/logo2.png"></a></br>
					<center><a href="<?php echo $urlHomes;?>">Phụ Tùng Ô Tô Toyota</a></center>
				</div><!-- / sitemap -->
				<div class="col-sm-4 col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".4s">
					<h3 class="head"><?php echo $infoSite['Option']['value']['title'];?></h3>
					<?php
						global $phutungotottcThemeSettings;
						echo @$phutungotottcThemeSettings['Option']['value']['textContactFooter'];
					?>
				</div>
				<div class="col-sm-3 col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".6s">
					<h3 class="head">Hướng dẫn</h3>
					<ul>
						<?php
							global $phutungotottcThemeSettings;
							if(isset($phutungotottcThemeSettings['Option']['value']['idLinkWebCategoryFooter']) && function_exists('getListLinkWeb')){
								$getListLinkWeb= getListLinkWeb($phutungotottcThemeSettings['Option']['value']['idLinkWebCategoryFooter']);
								if(count($getListLinkWeb)>0){
									foreach($getListLinkWeb as $components){
										echo '<li><a target="_blank" href="'.$components['link'].'">'.$components['name'].'</a></li>';
									}
								}
							}
						?>
					</ul>
				</div>
				<div class="col-sm-3 col-xs-12 wow fadeInUp wHighlight" data-wow-delay=".8s">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6194481649345!2d105.8553745146903!3d21.007886386009623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abf5e672e421%3A0x30711cd3b40204d1!2zUGjhu6UgVMO5bmcgw5QgVMO0IFRUQw!5e0!3m2!1svi!2s!4v1551082225788" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div><!-- / container -->
		</div><!-- / inner -->

		<div class="bottom">
			<div class="copyright col-sm-12">
				<?php
					global $phutungotottcThemeSettings;
					echo @$phutungotottcThemeSettings['Option']['value']['textFooter'];
				?>
				<!--
				<br/>
				<center>
					Design by <a href="http://mantanservices.com">Mantan Services</a>
				</center>
				-->
			</div>
		</div><!-- / bottom -->
	</footer>
	<!-- / F O O T E R -->
	
	<div class="divOnRightBottom" id="divOnRightBottom">
		<div class="divCenter">
			<a href="javascript:void(0);" onclick="$('html, body').animate({ scrollTop: 0 }, 'slow');">
				<img src="<?php echo $urlThemeActive;?>images/gotop.png" />
			</a>
		</div>
	</div>
	
	<?php if(function_exists('showSubizHome')) showSubizHome();?>
	
	<a href="https://zalo.me/<?php echo $contactSite['Option']['value']['fone']; ?>" title="" class="chatzalo">Chat Zalo</a>
	<a href="tel:<?php echo $contactSite['Option']['value']['fone']; ?>" title="" class="phone_fixed"><i class="fa fa-phone" aria-hidden="true"></i><?php echo $contactSite['Option']['value']['fone']; ?></a>

	<script type="text/javascript">
		function processSearch()
		{
			var key = $('#keyGlobal').val();
			var category = $('#categoryGlobal').val();
			
			if(key==''){
				key = '0';
			}

			if(category==''){
				category = '0';
			}

			key = ChangeToSlug(key);

			var link = '/tag/'+key+'/'+category;

			window.location = link;

			return false;
		}

		function processSearchSidebar()
		{
			var key = $('#keySidebar').val();
			//var category = $('#categorySidebar').val();
			var category = '';
			var price = $('#Slider1').val();
			price = price.replace(";", "-");
			
			if(key==''){
				key = '0';
			}

			if(category==''){
				category = '0';
			}

			key = ChangeToSlug(key);

			var link = '/tag/'+key+'/'+category+'/'+price;

			window.location = link;

			return false;
		}

		function ChangeToSlug(title)
		{
			var slug;
			
			//Đổi chữ hoa thành chữ thường
			slug = title.toLowerCase();
			
			//Đổi ký tự có dấu thành không dấu
			slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
			slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
			slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
			slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
			slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
			slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
			slug = slug.replace(/đ/gi, 'd');
			//Xóa các ký tự đặt biệt
			slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
			//Đổi khoảng trắng thành ký tự gạch ngang
			slug = slug.replace(/ /gi, "-");
			//Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
			//Phòng trường hợp người nhập vào quá nhiều ký tự trắng
			slug = slug.replace(/\-\-\-\-\-/gi, '-');
			slug = slug.replace(/\-\-\-\-/gi, '-');
			slug = slug.replace(/\-\-\-/gi, '-');
			slug = slug.replace(/\-\-/gi, '-');
			//Xóa các ký tự gạch ngang ở đầu và cuối
			slug = '@' + slug + '@';
			slug = slug.replace(/\@\-|\-\@|\@/gi, '');
			
			//In slug ra textbox có id “slug”
			return slug;
		}
	</script>
</body>
</html>