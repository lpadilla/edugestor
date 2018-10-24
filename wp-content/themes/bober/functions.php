<?php

define('BOBER_THEME_DIRECTORY', esc_url(trailingslashit(get_template_directory_uri())));
define('BOBER_REQUIRE_DIRECTORY', trailingslashit(get_template_directory()));

/****************************
    After setup hook
***************************/

add_action('after_setup_theme','bober_setup_theme');

if(!function_exists('bober_setup_theme')) {

    function bober_setup_theme(){

        load_theme_textdomain('bober', BOBER_THEME_DIRECTORY . 'languages');

        register_nav_menus (array(
            'primary-menu' => esc_html__('Main Navigation', 'bober'),
            'mobile-menu' => esc_html__('Mobile Navigation', 'bober'),
            'footer-menu' => esc_html__('Footer Navigation', 'bober'),
        ));

        add_image_size('bober_horizont_post', 1170, 658, true);
        add_image_size('bober_portfolio_popup', 600, 450, true);
        add_image_size('bober_portfolio_large', 1200, 900, true);
        add_image_size('bober_service_thumb', 600, 450, true);
        add_image_size( 'bober_fullsize');

        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
        add_theme_support('post-formats', array('gallery', 'link', 'quote', 'video', 'audio'));

    }
}
/****************************
    Get options
***************************/
function bober_get_option( $option, $default='' ){

    if( bober_Kirki::get_option( 'bober_customize', $option ) ){
        $output = bober_Kirki::get_option( 'bober_customize', $option );
    }else{
        $output = $default;
    }
    return apply_filters('bober/bober_get_option', $output);
}


/****************************
    Content Width
***************************/
add_action('after_setup_theme', 'bober_content_width');
if(!function_exists('bober_content_width')){
    function bober_content_width() {
        $GLOBALS['content_width'] = apply_filters('bober_content_width', 1170);
    }
}

/****************************
    ACF save JSON
***************************/
add_filter('acf/settings/save_json', 'bober_acf_save_json');

if(!function_exists('bober_acf_save_json')) {
    function bober_acf_save_json($path) {
        $path = BOBER_REQUIRE_DIRECTORY . 'framework/includes/custom-fields';
        return $path;
    }
}

/****************************
    ACF load JSON
***************************/
add_filter('acf/settings/load_json', 'bober_acf_load_json');

if(!function_exists('bober_acf_load_json')) {
    function bober_acf_load_json($paths) {
        unset($paths[0]);
        $paths[] = BOBER_REQUIRE_DIRECTORY . 'framework/includes/custom-fields';
        return $paths;
    }
}

/****************************
    Require Files
***************************/

require_once(BOBER_REQUIRE_DIRECTORY . 'framework/includes/action-config.php');
require_once(BOBER_REQUIRE_DIRECTORY . 'framework/includes/include-config.php');
require_once(BOBER_REQUIRE_DIRECTORY . 'framework/includes/plugin-config.php');
require_once(BOBER_REQUIRE_DIRECTORY . 'framework/includes/woocommerce-config.php');
require_once(BOBER_REQUIRE_DIRECTORY . 'framework/includes/helper-function.php');

require_once(BOBER_REQUIRE_DIRECTORY . 'framework/includes/helper/merlin/vendor/autoload.php');
require_once(BOBER_REQUIRE_DIRECTORY . 'framework/includes/helper/merlin/merlin.php');
require_once(BOBER_REQUIRE_DIRECTORY . 'framework/includes/helper/merlin/merlin-config.php');