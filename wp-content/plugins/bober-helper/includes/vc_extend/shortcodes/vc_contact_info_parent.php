<?php

/*
 * Shortcode contact Info Parent
 * */

add_shortcode('vc_contact_info_parent', 'vc_contact_info_parent_function');

function vc_contact_info_parent_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'social' => '',
        'p' => '',
        'm' => '',
        'extra_class' => ''
    ), $atts));

    $output = '';

    $vc_class = 'contact-wrap';
    $idf = uniqid('alian4x_el_');

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

    ob_start();

    ?>

    <div <?php echo $style; ?> class="<?php echo $vc_class; ?>" id="<?php echo $idf; ?>">
        <?php echo do_shortcode($content); ?>
        <?php if($social === 'true'){
            get_template_part('templates/site/site','social-icons');
        } ?>
    </div>


    <?php

    return ob_get_clean();
}

add_action('vc_before_init', 'vc_contact_info_parent_shortcode');

function vc_contact_info_parent_shortcode() {

    vc_map(array(
        'name' => esc_html__('Contact Info Parent', 'alian4x'),
        'base' => 'vc_contact_info_parent',
        'as_parent' => array(
            'only' => 'vc_contact_info'
        ),
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Show social networks at the bottom ?', 'alian4x'),
                'param_name' => 'social',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                ),
                'admin_label' => true,
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