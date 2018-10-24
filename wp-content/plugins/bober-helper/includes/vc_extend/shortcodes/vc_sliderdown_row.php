<?php

/*
 * Shortcode Sliderdown Row
 * */

add_shortcode('vc_sliderdown_row', 'vc_sliderdown_row_function');

function vc_sliderdown_row_function($atts, $content = null) {


    extract(shortcode_atts(array(
        'image' => '',
        'link' => '',
        'islink' => '',
        'target' => '_self',
    ), $atts));

    $output = '';

    $vc_class = 'col-xs-3 item';
    $idf = uniqid('alian4x_el_');


    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    $image_done = wp_get_attachment_image_src($image, 'milness_fullsize');

    $alt = get_post_meta($image, '_wp_attachment_image_alt', true);


    $output .= '<div class="'.$vc_class.'" id="'.$idf.'" >';
    if($islink === 'true'){
        $output .= '<a href="'.$link.'" target ="'.$target.'">';
    }
    $output .= '<img src="'.$image_done[0].'" alt="'.$alt.'">';

    if($islink === 'true'){
        $output .= '</a>';
    }
    $output .= '</div>';

    return $output;

}
add_action('vc_before_init', 'vc_sliderdown_row_shortcode');
function vc_sliderdown_row_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Sliderdown Row', 'alian4x'),
        'base' => 'vc_sliderdown_row',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'as_child' => array(
            'only' => 'vc_sliderdown_parent'
        ),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Is it a link?', 'alian4x'),
                'param_name' => 'islink',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                ),
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
                'dependency' => array(
                    'element' => 'islink',
                    'value' => 'true'
                ),
                'group' => 'General'
            ),
            array(
                'save_always' => true,
                'type' => 'textfield',
                'heading' => esc_html__('Link', 'alian4x'),
                'param_name' => 'link',
                'value' => '',
                'group' => 'General',
                'dependency' => array(
                    'element' => 'islink',
                    'value' => 'true'
                ),
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Image', 'alian4x'),
                'description' => esc_html__('Select image.', 'alian4x'),
                'param_name' => 'image',
                'value' => '',
                'holder' => 'img',
                'group' => 'General',
                'admin_label' => false,
            ),
        )
    ));
}