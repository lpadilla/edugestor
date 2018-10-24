<?php

/*
 * Shortcode Custom Button
 * */


add_shortcode('vc_custom_button', 'vc_custom_button_function');


function vc_custom_button_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'label' => 'Get Started',
        'link' => '#',
        'background' => '',
        'type' => '',
        'btnstyle' => 'btn-blue',
        'target' => '_self',
        'm' => '',
        'p' => '',
        'extra_class' => ''
    ), $atts));


    $output = '';

    $vc_class = 'btn';
    $idf = uniqid('alian4x_el_');


    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    if (!empty($type)) {
        $vc_class .= ' ' . $type;
    }

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
    if(!empty($out_style)){
        $style = 'style="'.$out_style.'"';
    }

    $vc_class .= ' ' .$btnstyle;

    $output .= '<a '.$style.' href="'.$link.'" target ="'.$target.'" class="'.$vc_class.'" id="'.$idf.'">';
    $output .= $label;
    $output .= '</a>';

    return $output;
}

add_action('vc_before_init', 'vc_custom_button_shortcode');

function vc_custom_button_shortcode() {
    vc_map(array(
        'name' => esc_html__('Custom Button', 'alian4x'),
        'base' => 'vc_custom_button',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(

            array(
                'type' => 'textfield',
                'param_name' => 'label',
                'heading' => esc_html__('Button Label', 'alian4x'),
                'value' => 'Get Started',
                "holder" => "div",
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'param_name' => 'link',
                'heading' => esc_html__('Button Link', 'alian4x'),
                'value' => '#',
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Target', 'alian4x'),
                'description' => esc_html__('The target attribute specifies where to open the linked document.', 'alian4x'),
                'param_name' => 'target',
                'value' => array(
                    esc_html__('This Site', 'alian4x') => '_self',
                    esc_html__('New Page', 'alian4x') => '_blank',
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Style Button', 'alian4x'),
                'param_name' => 'btnstyle',
                'value' => array(
                    esc_html__('Primary', 'alian4x') => 'btn-blue',
                    esc_html__('Secondary', 'alian4x') => 'btn-dark',
                    esc_html__('White border', 'alian4x') => 'white-tr-btn',
                    esc_html__('White border 2', 'alian4x') => 'dark-btn',
                ),
                'group' => 'Style'
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Is is a large button?', 'alian4x'),
                'param_name' => 'type',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'large-btn',
                ),
                'group' => 'Style'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'background',
                'heading' => esc_html__('Background Button', 'alian4x'),
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
        )
    ));
}
