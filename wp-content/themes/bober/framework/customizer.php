<?php

$img_path = BOBER_THEME_DIRECTORY . 'assets/img/';

$helper = wp_normalize_path( get_template_directory() . '/kirki-helpers/include-kirki.php' );
if ( file_exists( $helper ) ) {
    include_once $helper;
}

if ( ! class_exists( 'Kirki' ) ) {
    return;
}

/***********************************************************
    Kirki config
***********************************************************/

Kirki::add_config('bober', array(
    'option_type' => 'theme_mod',
    'capability' => 'edit_theme_options'
));

/***********************************************************
    Section General
***********************************************************/
require_once BOBER_REQUIRE_DIRECTORY . 'framework/customizer/section-general.php';

/***********************************************************
    Section Full Screen Nav
***********************************************************/
require_once BOBER_REQUIRE_DIRECTORY . 'framework/customizer/section-full-screen-nav.php';

/***********************************************************
    Section Blog
***********************************************************/
require_once BOBER_REQUIRE_DIRECTORY . 'framework/customizer/section-blog.php';

/***********************************************************
    Section Page
***********************************************************/
require_once BOBER_REQUIRE_DIRECTORY . 'framework/customizer/section-page.php';

/***********************************************************
    Section footer
***********************************************************/
require_once BOBER_REQUIRE_DIRECTORY . 'framework/customizer/section-footer.php';

/***********************************************************
    Section social
***********************************************************/
require_once BOBER_REQUIRE_DIRECTORY . 'framework/customizer/section-social.php';

/***********************************************************
    Section woocommerce
***********************************************************/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once BOBER_REQUIRE_DIRECTORY . 'framework/customizer/section-woocommerce.php';
}


/***********************************************************
    Section 404 page
***********************************************************/
require_once BOBER_REQUIRE_DIRECTORY . 'framework/customizer/section-404.php';


