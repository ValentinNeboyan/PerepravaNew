<?php
/**
 * Block Header .
 *
 * @package StoreCommerce
 */
?>

<div class="container_custom">
<div class="header-style-3">
    <div class="desktop-header clearfix">
        <?php
        $class = '';
        $background = '';
        if (has_header_image()) {
            $class = 'data-bg';
            $background = get_header_image();
        }

        ?>
        <div id="site-primary-navigation" class="navigation-section-wrapper clearfix fx-custom-navigation" data-date="555">
            
            <div class="fx-header-logo">
                <a href="/" title="Перейти на Главная">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/new_logo.gif" alt="">
                </a>

            </div>
            <div class="container-wrapper">
                <div class="header-middle-part">
                    <div class="navigation-container">

                        <nav id="site-navigation" class="main-navigation">
                            <span class="toggle-menu" aria-controls="primary-menu" aria-expanded="false">
                                <span class="screen-reader-text">
                                    <?php esc_html_e('Primary Menu', 'storecommerce'); ?></span>
                                 <i class="ham"></i>
                            </span>
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'aft-primary-nav',
                                'menu_id' => 'primary-menu',
                                'container' => 'div',
                                'container_class' => 'menu main-menu '
                            ));
                            ?>
                        </nav><!-- #site-navigation -->
                    </div>
                </div>




                <div class="header-right-part">
                    <?php if (function_exists('YITH_WCWL')): ?>
                        <div class="wishlist-shop">
                            <span class="wishlist-icon">
                                <?php storecommerce_woocommerce_header_wishlist(); ?>
                            </span>
                        </div>
                    <?php endif; ?>
                    <?php if (class_exists('WooCommerce')): ?>
                        <div class="account-user">
                            <?php

                            if (is_user_logged_in()) {
                                $current_user = wp_get_current_user();
                                //$account_texts = __('My Account', 'storecommerce');
                                $account_texts = $current_user->display_name;
                            } else {
                                $account_texts = __('Login', 'storecommerce');
                                if (get_option('users_can_register')) {
                                    $account_texts = __('Login/Register', 'storecommerce');
                                }
                            }

                            ?>

                            <a class="aft-wishlist-trigger" href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>"
                               title=" <?php echo esc_html($account_texts); ?>">
                                <!--  my account --> <i class="far fa-user"></i>

                            </a>
                        </div>
                    <?php endif; ?>
<!--                    <div class="search aft-show-on-mobile">-->
<!--                        <div id="myOverlay" class="overlay">-->
<!--                            <span class="close-serach-form" title="Close Overlay">x</span>-->
<!--                            <div class="overlay-content">-->
<!--                                --><?php //custom_storecommerce_product_search_form(); ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                        <button class="open-search-form"><i class="fas fa-search"></i></button>-->
<!--                    </div>-->
<!--                    <div class="account-user aft-show-on-mobile">-->
<!--                        <a href="--><?php //echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?><!--">-->
<!--                             my account -->
<!--                    <i class="far fa-user-circle"></i>-->
<!---->
<!--                        </a>-->
<!--                    </div>-->



<!--                    --><?php //if (class_exists('WooCommerce')): ?>
<!---->
<!--                        <div class="cart-shop">-->
<!---->
<!--                            <div class="af-cart-wrapper dropdown">-->
<!--                                --><?php //storecommerce_woocommerce_header_cart(); ?>
<!--                            </div>-->
<!---->
<!--                        </div>-->
<!--                    --><?php //endif; ?>
                    <?php
                    $show_offcanvas = true;
                    if (is_active_sidebar('express-off-canvas-panel')): ?>
                        <div class="express-off-canvas-panel aft-show-on-mobile">
                                <span class="offcanvas">
                                     <a href="#offcanvasCollapse" class="offcanvas-nav">
                                          <i class="fa fa-th"></i>

                                       </a>
                                </span>
                        </div>
                    <?php endif; ?>


                </div>
            </div>
        </div>
<!--        <hr class="fx-header-line">-->

    <div class="search fx-search">
        <?php custom_storecommerce_product_search_form(); ?>
    </div>
    <div id="fx-Overlay" class="overlay">




</div>