<?php

/*
 * Shortcode Buttons Parent
 * */

add_shortcode('vc_buttons_parent', 'vc_buttons_parent_function');

function vc_buttons_parent_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'extra_class' => '',
        'position' => 'center',
        'm' => '',
        'p' => ''
    ), $atts));

    $output = '';

    $vc_class = 'buttons-section';

    if (!empty($position)) {
        $vc_class .= ' ' . $position;
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
    if(!empty($out_style)){
        $style = 'style="'.$out_style.'"';
    }

    ob_start();

    ?>

    <div <?php echo $style ?> class="<?php echo $vc_class; ?>">
        <?php echo do_shortcode($content); ?>
    </div>

    <?php

    return ob_get_clean();
}

add_action('vc_before_init', 'vc_buttons_parent_shortcode');

function vc_buttons_parent_shortcode() {

    vc_map(array(
        'name' => esc_html__('Buttons Parent', 'alian4x'),
        'base' => 'vc_buttons_parent',
        'as_parent' => array(
            'only' => 'vc_custom_button, vc_play_button',
        ),
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Position buttons', 'alian4x'),
                'param_name' => 'position',
                'value' => array(
                    esc_html__('Center', 'alian4x') => 'center',
                    esc_html__('Left', 'alian4x') => 'left',
                    esc_html__('Right', 'alian4x') => 'right',
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