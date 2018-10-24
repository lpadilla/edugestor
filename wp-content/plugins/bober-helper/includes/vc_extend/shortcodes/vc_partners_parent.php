<?php

/*
 * Shortcode Partners Parent
 * */

add_shortcode('vc_partners_parent', 'vc_partners_parent_function');

function vc_partners_parent_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'speed' => 750,
        'arrows' => 'false',
        'dots' => 'true',
        'background' => '',
        'm' => '',
        'p' => '',
        'extra_class' => ''
    ), $atts));

    $output = '';

    $vc_class = 'container';
    $idf = uniqid('alian4x_el_');



    $style = '';
    $out_style = '';

    if($m){
        $out_style .= 'margin:'.$m.';';
    }
    if($p){
        $out_style .= 'padding:'.$p.';';
    }
    if($background){
        $out_style .= 'background-color:'.$background.';';
    }

    $style = 'style="'.$out_style.'"';

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    ob_start();

    ?>

    <script type="text/javascript">
        jQuery(document).ready( function() {
            jQuery('#<?php echo $idf; ?>').imagesLoaded(function(){
                jQuery('#<?php echo $idf; ?>').slick({
                    dots: <?php echo $dots ?>,
                    speed: <?php echo $speed; ?>,
                    dotsClass: 'dots',
                    appendDots: '#partners-dots-<?php echo $idf; ?>',
                    slidesToScroll: 2,
                    autoplay: true,
                    autoplaySpeed: 8000,
                    infinite: true,
                    slidesToShow: 4,
                    prevArrow: jQuery('#partners-arrows-<?php echo $idf; ?> > .wrap-prev'),
                    nextArrow: jQuery('#partners-arrows-<?php echo $idf; ?> > .wrap-next'),
                    responsive: [
                        {
                            breakpoint: 1170,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 2,
                                infinite: false,
                            }
                        },
                        {
                            breakpoint: 1170,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 2,
                                infinite: false,
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 2,
                                infinite: false,
                            }
                        },

                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },

                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                        // You can unslick at a given breakpoint now by adding:
                        // settings: "unslick"
                        // instead of a settings object
                    ]
                });
            });
        });
    </script>
    <div <?php echo $style ?> class="al-middle-dots al-partners-carousel">
        <div class="<?php echo $vc_class; ?>" id="<?php echo $idf; ?>">
            <?php echo do_shortcode($content); ?>
        </div>

        <?php if($arrows === 'true'): ?>
            <div id="partners-arrows-<?php echo $idf; ?>" class="prev-next-block-rotate">
                <div class="wrap-prev">
                    <div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
                </div>
                <div class="wrap-next">
                    <div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
                </div>
            </div>
        <?php endif; ?>

        <?php if($dots === 'true'): ?>
            <div id="partners-dots-<?php echo $idf; ?>" class="dots-control-carousel"></div>
        <?php endif; ?>
    </div>





<?php

    return ob_get_clean();
}

add_action('vc_before_init', 'vc_partners_parent_shortcode');

function vc_partners_parent_shortcode() {

    vc_map(array(
        'name' => esc_html__('Partners Parent', 'alian4x'),
        'base' => 'vc_partners_parent',
        'as_parent' => array(
            'only' => 'vc_partners_row'
        ),
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'al_number',
                'heading' => esc_html__('Slide Speed', 'alian4x'),
                'description' => esc_html__('Speed in milliseconds for the slide transitions.', 'alian4x'),
                'param_name' => 'speed',
                'value' => 750,
                'min' => 0,
                'max' => 5000,
                'step' => 10,
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Show/Hide Dots', 'alian4x'),
                'description' => esc_html__('If set to true, it will show a navigation bar made up of small circles.', 'alian4x'),
                'param_name' => 'dots',
                'value' => array(
                    esc_html__('Show', 'alian4x') => 'true',
                    esc_html__('Hide', 'alian4x') => 'false',
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Show/Hide Arrows', 'alian4x'),
                'description' => esc_html__('If set to true, it will show a arrows', 'alian4x'),
                'param_name' => 'arrows',
                'value' => array(
                    esc_html__('Hide', 'alian4x') => 'false',
                    esc_html__('Show', 'alian4x') => 'true',

                ),
                'group' => 'General'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'background',
                'heading' => esc_html__('Background', 'alian4x'),
                'value' => '',
                'group' => 'Style'
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
        ),
        'js_view' => 'VcColumnView'
    ));


}