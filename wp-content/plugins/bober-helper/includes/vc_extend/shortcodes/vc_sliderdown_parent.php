<?php

/*
 * Shortcode Sliderdown Parent
 * */

add_shortcode('vc_sliderdown_parent', 'vc_sliderdown_parent_function');

function vc_sliderdown_parent_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'icon_stroke' => 'pe-7s-angle-down',
        'icon_show' => 'true',
        'iconlink' => '#',
        'extra_class' => ''
    ), $atts));

    $output = '';

    $vc_class = 'al-socialite-border';
    $idf = uniqid('alian4x_el_');

    $vc_icon_output = '';
    $vc_icon_output .= '<i class="'.$icon_stroke.'"></i>';

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    ob_start();

    ?>

        <div class="container-socialite">
            <?php if($icon_show === 'true' ) { ?>
                <div class="icon-down toBottomFromTop">
                    <a href="<?php echo esc_url($iconlink); ?>">
                        <?php echo $vc_icon_output ?>
                    </a>
                </div>
            <?php } ?>
        </div>

        <div class="<?php echo $vc_class; ?>" id="<?php echo $idf; ?>">
            <?php echo do_shortcode($content); ?>

        </div>

    <?php

    return ob_get_clean();
}

add_action('vc_before_init', 'vc_sliderdown_parent_shortcode');

function vc_sliderdown_parent_shortcode() {

    vc_map(array(
        'name' => esc_html__('Sliderdown Parent', 'alian4x'),
        'base' => 'vc_sliderdown_parent',
        'as_parent' => array(
            'only' => 'vc_sliderdown_row'
        ),
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Show/Hide Icon', 'alian4x'),
                'description' => esc_html__('If set to true, it will show a center icon.', 'alian4x'),
                'param_name' => 'icon_show',
                'value' => array(
                    esc_html__('Show', 'alian4x') => 'true',
                    esc_html__('Hide', 'alian4x') => 'false',
                ),
                'group' => 'Icon'
            ),
            array(
                'type' => 'textfield',
                'admin_label' => true,
                'heading' => esc_html__('Icon Link', 'alian4x'),
                'description' => esc_html__('Enter link for icon.', 'alian4x'),
                'param_name' => 'iconlink',
                'value' => '#',
                'group' => 'Icon',
                'dependency' => array(
                    'element' => 'icon_show',
                    'value' => 'true'
                ),
                'group' => 'Icon'
            ),
            array(
                'type' => 'iconpicker',
                'heading' => esc_html__('Icon', 'alian4x'),
                'admin_label' => true,
                'param_name' => 'icon_stroke',
                'value' => 'pe-7s-angle-down',
                'settings' => array(
                    'type' => 'stroke',
                    'emptyIcon' => false,
                    'iconsPerPage' => 1000
                ),
                'dependency' => array(
                    'element' => 'icon_show',
                    'value' => 'true'
                ),
                'group' => 'Icon'
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