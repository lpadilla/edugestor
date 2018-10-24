<?php

/*
 * Shortcode Play Button
 * */

add_shortcode('vc_play_button', 'vc_play_button_function');

function vc_play_button_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'link' => '#',
        'icon_stroke' => 'pe-7s-play',
        'm' => '',
        'p' => '',
        'extra_class' => ''
    ), $atts));

    $idf = uniqid('alian4x_el_');

    $style = '';
    $out_style = '';

    if($m){
        $out_style .= 'margin:'.$m.';';
    }

    if($p){
        $out_style .= 'padding:'.$p.';';
    }

    $style = 'style="'.$out_style.'"';

    $vc_class = 'al-video-play-button anim-shadow-play';

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    $vc_icon_output = '';
    $vc_icon_output .= '<i class="'.$icon_stroke.'"></i>';

    ob_start();

    ?>

    <script type="text/javascript">
        jQuery(document).ready( function() {
            jQuery('#<?php echo $idf ?>').magnificPopup({
                type: 'iframe',
                autoFocusLast: false,
                iframe: {
                    markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                    '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

                    patterns: {
                        youtube: {
                            index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
                            id: 'v=', // String that splits URL in a two parts, second part should be %id%
                            // Or null - full URL will be returned
                            // Or a function that should return %id%, for example:
                            // id: function(url) { return 'parsed id'; }
                            src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
                        },

                        vimeo: {
                            index: 'vimeo.com/',
                            id: '/',
                            src: '//player.vimeo.com/video/%id%?autoplay=1'
                        },

                        gmaps: {
                            index: '//maps.google.',
                            src: '%id%&output=embed'
                        }

                    },

                    srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
                }
            });
        });
    </script>

    <a <?php echo $style; ?> href="<?php echo $link ?>" class="<?php echo $vc_class; ?>" id="<?php echo $idf ?>"><?php echo $vc_icon_output ?></a>

    <?php

    return ob_get_clean();

}

add_action('vc_before_init', 'vc_play_button_shortcode');

function vc_play_button_shortcode() {
    vc_map(array(
        'name' => esc_html__('Play Button', 'alian4x'),
        'base' => 'vc_play_button',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_stroke',
                'value' => 'pe-7s-play',
                'settings' => array(
                    'type' => 'stroke',
                    'emptyIcon' => false,
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_show',
                    'value' => 'true'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('YouTube Link', 'alian4x'),
                'param_name' => 'link',
                'admin_label' => true,
                'value' => '#',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Padding (px)', 'alian4x'),
                'description' => esc_html__('Here you can enter inner indents for this element.', 'alian4x'),
                'param_name' => 'p',
                'value' => '',
                'group' => 'Padding'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Margin (px)', 'alian4x'),
                'description' => esc_html__('Here you can enter the outer indents for this element.', 'alian4x'),
                'param_name' => 'm',
                'value' => '',
                'group' => 'Margin'
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

