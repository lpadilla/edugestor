<?php

/*
 * Shortcode team_member
 * */


add_shortcode('vc_team_member', 'vc_team_member_function');


function vc_team_member_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'image' => '',
        'name' => 'David',
        'positioncolor' => '',
        'namecolor' => '',
        'color_desc' => '',
        'description' => 'Description',
        'position' => 'Position',
        'social_icons' => 'true',
        'link_fb' => '',
        'link_tw' => '',
        'link_sk' => '',
        'link_ln' => '',
        'm' => '',
        'p' => '',
        'extra_class' => ''
    ), $atts));


    $output = '';

    $vc_class = 'al-item-number';
    $idf = uniqid('alian4x_el_');

    $image_done = wp_get_attachment_image_src($image, 'bober_fullsize');

    $alt = get_post_meta($image, '_wp_attachment_image_alt', true);


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
    //START Styles
    $desc_color = '';
    if(!empty($color_desc)){
        $desc_color = 'style="color:'.$color_desc.';"';
    }
    $position_color = '';
    if(!empty($positioncolor)){
        $position_color = 'style="color:'.$positioncolor.';"';
    }

    $name_color = '';
    if(!empty($namecolor)){
        $name_color = 'style="color:'.$namecolor.';"';
    }

    ob_start();

    ?>

    <div <?php echo $style; ?> class="al-item-team">
        <div class="img-wrap">
            <?php if($image){
                echo '<img src="'.$image_done[0].'" alt="'.$alt.'" class="img-responsive">';
            } ?>

            <?php if(!empty($content)): ?>
                <div class="mask-info"></div>
                <!--Start social links-->
                <ul class="social-links">
                    <?php echo do_shortcode($content); ?>
                </ul>
                <!--End social links-->
            <?php endif; ?>


        </div>

        <div class="al-bottom-team">
            <div class="al-team-content">
                <?php if(!empty($name)){
                    echo '<h2 '.$name_color.'>'.$name.'</h2>';
                } ?>

                <?php if(!empty($position)){
                    echo '<span '.$position_color.'>'.$position.'</span>';
                } ?>

                <?php if(!empty($description)){
                    echo '<p '.$desc_color.'>'.$description.'</p>';
                } ?>
            </div>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

add_action('vc_before_init', 'vc_team_member_shortcode');

function vc_team_member_shortcode() {
    vc_map(array(
        'name' => esc_html__('Team Member', 'alian4x'),
        'base' => 'vc_team_member',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'as_parent' => array(
            'only' => 'vc_social_icons_row'
        ),
        'params' => array(
            array(
                'type' => 'attach_image',
                'heading' => esc_html__('Team photo', 'alian4x'),
                'description' => esc_html__('Select image.', 'alian4x'),
                'param_name' => 'image',
                "holder" => "img",
                'value' => '',
                'group' => 'General',
                'admin_label' => false,
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Name', 'alian4x'),
                'param_name' => 'name',
                'value' => 'David',
                "holder" => "div",
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Position', 'alian4x'),
                'param_name' => 'position',
                'value' => 'Position',
                'group' => 'General'
            ),
            array(
                'type' => 'textfield',
                'heading' => esc_html__('Description', 'alian4x'),
                'param_name' => 'description',
                'value' => 'Description',
                "holder" => "div",
                'group' => 'General'
            ),

            array(
                'type' => 'colorpicker',
                'param_name' => 'positioncolor',
                'heading' => esc_html__('Color Position', 'alian4x'),
                'value' => '',
                'group' => 'General'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'namecolor',
                'heading' => esc_html__('Color Name', 'alian4x'),
                'value' => '',
                'group' => 'General'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'color_desc',
                'heading' => esc_html__('Color Description', 'alian4x'),
                'value' => '',
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
