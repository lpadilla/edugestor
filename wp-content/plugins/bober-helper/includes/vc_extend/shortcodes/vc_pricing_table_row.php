<?php

/*
 * Shortcode Pricing Table Row
 * */

add_shortcode('vc_pricing_table_row', 'vc_pricing_table_row_function');

function vc_pricing_table_row_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'features' => '',
        'strikethrough' => ''
    ), $atts));


    $features_safe = vc_value_from_safe($features);

    $vc_class = '';
    if (!empty($strikethrough)) {
        $vc_class .= ' ' . $strikethrough;
    }

    $output = '';

    $output .= '<li class="'.$vc_class.'">';

    $output .= $features_safe;

    $output .= '</li>';

    return $output;

}


add_action('vc_before_init', 'vc_pricing_table_row_shortcode');

function vc_pricing_table_row_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Plan Features', 'alian4x'),
        'base' => 'vc_pricing_table_row',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'as_child' => array(
            'only' => 'vc_pricing_table_parent'
        ),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'textarea_safe',
                'heading' => esc_html__('Features', 'alian4x'),
                'param_name' => 'features',
                'description' => esc_html__('Enter your features (HTML tags available)', 'alian4x'),
                'group' => 'General',
                'admin_label' => true
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('It is a strikethrough text?', 'alian4x'),
                'param_name' => 'strikethrough',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'al-strikethrough',
                ),
                'admin_label' => true,
                'group' => 'Style'
            )
        )
    ));
}