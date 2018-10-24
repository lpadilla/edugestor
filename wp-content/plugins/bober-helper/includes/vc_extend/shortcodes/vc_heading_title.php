<?php

/*
 * Shortcode Heading Title
 * */


add_shortcode('vc_heading_title', 'vc_heading_title_function');


function vc_heading_title_function($atts, $content = null) {

	extract(shortcode_atts(array(
		'title' => 'Text',
		'subtitle' => 'Subtitle',
		'small_decs' => '',
		'titlecolor' => '',
		'subtitlecolor' => '',
		'smalldesccolor' => '',
		'l_s' => '',
		'heading' => 'h4',
		'addtext' => '',
		'align' => 'al-center',
		'subline' => 'true',
		'linecolor' => '',
		'optextshow' => 'false',
		'titlecoloropacity' => 'rgba(255,255,255,0.05)',
		'm' => '',
		'p' => '',
		'extra_class' => ''
	), $atts));


	$output = '';

    $small_description = vc_value_from_safe($small_decs);
    $subtitle_safe = vc_value_from_safe($subtitle);

    $content = $title;
    $content = vc_value_from_safe( $content );

	$vc_class = '';
	$idf = uniqid('alian4x_el_');


	if (!empty($extra_class)) {
		$vc_class .= ' ' . $extra_class;
	}



    //Block style Start
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
    //Block style Start

    //Title style Start
	$title_styles = '';
    $out_title_style = '';

    if($titlecolor){
        $out_title_style .= 'color:'.$titlecolor.';';
    }
    if($l_s){
        $out_title_style .= 'letter-spacing:'.$l_s.';';
    }

    $title_styles = 'style="'.$out_title_style.'"';
    //Title style END

	$opacity_text = '';
	if (!empty($addtext)) {
        $opacity_text = '<span style="color:'.$titlecoloropacity.'" class="al-opacity-text">'.$addtext.'</span>';
	}

	$vc_class .= ' ' .$align;

	//START Styles
    $sm_desc_color = '';
    if(!empty($smalldesccolor)){
        $sm_desc_color = 'style="color:'.$smalldesccolor.';"';
    }

    $line_color = '';
    if(!empty($linecolor)){
        $line_color = 'style="fill:'.$linecolor.';"';
    }

    $subtitle_color = '';
    if(!empty($subtitlecolor)){
        $subtitle_color = 'style="color:'.$subtitlecolor.';"';
    }
	//END Styles

	///////////////////////

	$output .= '<div '.$style.' class="heading-title '.$vc_class.'" id="'.$idf.'">';

	$output .= '<'.$heading.' '.$title_styles.' class="al-headitg-title al-parallax">' . $content . ''.$opacity_text.'</'.$heading.'>';

    if($subline == 'true'){

        $output .= '<span class="al-line-title">
            <svg '.$line_color.' x="0px" y="0px" viewBox="0 0 100 19.5" >
            <g>
                <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 
                    40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 	"/>
            </g>
            </svg>
        </span>';
    }
    //Small Description
	if($small_description){
        $output .= '<div '.$sm_desc_color.' class="al-small-description">'.$small_description.'</div>';
    }
    //Subtitile
    $output .= '<div '.$subtitle_color.'  class="al-subtitle">'.$subtitle_safe.'</div>';

	$output .= '</div>';

	return $output;
}

add_action('vc_before_init', 'vc_heading_title_shortcode');

function vc_heading_title_shortcode() {
	vc_map(array(
		'name' => esc_html__('Heading Title', 'alian4x'),
		'base' => 'vc_heading_title',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
		'category' => esc_html__('Alian4x', 'alian4x'),
		'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Title Alignment', 'alian4x'),
				'description' => esc_html__('Select text alignment from the list below.', 'alian4x'),
				'param_name' => 'align',
				'value' => array(
                    esc_html__('Center', 'alian4x') => 'al-center',
					esc_html__('Left', 'alian4x') => 'al-left',
					esc_html__('Right', 'alian4x') => 'al-right',
				),
				'group' => 'General'
			),
			array(
                'type' => 'textarea_safe',
				'param_name' => 'title',
				'heading' => esc_html__('Title', 'alian4x'),
				'value' => 'Text',
                "holder" => "div",
				'group' => 'Title'
			),
            array(
                'type' => 'textarea_safe',
				'param_name' => 'small_decs',
				'heading' => esc_html__('Small description', 'alian4x'),
				'value' => 'Text',
                "holder" => "div",
				'group' => 'Title'
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Heading', 'alian4x'),
				'description' => esc_html__('Select the header height from the list below.', 'alian4x'),
				'param_name' => 'heading',
				'value' => array(
                    esc_html__('H4', 'alian4x') => 'h4',
                    esc_html__('H1', 'alian4x') => 'h1',
					esc_html__('H2', 'alian4x') => 'h2',
					esc_html__('H3', 'alian4x') => 'h3',
					esc_html__('H5', 'alian4x') => 'h5',
					esc_html__('H6', 'alian4x') => 'h6',
				),
				'group' => 'Title'
			),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Show/Hide Opacity Text', 'alian4x'),
                'description' => esc_html__('Turn "SHOW" if you want to show opacity text.', 'alian4x'),
                'param_name' => 'optextshow',
                'value' => array(
                    esc_html__('Hide', 'alian4x') => 'false',
                    esc_html__('Show', 'alian4x') => 'true',

                ),
                'group' => 'Title'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Opacity text', 'alian4x'),
                'description' => esc_html__('Here you can enter the opacity text.', 'alian4x'),
                'param_name' => 'addtext',
                'value' => '',
                'group' => 'Title',
                'dependency' => array(
                    'element' => 'optextshow',
                    'value' => 'true'
                )
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'titlecoloropacity',
                'heading' => esc_html__('Opacity Text Color', 'alian4x'),
                'description' => esc_html__('The color property specifies the color of opacity text.', 'alian4x'),
                'value' => 'rgba(255,255,255,0.05)',
                'group' => 'Title',
                'dependency' => array(
                    'element' => 'optextshow',
                    'value' => 'true'
                )
            ),
			array(
				'type' => 'colorpicker',
				'param_name' => 'smalldesccolor',
				'heading' => esc_html__('Small description Color', 'alian4x'),
				'description' => esc_html__('The color property specifies the color of Small description.', 'alian4x'),
				'value' => '',
				'group' => 'Title'
			),
            array(
				'type' => 'colorpicker',
				'param_name' => 'titlecolor',
				'heading' => esc_html__('Title Color', 'alian4x'),
				'description' => esc_html__('The color property specifies the color of title.', 'alian4x'),
				'value' => '',
				'group' => 'Title'
			),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Letter-spacing (px)', 'alian4x'),
                'description' => esc_html__('Here you can enter custom letter-spacing to the title.', 'alian4x'),
                'param_name' => 'l_s',
                'value' => '',
                'group' => 'Title'
            ),
			array(
                'type' => 'textarea_safe',
				'param_name' => 'subtitle',
				'heading' => esc_html__('Subtitle', 'alian4x'),
				'admin_label' => true,
				'value' => 'Subtitle',
				'group' => 'Subtitle'
			),
			array(
				'type' => 'colorpicker',
				'param_name' => 'subtitlecolor',
				'heading' => esc_html__('Subtitle Color', 'alian4x'),
				'description' => esc_html__('The color property specifies the color of subtitle.', 'alian4x'),
				'value' => '',
				'group' => 'Subtitle'
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__('Show/Hide Line', 'alian4x'),
				'description' => esc_html__('Turn "SHOW" if you want to show line.', 'alian4x'),
				'param_name' => 'subline',
				'value' => array(
                    esc_html__('Show', 'alian4x') => 'true',
					esc_html__('Hide', 'alian4x') => 'false',
				),
				'group' => 'Line'
			),
			array(
				'type' => 'colorpicker',
				'param_name' => 'linecolor',
				'heading' => esc_html__('Line Background', 'alian4x'),
				'value' => '',
				'dependency' => array( 
					'element' => 'subline',
					'value' => 'true'
				),
				'group' => 'Line'
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
