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
            $('.n2-ss-align').css('opacity', '1');
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
        $('.wp-block-woocommerce-product-category').each(function(){
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
        items: 3,
        // margin: 10,
        loop: true,
        nav: true,
        navText : ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            800:{
                items: 3
            },
            1000:{
                items:2
            },
            1200:{
                items: 4
            }
        }

    });

    $(".main-navigation .menu > li > a").addClass("underline-from-center");



    //
    // $('.call').on('click', function () {
    //             $('.popup')
    //                 .css('opacity', "1", "display", "block");
    //
    // });
    //
    // // $('.popup-call').click(function () {
    // //     // закрывает popup окно при нажатии "найти вместо меня" если это отлючено в настройках (закрыть при конверсии)
    // //     // $('.spu-box').attr('style', 'display:none');
    // //     // $('#spu-bg-2306').attr('style', 'display:none');
    // //
    // //     findForMeModal();
    // // });
    //
    // // function findForMeModal() {
    // //     $('.popup-bg').addClass('123').fadeIn(400,
    // //         function () {
    // //             $('.popup')
    // //                 .show()
    // //                 .animate({opacity: 1, top: '25%'}, 300);
    // //         });
    // //     // return false;
    // // }
    // $('.close-modal, .popup-bg').click(function () {
    //     $('.popup')
    //         .animate({opacity: 0, top: '50%'}, 300,
    //             function () {
    //                 $(this).hide().css('top', '0');
    //                 $('.popup-bg').fadeOut(400);
    //             }
    //         );
    //     return false;
    // });

});

const btn = document.querySelector('.call');
const modal = document.querySelector('.modal-container');
const modalCloseBtn = document.querySelector('#myButton');

btn.addEventListener('click', function() {
    modal.style.display = 'block';
});

modalCloseBtn.addEventListener('click', function() {
    modal.style.display = 'none';
});

modal.addEventListener('click', function() {
    if(e.target.classList.contains('modal-container')) {
        modal.style.display = 'none';
    }
});