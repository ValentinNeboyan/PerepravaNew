<?php
/**
 * Block Header .
 *
 * @package StoreCommerce
 */
?>
<div class="flex_page">

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
                        <div id="myList"><span class="return_menu">Все</span><i class="fas fa-arrow-right menu_right_arrow"></i></div>
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



            </div>
        </div>
<!--        <hr class="fx-header-line">-->






</div>

    <div id="fx-Overlay" class="overlay">