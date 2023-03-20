$(document).ready(function(){
    $(".slide-news").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        // dots: true,
        prevArrow:`<button type='button' class='slick-prev pull-left'><i class="fa-solid fa-angle-left"></i></button>`,
        nextArrow:`<button type='button' class='slick-next pull-right'><i class="fa-solid fa-angle-right"></i></button>`,
        arrows: true,
        // autoplay: 500,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    speed: 500
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    speed: 500
                }
            }
        ]
    })
})