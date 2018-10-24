<?php

/*
Custom style
*/
function bober_style_color() {

    $style_color = ''.get_template_directory_uri().'/assets/css/main1.css';

    if( bober_get_option('al-accent-color')){
        $style_color = ''.get_template_directory_uri().'/assets/css/main'.bober_get_option('al-accent-color').'.css';
    }
    return $style_color;
}

/****************************
    Register Fonts
***************************/
function bober_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'bober' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Poppins:Poppins:400,400i,500,500i,600,600i,700,700i,900|Lato:400,400i,700,700i,900' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

/****************************
    Enqueue Scripts
***************************/
add_action('wp_enqueue_scripts', 'bober_enqueue_scripts');

if (!function_exists('bober_enqueue_scripts')) {
    function bober_enqueue_scripts() {

        $info_theme = wp_get_theme();

        if(is_singular() && comments_open()) {
            wp_enqueue_script('comment-reply');
        }
        wp_enqueue_script('modernizr', BOBER_THEME_DIRECTORY . 'assets/libs/modernizr/modernizr.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('superfish', BOBER_THEME_DIRECTORY . 'assets/libs/superfish-master/js/superfish.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('pace', BOBER_THEME_DIRECTORY . 'assets/libs/pace/pace.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('slick', BOBER_THEME_DIRECTORY . 'assets/libs/slick/slick.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('directionalhover', BOBER_THEME_DIRECTORY . 'assets/libs/directional-hover/directional-hover.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('waypoints', BOBER_THEME_DIRECTORY . 'assets/libs/waypoints/waypoints.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('tilt', BOBER_THEME_DIRECTORY . 'assets/libs/tilt/tilt.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('match-height', BOBER_THEME_DIRECTORY . 'assets/libs/match-height/match-height.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('animnum', BOBER_THEME_DIRECTORY . 'assets/libs/animnum/animnum.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('magnificpopup', BOBER_THEME_DIRECTORY . 'assets/libs/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('animate', BOBER_THEME_DIRECTORY . 'assets/libs/animate/animate-css.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('imagesloaded', BOBER_THEME_DIRECTORY . 'assets/libs/imagesloaded/imagesloaded.pkgd.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('isotope', BOBER_THEME_DIRECTORY . 'assets/libs/isotope/isotope.pkgd.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('filltext', BOBER_THEME_DIRECTORY . 'assets/libs/textillate/jquery.fittext.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('lettering', BOBER_THEME_DIRECTORY . 'assets/libs/textillate/jquery.lettering.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('textillate', BOBER_THEME_DIRECTORY . 'assets/libs/textillate/jquery.textillate.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('sifter', BOBER_THEME_DIRECTORY . 'assets/libs/sifter/sifter.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('microplugin', BOBER_THEME_DIRECTORY . 'assets/libs/microplugin/microplugin.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('selectize', BOBER_THEME_DIRECTORY . 'assets/libs/selectize/selectize.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('jqueryui', BOBER_THEME_DIRECTORY . 'assets/libs/jquery-ui-1.12.1.custom/jquery-ui.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('countdown', BOBER_THEME_DIRECTORY . 'assets/libs/countdown/jquery.countdown.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('googlemaps', BOBER_THEME_DIRECTORY . 'assets/libs/googlemaps/gmap3.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('canvas-bg1', BOBER_THEME_DIRECTORY . 'assets/libs/canvas-bg/particles.min.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('canvas-bg2', BOBER_THEME_DIRECTORY . 'assets/libs/canvas-bg/demo-2.js', array('jquery'), $info_theme->get('Version'), true );
        wp_enqueue_script('common-js', BOBER_THEME_DIRECTORY . 'assets/scripts/common.js', array('jquery'), $info_theme->get('Version'), true );

    }
}

/****************************
    Enqueue Style
***************************/
add_action('wp_enqueue_scripts', 'bober_enqueue_styles');

if (!function_exists('bober_enqueue_styles')) {
    function bober_enqueue_styles() {

        $info_theme = wp_get_theme();

        wp_enqueue_style( 'bober-style', get_stylesheet_uri() );
        wp_enqueue_style( 'bober-fonts', bober_fonts_url(), array(), '1.0.0' );
        wp_enqueue_style( 'bober-plugins', BOBER_THEME_DIRECTORY . 'assets/css/libs.css', array(), $info_theme->get('Version'));
        wp_enqueue_style( 'bober-main', bober_style_color() );

    }
}