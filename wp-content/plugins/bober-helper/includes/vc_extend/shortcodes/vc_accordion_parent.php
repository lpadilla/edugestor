<?php

/*
 * Shortcode Accordion Parent
 * */

add_shortcode('vc_accordion_parent', 'vc_accordion_parent_function');

function vc_accordion_parent_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'extra_class' => ''
    ), $atts));

    $output = '';

    $vc_class = 'accordion';
    $idf = uniqid('alian4x_el_');

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    ob_start();

    ?>
    <script type="text/javascript">
        jQuery(document).ready( function() {
            jQuery('#<?php echo $idf; ?>:nth-child(1n)').accordion({
//                heightStyle: 'content',
//                active: true,
//                collapsible: false
            });
        });
    </script>

    <div class="<?php echo $vc_class; ?>" id="<?php echo $idf; ?>">
        <?php echo do_shortcode($content); ?>
    </div>

    <?php

    return ob_get_clean();
}

add_action('vc_before_init', 'vc_accordion_parent_shortcode');

function vc_accordion_parent_shortcode() {

    vc_map(array(
        'name' => esc_html__('Accordion Parent', 'alian4x'),
        'base' => 'vc_accordion_parent',
        'as_parent' => array(
            'only' => 'vc_accordion_row'
        ),
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(

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