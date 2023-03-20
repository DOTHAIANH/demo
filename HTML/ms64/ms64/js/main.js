(function($) { "use strict";	

	$(document).ready(function() {
		$('body.hero-anime').removeClass('hero-anime');
	});
	$('body').on('mouseenter mouseleave','.nav-item',function(e){
		if ($(window).width() > 750) {
			var _d=$(e.target).closest('.nav-item');_d.addClass('show');
			setTimeout(function(){
				_d[_d.is(':hover')?'addClass':'removeClass']('show');
			},1);
		}
	});	

	$(window).scroll(function(){
		var scrolled = $(window).scrollTop();
		if (scrolled > 200) $('.go-top').fadeIn('slow');
		if (scrolled < 200) $('.go-top').fadeOut('slow');
	});

	$('.go-top').click(function () {
		$("html, body").animate({ scrollTop: "0" },  500);
	});

	$("#aboutUsSlider").owlCarousel({
		items:1,
		pagination:true,
		navigationText:false,
		loop:true,
		autoPlay:true
	});	
	// $("#bannerSlider").owlCarousel({
	// 	items:1,
	// 	pagination:false,
	// 	navigationText:false,
	// 	autoPlay:true,
	// 	autoplayTimeout: 3000,
	// 	loop:true
	// });
	$('#bannerSlider').owlCarousel({
        loop:true,
        margin:80,
        nav:false,
        autoplay:true,
        autoplayTimeout:6500,
        items:1
    });
	$("#productSlider").owlCarousel({
		margin:30,
		autoPlay:true,
		loop:true,
		responsiveClass:true,
		autoplayTimeout:2500,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:2,
				nav:false
			},
			1000:{
				items:3,
				nav:false,
				loop:false
			}
		}
	});
	$("#listManagerSlider").owlCarousel({
		loop: true,
		margin:30,
		autoplay: true,
		owl2row: true,
		responsiveClass:true,
		responsive:{
			0:{
				items:2,
				nav:true
			},
			600:{
				items:3,
				nav:true,
			},
			1000:{
				items:4,
				nav:true,
				loop:true,
			}
		}
	});
	$("#whyChooseSlider").owlCarousel({
		margin:30,
		pagination:true,
		navigationText:false,
		autoPlay:true,
		loop:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:2,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:4,
				nav:true,
				loop:false
			}
		}
	});
	$("#footNewsSlider").owlCarousel({
		loop:true,
        margin:30,
        nav:false,
        autoplay:true,
        autoplayTimeout:2500,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:2,
				nav:true
			},
			1000:{
				items:3,
				nav:true,
				pagination:true
			}
		}
	});
	$("#listProducSlider-01, #listProducSlider-02, #listProducSlider-03").owlCarousel({		
		autoPlay:true,
		nav:true,
		loop:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:2,
				margin:15
			},
			600:{
				items:2,
				margin:30
			},
			1000:{
				items:4,
				margin:30
			}
		}
	});



})(jQuery); 

