var owl = $('.owl_slider');
owl.owlCarousel({
  margin: 0,
  nav: false,
  dots: true,
  autoplay: true,
  loop: true,
  items: 1
});
var owl = $('.owl_box8');
owl.owlCarousel({
  margin: 0,
  nav: false,
  dots: true,
  autoplay: true,
  loop: true,
  responsive:{
    0:{
      items:2
    },
    600:{
      items:4
    },
    1000:{
      items:6
    }
  }
});

$("#owl-demo1").owlCarousel({
  navigation : true,
  slideSpeed : 300,
  autoplay: true,
  paginationSpeed : 400,
  singleItem : false,
  itemsMobile : [479, 3],
  items: 4

});



$('.icon_search').click(function(){
  $('.search_w').slideToggle('fast');
})


var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
  forEach(hamburgers, function(hamburger) {
    hamburger.addEventListener("click", function() {
      this.classList.toggle("is-active");
    }, false);
  });
}
$('.hamburger').click(function(){
  $('.header-menu').slideToggle();
})
var d=0;
$('.hassub').click(function(){
  d++;
  if(d%2!=0){
     $(this).find('.menusub').slideDown();
   } else{
     $(this).find('.menusub').slideUp();
   }
 
})


$('#toTop').click(function () {
  $('html, body').animate({
    scrollTop: 0
  }, 1000);
});

$(window).scroll(function () {
  var a = 200;
  var pos = $(window).scrollTop();
  if (pos > a) {
    $("#toTop").css({
      'opacity': 1,
      'transition': 'all 0.5s '

    });
  } else
  $("#toTop").css({
    'opacity': 0
  });

});