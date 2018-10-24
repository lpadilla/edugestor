<?php

/*
 * Shortcode Pricing Table Parent
 * */

add_shortcode('vc_pricing_table_parent', 'vc_pricing_table_parent_function');

function vc_pricing_table_parent_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'name' => 'Starter package',
        'price' => '12',
        'text' => 'Purchase',
        'url' => '#',
        'currency' => '$',
        'subprice' => 'Per month',
        'target' => '_self',
        'featured' => 'false',
        'p' => '',
        'm' => '',
        'extra_class' => ''
    ), $atts));


    $output = '';


    $vc_class = 'item-price';
    $idf = uniqid('alian4x_el_');

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


    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    if($featured == 'true'){
        $vc_class .= ' most-price';
    }

    $output .= '<div '.$style.' class="'.$vc_class.'" id="'.$idf.'">';

        $output .= '';

        $output .= '<div class="head">';
            $output .= '<div class="name-wrap">';
                $output .= '<h2>'.$name.'</h2>';
            $output .= '</div>';
            $output .= '<div class="price-wrap">';
                $output .= '<p>'.$currency.''.$price.'</p>';
                $output .= '<span class="per-mn">'.$subprice.'</span>';
                $output .= '<div class="bg-current">'.$currency.'</div>';
            $output .= '</div>';
        $output .= '</div>';

        $output .= '<div class="body"><ul>';
            $output .= do_shortcode($content);
            $output .= '<li class="buttons-section"><a href="'.$url.'" target ="'.$target.'" class="btn btn-blue large-btn">'.$text.'</a></li>';
        $output .= '</ul></div>';


    $output .= '</div>';

    return $output;

}
add_action('vc_before_init', 'vc_pricing_table_parent_shortcode');

function vc_pricing_table_parent_shortcode() {

    vc_map(array(
        'name' => esc_html__('Pricing Table', 'alian4x'),
        'base' => 'vc_pricing_table_parent',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'as_parent' => array(
            'only' => 'vc_pricing_table_row'
        ),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Popular Plan?', 'alian4x'),
                'param_name' => 'featured',
                'value' => array(
                    esc_html__('Disable', 'alian4x') => 'false',
                    esc_html__('Enable', 'alian4x') => 'true',
                ),
                'group' => 'General',
            ),
            array(
                'type' => 'textfield',
                'admin_label' => true,
                'param_name' => 'name',
                'heading' => esc_html__('Name', 'alian4x'),
                'value' => 'Starter package',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'admin_label' => true,
                'param_name' => 'price',
                'heading' => esc_html__('Price', 'alian4x'),
                'value' => '12',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'admin_label' => true,
                'param_name' => 'currency',
                'heading' => esc_html__('Currency', 'alian4x'),
                'value' => '$',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'admin_label' => true,
                'param_name' => 'subprice',
                'heading' => esc_html__('Sub Price', 'alian4x'),
                'value' => 'Per month',
                'group' => 'General'
            ),

            array(
                'type' => 'textfield',
                'param_name' => 'text',
                'heading' => esc_html__('Text', 'alian4x'),
                'description' => esc_html__('Enter a text for the purchase button.', 'alian4x'),
                'value' => 'Purchase',
                'group' => 'Button'
            ),
            array(
                'type' => 'textfield',
                'param_name' => 'url',
                'heading' => esc_html__('URL', 'alian4x'),
                'description' => esc_html__('Specify the URL of the page the link goes to.', 'alian4x'),
                'value' => '#',
                'group' => 'Button'
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
                'group' => 'Button'
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