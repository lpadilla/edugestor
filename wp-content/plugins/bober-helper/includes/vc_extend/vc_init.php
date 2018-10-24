<?php


function vl_get_terms($tax = 'category', $key = 'id') {
    $terms = array();
    if(!taxonomy_exists($tax)){
        return false;
    }
    if($key === 'id'){
        foreach((array) get_terms($tax, array('hide_empty' => true)) as $term){
            $terms[$term->term_id] = $term->name;
        }
    }elseif($key === 'slug'){
        foreach((array) get_terms($tax, array('hide_empty' => true)) as $term){
            $terms[$term->slug] = $term->name;
        }
    }
    return $terms;
}

function vl_get_posts($args = array()) {
    global $wpdb, $post;
    $dropdown = array();
    $the_query = new WP_Query($args);
    if($the_query->have_posts()){
        while($the_query->have_posts()){
            $the_query->the_post();
            $dropdown[get_the_ID()] = get_the_title();
        }
    }
    wp_reset_postdata();
    return $dropdown;
}



function vl_select_settings_field($args, $value) {

    $selected = is_array($value) ? $value : explode(',', $value);

    $args = wp_parse_args($args, array(
        'param_name' => '',
        'heading' => '',
        'class' => 'wpb_vc_param_value wpb-input wpb-select dropdown',
        'multiple' => '',
        'size' => '',
        'disabled' => '',
        'selected' => $selected,
        'none' => '',
        'value' => array(),
        'style' => '',
        'empty' => '',
        'format' => 'keyval',
        'noselect' => ''
    ));

    $options = array();
    if(!is_array($args['value'])){
        $args['value'] = array();
    }
    if($args['param_name']){
        $name = ' name="' . $args['param_name'] . '"';
    }
    if($args['param_name']){
        $args['param_name'] = ' id="' . $args['param_name'] . '"';
    }
    if($args['class']){
        $args['class'] = ' class="' . $args['class'] . '"';
    }
    if($args['style']){
        $args['style'] = ' style="' . esc_attr($args['style']) . '"';
    }
    if($args['multiple']){
        $args['multiple'] = ' multiple="multiple"';
    }
    if($args['disabled']){
        $args['disabled'] = ' disabled="disabled"';
    }
    if($args['size']){
        $args['size'] = ' size="' . $args['size'] . '"';
    }
    if($args['none'] && $args['format'] === 'keyval'){
        $args['options'][0] = $args['none'];
    }
    if($args['none'] && $args['format'] === 'idtext'){
        array_unshift($args['options'], array('id' => '0', 'text' => $args['none']));
    }

    if ($args['format'] === 'keyval') foreach ($args['value'] as $id => $text) {
        $options[] = '<option value="' . (string) $id . '">' . (string) $text . '</option>';
    }elseif ($args['format'] === 'idtext') foreach ($args['options'] as $option) {
        if (isset($option['id']) && isset($option['text'])){
            $options[] = '<option value="' . (string) $option['id'] . '">' . (string) $option['text'] . '</option>';
        }
    }

    $options = implode('', $options);

    if(is_array($args['selected'])){
        foreach ($args['selected'] as $key => $value) {
            $options = str_replace('value="' . $value . '"', 'value="' . $value . '" selected="selected"', $options);
        }
    }else{
        $options = str_replace('value="' . $args['selected'] . '"', 'value="' . $args['selected'] . '" selected="selected"', $options);
    }

    $output = ($args['noselect']) ? $options : '<select' .$name. $args['param_name'] . $args['class'] . $args['multiple'] . $args['size'] . $args['disabled'] . $args['style'] . '>' . $options . '</select>';

    return $output;
}



function al_number_settings_field($settings, $value) {
    return '<input name="' . esc_attr($settings['param_name']) . '" class="wpb_vc_param_value wpb-textinput ' . esc_attr($settings['param_name']) . ' ' . esc_attr($settings['type']) . '_field" type="number" min="'.intval($settings['min']).'" max="'.intval($settings['max']).'" step="'.intval($settings['step']).'" value="' . esc_attr($value) . '" />';
}




function vlthemes_vc_after_init(){

    vc_add_shortcode_param('al_number', 'al_number_settings_field');
    vc_add_shortcode_param('vl_select', 'vl_select_settings_field');

    class WPBakeryShortCode_Vc_About extends WPBakeryShortCodesContainer {} //alian4x
    class WPBakeryShortCode_Vc_Fullslider_Row extends WPBakeryShortCodesContainer {} //alian4x
    class WPBakeryShortCode_Vc_Fullslider_Parent extends WPBakeryShortCodesContainer {} //alian4x
    class WPBakeryShortCode_Vc_Team_Member extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Skillbar_Row extends WPBakeryShortCode {} //alian4x
    class WPBakeryShortCode_Vc_Skillbar_Parent extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Icon_Carousel_Row extends WPBakeryShortCode {} //alian4x
    class WPBakeryShortCode_Vc_Icon_Carousel_Parent extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Textillate_Row extends WPBakeryShortCode {} //alian4x
    class WPBakeryShortCode_Vc_Textillate_Parent extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Testimonials_Row extends WPBakeryShortCode {} //alian4x
    class WPBakeryShortCode_Vc_Testimonials_Parent extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Partners_Row extends WPBakeryShortCode {} //alian4x
    class WPBakeryShortCode_Vc_Partners_Parent extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Accordion_Pow extends WPBakeryShortCode {} //alian4x
    class WPBakeryShortCode_Vc_Accordion_Parent extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Pricing_Table_Row extends WPBakeryShortCode {} //alian4x
    class WPBakeryShortCode_Vc_Pricing_Table_Parent extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Contact_Info_Parent extends WPBakeryShortCodesContainer {} //alian4x
    class WPBakeryShortCode_Vc_Gallery_All_Parent extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Play_Button extends WPBakeryShortCode {} //alian4x
    class WPBakeryShortCode_Vc_Buttons_Parent extends WPBakeryShortCodesContainer {} //alian4x

    class WPBakeryShortCode_Vc_Social_Icons_Parent extends  WPBakeryShortCodesContainer {} //alian4x
    class WPBakeryShortCode_Vc_Social_Icons_Row extends WPBakeryShortCode {} //alian4x

    class WPBakeryShortCode_Vc_Sliderdown_Parent extends WPBakeryShortCodesContainer {}  //alian4x
    class WPBakeryShortCode_Vc_Sliderdown_Row extends WPBakeryShortCode {} //alian4x

}


add_action('vc_after_init', 'vlthemes_vc_after_init');



