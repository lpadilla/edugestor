<?php

/*
 * Shortcode Portfolio Default
 * */

add_shortcode('vc_portfolio_default', 'vc_portfolio_default_function');

function vc_portfolio_default_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'columns' => '4',
        'items_per' => 8,
        'related' => '',
        'posttype' => 'folio',
        'extra_class' => '',
        'style_nav' => '',
        'show_btn' => 'true',
        'gap' => 'al-portfolio-layout',
        'show_filter' => 'true',
        'm' => '',
        'p' => ''
    ), $atts));

    $idf = uniqid('alian4x_el_');
    $vc_class = 'al-posts al-masonry-posts';

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

    global $post;
    if($related == 'true'){
        $postID = $post->ID;
    }else{
        $postID = '';
    }


    $paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
    $portfolio_max_posts = $items_per;

    $args = array(
        'paged' => $paged,
        'posts_per_page' => $portfolio_max_posts,
        'post_type' => $posttype,
        'post__not_in'=> array($postID)
    );

    $all_portfolio = new WP_Query($args);


    ob_start();
    ?>

    <!--Navigation start-->
    <?php
        if($style_nav == 'true'){
            echo '<div class="al-light-portfolio-nav">';
        }
        if($show_filter === 'true'){
            get_template_part('templates/portfolio/navigation-portfolio');
        }
        if($style_nav == 'true'){
            echo '</div>';
        }
    ?>
    <!--Navigation end-->

    <div <?php echo $style; ?> class="<?php echo $gap ?>">
        <div id="<?php echo esc_attr($idf); ?>" data-size="<?php echo esc_attr($columns); ?>" class="<?php echo esc_attr($vc_class); ?>">
            <div class="gutter-sizer"></div>
            <?php
            while ($all_portfolio->have_posts()) : $all_portfolio->the_post();
                get_template_part('templates/portfolio/content-portfolio-item');
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


add_action('vc_before_init', 'vc_portfolio_default_shortcode');
function vc_portfolio_default_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Portfolio Default', 'alian4x'),
        'base' => 'vc_portfolio_default',
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
                'admin_label' => true,
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
                'admin_label' => true,
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Use Gap ?', 'alian4x'),
                'param_name' => 'gap',
                'value' => array(
                    esc_html__('No', 'alian4x') => 'al-portfolio-layout',
                    esc_html__('Yes', 'alian4x') => 'al-portfolio-layout-boxed',

                ),
                'admin_label' => true,
                'group' => 'General'
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Ignore current item ?', 'alian4x'),
                'description' => esc_html__('Working only on portfolio item. If you want use items to showing is related project, choose: Yes', 'alian4x'),
                'param_name' => 'related',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
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
                'admin_label' => true,
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Choose the post type to showing', 'alian4x'),
                'param_name' => 'posttype',
                'default' => 'folio',
                'value' => array(
                    esc_html__('Default portfolio', 'alian4x') => 'folio',
                    esc_html__('Visual Portfolio', 'alian4x') => 'portfolio',

                ),
                'admin_label' => true,
                'group' => 'General'
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Light style navigation ?', 'alian4x'),
                'param_name' => 'style_nav',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                ),
                'group' => 'Style'
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