
<?php global $themeSettings;getHeader();?>




		<section class="main">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row ">

							<?php

						if(!empty($tmpVariable['listData'])){
							foreach($tmpVariable['listData'] as $item){
								$urlNotice = getUrlNotice($item['Notice']['id']);
								echo '<div class="col-md-5">
								        <div class="pt-5">
								          <a href="'.$urlNotice.'" title=""><img src = "'.$item['Notice']['image'].'" alt ="" style="width:100%;" height="100%"; "></a>
								        </div>
								      </div>

								      <div class="col-md-7">
								         <div class="pt-5">
								        <a href="'.$urlNotice.'" title="" <h1 style="font-size: 1.4rem;color:black; text-decoration: none; font-weight:bold ;overflow: hidden;text-overflow: ellipsis; -webkit-line-clamp: 2;-webkit-box-orient: vertical;display: -webkit-box;" >'.$item['Notice']['title'].'</h1></a>
								         <p style="overflow: hidden;text-overflow: ellipsis; -webkit-line-clamp: 3;-webkit-box-orient: vertical;display: -webkit-box;">'.$item['Notice']['introductory'].'</p>
								        <p><i class="far fa-calendar-minus"></i> '.date('d/m/Y',$item['Notice']['time']).'</p>
								         </div>	
								      </div>
								      <hr style="width: 100%; border: 1px solid black">';
							}
						}
					?>
						<br>
					
					</div>



					
					<ul class="pagination justify-content-center">
						<?php
						if($tmpVariable['page']>5){
							$tmpVariable['startPage']= $tmpVariable['page']-5;
						}else{
							$tmpVariable['startPage']= 1;
						}

						if($tmpVariable['totalPage']>$tmpVariable['page']+5){
							$tmpVariable['endPage']= $tmpVariable['page']+5;
						}else{
							$tmpVariable['endPage']= $tmpVariable['totalPage'];
						}
						
						echo '
						<li class="page-item">
						<a style="color: black" href="'.$tmpVariable['urlPage'].$tmpVariable['back'].'" class="page-link">Trang trước</a>
						</li>
						';
						for($i=$tmpVariable['startPage'];$i<=$tmpVariable['endPage'];$i++){
							echo '
							<li class="page-item">
							<a style="color: black" href="'.$tmpVariable['urlPage'].$i.'" class="page-link">'.$i.'</a>
							</li>
							';
						}
						echo '
						<li class="page-item">
						<a style="color: black" href="'.$tmpVariable['urlPage'].$tmpVariable['next'].'" class="page-link">Trang sau</a>
						</li>
						';
						?>
					</ul>
			



					
				</div>







					<div class="col-md-4 pt-5">
						<div class="card">
							<div class="card-header">
								<p>ĐĂNG NHẬP PHẦN MỀM</p>
								
							</div>
							<div class="row pt-3 card-body">
								<form action="/login" method="post">
									<div class="form-group mb-lg col-md-12">
										<label>Số điện thoại</label>
										<div class="input-group input-group-icon">
											<input name="phone" type="text" class="form-control input-lg" />
										</div>
									</div>

									<div class="form-group mb-lg col-md-12">
										<label class="pull-left">Mật khẩu</label>
										<div class="input-group input-group-icon">
											<input name="password" type="password" class="form-control input-lg" />
										</div>                                
									</div>

									<div class="form-group mb-lg col-md-12">
										<button type="submit" class="btn btn-secondary">Đăng nhập</button>
									</div>
								</form>
							</div>
						</div>
						<br/>
						
						<div class="card ">
							<div class="card-header">
								<div class=" text-white main">

									<div class="text-center button" id="myBtnContainer">
										<button class="btn  active" onclick="filterSelection('nature')"><b><i class="fas fa-bolt"></i> Xu hướng</b> </button>
										<button class="btn " onclick="filterSelection('cars')"><b><i class="fas fa-heart"></i> Đọc nhiều</b> </button>

									</div>


								</div>

							</div>


							<div class="card-body" >
								<div class="">
									<div class="column nature pt-3">
										<div class="row">
										<?php
											global $modelNotice;
											$news= $modelNotice->getOtherNotice(array(2),6);

											if(!empty($news)){
												foreach($news as $item){
													$urlNotice = getUrlNotice($item['Notice']['id']);
													echo '<div class="col-md-5 pt-3">

													<a href="'.$urlNotice.'" title=""><img src = "'.$item['Notice']['image'].'" alt ="" style="width:100%;"></a>

													</div>

													<div class="col-md-7 pt-3">
													<a href="'.$urlNotice.'" title="" <h1 style="font-size: 15px;color:black; text-decoration: none; font-weight:500" >'.$item['Notice']['title'].'</h1></a>
													</div>
													';
												}
											}
											?>
										</div>

									</div>
									
									
								
								

									
									
									

								</div>


								<div class="">
									<div class="column cars pt-3">
										<div class="row">
											<?php
											global $modelNotice;
											$news= $modelNotice->getOtherNotice(array(3),6);

											if(!empty($news)){
												foreach($news as $item){
													$urlNotice = getUrlNotice($item['Notice']['id']);
													echo '<div class="col-md-5 pt-3">

													<a href="'.$urlNotice.'" title=""><img src = "'.$item['Notice']['image'].'" alt ="" style="width:100%;"></a>

													</div>

													<div class="col-md-7 pt-3">
													<a href="'.$urlNotice.'" title="" <h3 style="font-size: 15px;color:black; text-decoration: none; font-weight:500" >'.$item['Notice']['title'].'</h3></a>
													</div>
													';
												}
											}
											?>
										</div>
									</div>
									
									
									
									
								</div>
							




							</div>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</section>
		<br>
		<section class="">
			<div class="container text-center">
				<h1 style="font-size: 16px;font-weight: bold;"><?php echo @$themeSettings['Option']['value']['titleLearn1']; ?></h1>
			</div>
			<div class="">
				<div class="container">
					<p><i><?php echo @$themeSettings['Option']['value']['textSlide']; ?></i></p>
				</div>
				

				
			</div>
			
		</section>

		<?php getFooter();?>


		