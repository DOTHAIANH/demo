$(document).ready(function(){
    $(".slide-show-skate").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow:`<button type='button' class='slick-prev pull-left'><i class="fa-solid fa-angle-left"></i></button>`,
        nextArrow:`<button type='button' class='slick-next pull-right'><i class="fa-solid fa-angle-right"></i></button>`,
        dots: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    speed: 500
                },
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    speed: 500
                },
            },
            {
                breakpoint: 481,
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