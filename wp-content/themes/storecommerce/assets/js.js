$(document).ready(function(){

    function hidePreloader() {
        setTimeout(function () {
            $('#preloader-wrapper').remove();
            $('#preloader').remove();
            $('#content').css('display', 'block');
        }, 2000);
    }



    function animation() {
        setTimeout(function () {
            $('.desktop-header').css('opacity', '1');
            $('.desktop-header').css('animation-name', 'fadeInDown');
            $('.search_block').css('animation-name', 'fadeInLeft');
            $('.n2-ss-align').css('animation-name', 'fadeInUp');
        }, 2000);
    }
    hidePreloader();
    animation();

    $(window).scroll(function() {
        $('.category_block').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+500) {
                $(this).addClass('fadeIn');
                $(this).css('opacity', 1);
            }
        });
    });

    $(window).scroll(function() {
        $('.top_block').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+500) {
                $(this).addClass('fadeIn');
                $(this).css('opacity', 1);
            }
        });
    });

    $(window).scroll(function() {
        $('.top_title').each(function(){
            var imagePos = $(this).offset().top;
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+500) {
                $(this).addClass('fadeIn');
                $(this).css('opacity', 1);
            }
        });
    });

    $('.products.columns-3').addClass('owl-carousel');

    // jQuery('.slider_block').slick({
    //     slidesToShow: 3,
    //     // slidesToScroll: 1,
    //     dots: false,
    //     centerPadding:"10%",
    //     variableWidth: true,
    //     // adaptiveHeight: true,
    //     prevArrow: "<i class=\"fas fa-chevron-left\"></i>",
    //     nextArrow: "<i class=\"fas fa-chevron-right\"></i>",
    // });

    jQuery('.owl-carousel').owlCarousel({
        items: 4,
        margin: 10,
        loop: true,
        nav: true,
        navText : ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        responsive: {
            320 : {
                items: 1,
                nav: false
            },
            768 : {
                items: 2,
                // slideBy: 1,
                nav: false,
            },
            960 : {
                items: 3,
                margin: 10,
                loop: true,
                nav: true,
            },
            1024 : {
                items: 3,
                margin: 10,
                loop: true,
                nav: true,
            },
            1224 : {
                items: 3,
                margin: 10,
                loop: true,
                nav: true,
            },
            1280 : {
                items: 3,
                margin: 10,
                loop: true,
                nav: true,
            },
            1440 : {
                items: 3,
                margin: 10,
                loop: true,
                nav: true,
            }
        }
    });

    $(".main-navigation .menu > li > a").addClass("underline-from-center");

});

