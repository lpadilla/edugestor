<?php

/****************************
    Required Plugins
***************************/

add_action( 'tgmpa_register', 'bober_register_required_plugins' );

if(! function_exists('bober_register_required_plugins')) {

    function bober_register_required_plugins() {

        $plugins = array(
            array(
                'name' => 'Kirki',
                'slug' => 'kirki',
                'required' => true,
            ),
            array(
                'name' => 'Bober Helper',
                'slug' => 'bober-helper',
                'source' => get_template_directory() . '/assets/plugins/bober-helper.zip',
                'required' => true
            ),
            array(
                'name' => 'Advanced Custom Fields Pro',
                'slug' => 'advanced-custom-fields-pro',
                'source' => get_template_directory() . '/assets/plugins/advanced-custom-fields-pro.zip',
                'required' => true
            ),
            array(
                'name' => 'Slider Revolution',
                'slug' => 'rev-slider',
                'source' => get_template_directory() . '/assets/plugins/revslider.zip'
            ),
            array(
                'name' => 'Visual Composer',
                'slug' => 'visual-composer',
                'source' => get_template_directory() . '/assets/plugins/visual-composer.zip'
            ),
            array(
                'name' => 'Ultimate VC Addons',
                'slug' => 'ultimate-composer',
                'source' => get_template_directory() . '/assets/plugins/Ultimate_VC_Addons.zip'
            ),
            array(
                'name' => 'Envato Market',
                'slug' => 'envato-market',
                'source' => get_template_directory() . '/assets/plugins/envato-market.zip'
            ),
            array(
                'name' => 'Visual portfolio',
                'slug' => 'visual-portfolio'
            ),
            array(
                'name' => 'Contact form 7',
                'slug' => 'contact-form-7'
            ),
            array(
                'name' => 'Woocommerce',
                'slug' => 'woocommerce'
            ),
        );
        tgmpa( $plugins);
    }
}
