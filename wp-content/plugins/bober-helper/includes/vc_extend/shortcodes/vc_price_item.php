<?php

/*
 * Shortcode Price Item
 * */


add_shortcode('vc_price_item', 'vc_price_item_function');


function vc_price_item_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'service' => 'Web development',
        'price' => '999$',
        'sub_text' => 'From',
        'light' => '',
        'm' => '',
        'p' => '',
        'extra_class' => ''
    ), $atts));


    $output = '';

    $vc_class = 'item-price-two';

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }
    if (!empty($light)) {
        $vc_class .= ' ' . $light;
    }

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

    $output .= '<div '.$style.' class="'.$vc_class.'">';
        $output .= '<h2>'.$service.'</h2>';
        $output .= '<div class="price"><span>'.$sub_text.'</span>';
        $output .= '<p>'.$price.'</p>';
        $output .= '</div>';
    $output .= '</div>';

    return $output;
}

add_action('vc_before_init', 'vc_price_item_shortcode');

function vc_price_item_shortcode() {
    vc_map(array(
        'name' => esc_html__('Price item', 'alian4x'),
        'base' => 'vc_price_item',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Service', 'alian4x'),
                'param_name' => 'service',
                "holder" => "div",
                'value' => 'Web development',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Sub text', 'alian4x'),
                'param_name' => 'sub_text',
                'value' => 'From',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Price', 'alian4x'),
                'param_name' => 'price',
                'value' => '999$',
                "holder" => "div",
                'group' => 'General'
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Light style ?', 'alian4x'),
                'param_name' => 'light',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'dark-price',
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
        )
    ));
}
