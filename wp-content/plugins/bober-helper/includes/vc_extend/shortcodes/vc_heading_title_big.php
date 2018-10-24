<?php

/*
 * Shortcode Heading Title Big
 * */


add_shortcode('vc_heading_title_big', 'vc_heading_title_big_function');


function vc_heading_title_big_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'title' => 'Text',
        'subtitle' => 'Subtitle',
        'description' => 'Description',
        'descriptioncolor' => '',
        'line_image' => '',
        'slide_image' => '',
        'titlecolor' => '',
        'subtitlecolor' => '',
        'heading' => 'h2',
        'addtext' => '',
        'align' => 'al-center',
        'm' => '',
        'p' => '',
        'extra_class' => ''
    ), $atts));


    $output = '';

    $line_image = wp_get_attachment_image_src($line_image, 'bober_fullsize')[0];
    $slide_image = wp_get_attachment_image_src($slide_image, 'bober_fullsize')[0];
    $alt_slide_image = get_post_meta($slide_image, '_wp_attachment_image_alt', true);
    $description = vc_value_from_safe($description);
    $subtitle_safe = vc_value_from_safe($subtitle);

    $content = $title;
    $content = vc_value_from_safe( $content );

    $vc_class = 'heading-title-big';
    $idf = uniqid('alian4x_el_');


    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    ///Style start////
    $style = '';
    $out_style = '';
    if($m){
        $out_style .= 'margin:'.$m.';';
    }
    if($p){
        $out_style .= 'padding:'.$p.';';
    }
    $style = 'style="'.$out_style.'"';

    $sub_titlecolor = '';
    if($subtitlecolor){
        $sub_titlecolor = 'style="color:'.$subtitlecolor.'"';
    }
    if($titlecolor){
        $titlecolor = 'style="color:'.$titlecolor.'"';
    }
    $description_color = '';
    if($descriptioncolor){
        $description_color = 'style="color:'.$descriptioncolor.'"';
    }
    ///End start////

    $vc_class .= ' ' .$align;

    $output .= '<div '.$style.' class="'.$vc_class.'" id="'.$idf.'">';

        if($slide_image){
            $output .= '<div class="img-slide"><img src="'.esc_url($slide_image).'" alt="'.esc_html($alt_slide_image).'"></div>';
        }

        if(!empty($content)){
            $output .= '<'.$heading.' '.$titlecolor.' class="al-headitg-title al-parallax">' . $content . '</'.$heading.'>';
        }

        if(!empty($line_image)){
            $output .= '<span style="background-image: url('.$line_image.')" class="al-after"></span>';
        }

        if($subtitle_safe){
            $output .= '<div '.$sub_titlecolor.' class="slide-title">'.$subtitle_safe.'</div>';
        }

        if($description){
            $output .= '<div '.$description_color.' class="description-slide">'.$description.'</div>';
        }

    $output .= '</div>';

    return $output;
}

add_action('vc_before_init', 'vc_heading_title_big_shortcode');

function vc_heading_title_big_shortcode() {
    vc_map(array(
        'name' => esc_html__('Heading Title Big', 'alian4x'),
        'base' => 'vc_heading_title_big',
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
                'param_name' => 'description',
                'heading' => esc_html__('Description', 'alian4x'),
                'value' => 'Description',
                'group' => 'Title'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Heading', 'alian4x'),
                'description' => esc_html__('Select the header height from the list below.', 'alian4x'),
                'param_name' => 'heading',
                'value' => array(
                    esc_html__('H2', 'alian4x') => 'h2',
                    esc_html__('H1', 'alian4x') => 'h1',
                    esc_html__('H3', 'alian4x') => 'h3',
                    esc_html__('H4', 'alian4x') => 'h4',
                    esc_html__('H5', 'alian4x') => 'h5',
                    esc_html__('H6', 'alian4x') => 'h6',
                ),
                'group' => 'Title'
            ),
            array(
                'type' => 'textarea_safe',
                'param_name' => 'subtitle',
                'heading' => esc_html__('Subtitle', 'alian4x'),
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
                'type' => 'colorpicker',
                'param_name' => 'titlecolor',
                'heading' => esc_html__('Title Color', 'alian4x'),
                'description' => esc_html__('The color property specifies the color of title.', 'alian4x'),
                'value' => '',
                'group' => 'Subtitle'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'descriptioncolor',
                'heading' => esc_html__('Description Color', 'alian4x'),
                'description' => esc_html__('The color property specifies the color of description.', 'alian4x'),
                'value' => '',
                'group' => 'Subtitle'
            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Line image', 'alian4x'),
                'description' => esc_html__('Select image.', 'alian4x'),
                'param_name' => 'line_image',
                'value' => '',
                'group' => 'Line',

            ),
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Image', 'alian4x'),
                'description' => esc_html__('Select image if you need.', 'alian4x'),
                'param_name' => 'slide_image',
                'value' => '',
                'group' => 'Media'
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
