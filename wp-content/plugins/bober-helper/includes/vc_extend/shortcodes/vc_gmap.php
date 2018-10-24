<?php

/*
 * Shortcode Google Map
 * */

function wpse_165754_avatar_shortcode_wp_enqueue_scripts() {
    wp_register_style( 'get-avatar-style', plugins_url( '/css/style.css', __FILE__ ), array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'wpse_165754_avatar_shortcode_wp_enqueue_scripts' );

add_shortcode('vc_gmap', 'vc_gmap_function');

function vc_gmap_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'title' => 'Kyiv, Ukraine',
        'marker' => '',
        'api' => 'AIzaSyDfIvcRb39yOu1OFOX2G0c4jemKpLgpJl0',
        'zoom' => 14,
        'address' => 'Kyiv',
        'style_map' => 'light',
        'height' => '420px',

        'extra_class' => ''
    ), $atts));

    $vc_class = '';

    $output = '';

    $idf = uniqid('alian4x_el_');

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    ob_start();

    $image_done = wp_get_attachment_image_src($marker, 'bober_fullsize');

    ?>

    <div class="<?php echo $vc_class; ?>" id="<?php echo $idf;?>" data-zoom="<?php echo $zoom; ?>" data-marker="<?php echo $image_done[0]; ?>" data-height="<?php echo $height; ?>" data-address="<?php echo $address; ?>" data-address-details="<?php echo $title; ?>"></div>
    <?php if($api){
        echo '<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key='.$api.'"></script>';
    } ?>

    <script type="text/javascript">

        jQuery.noConflict()(function($) {
            jQuery(document).ready(function () {
                /*-------------------------------------
                 Google maps API
                 -------------------------------------*/
                if (typeof jQuery.fn.gmap3 !== 'undefined') {

                    jQuery("#<?php echo $idf;?>").each(function() {

                        var data_zoom = 15,
                            data_height;

                        if (jQuery(this).attr("data-zoom") !== undefined) {
                            data_zoom = parseInt(jQuery(this).attr("data-zoom"),10);
                        }
                        if (jQuery(this).attr("data-height") !== undefined) {
                            data_height = parseInt(jQuery(this).attr("data-height"),10);
                        }

                        jQuery(this).gmap3({
                            marker: {
                                values: [{
                                    address: jQuery(this).attr("data-address"),
                                    data: jQuery(this).attr("data-address-details")
                                }],
                                options:{
                                    draggable: false,
                                    icon: jQuery(this).attr("data-marker")
                                },
                                events:{
                                    mouseover: function(marker, event, context){
                                        var map = jQuery(this).gmap3("get"),
                                            infowindow = jQuery(this).gmap3({get:{name:"infowindow"}});
                                        if (infowindow){
                                            infowindow.open(map, marker);
                                            infowindow.setContent(context.data);
                                        } else {
                                            jQuery(this).gmap3({
                                                infowindow:{
                                                    anchor:marker,
                                                    options:{content: context.data}
                                                }
                                            });
                                        }
                                    },
                                    mouseout: function(){
                                        var infowindow = jQuery(this).gmap3({get:{name:"infowindow"}});
                                        if (infowindow){
                                            infowindow.close();
                                        }
                                    }
                                }
                            },
                            map: {
                                options: {
                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                    zoom: data_zoom,
                                    scrollwheel: false,
                                    <?php if($style_map === 'light'){
                                        echo 'styles: [{"featureType":"administrative","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"saturation":-100},{"lightness":"50"},{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":"-100"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"lightness":"30"}]},{"featureType":"road.local","elementType":"all","stylers":[{"lightness":"40"}]},{"featureType":"transit","elementType":"all","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":-25},{"saturation":-100}]}]';
                                    }elseif($style_map === 'dark'){
                                        echo 'styles: [{"stylers":[{"hue":"#ff1a00"},{"invert_lightness":true},{"saturation":-100},{"lightness":33},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2D333C"}]}]';
                                    } ?>

                                }
                            }
                        });
                        jQuery(this).css("height", data_height + "px");
                    });

                }
            });
        });
    </script>




    <?php

    return ob_get_clean();

}

add_action('vc_before_init', 'vc_gmap_shortcode');

function vc_gmap_shortcode() {
    vc_map(array(
        'name' => esc_html__('Google Map', 'alian4x'),
        'base' => 'vc_gmap',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'textfield',
                'param_name' => 'address',
                'heading' => esc_html__('Address', 'alian4x'),
                'admin_label' => true,
                'value' => 'Kyiv',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'param_name' => 'title',
                'heading' => esc_html__('Title', 'alian4x'),
                'admin_label' => true,
                'value' => 'Kyiv, Ukraine',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('GMap API Code', 'alian4x'),
                'param_name' => 'api',
                'value' => 'AIzaSyDfIvcRb39yOu1OFOX2G0c4jemKpLgpJl0',
                'group' => 'General'
            ),
            array(
                'type' => 'al_number',
                'heading' => esc_html__('Map Zoom', 'alian4x'),
                'description' => esc_html__('This option contains the zoom level.', 'alian4x'),
                'param_name' => 'zoom',
                'value' => 14,
                'min' => 1,
                'max' => 20,
                'step' => 1,
                'group' => 'Style'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Style map', 'alian4x'),
                'param_name' => 'style_map',
                'value' => array(
                    esc_html__('Light', 'alian4x') => 'light',
                    esc_html__('Dark', 'alian4x') => 'dark',
                ),
                'group' => 'Style'
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Map Marker', 'alian4x'),
                'description' => esc_html__('Select image for the map marker.', 'alian4x'),
                'param_name' => 'marker',
                'value' => '',
                'group' => 'Style'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Map Height (px)', 'alian4x'),
                'param_name' => 'height',
                'value' => '420px',
                'group' => 'Style'
            ),
            array(
                'save_always' => true,
                'type' => 'textfield',
                'heading' => esc_html__('Extra class', 'alian4x'),
                'description' => esc_html__('Style particular content element differently - add a class name and refer to it in custom CSS.', 'alian4x'),
                'param_name' => 'extra_class',
                'value' => '',
                'admin_label' => true,
                'group' => 'Extras'
            )
        )
    ));
}
