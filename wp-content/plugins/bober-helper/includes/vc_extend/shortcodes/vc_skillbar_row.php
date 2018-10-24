<?php

/*
 * Shortcode Skillbar Row
 * */

add_shortcode('vc_skillbar_row', 'vc_skillbar_row_function');

function vc_skillbar_row_function($atts, $content = null) {


    extract(shortcode_atts(array(
        'text' => 'Skill',
        'company' => 'Company',
        'value' => '90',
        'textcolor' => '',
        'valcolor' => '',
    ), $atts));

    $output = '';
    $vc_class = 'al-skillbar clearfix';

    $idf = uniqid('alian4x_el_');

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    $text_color = '';
    if(!empty($textcolor)){
        $text_color = 'style="color:'.$textcolor.';"';
    }

    $val_color = '';
    if(!empty($valcolor)){
        $val_color = 'style="color:'.$valcolor.';"';
    }

    $output .= '<div  class="'.$vc_class.'" id="'.$idf.'" >';
        $output .= '<div class="clearfix">
        <div '.$text_color.' class="al-skillbar-number pull-left">'.$text.'</div>
        <div '.$val_color.' class="al-skillbar-number pull-right">'.$value.'%</div>
        </div>';
        $output .= '<div data-percent="'.$value.'%" class="al-skillbar-progress"><div class="al-progress-bar"></div></div>';
        $output .= '';
    $output .= '</div>';


    return $output;

}

add_action('vc_before_init', 'vc_skillbar_row_shortcode');
function vc_skillbar_row_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Skillbar Row', 'alian4x'),
        'base' => 'vc_skillbar_row',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'as_child' => array(
            'only' => 'vc_skillbar_parent'
        ),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Skill text', 'alian4x'),
                'description' => esc_html__('Enter text of skill.', 'alian4x'),
                'param_name' => 'text',
                'value' => 'Skill',
                'admin_label' => true,
                'group' => 'General'
            ),
            array(
                'type' => 'al_number',
                'heading' => esc_html__('Value', 'alian4x'),
                'param_name' => 'value',
                'admin_label' => true,
                'value' => 90,
                'min' => 0,
                'max' => 100,
                'step' => 1,
                'group' => 'General'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'valcolor',
                'heading' => esc_html__('Value Color', 'alian4x'),
                'value' => '',
                'group' => 'Color'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'textcolor',
                'heading' => esc_html__('Text Color', 'alian4x'),
                'value' => '',
                'group' => 'Color'
            ),
        )
    ));
}