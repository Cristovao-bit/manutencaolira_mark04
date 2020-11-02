$(function () {

    //SUSPENDE MENU!
    $(window).scroll(function () {
        if ($(this).scrollTop() > $('.main_header').outerHeight() + 150) {
            $('body').css('padding-top', $('.main_header').outerHeight());
            $('.main_header').addClass('main_header_fixed');
            $('.j_back').fadeIn('500');
        } else {
            $('body').css('padding-top', '0');
            $('.main_header').removeClass('main_header_fixed');
            $('.j_back').fadeOut('500');
        }
    });

    //BACK TOP
    $('.j_back').click(function () {
        $('html, body').animate({scrollTop: 0}, 1000);
    });

});

