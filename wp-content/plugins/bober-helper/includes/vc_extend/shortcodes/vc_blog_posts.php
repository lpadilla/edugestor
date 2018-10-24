<?php

/*
 * Shortcode Blog Posts
 * */


add_shortcode('vc_blog_posts', 'vc_blog_posts_function');


function vc_blog_posts_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'username' => '',
        'm' => '',
        'p' => '',
        'extra_class' => ''
    ), $atts));

    $output = '';

    $vc_class = 'al-item-number';
    $idf = uniqid('alian4x_el_');

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }
    //START Style
    $style = '';
    $out_style = '';

    if($m){
        $out_style .= 'margin:'.$m.';';
    }
    if($p){
        $out_style .= 'padding:'.$p.';';
    }
    $style = 'style="'.$out_style.'"';
    //END Style

    $paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
    $args = array(
        'paged' => $paged,
        'posts_per_page' => '4',
        'post_type' => 'post'
    );

    $all_posts = new WP_Query($args);

    ob_start();

    ?>

    <?php
    while ($all_posts->have_posts()) : $all_posts->the_post();

        get_template_part('templates/content/content-post', get_post_format());

    endwhile;
    wp_reset_postdata();
    ?>

    <?php
    return ob_get_clean();
}

add_action('vc_before_init', 'vc_blog_posts_shortcode');

function vc_blog_posts_shortcode() {
    vc_map(array(
        'name' => esc_html__('Blog posts', 'alian4x'),
        'base' => 'vc_blog_posts',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(

            array(
                'type' => 'textfield',
                'heading' => esc_html__('Username', 'alian4x'),
                'param_name' => 'username',
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
        )
    ));
}
