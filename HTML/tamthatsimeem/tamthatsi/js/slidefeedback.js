$(document).ready(function(){
    $(".slide-feedback").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        speed: 500,
        dots: true,
        prevArrow:`<button type='button' class='slick-prev pull-left'><i class="fa-solid fa-angle-left"></i></button>`,
        nextArrow:`<button type='button' class='slick-next pull-right'><i class="fa-solid fa-angle-right"></i></button>`,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    speed: 500
                },
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll:1,
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