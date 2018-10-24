<?php

/*
 * Shortcode Portfolio Default
 * */

add_shortcode('vc_services_items_cols', 'vc_services_items_cols_function');

function vc_services_items_cols_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'columns' => '4',
        'items_per' => 4,
        'extra_class' => '',
        'show_pr' => 'true',
        'services_navigation' => 'ajax',
        'm' => '',
        'p' => ''
    ), $atts));

    $idf = uniqid('alian4x_el_');
    $vc_class = '';

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    //START Styles
    $style = '';
    $out_style = '';

    if($m){
        $out_style .= 'margin:'.$m.';';
    }
    if($p){
        $out_style .= 'padding:'.$p.';';
    }

    $style = 'style="'.$out_style.'"';
    //END Styles

    $rows_template = 1;

    if($columns > '1'){
        $rows_template = 2;
    }

    $paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
    $services_max_posts = $items_per;

    $args = array(
        'paged' => $paged,
        'posts_per_page' => $services_max_posts,
        'post_type' => 'service'
    );

    $all_services = new WP_Query($args);

    ob_start();
    ?>




        <div <?php echo $style; ?> class="<?php echo esc_attr($vc_class); ?>">
            <div data-size="<?php echo esc_attr($columns); ?>" class="al-posts al-masonry-posts">
                <div class="gutter-sizer"></div>
                <?php
                    while ($all_services->have_posts()) : $all_services->the_post();
                        get_template_part('templates/services/columns/content-col', $rows_template);
                        wp_reset_postdata();
                    endwhile;
                ?>
            </div>

            <?php
                switch ($services_navigation){
                    case 'ajax';
                        echo '<div class="al-ajax-navigation al-center-line"><a href="#" class="al-ajax-more-posts btn al-btn-dark large-btn"><span class="al-btn-text">'.esc_html__('Load More', 'bober').'</span><i class="al-btn-icon fa fa-spinner fa-spin"></i></a></div>' . bober_ajax_load($all_services) . '' ;
                        break;
                    case 'pagination';
                        echo bober_post_navigation($all_services);
                        break;
                    case 'none';
                        break;
                }
            ?>

    </div>
    <?php

    return ob_get_clean();

}


add_action('vc_before_init', 'vc_services_items_cols_shortcode');
function vc_services_items_cols_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Services Items', 'alian4x'),
        'base' => 'vc_services_items_cols',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Columns', 'alian4x'),
                'param_name' => 'columns',
                'value' => array(
                    esc_html__('Four', 'alian4x') => 4,
                    esc_html__('Three', 'alian4x') => 3,
                    esc_html__('Two', 'alian4x') => 2,
                    esc_html__('One', 'alian4x') => 1

                ),
                'group' => 'General'
            ),
            array(
                'type' => 'al_number',
                'heading' => esc_html__('Items per page', 'alian4x'),
                'param_name' => 'items_per',
                'value' => 4,
                'min' => 1,
                'max' => 12,
                'step' => 1,
                'group' => 'General'
            ),

            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Navigation', 'alian4x'),
                'param_name' => 'services_navigation',
                'value' => array(
                    esc_html__('Ajax', 'alian4x') => 'ajax',
                    esc_html__('Pagination', 'alian4x') => 'pagination',
                    esc_html__('None', 'alian4x') => 'none'
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
        )
    ));
}