<?php

/**
 * Plugin Name: Bober Helper Plugin
 * Plugin URI: http://themeforest.net/user/alian4x
 * Description: Bober Helper Plugin
 * Version: 1.0
 * Author: Alian4x
 * Author URI: http://themeforest.net/user/alian4x
 * License:
 */

if ( ! defined( 'ABSPATH' ) ) {
    die( '-1' );
}

class Alian4xHelperPlugin {

    public function __construct() {
        $this->basename = plugin_basename( __FILE__ );
        $this->path = plugin_dir_path( __FILE__ );
        $this->dir = plugin_dir_url( __FILE__ );
        $this->include_helper_files();
        $this->include_shortcodes();
    }

    public function include_files($files, $suffix = ''){
        foreach ( $files as $file ) {
            $filepath = $this->path . $suffix . $file . '.php';
            if ( ! file_exists( $filepath ) ) :
                trigger_error( sprintf( esc_html__( 'Error locating %s for inclusion', 'alian4x' ), $file ), E_USER_ERROR );
            endif;
            require_once $filepath;
        }
        unset( $file, $filepath );
    }


    public function include_helper_files(){
        $files = array(
            'theme_function',
            'portfolio',
            'portfolio_photos',
            'services',
            'vc_extend/vc_icons/vc_icons',
            'vc_extend/vc_init'
        );

        $this->include_files($files, 'includes/');
    }

    public function include_shortcodes(){
        $files = array(
            'vc_icon_text', //Alian4x
            'vc_heading_title', //Alian4x
            'vc_about', //Alian4x
            'vc_trigger', //Alian4x
            'vc_icon_progress', //Alian4x
            'vc_custom_button', //Alian4x
            'vc_numbers', //Alian4x
            'vc_team_member', //Alian4x
            'vc_gmap', //Alian4x
            'vc_contact_info', //Alian4x
            'vc_play_button', //Alian4x
            'vc_heading_title_big', //Alian4x
            'vc_price_item', //Alian4x
            'vc_portfolio_default', //Alian4x
            'vc_portfolio_photos', //Alian4x
            'vc_services_tabs', //Alian4x
            'vc_services_items', //Alian4x
            'vc_gallery_all', //Alian4x
            'vc_blog_posts', //Alian4x

            'vc_accordion_row', //Alian4x
            'vc_accordion_parent', //Alian4x

            'vc_fullslider_row', //Alian4x
            'vc_fullslider_parent', //Alian4x

            'vc_pricing_table_row', //Alian4x
            'vc_pricing_table_parent', //Alian4x

            'vc_sliderdown_row',  //Alian4x
            'vc_sliderdown_parent',  //Alian4x

            'vc_skillbar_row', //Alian4x
            'vc_skillbar_parent', //Alian4x

            'vc_textillate_row', //Alian4x
            'vc_textillate_parent', //Alian4x

            'vc_icon_carousel_parent', //Alian4x
            'vc_icon_carousel_row', //Alian4x

            'vc_social_icons_parent', //Alian4x
            'vc_social_icons_row', //Alian4x

            'vc_testimonials_parent', //Alian4x
            'vc_testimonials_row', //Alian4x

            'vc_partners_parent', //Alian4x
            'vc_partners_row', //Alian4x

            'vc_contact_info_parent', //Alian4x


            'vc_buttons_parent' //Alian4x

        );

        $this->include_files($files, 'includes/vc_extend/shortcodes/');
    }

}

function brhp(){
    return new Alian4xHelperPlugin();
}

brhp();
