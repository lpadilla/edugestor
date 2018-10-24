<?php

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }

    function bober_wc_widgets_init() {

        register_sidebar( array(
            'name'          => esc_html__( 'Woocommerce Sidebar', 'bober' ),
            'id'            => 'sidebar-woocommerce',
            'description'   => esc_html__( 'Add widgets here.', 'bober' ),
            'before_widget' => '<div class="al-widget %2$s"><div class="al-widget-content">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="al-widget-title"><h4>',
            'after_title'   => '</h4></div>',
        ) );
    }
    add_action( 'widgets_init', 'bober_wc_widgets_init' );

    /**
     * Show the product title in the product loop. By default this is an H3.
     */
    function domior_woocommerce_template_loop_product_title() {
        echo '<h2 class="br-woo-product-title">' . get_the_title() . '</h2>';
    }


//Single Product Slider for Woocommerce
    add_action( 'after_setup_theme', 'ed_woocommerse_plugin_setup' );

    function ed_woocommerse_plugin_setup() {
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }


    /**
     * Add Cart icon and count to header if WC is active
     */
    function my_wc_cart_count() {

        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

            $count = WC()->cart->cart_contents_count;
            ?><a class="cart-contents" href="<?php $link = wc_get_cart_url(); echo esc_url( $link ); ?>" title="<?php echo esc_attr__( 'View your shopping cart', 'bober'); ?>"><?php
            if ( $count > 0 ) {
                ?>
                <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
                <?php
            }
            ?></a><?php
        }

    }
    add_action( 'your_theme_header_top', 'my_wc_cart_count' );

    /**
     * Ensure cart contents update when products are added to the cart via AJAX
     */

    function my_header_add_to_cart_fragment( $fragments ) {

        ob_start();
        $count = WC()->cart->cart_contents_count;
        ?><a class="cart-contents" href="<?php $link = wc_get_cart_url(); echo esc_url( $link ); ?>" title="<?php echo esc_attr__( 'View your shopping cart','bober' ); ?>"><?php
        if ( $count > 0 ) {
            ?>
            <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
            <?php
        }
        ?></a><?php

        $fragments['a.cart-contents'] = ob_get_clean();

        return $fragments;
    }
    add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );



    add_action( 'woocommerce_archive_description', 'woocommerce_category_image', 2 );

    function woocommerce_category_image() {

        if ( is_shop() || is_product_category() || is_product_tag() || is_product() ){

            global $wp_query;
            $cat = $wp_query->get_queried_object();

            $thumbnail_id = "";
            if( is_product_category() ) {
                $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
            }
            $image = wp_get_attachment_url( $thumbnail_id );



            //Background image
            $al_wc_image = '';
            $al_wc_image_option ='';
            $al_wc_image_option = bober_get_option('al-bg-wc-page');
            if ( $image ) {
                $al_wc_image = 'data-image="' . $image . '"';
            }else{
                $al_wc_image = 'data-image="'.$al_wc_image_option.'"';
            }if( is_shop() ){
                $al_wc_image = 'data-image="'.$al_wc_image_option.'"';
            }

            //Heading title page
            $al_wc_title = $cat->name;
            if( $al_wc_title ){
                $al_wc_title =  $cat->name;
            }else{
                $al_wc_title = bober_get_option('al-heading-archive-wc');
            }if( is_shop() ){
                $al_wc_title = bober_get_option('al-heading-archive-wc', 'Shop');
            }

            //Description page
            $al_wc_description = $cat->description;
            if( $al_wc_description ){
                $al_wc_description = '<div class="description"><p>'. $cat->description .'</p></div>';
            }else{
                $al_wc_description = '<div class="description"><p>'. bober_get_option('al-description-archive-wc','Welcome to our shop') .'</p></div>';
            }if( is_shop() ){
                $al_wc_description = '<div class="description"><p>'. bober_get_option('al-description-archive-wc','Welcome to our shop') .'</p></div>';
            }if( is_product_category() ){
                if( $cat->description === '' ){
                    $al_wc_description = '';
                }

            }
            ?>


            <!-- Start Content section	 -->

            <section <?php echo esc_attr($al_wc_image) ?> class="br-blog-top content-section background-image bg-mask-dark white-color" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content">
                                <!-- heading title -->

                                <h1 class="heading-title-big" ><?php echo esc_attr( $al_wc_title ); ?></h1>
                                <!-- horizontal line -->
                                <?php if($al_wc_description){
                                    echo '<span class="horizontal-line"><span></span></span>';
                                } ?>
                                <!-- description slider -->
                                <?php echo wp_kses_post( $al_wc_description ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End Content section	 -->

            <?php
        }
    }



    function al_woocommerce_post_class(){
        if(is_product()){
            return post_class('col-md-12 col-sm-12 br-product-single');
        }elseif( is_shop() || is_product_category() || is_product_tag() ){
            if( bober_get_option('al-sidebar-archive') === '' ){
                echo 'class="col-md-12 br-wc-product-head"';
            }else{
                echo 'class="col-lg-8 br-wc-product-head"';
            }
        }
    }

    function al_woocommerce_columns(){
        $output = 2;
        if( bober_get_option('al-sidebar-archive') === '' ){
            $output = 3;
        }

        return $output;
    }

}



