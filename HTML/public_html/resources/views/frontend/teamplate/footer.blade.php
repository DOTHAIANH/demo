<footer>
	<div class="fter-top">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="item-fter">
						<h4>{{ $site_info->name_company }}</h4>
						<div class="desc">
							{!! $site_info->des_company !!}
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="item-fter">
						<h4>LIÊN HỆ</h4>
						<div class="social">
							<ul>
								<li><a href="{{ $site_info->link_facebook }}" target="_blank"><img src="{{ __BASE_URL__ }}/images/social-1.png" class="img-fluid" alt=""><span>Facebook: {{ $site_info->facebook }}</span></a></li>
								<li><a href="mailto:{{ $site_info->email }}" target="_blank"><img src="{{ __BASE_URL__ }}/images/social-2.png" class="img-fluid" alt=""><span>{{ $site_info->email }}</span></a></li>
								<li><a href="tel:{{ $site_info->hotline }}" target="_blank"><img src="{{ __BASE_URL__ }}/images/social-3.png" class="img-fluid" alt=""><span>{{ $site_info->hotline }}</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="item-fter">
						<h4>CHÍNH SÁCH VÀ ĐIỀU KHOẢN</h4>
						<div class="link-fter">
							<ul>
								<?php 
									if(!empty($site_info->post_ids)) {
                        				$postft = \App\Models\Post::whereIn('id', $site_info->post_ids ?? [])->get();
									}
								?>
								@foreach($postft ?? [] as $item)
									<li><a href="{{ route('single.blog',$item->slug) }}">{{ $item->name }}</a></li>
                                @endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- 	<div class="copyright">
		<div class="container">
			<p class="mb-0">©2022 Design By LeeAnh</p>
		</div>
	</div> -->
</footer>