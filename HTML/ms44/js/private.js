 
$('.slide-banner').slick({
    autoplay: true,
    arrow: false,
    // nav:true;
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1, 
    prevArrow: '',
    nextArrow: '',
});  
// $('.multiple-items').slick({
//   infinite: true,
//   slidesToShow: 2,
//   slidesToScroll: 1,
// });
    

// $('.slide-feedback').slick({
//     autoplay: false,
//     arrow: false,
//     dots: true, 
//     slidesToShow: 1,
//     slidesToScroll: 1, 
//     prevArrow: '',
//     nextArrow: '',
// }); 


// $('.autoplay').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 2000,
// });

// $('.slide-news').slick({
//     autoplay: false,
//     arrow: false,
//     dots: true, 
//     slidesToShow: 4,
//     slidesToScroll: 1, 
//     prevArrow: '',
//     nextArrow: '',
//     responsive: [
//         {
//             breakpoint: 1023, 
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1,
//             } 
//         }, 
//         {
//             breakpoint: 767, 
//             settings: {
//                 slidesToShow: 3,
//                 slidesToScroll: 1,
//             } 
//         }, 
//         {
//             breakpoint: 480,
//             settings: {
//                 slidesToShow: 1,
//                 slidesToScroll: 1,
//             }
//         }
//     ]
// }); 


$('.multiple-items').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


if($(window).innerWidth() >= 1024){
    $(document).ready(function(){
       $(window).bind('scroll', function() {
             if ($(window).scrollTop() > 37) {
                 $('.header-menu, main').addClass('fixed');
             }
             else {
                 $('.header-menu, main').removeClass('fixed');
             }
        });
    });
}


jQuery(document).ready(function( $ ) {
  $("#menu").mmenu({
     "extensions": [
        "fx-menu-zoom"
     ],
     "counters": true
  });
}); 



// $('.center').slick({
//   centerMode: true,
//   centerPadding: '60px',
//   slidesToShow: 2,
//   responsive: [
//     {
//       breakpoint: 768,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '0px',
//         slidesToShow: 2
//       }
//     },
//     {
//       breakpoint: 480,
//       settings: {
//         arrows: false,
//         centerMode: true,
//         centerPadding: '40px',
//         slidesToShow: 1
//       }
//     }
//   ]
// });


  $(document).ready(function() {
          $('.owl-carousel').owlCarousel({
              loop: true,
              margin: 10,
              responsiveClass: true,
              responsive: {
                  0: {
                      items: 1,
                      nav: true
                  },
                  600: {
                      items: 3,
                      nav: false
                  },
                  1200: {
                      items: 3,
                      nav: true,
                      loop: false,
                      margin: 20
                  }
              }
          })
      });   

 new WOW().init();