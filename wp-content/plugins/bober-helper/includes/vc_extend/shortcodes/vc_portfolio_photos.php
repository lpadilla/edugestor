<?php

/*
 * Shortcode Portfolio Default
 * */

add_shortcode('vc_portfolio_photos', 'vc_portfolio_photos_function');

function vc_portfolio_photos_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'columns' => '4',
        'items_per' => 8,
        'extra_class' => '',
        'show_btn' => 'true',
        'gap' => 'true',
        'show_filter' => 'true',
        'm' => '',
        'p' => ''
    ), $atts));

    $idf = uniqid('alian4x_el_');
    $vc_class = 'al-posts al-masonry-posts';

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    $gap_class = '';

    if($gap == 'true'){

        $vc_class .= ' al-portfolio-layout-boxed';
    }else{
        $gap_class = 'al-portfolio-layout ';
    }
    //START styles
    $style = '';
    $out_style = '';

    if($m){
        $out_style .= 'margin:'.$m.';';
    }
    if($p){
        $out_style .= 'padding:'.$p.';';
    }

    $style = 'style="'.$out_style.'"';
    // END styles

    $paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
    $portfolio_max_posts = $items_per;

    $args = array(
        'paged' => $paged,
        'posts_per_page' => $portfolio_max_posts,
        'post_type' => 'folio_photos'
    );

    $all_portfolio = new WP_Query($args);


    ob_start();
    ?>

    <!--Navigation start-->

    <?php
    if($show_filter === 'true'){
        get_template_part('templates/portfolio_photos/navigation-portfolio');
    }
    ?>
    <!--Navigation end-->
    <div <?php echo $style; ?> class="al-transperent-ajax <?php echo $gap_class ?>">
        <div id="<?php echo esc_attr($idf); ?>" data-size="<?php echo esc_attr($columns); ?>" class="<?php echo esc_attr($vc_class); ?>">
            <div class="gutter-sizer"></div>
            <?php
            while ($all_portfolio->have_posts()) : $all_portfolio->the_post();
                get_template_part('templates/portfolio_photos/content-portfolio-item');
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

        <?php
        if($show_btn === 'true'){
            echo '<div class="al-ajax-navigation al-center-line">
                    <a href="#" class="al-ajax-more-posts btn al-btn-dark large-btn">
                        <span class="al-btn-text">'.esc_html__('Load More', 'bober').'</span>
                        <i class="al-btn-icon fa fa-spinner fa-spin"></i>
                    </a>
                </div>' . bober_ajax_load($all_portfolio) . '' ;
        }
        ?>
    </div>
    <?php

    return ob_get_clean();

}


add_action('vc_before_init', 'vc_portfolio_photos_shortcode');
function vc_portfolio_photos_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Portfolio Photos', 'alian4x'),
        'base' => 'vc_portfolio_photos',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Columns', 'alian4x'),
                'param_name' => 'columns',
                'value' => array(
                    esc_html__('Four', 'alian4x') => '4',
                    esc_html__('Three', 'alian4x') => '3',
                    esc_html__('Two', 'alian4x') => '2',
                    esc_html__('One', 'alian4x') => '1'

                ),
                'group' => 'General'
            ),
            array(
                'type' => 'al_number',
                'heading' => esc_html__('Items per page', 'alian4x'),
                'param_name' => 'items_per',
                'value' => 8,
                'min' => 1,
                'max' => 100,
                'step' => 1,
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Ajax load', 'alian4x'),
                'param_name' => 'show_btn',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                    esc_html__('No', 'alian4x') => 'false',
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Use Gap ?', 'alian4x'),
                'param_name' => 'gap',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                    esc_html__('No', 'alian4x') => 'false',
                ),
                'admin_label' => true,
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Show filter ?', 'alian4x'),
                'param_name' => 'show_filter',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                    esc_html__('No', 'alian4x') => 'false',
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