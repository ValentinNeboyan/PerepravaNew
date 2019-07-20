<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version 3.6.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<?php
/**
 * Hook Woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
    <div id="product-<?php the_ID(); ?>" <?php post_class(); ?> data-date="999">
        <div class="storecommerce-product-summary-wrap clearfix">

            <div>

            </div>
            <div class="product-summary-wrapper">
                <div class="badge-wrapper">
                    <?php do_action('storecommerce_woocommerce_show_product_loop_sale_flash'); ?>
                </div>
                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                //do_action('storecommerce_woocommerce_show_product_loop_sale_flash');
                do_action('woocommerce_before_single_product_summary');
                ?>

            </div>

            <div class="summary entry-summary">
                <?php
                /**
                 * Hook: Woocommerce_single_product_summary.
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 * @hooked WC_Structured_Data::generate_product_data() - 60
                 */
                do_action('woocommerce_single_product_summary');
                global $fxTabFilter;

                $fxTabFilter = 'details';
                do_action('woocommerce_single_product_info', $fxTabFilter);

                ?>
                <?php
                $youtubeKey = '';
                $productYoutubeLink = array_shift(get_post_meta(get_the_ID(), 'product_youtube' ));
                preg_match('#(\.be/|/embed/|/v/|/watch\?v=)([A-Za-z0-9_-]{5,11})#', $productYoutubeLink, $matches);
                if(isset($matches[2]) && $matches[2] != ''){
                    $youtubeKey = $matches[2];
                }
                ?>
                <?php if ($youtubeKey) {?>
                <button class="fx-video-popup">Показать видео</button>
                <?php }?>
            </div>
            <iframe id="ytplayer" class="fx-product-youtube" type="text/html" width="640" height="360"
                    src="https://www.youtube.com/embed/<?php echo $youtubeKey?>"
                    frameborder="0"></iframe>
        </div>

        <?php
        /**
         * Hook: woocommerce_after_single_product_summary.
         *
         * @hooked woocommerce_output_product_data_tabs - 10
         * @hooked woocommerce_upsell_display - 15
         * @hooked woocommerce_output_related_products - 20
         */

        global $fxTabFilter;
        $fxTabFilter = 'reviews';
        do_action('woocommerce_after_single_product_summary', $fxTabFilter);
        ?>


    </div>


<?php do_action('woocommerce_after_single_product'); ?>