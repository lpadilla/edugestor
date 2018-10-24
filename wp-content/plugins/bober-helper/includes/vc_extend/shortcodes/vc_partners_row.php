<?php

/*
 * Shortcode Partners Row
 * */

add_shortcode('vc_partners_row', 'vc_partners_row_function');

function vc_partners_row_function($atts, $content = null) {


    extract(shortcode_atts(array(
        'type' => 'image',
        'image' => '',
        'text' => '',
        'target' => '_self',
        'value_link' => '',
        'link' => '',

    ), $atts));

    $output = '';

    $vc_class = 'al-partner-item';
    $idf = uniqid('alian4x_el_');


    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    $image_done = wp_get_attachment_image_src($image, 'milness_fullsize');

    $alt = get_post_meta($image, '_wp_attachment_image_alt', true);


    $output .= '<div class="'.$vc_class.'">';

    if($link === 'link'){
        $output .= '<a href="'.$value_link.'" target ="'.$target.'">';
    }

        if($type === 'image'){
            $output .= '<img src="'.$image_done[0].'" alt="'.$alt.'">';
        }elseif($type === 'text'){
            $output .= '<div class="al-partner-text">'.$text.'</div>';
        }


    if($link === 'link'){
        $output .= '</a>';
    }


    $output .= '</div>';

    return $output;

}
add_action('vc_before_init', 'vc_partners_row_shortcode');
function vc_partners_row_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Partner Row', 'alian4x'),
        'base' => 'vc_partners_row',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'as_child' => array(
            'only' => 'vc_partners_parent'
        ),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Show line after block ?', 'alian4x'),
                'param_name' => 'link',
                'value' => array(
                    esc_html__('It is a link ?', 'alian4x') => 'link',
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
                    'element' => 'link',
                    'value' => 'link'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Enter the link of partner:', 'alian4x'),
                'param_name' => 'value_link',
                'value' => '',
                'group' => 'General',
                'dependency' => array(
                    'element' => 'link',
                    'value' => 'link'
                ),
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Partner type', 'alian4x'),
                'param_name' => 'type',
                'value' => array(
                    esc_html__('Image', 'alian4x') => 'image',
                    esc_html__('Text', 'alian4x') => 'text'
                ),
                'group' => 'General'
            ),

            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Partner Image', 'alian4x'),
                'description' => esc_html__('Select Partner logo.', 'alian4x'),
                'param_name' => 'image',
                'value' => '',
                'group' => 'General',
                "holder" => "img",
                'dependency' => array(
                    'element' => 'type',
                    'value' => 'image'
                ),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Enter the name of partner:', 'alian4x'),
                'param_name' => 'text',
                'value' => '',
                'group' => 'General',
                'dependency' => array(
                    'element' => 'type',
                    'value' => 'text'
                ),
                ),
            ),
    ));
}