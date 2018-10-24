<?php

/*
 * Shortcode Testimonials Row
 * */

add_shortcode('vc_testimonials_row', 'vc_testimonials_row_function');

function vc_testimonials_row_function($atts, $content = null) {

	
	extract(shortcode_atts(array(
		'author' => 'Name',
		'company' => 'Company',
		'text' => 'Text',
        'image' => '',
		'authorcolor' => '',
		'bordercolor' => '',
		'companycolor' => '',
		'textcolor' => '',
		'itemcolor' => '',
        'p' => '',
        'm' => '',
        'extra_class' => ''
	), $atts));

	$output = '';
    $vc_class = 'item-testimonials';

	$idf = uniqid('alian4x_el_');

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }
    //STYLES
    $borer_photo_item = '';
    if(!empty($bordercolor)){
        $borer_photo_item = 'style="border-color:'.$bordercolor.';"';
    }
    $text_color_item = '';
    if(!empty($textcolor)){
        $text_color_item = 'style="color:'.$textcolor.';"';
    }

    $authorcolor_item = '';
    if(!empty($authorcolor)){
        $authorcolor_item = 'style="color:'.$authorcolor.';"';
    }

    $companycolor_item = '';
    if(!empty($companycolor)){
        $companycolor_item = 'style="color:'.$companycolor.';"';
    }


    $style = '';
    $out_style = '';

    if($m){
        $out_style .= 'margin:'.$m.';';
    }
    if($p){
        $out_style .= 'padding:'.$p.';';
    }
    if($itemcolor){
        $out_style .='background-color:'.$itemcolor.';';
    }

    if(!empty($out_style)){
        $style = 'style="'.$out_style.'"';
    }
    //END Styles


    $image_done = wp_get_attachment_image_src($image);

    $alt = get_post_meta($image, '_wp_attachment_image_alt', true);

	$output .= '<div '.$style.' class="al-testimonials-item">';
    $output .= '<div class="'.$vc_class.'" id="'.$idf.'" >';
    $output .= '<img src="'.$image_done[0].'" alt="'.$alt.'" '.$borer_photo_item.'>';
    $output .= '<div class="al-text-item" '.$text_color_item.'>'.$text.'</div>';
    $output .= '<span class="al-testimonial-name" '.$authorcolor_item.'>'.$author.'</span>';
    $output .= '<span class="al-testimonial-company" '.$companycolor_item.'>'.$company.'</span>';
    $output .= '</div>';
	$output .= '</div>';

	return $output;
	
}

add_action('vc_before_init', 'vc_testimonials_row_shortcode');
function vc_testimonials_row_shortcode()
{
	vc_map(array(
		'name' => esc_html__('Testimonial Row', 'alian4x'),
		'base' => 'vc_testimonials_row',
		'icon' => plugins_url('vc_shortcode.png', __FILE__),  
		'as_child' => array(
			'only' => 'vc_testimonials_parent'
		),
		'category' => esc_html__('Alian4x', 'alian4x'),
		'params' => array(
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('User photo', 'alian4x'),
                'description' => esc_html__('Select image.', 'alian4x'),
                'param_name' => 'image',
                'value' => '',
                'group' => 'General',
                'admin_label' => false,
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'bordercolor',
                'heading' => esc_html__('Photo Border Color', 'alian4x'),
                'value' => '',
                'group' => 'Color'
            ),
			array(
				'type' => 'textfield',
				'admin_label' => true,
				'heading' => esc_html__('Author', 'alian4x'),
				'description' => esc_html__('Enter author of testimonial.', 'alian4x'),
				'param_name' => 'author',
				'value' => 'Name',
				'group' => 'General'
			),
			array(
				'type' => 'textarea',
				'heading' => esc_html__('Text', 'alian4x'),
				'description' => esc_html__('Enter text of testimonial.', 'alian4x'),
				'param_name' => 'text',
				'value' => 'Text',
				'group' => 'General'
			),
            array(
                'type' => 'textfield',
                'admin_label' => true,
                'heading' => esc_html__('Company', 'alian4x'),
                'description' => esc_html__('Enter company of author.', 'alian4x'),
                'param_name' => 'company',
                'value' => 'Company',
                'group' => 'General'
            ),
			array(
				'type' => 'colorpicker',
				'param_name' => 'authorcolor',
				'heading' => esc_html__('Author Color', 'alian4x'),
				'description' => esc_html__('The color property specifies the color of author.', 'alian4x'),
				'value' => '',
				'group' => 'Color'
			),
            array(
				'type' => 'colorpicker',
				'param_name' => 'companycolor',
				'heading' => esc_html__('Company Color', 'alian4x'),
				'description' => esc_html__('The color property specifies the color of company.', 'alian4x'),
				'value' => '',
				'group' => 'Color'
			),
            array(
				'type' => 'colorpicker',
				'param_name' => 'itemcolor',
				'heading' => esc_html__('Item Background', 'alian4x'),
				'description' => esc_html__('The background property specifies the color of testimonial.', 'alian4x'),
				'value' => '',
				'group' => 'Color'
			),
			array(
				'type' => 'colorpicker',
				'param_name' => 'textcolor',
				'heading' => esc_html__('Text Color', 'alian4x'),
				'description' => esc_html__('The color property specifies the color of text.', 'alian4x'),
				'value' => '#191919',
				'group' => 'Color'
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