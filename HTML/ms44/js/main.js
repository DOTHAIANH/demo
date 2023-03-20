
$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        // console.log(pos_body);
        if (pos_body > 400) {
            $('.header-menu').addClass('menu-backgrou');
        } else {
            $('.header-menu').removeClass('menu-backgrou');
        }
        if (pos_body > 400) {
            $('.header-menu a').addClass('text-brow');
        } else {
            $('.header-menu a').removeClass('text-brow');
        }
    });
});

              