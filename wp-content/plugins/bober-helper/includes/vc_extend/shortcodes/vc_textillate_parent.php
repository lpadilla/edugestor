<?php

/*
 * Shortcode textillate Parent
 * */

add_shortcode('vc_textillate_parent', 'vc_textillate_parent_function');

function vc_textillate_parent_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'p' => '',
        'm' => '',
        'color' => '',
        'font_size' => '',
        'letter_spacing' => '',
        'font_weight' => '',
        'align' => 'al-left',
        'extra_class' => ''
    ), $atts));

    $output = '';

    $vc_class = 'slide-title tlt al-tlt-text';
    $idf = uniqid('alian4x_el_');

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    $vc_class .= ' ' . $align;



    ///Style start////
    $style = '';
    $out_style = '';
    if($m){
        $out_style .= 'margin:'.$m.';';
    }
    if($p){
        $out_style .= 'padding:'.$p.';';
    }
    if($font_size){
        $out_style .= 'font-size:'.$font_size.'px;';
    }
    if($letter_spacing){
        $out_style .= 'letter-spacing:'.$letter_spacing.';';
    }
    if($font_weight){
        $out_style .= 'font-weight:'.$font_weight.';';
    }
    $style = 'style="'.$out_style.'"';
    ///End start////

    ob_start();

    ?>

    <div <?php echo $style; ?> class="<?php echo $vc_class; ?>" id="<?php echo $idf ?>">
        <ul class="texts hidden">
            <?php echo do_shortcode($content); ?>
        </ul>
    </div>

    <?php
        if(!empty($color)){
            echo '<style>#'.$idf.' span{color: '.$color.'}</style>';
        }
    ?>

    <?php

    return ob_get_clean();
}

add_action('vc_before_init', 'vc_textillate_parent_shortcode');

function vc_textillate_parent_shortcode() {

    vc_map(array(
        'name' => esc_html__('Textillate Parent', 'alian4x'),
        'base' => 'vc_textillate_parent',
        'as_parent' => array(
            'only' => 'vc_textillate_row'
        ),
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Text align', 'alian4x'),
                'param_name' => 'align',
                'value' => array(
                    esc_html__('Left', 'alian4x') => 'al-left',
                    esc_html__('Right', 'alian4x') => 'al-right',
                    esc_html__('Center', 'alian4x') => 'al-center'

                ),
                'group' => 'General'
            ),
            array(
                'type' => 'al_number',
                'heading' => esc_html__('Font size(px)', 'alian4x'),
                'param_name' => 'font_size',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Letter spacing', 'alian4x'),
                'param_name' => 'letter_spacing',
                'value' => '',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Font weight', 'alian4x'),
                'param_name' => 'font_weight',
                'value' => '',
                'group' => 'General'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'color',
                'heading' => esc_html__('Color text', 'alian4x'),
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