jQuery( function( $ ) {

    $('.fx-location-popup .rwmb-map-canvas').css('width', screen.width ).css('height', screen.height);

    $(document).on('click', '.fx-video-popup', function () {
        $('.fx-product-youtube').addClass('active');
        $(this).addClass('active');
        $(this).text('Скрыть видео');
    });

    $(document).on('click', '.fx-video-popup.active', function () {
        $('.fx-product-youtube').removeClass('active');
        $(this).removeClass('active');
        $(this).text('Показать видео');

        var leg=$('.fx-product-youtube').attr("src");
        $('.fx-product-youtube').attr("src",leg);
    });

    $(document).on('click', '.fx-reviews-button', function () {
        $('#review_form_wrapper').css('display', 'block');
        $(this).addClass('active');
        $(this).text('Отказаться');
    });

    $(document).on('click', '.fx-reviews-button.active', function () {
        $('#review_form_wrapper').css('display', 'none');
        $(this).removeClass('active');
        $(this).text('Оставить отзыв');
    });

    $(document).on('click', '.fx-rent-button', function () {
        $('.fx-product-rent-form').css('display', 'block');
        $('#fx-Overlay').css('display', 'block');
    });

    $(document).on('click', '.close-popup', function () {
        $('.fx-product-rent-form').css('display', 'none');
        $('#fx-Overlay').css('display', 'none');
    });

    $(document).on('click', '.fx-location-button', function () {

        $(this).addClass('active');
        $('.fx-location-popup').css('display', 'flex');
    });

    $(document).on('click', '.fx-location-button.active', function () {
        $(this).removeClass('active');
        $('.fx-location-popup').css('display', 'none');
    });

    $(document).on('click', '#close-location', function () {
        $('.fx-location-button.active').removeClass('active');
        $('.fx-location-popup').css('display', 'none');
    });
    


});