<!-- <?php debug($tmpVariable);?> -->
<?php
	getHeader();
?>
	
	
<section id="aboutme" class="subpages">

		<div class="container">
			<div class="row ">
				<div class="col-12">
					<div class="personaltBanner">
						<img src="<?php echo $tmpVariable['data']['Staff']['staff']['images'][1]; ?>" alt="" class="img-fluid" style="border-radius: 0px 0px 15px 15px;">
						<div class="avatar text-center">
							<img src="<?php echo $tmpVariable['data']['Staff']['staff']['images'][0]; ?>" alt="" class="img-fluid">
						</div>
					</div>
					<div class="personalInfo text-center">
						<h1><?php if(!empty($tmpVariable['data']['Staff']['staff']['name'])){
							echo $tmpVariable['data']['Staff']['staff']['name'];
							}  ?></h1>
						<p >
							<?php if(!empty($tmpVariable['data']['Staff']['staff']['positons'])){
							echo $tmpVariable['data']['Staff']['staff']['positons'];
							}  ?>
						</p>
						<div class="btn-mobie">
							<div class="d-flex ">
								<button class="btn-heart">
									<a href="
									<?php if(!empty($tmpVariable['data']['Staff']['staff']['facebooks'])){
										echo $tmpVariable['data']['Staff']['staff']['facebooks'];
										} ?>">
										<i class="fas fa-heart"></i> Yêu Thích
									</a>
								</button>
								<button class="btn-use">
									<a href="
									<?php if(!empty($tmpVariable['data']['Staff']['staff']['facebooks'])){
										echo $tmpVariable['data']['Staff']['staff']['facebooks'];
										} ?>">
										<i class="fas fa-user-alt"></i> Theo Dõi
									</a>
								</button>
							</div>
						</div>
						
					</div>
					<div class="liner"></div>
					<div class="contactInfo ">
						<div class="row justify-content-center">
							<div class="col-md-4">
								 <p style="font-size: 24px; font-weight: 600; margin-bottom:0px " class="text-uppercase">thông tin liên hệ</p>
							</div>
							<div class="col-md-4  btn-pc">
								<div class="d-flex">
									<button class="btn-heart">
										<a target="_blank" href="<?php if(!empty($tmpVariable['data']['Staff']['staff']['facebooks'])){
										echo $tmpVariable['data']['Staff']['staff']['facebooks'];
										} ?>">
											<i class="fas fa-heart"></i> Yêu Thích
										</a>
									</button>
									<button class="btn-use">
										<a target="_blank" href="<?php if(!empty($tmpVariable['data']['Staff']['staff']['facebooks'])){
										echo $tmpVariable['data']['Staff']['staff']['facebooks'];
										} ?>">
											<i class="fas fa-user-alt"></i> Theo Dõi
										</a>
									</button>
								</div>
							</div>
							
					   	</div>

					   	<div class="row justify-content-center " style="margin-top: 20px;">
					   		<div class="col-md-4">
					   			<div class="d-flex text-tt">
						   			<img src="<?php echo $urlThemeActive ?>images/phone1.png">
						   			<div>
						   				<a href="" style="color: #29662b;">
						   					<?php echo $tmpVariable['data']['Staff']['staff']['numberPhone']; ?>
						   				</a>	
						   			</div>	
								</div>
								<div class="d-flex text-tt">
									<img src="<?php echo $urlThemeActive ?>images/mail.png">
									<p><?php echo $tmpVariable['data']['Staff']['staff']['email']; ?></p>
									
								</div>
								<div class="d-flex text-tt">
									<img src="<?php echo $urlThemeActive ?>images/address.png">
									<div>
										<?php echo $tmpVariable['data']['Staff']['staff']['address']; ?>
									</div>
									
								</div>
					   		</div>
					   		<div class="col-md-4"></div>

					   	</div>
					   	<div class="row justify-content-center generalAgents" >
					   		<div class="col-md-3 col-3">
					   			<p>
					   				<?php if(!empty($tmpVariable['data']['Staff']['staff']['generalAgents'])){
										echo $tmpVariable['data']['Staff']['staff']['generalAgents'];
										} ?>
					
					   			</p>
					   			<span>TỔNG ĐẠI LÝ</span>
					   		</div>
					   		<div class="col-md-3 col-3">
					   			<p>
					   				<?php if(!empty($tmpVariable['data']['Staff']['staff']['agents'])){
										echo $tmpVariable['data']['Staff']['staff']['agents'];
										} ?>
				   				</p>
					   			<span>ĐẠI LÝ</span>
					   		</div>
					   		<div class="col-md-3 col-3">
					   			<p>
					   				<?php if(!empty($tmpVariable['data']['Staff']['staff']['agency'])){
										echo $tmpVariable['data']['Staff']['staff']['agency'];
										} ?>
					   			</p>
					   			<span>CHI NHÁNH</span>
					   		</div>
					   	</div>
						
					</address>
					</div>
				</div>
			</div>
		</div>
	</section>


	

	<script type="text/javascript" src="js/compairimage.js"></script>

	
<?php getFooter()?>