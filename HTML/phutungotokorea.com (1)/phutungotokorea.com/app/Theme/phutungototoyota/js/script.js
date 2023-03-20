/*=====================================================
 S m o o t h   S c r o l l
=====================================================*/


/*=====================================================
 Disable/Enable   S c r o l l
=====================================================*/
// left: 37, up: 38, right: 39, down: 40,
// spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36
var keys = [37, 38, 39, 40];

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;  
}

function keydown(e) {
    for (var i = keys.length; i--;) {
        if (e.keyCode === keys[i]) {
            preventDefault(e);
            return;
        }
    }
}

function wheel(e) {
  preventDefault(e);
}

function disable_scroll() {
  if (window.addEventListener) {
      window.addEventListener('DOMMouseScroll', wheel, false);
  }
  window.onmousewheel = document.onmousewheel = wheel;
  document.onkeydown = keydown;
}

function enable_scroll() {
    if (window.removeEventListener) {
        window.removeEventListener('DOMMouseScroll', wheel, false);
    }
    window.onmousewheel = document.onmousewheel = document.onkeydown = null;  
}



/*=====================================================
 S T R I N G   L I M I T ( )
=====================================================*/
function stringLimit($object, len) {
	$object.each(function(){
		if ($(this).text().length > len) {
			$(this).text($(this).text().substr(0, len));
			$(this).append(' ...');
		}
	})
}

/*=====================================================
 M O N E Y   F O R M A T
=====================================================*/
function moneyFormat(value) {
    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

/*=====================================================
 O n l o a d ( )
=====================================================*/
$(window).load(function() {
	/*  Default popup */
	var popup = $('.default-popup');
	var prcMarLeft = -((popup.find('.popup-image').outerWidth()) / 2);
	var prcMarTop = -((popup.find('.popup-image').outerHeight()) / 2);
	popup.find('.popup-image').css({
		'top': '50%',
		'left': '50%',
		'margin-top': prcMarTop,
		'margin-left': prcMarLeft,
	});
	popup.find('.popup-close').on('click', function() {
		popup.fadeOut(300);
	});
	// $('.detail .nav-tabs li:last-child').removeClass('active');
	// $('.detail .nav-tabs li:first-child').addClass('active');
	// $('.detail .tab-content > div:last-child').removeClass('active');
	// $('.detail .tab-content > div:first-child').addClass('active');
	// $('#map-product-detail').on('shown', function() {
	// 	google.maps.event.trigger(map, 'resize');
	// 	map.setZoom( map.getZoom() );
	// });
})

/*=====================================================
 R E A D Y ( )
=====================================================*/
$(document).ready(function(){

	/*  String limit */
	stringLimit($('.an-article .brief'), 150);
	stringLimit($('.a-product .brief .prd-name'), 35);

	/* Product-detail thumbnails */
	$('.figures .a-thumbnail').click(function(){
		var src = $(this).first-child()('img.img-responsive').attr('src');
		$(this).parent().parent().find('a').attr('href',src);
		$(this).parent().parent().find('.main-image').fadeOut(200, function(){
			$(this).attr('src',src).fadeIn(200);
		});
	});

	$('.sidebox.advance-filter .classify').on('click', function() {
		var target = $(this).attr('data-collapse-target');
		$(this).parent().find(target).toggle(200);
		$(this).toggleClass('open');
	});
	
	$( "#slider-range" ).slider({
		range: true,
		min: 100000,
		max: 5000000,
		step: 100000,
		values: [ 1000000, 3000000 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( moneyFormat(ui.values[ 0 ]) + " đ - " + moneyFormat(ui.values[ 1 ]) + " đ");
		}
	});
	$( "#amount" ).val( moneyFormat($( "#slider-range" ).slider( "values", 0 )) + " đ - " + moneyFormat($( "#slider-range" ).slider( "values", 1 )) + " đ");

	 /*NAVBAR*/
	$('.st-collapse-button button').click( function() {
		var targetId = $(this).attr('data-target');
		$target = $(this).parent().parent().find(targetId);
		$targetState = $target.css('display');
		if ($targetState != "block") {
			$target.slideDown(300);
		} else {
			$target.slideUp(300);
		}
	});
	// Navbar when on mobile
	$('.st-nav li.st-dropdown .collapse-toggle').click( function(e) {
		$target = $(this).parent().children('.st-dropdown-menu');
		$targetState = $target.css('display');
		if ($targetState != "block") {
			$target.slideDown(300);
			console.log("Down");
		} else {
			$target.slideUp(300);
			console.log("Up");
		}
		e.stopPropagation();
	});

	/**
	 *  Product detail popup
	 */
	$('.a-product .media-container').on({
		mouseenter: function() {
			var prdId = $(this).parent().parent().attr('data-prdid');
			$(this).parents().find(".popup-detail[data-prdid='" + prdId + "']").fadeIn(200);
		}, mousemove: function(e){
			var prdId = $(this).parent().parent().attr('data-prdid');
			var toRightBorder = $(window).width() - e.pageX;
			if(toRightBorder < 310) {
				$(this).parents().find(".popup-detail[data-prdid='" + prdId + "']").css({
					top: e.pageY + 10,
					left: e.pageX - 310
				})
			}else {
				$(this).parents().find(".popup-detail[data-prdid='" + prdId + "']").css({
					top: e.pageY + 10,
					left: e.pageX + 10
				})
			}
		}, mouseleave: function() {
			$('.popup-detail').fadeOut(10);
		}
	});
	/*  Collapse List */
	$(window).on("load", function(){
		var width = $(this).width();
		if ( width < 768) {
			$('.custom-collapse-list .level-1 .collapse-toggle').bind('click', function(){
				var state = $(this).parent().find('.level-2').css('display');
				if (state === "block") {
					$(this).parent().find('.level-2').slideUp('fast');
				} else {
					$(this).parent().parent().find('.level-2').slideUp('fast');
					$(this).parent().find('.level-2').slideDown('fast');
				}
			});
		} else {
			$('.custom-collapse-list .level-1').unbind('click');
		}
	});


	/* N i v o   L i g h t b o x */
	$('a.nivo-lightbox').nivoLightbox({
		effect: 'fadeScale',                             // The effect to use when showing the lightbox: fade fadeScale slideLeft slideRight slideUp slideDown fall
		theme: 'default',                           // The lightbox theme to use
		keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
		clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
		onInit: function(){},                       // Callback when lightbox has loaded
		beforeShowLightbox: function(){},           // Callback before the lightbox is shown
		afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
		beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
		afterHideLightbox: function(){},            // Callback after the lightbox is hidden
		onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
		onNext: function(element){},                // Callback when the lightbox gallery goes to next item
		errorMessage: 'Đã có lỗi xảy ra. Vui lòng thử lại sau ít phút.' // Error message when content can't be loaded
	});

	/* M e d i a   C o n t a i n e r   M o d u l e   */
	$('.media-container').mouseenter(function(){
		var prcMarLeft = -(($(this).find('.price-wrapper').outerWidth()) / 2);
		var prcMarTop = -(($(this).find('.price-wrapper').outerHeight()) / 2);
		$(this).find('.price-wrapper').css({
			'margin-left': prcMarLeft,
			'margin-top': prcMarTop,
			'left': '50%',
			'top': '50%',
		});
		var icoMarLeft = -(($(this).find('.icon').outerWidth()) / 2);
		var icoMarTop = -(($(this).find('.icon').outerHeight()) / 2);
		$(this).find('.icon').css({
			'margin-left': icoMarLeft,
			'margin-top': icoMarTop,
			'left': '50%',
			'top': '50%',
		});
		$(this).find('.icon').addClass('animated-025s slideInUp');
		$(this).find('.price').addClass('animated-025s slideInUp');
		$(this).find('.saleoff').addClass('animated-025s slideInUp');
	});
	$('.media-container').mouseleave(function(){
		$(this).find('.icon').removeClass('animated-025s slideInUp');
		$(this).find('.price').removeClass('animated-025s slideInUp');
		$(this).find('.saleoff').removeClass('animated-025s slideInUp');
	});

	/* N i v o   L i g h t b o x */
	$('a.nivo-lightbox').nivoLightbox({
		effect: 'fadeScale',                             // The effect to use when showing the lightbox: fade fadeScale slideLeft slideRight slideUp slideDown fall
		theme: 'default',                           // The lightbox theme to use
		keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
		clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
		onInit: function(){},                       // Callback when lightbox has loaded
		beforeShowLightbox: function(){},           // Callback before the lightbox is shown
		afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
		beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
		afterHideLightbox: function(){},            // Callback after the lightbox is hidden
		onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
		onNext: function(element){},                // Callback when the lightbox gallery goes to next item
		errorMessage: 'Đã có lỗi xảy ra. Vui lòng thử lại sau ít phút.' // Error message when content can't be loaded
	});

	/*  Table sorter */
	$("table.tablesorter").tablesorter({debug: false});

	/* owl carousel  */
	$(".main-slider").owlCarousel({
		// Most important owl features
		singleItem : true,
		itemsScaleUp : false,
		itemsCustom : false,
		items : 4,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [991,3],
		itemsTablet: [767,3],
		itemsTabletSmall: false,
		itemsMobile : [479,2],

		//Basic Speeds
		slideSpeed : 1000,
		paginationSpeed : 1000,
		rewindSpeed : 500,

		//Autoplay
		autoPlay : 5000,
		stopOnHover : true,

		// Navigation
		navigation : true,
		navigationText : ["‹","›"],
		rewindNav : true,
		scrollPerPage : false,

		//Pagination
		pagination : false,
		paginationNumbers: false,

		// Responsive 
		responsive: true,
		responsiveRefreshRate : 100,
		responsiveBaseWidth: window,

		// CSS Styles
		baseClass : "owl-carousel",
		theme : "owl-theme",

		//Lazy load
		lazyLoad : false,
		lazyFollow : true,
		lazyEffect : "fade",

		//Auto height
		autoHeight : false,

		//JSON 
		jsonPath : false, 
		jsonSuccess : false,

		//Mouse Events
		dragBeforeAnimFinish : true,
		mouseDrag : true,
		touchDrag : true,

		//Transitions
		transitionStyle : "fadeUp",

		// Other
		addClassActive : false,

	});

	/* owl carousel  */
	$(".brands-slider .inner").owlCarousel({
		// Most important owl features
		singleItem : false,
		itemsScaleUp : false,
		itemsCustom : false,
		items : 7,
		itemsDesktop : [1199,6],
		itemsDesktopSmall : [991,4],
		itemsTablet: [767,3],
		itemsTabletSmall: false,
		itemsMobile : [479,3],

		//Basic Speeds
		slideSpeed : 500,
		paginationSpeed : 1000,
		rewindSpeed : 1000,

		//Autoplay
		autoPlay : 2000,
		stopOnHover : true,

		// Navigation
		navigation : false,
		navigationText : ["‹","›"],
		rewindNav : true,
		scrollPerPage : false,

		//Pagination
		pagination : false,
		paginationNumbers: false,

		// Responsive 
		responsive: true,
		responsiveRefreshRate : 100,
		responsiveBaseWidth: window,

		// CSS Styles
		baseClass : "owl-carousel",
		theme : "owl-theme",

		//Lazy load
		lazyLoad : false,
		lazyFollow : true,
		lazyEffect : "fade",

		//Auto height
		autoHeight : false,

		//JSON 
		jsonPath : false, 
		jsonSuccess : false,

		//Mouse Events
		dragBeforeAnimFinish : true,
		mouseDrag : true,
		touchDrag : true,

		//Transitions
		transitionStyle : "fadeUp",

		// Other
		addClassActive : false,
	});

	/*  MAP */
	function googleMap(lat,lng,id) {
		function initialize() {
			var map_canvas = document.getElementById(id);
			var myLatlng = new google.maps.LatLng(lat,lng);
			var map_options = {
				center: myLatlng,
				zoom: 15,
				mapTypeId: google.maps.MapTypeId.TERRAIN,
				// scrollwheel: false
			}

			var map = new google.maps.Map(map_canvas, map_options);

			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title:"TTC AutoPart"
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	}
	googleMap($('#map-footer').attr('data-lat'), $('#map-footer').attr('data-lng'), "map-footer");
	// googleMap($('#map-product-detail').attr('data-lat'), $('#map-product-detail').attr('data-lng'), "map-product-detail");
	googleMap($('#map-contact').attr('data-lat'), $('#map-contact').attr('data-lng'), "map-contact");

});
