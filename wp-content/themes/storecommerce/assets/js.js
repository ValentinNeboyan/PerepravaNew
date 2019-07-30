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
    $(".main-navigation .menu > li > a").removeAttr("href");
    $(".menu_right_arrow").css('display', 'none');

    var $menu = $("#masthead");
    $(window).scroll(function(){
        if ( $(this).scrollTop() > 0 && $menu.hasClass("site-header") ){
            $menu.removeClass("site-header").addClass("fixed");
        } else if($(this).scrollTop() <= 0 && $menu.hasClass("fixed")) {
            $menu.removeClass("fixed").addClass("site-header");
        }
    });//scroll



    $("<div class='dots_bg'></div>").appendTo(".menu-item > a");
    $('.underline-from-center').addClass('active_menu');
    var inputs = document.getElementsByClassName("menu-item");

    for (var i = 0; i < inputs.length; i++) {
        inputs[i].addEventListener("click", myFunction);
    }
    var GodObj = {}, qwqe = 0;
    function myFunction() {

        var idPush = "#"+this.id;
        if(qwqe===0){
            let text = ($(idPush +'> .underline-from-center').text());
            var node = document.createElement("p");
            var textnode = document.createTextNode(text);
            node.appendChild(textnode);
            document.getElementById("myList").appendChild(node);
            if(text === 'Вода'){
                $('.category_water').css('display', 'flex').addClass('fadeIn');
            }
            else if(text === 'Огонь'){
                $('.category_fire').css('display', 'flex').addClass('fadeIn');
            }
            else if(text === 'Земля'){
                $('.category_earth').css('display', 'flex').addClass('fadeIn');
            }
            else if(text === 'Воздух'){
                $('.category_air').css('display', 'flex').addClass('fadeIn');
            }
            else if(text === 'Космос'){
                $('.category_space').css('display', 'flex').addClass('fadeIn');
            }
            else if(text === 'Сертификаты'){
                $('.category_certificate').css('display', 'flex').addClass('fadeIn');
            }
            $('.dots_bg').hide();
            $('.underline-from-center').css('animation-name', 'bounceOutLeft');

            // let count = $(idPush +'> .sub-menu').children('li').length;
            // for (let i = 0; i < count; i++){
            //     setTimeout(function () {
            //         $(idPush +'> .sub-menu').show().css('position','static').css('animation-name', 'bounceInRight');
            //     }, 500);
            // }
            $(".menu_right_arrow").css('display', 'block');



            $(idPush +'> .sub-menu').show().css('position','static').css('animation-name', 'bounceInRight').addClass('sub_category');
            $('.header-middle-part').css('height', '440px');
            $('.return_menu').css('cursor','pointer');
            setTimeout(function () {
                $('.underline-from-center').css('display', 'none').removeClass('active_menu');
                $(idPush).css('position','absolute').css('margin-top', '0');
            }, 500);
            GodObj.lala = this.id;



            $('.entry-content').css('display', 'none');
            $('.woocommerce .products ul li, .woocommerce ul.products li').removeClass('slide_block');
            $('.woocommerce > .products').addClass('cat_block');
            qwqe++;
            console.log(qwqe);
        }
        else if(qwqe ===1) {
            // let text = '';
            // var node = document.createElement("p");
            // var textnode = document.createTextNode(text);
            // node.appendChild(textnode);
            // document.getElementById("myList").appendChild(node);
            qwqe = 2;
            console.log(qwqe);
        }



        // console.log(text);


    }

    function HideSubMenu(){
        console.log(GodObj.lala);
        $('.return_menu').css('cursor','default');
        $('.underline-from-center').css('animation-name', 'bounceInLeft');
        $('.header-middle-part').css('height', '440px');
         $('.sub-menu').css('animation-name', 'bounceOutRight');
        $('#'+ GodObj.lala+' > .sub-menu').css('animation-name', 'bounceOutRight');

        $(".menu_right_arrow").css('display', 'none');
        $('#myList > p').remove();
        setTimeout(function () {

            $('#'+ GodObj.lala+' > .sub-menu').css('display', 'none');
            $('#'+ GodObj.lala).css('position','relative').css( 'margin-top', '0');
            $('.underline-from-center').css('display', 'flex').addClass('active_menu');
        }, 500);

    }

    $('.return_menu').on( 'click', function(){
        qwqe = 0;
        if($('.underline-from-center').hasClass('active_menu')){
           console.log('hello');
            $('.entry-content').css('display', 'block');
            if(document.location.href !== "https://www.pereprava.plus/"){
                document.location.href = "https://www.pereprava.plus/";
            }
        }else{
            setTimeout(function () {
                $('.dots_bg').show();
            }, 500);

            $('.myList > p').remove();
            HideSubMenu();
                $('.entry-content').css('display', 'block');
                $('.category_water').css('display', 'none');
                $('.category_fire').css('display', 'none');
                $('.category_earth').css('display', 'none');
                $('.category_air').css('display', 'none');
                $('.category_space').css('display', 'none');
                $('.category_certificate').css('display', 'none');

        }
    });


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

