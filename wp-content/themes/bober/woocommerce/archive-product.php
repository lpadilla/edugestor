<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<!-- Start Content section-->

<!-- Start Content section	 -->
<section <?php echo bober_page_background(); ?> class="al-display-page center al-bg-mask background-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2">
                <div class="content">
                    <?php echo bober_page_description(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content section	 -->

<!--End content section-->

<div class="al-shop-archive-container">
    <div class="container">
        <div class="row right-sidebar">
            <div <?php al_woocommerce_post_class(); ?>>

                <?php if ( have_posts() ) : ?>

                    <?php woocommerce_product_loop_start(); ?>

                    <?php woocommerce_product_subcategories(); ?>

                    <div data-size="<?php echo al_woocommerce_columns(); ?>" class="al-posts br-products al-masonry-posts br-shop-masonry-container">
                        <div class="gutter-sizer"></div>
                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php
                            /**
                             * woocommerce_shop_loop hook.
                             *
                             * @hooked WC_Structured_Data::generate_product_data() - 10
                             */
                            do_action( 'woocommerce_shop_loop' );

                            ?>

                            <?php wc_get_template_part( 'content', 'product' ); ?>

                        <?php endwhile; // end of the loop. ?>
                    </div>



                    <?php woocommerce_product_loop_end(); ?>

                    <?php
                    /**
                     * woocommerce_after_shop_loop hook.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop' );
                    ?>

                <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

                    <?php
                    /**
                     * woocommerce_no_products_found hook.
                     *
                     * @hooked wc_no_products_found - 10
                     */
                    do_action( 'woocommerce_no_products_found' );
                    ?>

                <?php endif; ?>
            </div>


            <?php if(bober_get_option('al-sidebar-archive') === true) : ?>

                <div id="sidebar" class="col-lg-4 right-sidebar" >
                    <div class="al-sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>

            <?php endif; ?>

            <?php
            /**
             * woocommerce_after_main_content hook.
             *
             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
             */
            do_action( 'woocommerce_after_main_content' );
            ?>

        </div>
    </div>
</div>

<?php get_footer( 'shop' ); ?>
