<?php

/*
 * Shortcode textillate Row
 * */

add_shortcode('vc_textillate_row', 'vc_textillate_row_function');

function vc_textillate_row_function($atts, $content = null) {


    extract(shortcode_atts(array(
        'text' => 'We Are Creative',
        'in_animation' => 'fadeIn',
        'out_animation' => 'fadeOut',
        'in_type' => '',
        'out_type' => ''
    ), $atts));

    $in_type_output = '';
    switch ($in_type){
        case 'sequence';
            $in_type_output = 'data-out-sequence="true"';
            break;
        case 'reverse';
            $in_type_output = 'data-out-reverse="true"';
            break;
        case 'sync';
            $in_type_output = 'data-out-sync="true"';
            break;
        case 'shuffle';
            $in_type_output = 'data-out-shuffle="true"';
            break;
    }

    $out_type_output = '';
    switch ($out_type){
        case 'sequence';
            $out_type_output = 'data-in-sequence="true"';
            break;
        case 'reverse';
            $out_type_output = 'data-in-reverse="true"';
            break;
        case 'sync';
            $out_type_output = 'data-out-in="true"';
            break;
        case 'shuffle';
            $out_type_output = 'data-in-shuffle="true"';
            break;
    }

    /////Effects//////
    $effects = '';
    $effects .= ' '. 'data-in-effect="'.$in_animation.'" ';
    $effects .= ' '. 'data-out-effect="'.$out_animation.'" ';
    if(!empty($in_type_output)){
        $effects .= '' . $in_type_output;
    }
    if(!empty($out_type_output)){
        $effects .= '' . $out_type_output;
    }
    /////Effects//////

    $output = '<li '.$effects.' >'.$text.'</li>';
    return $output;

}

add_action('vc_before_init', 'vc_textillate_row_shortcode');
function vc_textillate_row_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Textillate Row', 'alian4x'),
        'base' => 'vc_textillate_row',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'as_child' => array(
            'only' => 'vc_textillate_parent'
        ),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(

            array(
                'type' => 'textfield',
                'heading' => esc_html__('Text', 'alian4x'),
                'param_name' => 'text',
                'value' => 'We Are Creative',
                'admin_label' => true,
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('In Animation', 'alian4x'),
                'value' => array(
                    esc_html__('fadeIn', 'alian4x') => 'fadeIn',
                    esc_html__('flash', 'alian4x') => 'flash',
                    esc_html__('bounce', 'alian4x') => 'bounce',
                    esc_html__('shake', 'alian4x') => 'shake',
                    esc_html__('tada', 'alian4x') => 'tada',
                    esc_html__('swing', 'alian4x') => 'swing',
                    esc_html__('wobble', 'alian4x') => 'wobble',
                    esc_html__('pulse', 'alian4x') => 'pulse',
                    esc_html__('flip', 'alian4x') => 'flip',
                    esc_html__('flipInX', 'alian4x') => 'flipInX',
                    esc_html__('flipInY', 'alian4x') => 'flipInY',
                    esc_html__('fadeInUp', 'alian4x') => 'fadeInUp',
                    esc_html__('fadeInDown', 'alian4x') => 'fadeInDown',
                    esc_html__('fadeInLeft', 'alian4x') => 'fadeInLeft',
                    esc_html__('fadeInRight', 'alian4x') => 'fadeInRight',
                    esc_html__('fadeInUpBig', 'alian4x') => 'fadeInUpBig',
                    esc_html__('fadeInDownBig', 'alian4x') => 'fadeInDownBig',
                    esc_html__('fadeInLeftBig', 'alian4x') => 'fadeInLeftBig',
                    esc_html__('fadeInRightBig', 'alian4x') => 'fadeInRightBig',
                    esc_html__('bounceIn', 'alian4x') => 'bounceIn',
                    esc_html__('bounceInDown', 'alian4x') => 'bounceInDown',
                    esc_html__('bounceInUp', 'alian4x') => 'bounceInUp',
                    esc_html__('bounceInLeft', 'alian4x') => 'bounceInLeft',
                    esc_html__('bounceInRight', 'alian4x') => 'bounceInRight',
                    esc_html__('rotateIn', 'alian4x') => 'rotateIn',
                    esc_html__('rotateInDownLeft', 'alian4x') => 'rotateInDownLeft',
                    esc_html__('rotateInDownRight', 'alian4x') => 'rotateInDownRight',
                    esc_html__('rotateInUpLeft', 'alian4x') => 'rotateInUpLeft',
                    esc_html__('rotateInUpRight', 'alian4x') => 'rotateInUpRight',
                    esc_html__('rollIn', 'alian4x') => 'rollIn'
                ),
                'param_name' => 'in_animation',
                'group' => 'In Animation'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Type', 'alian4x'),
                'param_name' => 'in_type',
                'value' => array(
                    esc_html__('None', 'alian4x') => '',
                    esc_html__('sequence', 'alian4x') => 'sequence',
                    esc_html__('reverse', 'alian4x') => 'reverse',
                    esc_html__('sync', 'alian4x') => 'sync',
                    esc_html__('shuffle', 'alian4x') => 'shuffle'
                ),
                'group' => 'In Animation'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Out Animation', 'alian4x'),
                'value' => array(
                    esc_html__('fadeOut', 'alian4x') => 'fadeOut',
                    esc_html__('flash', 'alian4x') => 'flash',
                    esc_html__('bounce', 'alian4x') => 'bounce',
                    esc_html__('shake', 'alian4x') => 'shake',
                    esc_html__('tada', 'alian4x') => 'tada',
                    esc_html__('swOutg', 'alian4x') => 'swOutg',
                    esc_html__('wobble', 'alian4x') => 'wobble',
                    esc_html__('pulse', 'alian4x') => 'pulse',
                    esc_html__('flip', 'alian4x') => 'flip',
                    esc_html__('flipOutX', 'alian4x') => 'flipOutX',
                    esc_html__('flipOutY', 'alian4x') => 'flipOutY',
                    esc_html__('fadeOutUp', 'alian4x') => 'fadeOutUp',
                    esc_html__('fadeOutDown', 'alian4x') => 'fadeOutDown',
                    esc_html__('fadeOutLeft', 'alian4x') => 'fadeOutLeft',
                    esc_html__('fadeOutRight', 'alian4x') => 'fadeOutRight',
                    esc_html__('fadeOutUpBig', 'alian4x') => 'fadeOutUpBig',
                    esc_html__('fadeOutDownBig', 'alian4x') => 'fadeOutDownBig',
                    esc_html__('fadeOutLeftBig', 'alian4x') => 'fadeOutLeftBig',
                    esc_html__('fadeOutRightBig', 'alian4x') => 'fadeOutRightBig',
                    esc_html__('bounceOut', 'alian4x') => 'bounceOut',
                    esc_html__('bounceOutDown', 'alian4x') => 'bounceOutDown',
                    esc_html__('bounceOutUp', 'alian4x') => 'bounceOutUp',
                    esc_html__('bounceOutLeft', 'alian4x') => 'bounceOutLeft',
                    esc_html__('bounceOutRight', 'alian4x') => 'bounceOutRight',
                    esc_html__('rotateOut', 'alian4x') => 'rotateOut',
                    esc_html__('rotateOutDownLeft', 'alian4x') => 'rotateOutDownLeft',
                    esc_html__('rotateOutDownRight', 'alian4x') => 'rotateOutDownRight',
                    esc_html__('rotateOutUpLeft', 'alian4x') => 'rotateOutUpLeft',
                    esc_html__('rotateOutUpRight', 'alian4x') => 'rotateOutUpRight',
                    esc_html__('rollOut', 'alian4x') => 'rollOut'
                ),
                'param_name' => 'out_animation',
                'group' => 'Out Animation'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Type', 'alian4x'),
                'param_name' => 'out_type',
                'value' => array(
                    esc_html__('None', 'alian4x') => '',
                    esc_html__('sequence', 'alian4x') => 'data-out-sequence="true"',
                    esc_html__('reverse', 'alian4x') => 'data-out-reverse="true"',
                    esc_html__('sync', 'alian4x') => 'data-out-sync="true"',
                    esc_html__('shuffle', 'alian4x') => 'data-out-shuffle="true"'
                ),
                'group' => 'Out Animation'
            ),
        )
    ));
}