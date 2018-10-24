<?php

/*
 * Shortcode contact_info
 * */

add_shortcode('vc_contact_info', 'vc_contact_info_function');

function vc_contact_info_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'type_info' => 'phone',
        'phone_number' => '',
        'text' => '',
        'email' => '',
        'icon_type' => 'none',
        'icon_color' => '',
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

    if ($icon_type != 'none') {
        if($icon_color){
            $icon_color = 'style="color:'.$icon_color.'"';
        }
        $vc_single_icon_output .= '<i '.$icon_color.' class="'.$icon.'"></i>';
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

    $output = '';

    $vc_class = 'icon-progress';



    $content = $text;
    $content = vc_value_from_safe( $content );

    if($type_info === 'phone'){
        $output .= '<p class="phone">'.$vc_single_icon_output.' '.$phone_number.'</p>';
    }elseif($type_info === 'email'){
        $output .= '<a class="email" href="mailto:'.$email.'">'.$vc_single_icon_output.' '.$email.'</a>';
    }elseif($type_info === 'text'){
        $output .= '<p class="street">'.$content.'</p>';
    }


    return $output;

}



add_action('vc_before_init', 'vc_contact_info_shortcode');

function vc_contact_info_shortcode() {
    vc_map(array(
        'name' => esc_html__('Contact info', 'alian4x'),
        'base' => 'vc_contact_info',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Type info:', 'alian4x'),
                'description' => esc_html__('The target attribute specifies where to open the linked document.', 'alian4x'),
                'param_name' => 'type_info',
                'holder' => 'div',
                'value' => array(
                    esc_html__('Phone', 'alian4x') => 'phone',
                    esc_html__('Email', 'alian4x') => 'email',
                    esc_html__('Some text', 'alian4x') => 'text',
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'textarea_safe',
                'heading' => esc_html__('Text', 'alian4x'),
                'param_name' => 'text',
                'holder' => 'div',
                'value' => '',
                'group' => 'General',
                'dependency' => array(
                    'element' => 'type_info',
                    'value' => 'text',
                ),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Enter the phone number:', 'alian4x'),
                'param_name' => 'phone_number',
                'value' => '',
                'holder' => 'div',
                'group' => 'General',
                'dependency' => array(
                    'element' => 'type_info',
                    'value' => 'phone',
                ),
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Enter the email:', 'alian4x'),
                'param_name' => 'email',
                'value' => '',
                'group' => 'General',
                'dependency' => array(
                    'element' => 'type_info',
                    'value' => 'email',
                ),
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'icon_color',
                'heading' => esc_html__('Icon color', 'alian4x'),
                'value' => '',
                'group' => 'General'
            ),
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
                'description' => esc_html__('Select icon library', 'alian4x'),
                'group' => 'General',
                'dependency' => array(
                    'element' => 'type_info',
                    'value' => array(
                        'email',
                        'phone'
                    ),
                ),
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
            )
        )
    ));
}