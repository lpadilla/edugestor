<?php

/*
 * Shortcode Gallery All Parent
 * */

add_shortcode('vc_gallery_all_parent', 'vc_gallery_all_parent_function');

function vc_gallery_all_parent_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'speed' => 750,
        'slides_scroll' => 1,
        'dots' => 'true',
        'style_gallery' => '',
        'darkstyle' => '',
        'fade' => 'false',
        'arrows' => 'false',
        'rows' => '3',
        'p' => '',
        'm' => '',
        'extra_class' => ''
    ), $atts));

    $output = '';

    $vc_class = 'al-gallery-all';
    $idf = uniqid('alian4x_el_');


    //START styles
    $style = '';
    $out_style = '';

    if($m){
        $out_style .= 'margin:'.$m.';';
    }
    if($p){
        $out_style .= 'padding:'.$p.';';
    }

    $style = 'style="'.$out_style.'"';
    // END styles

    $media_rows = '';

    switch ($rows) {
        case '1':
            $media_rows = '1';
            break;
        case '2':
            $media_rows = '2';
            break;
        case '3':
            $media_rows = '2';
            break;
        case '4':
            $media_rows = '2';
            break;
    }

    $container_class = 'container-carousel al-middle-dots';

    if($style_gallery == 'true'){
        $container_class = 'slider-wrap gallery-slide';
    }else{
        $vc_class .= ' container';
    }

    if (!empty($darkstyle)) {
        $container_class .= ' ' . $darkstyle;
    }


    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    ob_start();

    ?>
    <script type="text/javascript">
        jQuery(document).ready( function() {
            jQuery('#<?php echo $idf; ?>').imagesLoaded(function(){
                jQuery('#<?php echo $idf; ?>').slick({
                    dots: <?php echo $dots; ?>,
                    dotsClass: 'dots',
                    fade: <?php echo $fade ?>,
                    appendDots: '#gallery_all-dots-<?php echo $idf; ?>',
                    slidesToScroll: <?php echo $slides_scroll ?>,
                    autoplay: true,
                    autoplaySpeed: 8000,
                    speed: <?php echo $speed; ?>,
                    infinite: true,
                    arrows: <?php echo $arrows ?>,
                    prevArrow: jQuery('#gallery_all-arrows-<?php echo $idf; ?> > .wrap-prev'),
                    nextArrow: jQuery('#gallery_all-arrows-<?php echo $idf; ?> > .wrap-next'),
                    slidesToShow: <?php echo $rows ?>,
                    responsive: [
                        {
                            breakpoint: 1170,
                            settings: {
                                slidesToShow: <?php echo $rows ?>,
                                slidesToScroll: <?php echo $slides_scroll ?>,
                            }
                        },
                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: <?php echo $media_rows ?>,
                                slidesToScroll: <?php echo $slides_scroll ?>,
                            }
                        },

                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: <?php echo $media_rows ?>,
                                slidesToScroll: <?php echo $slides_scroll ?>
                            }
                        },

                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
            });
        });
    </script>
    <div class="<?php echo $container_class ?>">

        <div <?php echo $style ?> class="<?php echo $vc_class; ?>" id="<?php echo $idf; ?>">
            <?php echo do_shortcode($content); ?>
        </div>

        <?php if($arrows === 'true'): ?>
            <div id="gallery_all-arrows-<?php echo $idf; ?>" class="prev-next-block-rotate">
                <div class="wrap-prev">
                    <div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
                </div>
                <div class="wrap-next">
                    <div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
                </div>
            </div>
        <?php endif; ?>


        <div class="dots-control-carousel" id="gallery_all-dots-<?php echo $idf; ?>"></div>
    </div>





    <?php

    return ob_get_clean();
}

add_action('vc_before_init', 'vc_gallery_all_parent_shortcode');

function vc_gallery_all_parent_shortcode() {

    vc_map(array(
        'name' => esc_html__('Gallery All Parent', 'alian4x'),
        'base' => 'vc_gallery_all_parent',
        "as_parent" => array('except' => ''),
        "content_element" => true,
        "show_settings_on_create" => false,
        "is_container" => true,
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'al_number',
                'heading' => esc_html__('Rows', 'alian4x'),
                'description' => esc_html__('Rows slides to showing:.', 'alian4x'),
                'param_name' => 'rows',
                'value' => 3,
                'min' => 1,
                'max' => 12,
                'step' => 1,
                'group' => 'General'
            ),
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
                'type' => 'al_number',
                'heading' => esc_html__('Slides To Scroll', 'alian4x'),
                'param_name' => 'slides_scroll',
                'value' => 1,
                'min' => 1,
                'max' => 12,
                'step' => 1,
                'group' => 'General'
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Fade animation ?', 'alian4x'),
                'param_name' => 'fade',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                ),
                'admin_label' => true,
                'group' => 'Style'
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Mini gallery ?', 'alian4x'),
                'param_name' => 'style_gallery',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                ),
                'group' => 'Style'
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Dark style the content ?', 'alian4x'),
                'param_name' => 'darkstyle',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'al-section-dark',
                ),
                'admin_label' => true,
                'group' => 'Style'
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