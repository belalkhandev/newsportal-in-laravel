(function ($) {
    "use-strict"

    jQuery(document).ready(function () {
        
        //feature news owl-carousel
        if ($('.featured-news-item').length > 0) {
            $('#featureNewsCarousel').owlCarousel({
                items: 4,
                margin: 5,
                loop: true
            });
        }



    });

    /*==========   Sticky Navbar   ==========*/
    $(window).on('scroll', function () {
        if ($(window).width() >= 992) {
            var $navbar = $('.sticky-navbar');
            if ($(window).scrollTop() > 100) {
                $navbar.addClass('fixed-navbar');
            } else {
                $navbar.removeClass('fixed-navbar');
            }
        }
    });


}(jQuery));