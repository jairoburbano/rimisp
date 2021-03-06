(function($) {
    // Tamaño de la pantalla
    var $window = $(window);

    windowSize	= $window.width();
    function dropdown() {
        var menuItem = $('.dropdown');
        menuItem.click(function () {
            $(this).parent().find('.dropdown--list').stop().slideToggle(300);
            $(this).parent().toggleClass('here');
            $(this).parent().siblings().removeClass('here');
            $(this).parent().siblings().find('.dropdown--list').slideUp(300);
        });
    }
    function selectores() {
        var selectTitle = $('.select--title');
        selectTitle.click(function () {
            $(this).parent().find('.select--items').stop().slideToggle(300);
            $(this).parent().toggleClass('here');
            $(this).parent().siblings().removeClass('here');
            $(this).parent().siblings().find('.select--items').slideUp(300);
        });
    }
    function initSlide() {
        $('.slider').flexslider({
            animation: "slide",
            slideshow: 'true',
            slideshowSpeed: 9000,
            animationSpeed: 900,
            pauseOnHover: "true",
            directionNav: "true",
            prevText: " ",
            nextText: " ",
            controlsContainer: $(".custom-controls-container"),
            before: function(slider){
                $('.slidefade').flexslider(slider.animatingTo);
            }
        });
        $('.slidefade').flexslider({
            animation: "fade",
            slideshow: 'true',
            slideshowSpeed: 9000,
            animationSpeed: 900,
            pauseOnHover: "true",
            controlNav: false,
            directionNav: "false",
            before: function(slider){
                $('.slider').flexslider(slider.animatingTo);
            }
        });
    }
    function letter() {
        $('.letter-dropdown-button').click(function() {
            $(this).parent().addClass('active');
            $(this).parent().find('.letter-dropdown-list').stop().slideToggle();
            $(this).parent().siblings().find('.letter-dropdown-list').slideUp();
            $(this).parent().siblings().removeClass('active');
        });
    }
    function menuMobile() {
        if($(window).width() < 720){
            $('.menu-mobile').click(function() {
                $('.content-mobile').stop().slideToggle();
            });
            $('.dropdown').click(function() {
                $(this).parent().find('.dropdown--list').slideToggle();
                $(this).parent().toggleClass('active');
                $(this).parent().siblings().find('.dropdown--list').slideUp();
            });
        }
    }
    selectores();
    initSlide();
    letter();
    menuMobile();
})(jQuery);