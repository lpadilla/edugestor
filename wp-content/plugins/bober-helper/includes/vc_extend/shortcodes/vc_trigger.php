<?php

/*
 * Shortcode Trigger
 * */

add_shortcode('vc_trigger', 'vc_trigger_function');

function vc_trigger_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'type' => 'br-trigger',
        'title' => 'Trigger',
        'iconcolor' => '',
        'descriptcolor' => '',
        'titlecolor' => '',
        'bordercolor' => '',
        'iconbackgrount' => '',
        'text' => 'Default text.',
        'icon_type' => 'none',
        'icon_fontawesome' => '',
        'icon_stroke' => '',
        'icon_openiconic' => '',
        'icon_typicons' => '',
        'icon_entypo' => '',
        'icon_linecons' => '',
        'icon_elusive' => '',
        'icon_etline' => '',
        'icon_iconmoon' => '',
        'icon_linearicons' => '',
        'icon_iconsmind' => '',
        'extra_class' => '',
        'm' => '',
		'p' => ''
    ), $atts));

    switch ($icon_type) {
        case 'fontawesome':
            $icon = $atts['icon_fontawesome'];
            break;
        case 'stroke':
            $icon = $atts['icon_stroke'];
            break;
        case 'openiconic':
            $icon = $atts['icon_openiconic'];
            break;
        case 'typicons':
            $icon = $atts['icon_typicons'];
            break;
        case 'entypo':
            $icon = $atts['icon_entypo'];
            break;
        case 'linecons':
            $icon = $atts['icon_linecons'];
            break;
        case 'elusive':
            $icon = $atts['icon_elusive'];
            break;
        case 'etline':
            $icon = $atts['icon_etline'];
            break;
        case 'iconmoon':
            $icon = $atts['icon_iconmoon'];
            break;
        case 'linearicons':
            $icon = $atts['icon_linearicons'];
            break;
        case 'iconsmind':
            $icon = $atts['icon_iconsmind'];
            break;
    }

    vc_icon_element_fonts_enqueue($icon_type);

    $vc_single_icon_output = '';
    $icon_color = '';
    if(!empty($iconcolor)){
        $icon_color = 'style="color:'.$iconcolor.'";';
    }
    if ($icon_type != 'none') {
        $vc_single_icon_output .= '<i '.$icon_color.' class="'.$icon.'"></i>';
    }

    $output = '';

    $vc_class = 'al-icon-large-container al-item-icon';


    if (!empty($type)) {
        $vc_class .= ' ' . $type;
    }
    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    $style = '';
    $out_style = '';

    if($m){
        $out_style .= 'margin:'.$m.';';
    }
    if($p){
        $out_style .= 'padding:'.$p.';';
    }

    $style = 'style="'.$out_style.'"';

    $title_color = '';
    if(!empty($titlecolor)){
        $title_color = 'style="color:'.$titlecolor.';"';
    }

    $icon_background = '';
    if(!empty($iconbackgrount)){
        $icon_background = 'style="background-color:'.$iconbackgrount.';"';
    }

    $descript_color = '';
    if(!empty($descriptcolor)){
        $descript_color = 'style="color:'.$descriptcolor.';"';
    }

    $boreder_color = '';
    if(!empty($bordercolor)){
        $boreder_color = 'style="border-color:'.$bordercolor.';"';
    }


    $content = $title;
    $content = vc_value_from_safe( $content );



    $output .= '<div '.$style.' class="' . $vc_class . '">';
        $output .='<div '.$boreder_color.' class="al-icon-container">';
            $output .='<div '.$icon_background.' class="al-icon al-icon-circle">'.$vc_single_icon_output.'</div>';
        $output .= '</div>';
    if($title){
        $output .= '<h3 '.$title_color.' >'.$content.'</h3> ';
    }

    $output .= '<p '.$descript_color.'>'.$text.'</p>';

    $output .= '</div>';

    return $output;

}

add_action('vc_before_init', 'vc_trigger_shortcode');

function vc_trigger_shortcode() {
    vc_map(array(
        'name' => esc_html__('Trigger', 'alian4x'),
        'base' => 'vc_trigger',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Icon library', 'alian4x'),
                'value' => array(
                    esc_html__('None', 'alian4x') => 'none',
                    esc_html__('Font Awesome', 'alian4x') => 'fontawesome',
                    esc_html__('Pe 7 Stroke', 'alian4x') => 'stroke',
                    esc_html__('Open Iconic', 'alian4x') => 'openiconic',
                    esc_html__('Typicons', 'alian4x') => 'typicons',
                    esc_html__('Entypo', 'alian4x') => 'entypo',
                    esc_html__('Linecons', 'alian4x') => 'linecons',
                    esc_html__('Elusive', 'alian4x') => 'elusive',
                    esc_html__('Etline', 'alian4x') => 'etline',
                    esc_html__('Iconmoon', 'alian4x') => 'iconmoon',
                    esc_html__('Linearicons', 'alian4x') => 'linearicons',
                    esc_html__('Iconsmind', 'alian4x') => 'iconsmind',
                ),
                'param_name' => 'icon_type',
                'admin_label' => true,
                'description' => esc_html__('Select icon library', 'alian4x'),
                'group' => 'General'
            ),

            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_fontawesome',
                'settings' => array(
                    'emptyIcon' => false,
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'fontawesome'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_stroke',
                'settings' => array(
                    'type' => 'stroke',
                    'emptyIcon' => false,
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'stroke'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_openiconic',
                'settings' => array(
                    'emptyIcon' => false,
                    'type' => 'openiconic',
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'openiconic'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_typicons',
                'settings' => array(
                    'emptyIcon' => false,
                    'type' => 'typicons',
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'typicons'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_entypo',
                'settings' => array(
                    'emptyIcon' => false,
                    'type' => 'entypo',
                    'iconsPerPage' => 300
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'entypo'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_linecons',
                'settings' => array(
                    'emptyIcon' => false,
                    'type' => 'linecons',
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'linecons'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_elusive',
                'settings' => array(
                    'emptyIcon' => false,
                    'type' => 'elusive',
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'elusive'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_etline',
                'settings' => array(
                    'emptyIcon' => false,
                    'type' => 'etline',
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'etline'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_iconmoon',
                'settings' => array(
                    'emptyIcon' => false,
                    'type' => 'iconmoon',
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'iconmoon'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_linearicons',
                'settings' => array(
                    'emptyIcon' => false,
                    'type' => 'linearicons',
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'linearicons'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_iconsmind',
                'settings' => array(
                    'emptyIcon' => false,
                    'type' => 'iconsmind',
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_type',
                    'value' => 'iconsmind'
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'textarea_safe',
                'heading' => esc_html__('Message Title', 'alian4x'),
                'param_name' => 'title',
                'admin_label' => true,
                'value' => 'Message Title!',
                'group' => 'General'
            ),
            array(
                'type' => 'textarea',
                'heading' => esc_html__('Message Text', 'alian4x'),
                'param_name' => 'text',
                'admin_label' => true,
                'value' => 'Default text.',
                'group' => 'General'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'bordercolor',
                'heading' => esc_html__('Border Color', 'alian4x'),
                'value' => '',
                'group' => 'Style'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'iconcolor',
                'heading' => esc_html__('Icon Color', 'alian4x'),
                'value' => '',
                'group' => 'Style'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'iconbackgrount',
                'heading' => esc_html__('Icon Background', 'alian4x'),
                'value' => '',
                'group' => 'Style'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'titlecolor',
                'heading' => esc_html__('Title Color', 'alian4x'),
                'value' => '',
                'group' => 'Style'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'descriptcolor',
                'heading' => esc_html__('Description Color', 'alian4x'),
                'value' => '',
                'group' => 'Style'
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Show line after block ?', 'alian4x'),
                'param_name' => 'type',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'al-line-after',
                ),
                'admin_label' => true,
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