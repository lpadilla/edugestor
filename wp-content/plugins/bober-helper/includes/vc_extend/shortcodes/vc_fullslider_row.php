<?php

/*
 * Shortcode FullSlider Row
 * */

add_shortcode('vc_fullslider_row', 'vc_fullslider_row_function');

function vc_fullslider_row_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'backround_image' => '',
        'container' => 'al-container-slide',
        'canvas' => 'none',
        'bg_mask' => 'al-bg-mask',
        'bg_mask_background' => '',
        'p' => '',
        'm' => '',
        'extra_class' => ''

    ), $atts));

    $backround_image = 'data-image="'.wp_get_attachment_image_src($backround_image, 'bober_fullsize')[0].'"';

    $output = '';

    $vc_class = 'slide al-vertical-align background-image al-full-vh';
    $idf = uniqid('alian4x_el_');


    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }
    if (!empty($container)) {
        $vc_class .= ' ' . $container;
    }

    //START styles
    $style = '';
    $out_style = '';

    if($m){
        $out_style .= 'margin:'.$m.';';
    }

    if($p){
        $out_style .= 'padding:'.$p.';';
    }
    if(!empty($out_style)){
        $style = 'style="'.$out_style.'"';
    }

    $style .= ' ' .$backround_image;
    //END Styles

    $bg_mask_bg = '';
    if(!empty($bg_mask_background)){
        $bg_mask_bg = 'style="background-color:'.$bg_mask_background.';"';
    }



    ob_start();
?>

        <div <?php echo $style; ?> class="<?php echo $vc_class; ?>" id="<?php echo $idf; ?>">
            <div class="container-slide container center ">
                <div class="al-content-slide">
                    <?php echo do_shortcode($content); ?>

                </div>
                <?php
                    if($canvas === '1'){
                        echo '<div id="al-particles-js" class="al-canvas-background"></div>';
                    }elseif($canvas === '2'){
                        echo '<canvas id="al-particles" class="al-canvas-background"></canvas>';
                    }
                ?>
                <?php if($bg_mask !== 'none'){
                    echo '<div '.$bg_mask_bg.' class="al-bg-mask-div"></div>';
                }?>
            </div>
        </div>

<?php

return ob_get_clean();

}


add_action('vc_before_init', 'vc_fullslider_row_shortcode');
function vc_fullslider_row_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Fullslider Row', 'alian4x'),
        'base' => 'vc_fullslider_row',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'as_child' => array(
            'only' => 'vc_fullslider_parent'
        ),
        "as_parent" => array('except' => ''),
        "content_element" => true,
        "show_settings_on_create" => false,
        "is_container" => true,
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Background image', 'alian4x'),
                'description' => esc_html__('Select image.', 'alian4x'),
                'param_name' => 'backround_image',
                'value' => '',
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Container slide', 'alian4x'),
                'param_name' => 'container',
                'value' => array(
                    esc_html__('Boxed', 'alian4x') => 'al-container-slide',
                    esc_html__('Fluid', 'alian4x') => ''

                ),
                'group' => 'Style'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Canvas', 'alian4x'),
                'description' => esc_html__('Choice "canvas background for slide.', 'alian4x'),
                'param_name' => 'canvas',
                'value' => array(
                    esc_html__('None', 'alian4x') => 'none',
                    esc_html__('Canvas 1', 'alian4x') => '1',
                    esc_html__('Canvas 2', 'alian4x') => '2',
                ),
                'group' => 'Style'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Use background mask overlay ?', 'alian4x'),
                'param_name' => 'bg_mask',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'al-bg-mask',
                    esc_html__('No', 'alian4x') => 'none'
                ),
                'group' => 'Style'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'bg_mask_background',
                'heading' => esc_html__('Background Color Overlay', 'alian4x'),
                'value' => '',
                'group' => 'Style',
                'dependency' => array(
                    'element' => 'bg_mask',
                    'value' => 'al-bg-mask'
                ),
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
        "js_view" => 'VcColumnView'
    ));
}