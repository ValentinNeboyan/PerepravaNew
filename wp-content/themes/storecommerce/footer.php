<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StoreCommerce
 */

?>




<?php if (is_active_sidebar('express-off-canvas-panel')) : ?>
    <div id="sidr" class="primary-background">
        <a class="sidr-class-sidr-button-close" href="#sidr-nav">
            <i class="fa fa-window-close-o primary-footer" aria-hidden="true"></i>
        </a>
        <?php dynamic_sidebar('express-off-canvas-panel'); ?>
    </div>
<?php endif; ?>


<footer class="footer_block">

    <div class="modal-container">
        <div class="modal">
            <button id="myButton"></button>
                <?php echo do_shortcode('[contact-form-7 id="732" title="Найти вместо меня"]')?>
        </div>
    </div>

    <?php $storecommerce_footer_widgets_number = storecommerce_get_option('number_of_footer_widget');
    if (1 == $storecommerce_footer_widgets_number) {
        $col = 'col-md-12';
    } elseif (2 == $storecommerce_footer_widgets_number) {
        $col = 'col-md-6';
    } elseif (3 == $storecommerce_footer_widgets_number) {
        $col = 'col-md-4';
    } else {
        $col = 'col-md-4';
    } ?>
    <?php if (is_active_sidebar( 'footer-first-widgets-section') || is_active_sidebar( 'footer-second-widgets-section') || is_active_sidebar( 'footer-third-widgets-section') || is_active_sidebar( 'footer-fourth-widgets-section')) : ?>
        <div class="primary-footer">
            <div class="container-wrapper">
                            <?php if (is_active_sidebar( 'footer-first-widgets-section') ) : ?>
                                <div class="primary-footer-area footer-first-widgets-section <?php echo esc_attr($col); ?> col-sm-12">
                                    <section class="widget-area">
                                        <?php dynamic_sidebar('footer-first-widgets-section'); ?>
                                    </section>
                                </div>
                            <?php endif; ?>

                            <?php if (is_active_sidebar( 'footer-second-widgets-section') ) : ?>
                                <div class="primary-footer-area footer-second-widgets-section <?php echo esc_attr($col); ?>  col-sm-12">
                                    <section class="widget-area">
                                        <?php dynamic_sidebar('footer-second-widgets-section'); ?>
                                    </section>
                                </div>
                            <?php endif; ?>

                            <?php if (is_active_sidebar( 'footer-third-widgets-section') ) : ?>
                                <div class="primary-footer-area footer-third-widgets-section <?php echo esc_attr($col); ?>  col-sm-12">
                                    <section class="widget-area">
                                        <?php dynamic_sidebar('footer-third-widgets-section'); ?>
                                    </section>
                                </div>
                            <?php endif; ?>
                            <?php if (is_active_sidebar( 'footer-fourth-widgets-section') ) : ?>
                                <div class="primary-footer-area footer-fourth-widgets-section <?php echo esc_attr($col); ?>  col-sm-12">
                                    <section class="widget-area">
                                        <?php dynamic_sidebar('footer-fourth-widgets-section'); ?>
                                    </section>
                                </div>
                            <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if(1 != storecommerce_get_option('hide_footer_menu_section')): ?>
        <?php

        if (has_nav_menu( 'aft-footer-nav' ) || has_nav_menu( 'aft-social-nav' )):
            $class = 'single-align-c';
            if ((has_nav_menu( 'aft-footer-nav' ) && has_nav_menu( 'aft-social-nav' )) ){
                $class = 'col-2 float-l';
            }

            ?>
            <div class="secondary-footer">
                <div class="container-wrapper">
                        <?php if (has_nav_menu( 'aft-footer-nav' )): ?>
                            <div class="<?php echo esc_attr($class); ?>">
                                <div class="footer-nav-wrapper">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'aft-footer-nav',
                                        'menu_id' => 'footer-menu',
                                        'depth' => 1,
                                        'container' => 'div',
                                        'container_class' => 'footer-navigation'
                                    )); ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (has_nav_menu( 'aft-social-nav' )): ?>
                            <div class="<?php echo esc_attr($class); ?>">
                                <div class="footer-social-wrapper">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'aft-social-nav',
                                        'link_before' => '<span class="screen-reader-text">',
                                        'link_after' => '</span>',
                                        'menu_id' => 'social-menu',
                                        'container' => 'div',
                                        'container_class' => 'social-navigation'
                                    ));
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
<!--    <div class=" footer_block">-->
<!--        <div class="container-wrapper footer_block">-->
<!---->
<!--            <div class="site-info-wrap footer_block">-->


        <div class="container-fluid">
            <div class="footer_info">

                <?php
                $storecommerce_secure_payment_badge = storecommerce_get_option('secure_payment_badge');
                $storecommerce_copy_right = storecommerce_get_option('footer_copyright_text');

                $class = 'single-align-c';
                if (!empty($storecommerce_secure_payment_badge) && !empty( $storecommerce_copy_right ) ){
                    $class = 'col-2 float-l';
                } ?>
<!--                <div class="--><?php //echo esc_attr($class); ?><!--">-->
<!--                    --><?php // ?>
<!--                    --><?php //if (!empty($storecommerce_copy_right)): ?>
<!--                        --><?php //echo esc_html($storecommerce_copy_right); ?>
<!--                    --><?php //endif; ?>

<!--                        <span class="sep"> | </span>-->
<!--                        --><?php
//                        /* translators: 1: Theme name, 2: Theme author. */
//                        printf(esc_html__('%1$s by %2$s.', 'storecommerce'), '<a href="https://afthemes.com/products/storecommerce">StoreCommerce</a>', 'AF themes');
//                        ?>

<!--                </div>-->
<!--                <div class="footer-contacts">-->
<!--                    <a href="mailto:perepravaplus@gmail.com" class="footer-mail">perepravaplus@gmail.com</a>-->
<!--                    <a href="tel:+380669284338" class="footer-phone"> +38 (066) 928-43-38</a>-->
<!--                </div>-->
<!--                <div class="social">-->
<!--                    				<span>Мы в соц сетях:</span>-->
<!--                    <a class="instagram-icon" href="https://instagram.com/perepravaplus?igshid=yfiei4ysn8zt" target="_blank"></a>-->
<!--                    <a class="facebook-icon" href="https://facebook.com/perepravaplus.zp" target="_blank"></a>-->
<!--                </div>-->



                    <div class="footer_logo"></div>
                    <div class="footer_contact">
                        <span class="footer_block_title"> Контакты </span>
                        <div class = "bottom_border"></div>
                            <div class="contact_block">
                                <a href="tel:+380669284338" class="">
                                    <div class="phone_bg"></div>+38 (066) 928-43-38</a>
                            </div>
                            <div class="contact_block">
                                <a href="mailto:perepravaplus@gmail.com" class="">
                                    <div class="mail_bg"></div>perepravaplus@gmail.com</a>
                            </div>
                    </div>
                    <div class="footer_cat">
                        <span class="footer_block_title"> Направления </span>
                        <div class = "bottom_border"></div>
                        <ul>
                            <li><a href="/product-category/fire/">Огонь</a></li>
                            <li><a href="/product-category/water/">Вода</a></li>
                            <li><a href="/product-category/earth/">Земля</a></li>
                            <li><a href="/product-category/air/">Воздух</a></li>
                            <li><a href="/product-category/space/">Космос</a></li>
                            <li><a href="/product-category/certificate/">Сертификаты</a></li>
                        </ul>
                    </div>
                    <div class="footer_important">
                        <span class="footer_block_title"> Важное </span>
                        <div class = "bottom_border"></div>
                        <ul>
                            <li><a>FAQ</a></li>
                            <li><a>Добавить обьявление</a></li>
                            <li><a>Сотрудничество</a></li>
                        </ul>
                    </div>
                    <div class="footer_soc">
                        <span class="footer_block_title"> Соц сети </span>
                        <div class = "bottom_border"></div>
                        <div class="soc_icon_block">
                            <a  href="https://instagram.com/perepravaplus?igshid=yfiei4ysn8zt" target="_blank">
                                <div class="instagramm_bg"></div></a>
                            <a  href="https://facebook.com/perepravaplus.zp" target="_blank">
                                <div class="facebook_bg"></div></a>
                        </div>
                    </div>

<!---->
<!---->
<!--                <div class="contact_block">-->
<!--                    <a href="mailto:perepravaplus@gmail.com" class="">perepravaplus@gmail.com</a>-->
<!--                </div>-->
<!--                <div class="line_bottom"></div>-->
<!--                <div class="contact_block">-->
<!--                    <a href="tel:+380669284338" class=""> +38 (066) 928-43-38</a>-->
<!--                </div>-->
<!--                <div class="line_bottom"></div>-->
<!--                <div class="soc_icon_block">-->
<!--                    <a  href="https://instagram.com/perepravaplus?igshid=yfiei4ysn8zt" target="_blank"><i class="fab fa-instagram"></i></a>-->
<!--                    <a  href="https://facebook.com/perepravaplus.zp" target="_blank"><i class="fab fa-facebook-square"></i></a>-->
<!--                    <a href="#"> <i class="fab fa-instagram"></i></a>-->
<!--                    <a href=""> <i class="fab fa-facebook-square"></i></a>-->
<!--                </div>-->
<!---->
<!--                --><?php
//                if (!empty($storecommerce_secure_payment_badge)):
//                    $storecommerce_secure_payment_badge = absint($storecommerce_secure_payment_badge);
//                    $storecommerce_secure_payment_badge = wp_get_attachment_image($storecommerce_secure_payment_badge, 'full');
//
//                    $storecommerce_secure_payment_badge_url = storecommerce_get_option('secure_payment_badge_url');
//                    $storecommerce_secure_payment_badge_url = isset($storecommerce_secure_payment_badge_url) ? esc_url($storecommerce_secure_payment_badge_url) : '#';
//
//                    ?>
<!--                    <div class="--><?php //echo esc_attr($class); ?><!--">-->
<!--                        <a href="--><?php //echo esc_url($storecommerce_secure_payment_badge_url); ?><!--">-->
<!--                            --><?php //echo $storecommerce_secure_payment_badge; ?>
<!--                        </a>-->
<!--                    </div>-->
<!--                --><?php //endif; ?>
<!--            </div>-->

        </div>

<!--    </div>-->
</footer>
<div class="footer_down_info">
    Pereprava production by Family brand supported by <a href="https://format4.plus/">Format</a>
</div>

<a id="scroll-up" class="secondary-color">
    <i class="fa fa-angle-up"></i>
</a>
<div class="fx-location-popup">
    <div id="close-location" class="button">ЗАКРЫТЬ</div>
    <?php
    $product = get_post(get_the_ID());
    $attributes = get_post_meta(get_the_ID());

    echo rwmb_meta( 'map', array(
        'width'        => '640px',
        'height'       => '480px',
        'zoom'         => 11,
        'marker'       => true,
        'marker_title' => 'Кликни меня',
        'info_window'  => '<h3>'.$product->post_title.'</h3><p>'.$attributes['map'][0].'</p>.',
    ) );
    ?>
</div>
<?php wp_footer(); ?>

</body>
</html>
