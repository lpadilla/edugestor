<?php

/*
 * Shortcode Portfolio Default
 * */

add_shortcode('vc_services_items', 'vc_services_items_function');

function vc_services_items_function($atts, $content = null) {

    extract(shortcode_atts(array(
        'columns' => '4',
        'items_per' => 4,
        'extra_class' => '',
        'slides_scroll' => 1,
        'darkstyle' => '',
        'colorlink' => '',
        'show_pr' => 'true',
        'infinite' => 'true',
        'show_dots' => 'true',
        'all_services_link' => '',
        'all_services_label' => 'View all services',
        'm' => '',
        'p' => ''
    ), $atts));

    $idf = uniqid('alian4x_el_');
    $vc_class = 'tabs al-services-tabs al-dark-content';

    $link_services = vc_build_link($all_services_link);

    if (!empty($extra_class)) {
        $vc_class .= ' ' . $extra_class;
    }

    $link_services_target = '';
    if(!empty($link_services['target'])){
        $link_services_target = 'target="'.$link_services['target'].'"';
    }
    if (!empty($darkstyle)) {
        $vc_class .= ' ' . $darkstyle;
    }
    /////////////////
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


    $color_link = '';
    if(!empty($colorlink)){
        $color_link = 'style="color:'.$colorlink.';"';
    }
    ////////////////////
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

    <script type="text/javascript">
        jQuery(document).ready( function() {

            jQuery( "#al-tabs-<?php echo esc_attr($idf); ?>" ).tabs();

            jQuery('#<?php echo $idf; ?>').slick({
                dots: <?php echo $show_dots; ?>,
                dotsClass: 'dots',
                appendDots: '#services-dots-<?php echo $idf; ?>',
                slidesToScroll: <?php echo $slides_scroll ?>,
                autoplay: true,
                autoplaySpeed: 8000,
                infinite: <?php echo $infinite ?>,
                arrows: <?php echo $show_pr; ?>,
                prevArrow: jQuery('#services-arrows-<?php echo $idf; ?> > .wrap-prev'),
                nextArrow: jQuery('#services-arrows-<?php echo $idf; ?> > .wrap-next'),
                slidesToShow: <?php echo $columns; ?>,
                responsive: [
                    {
                        breakpoint: 1170,
                        settings: {
                            slidesToShow: <?php echo $columns; ?>,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: true
                        }
                    },
                   {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: <?php echo $columns; ?>,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: false,
                            dots: true
                        }
                    },

                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 2
                        }
                    }
                ]
            });




        });
    </script>

    <div <?php echo $style; ?> class="">
        <div  id="al-tabs-<?php echo esc_attr($idf); ?>" class="<?php echo esc_attr($vc_class); ?>">
            <div class="al-relative">
                <div class="container">
                    <ul id="<?php echo esc_attr($idf); ?>" class="services-carousel">
                        <!--Navigation start-->
                        <?php
                        while ($all_services->have_posts()) : $all_services->the_post();
                            get_template_part('templates/services/navigation-services_shortcode');
                        endwhile;
                        wp_reset_postdata();
                        ?>
                        <!--Navigation end-->
                    </ul>

                </div>

                <div id="services-arrows-<?php echo $idf; ?>" class="prev-next-block-rotate">
                    <div class="wrap-prev">
                        <div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
                    </div>
                    <div class="wrap-next">
                        <div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
                    </div>
                </div>

            </div>


            <div id="services-dots-<?php echo $idf; ?>" class="dots-control-carousel"></div>

            <?php
                while ($all_services->have_posts()) : $all_services->the_post();
                    get_template_part('templates/services/content-services-tab_shortcode');
                endwhile;
                wp_reset_postdata();
            ?>
        </div>

    </div>
    <?php if(!empty($link_services['url'])){
        echo '<div  class="col-md-12 al-all-services-link"><div class="link-full"><a '.$color_link.' '.$link_services_target.' href="'.$link_services['url'].'">'.$link_services['title'].'<i aria-hidden="true" class="fa fa-angle-right"></i></a></div></div>';
    } ?>

    <?php

    return ob_get_clean();

}


add_action('vc_before_init', 'vc_services_items_shortcode');
function vc_services_items_shortcode()
{
    vc_map(array(
        'name' => esc_html__('Services Tabs', 'alian4x'),
        'base' => 'vc_services_items',
        'icon' => plugins_url('vc_shortcode.png', __FILE__),
        'category' => esc_html__('Alian4x', 'alian4x'),
        'params' => array(
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Columns', 'alian4x'),
                'param_name' => 'columns',
                'value' => array(
                    esc_html__('Four', 'alian4x') => '4',
                    esc_html__('Nine', 'alian4x') => '9',
                    esc_html__('Eight', 'alian4x') => '8',
                    esc_html__('Seven', 'alian4x') => '7',
                    esc_html__('Six', 'alian4x') => '6',
                    esc_html__('Five', 'alian4x') => '5',
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
                'value' => 4,
                'min' => 1,
                'max' => 12,
                'step' => 1,
                'group' => 'General'
            ),
            array(
                'type' => 'al_number',
                'heading' => esc_html__('Tabs To Scroll', 'alian4x'),
                'param_name' => 'slides_scroll',
                'value' => 1,
                'min' => 1,
                'max' => 12,
                'step' => 1,
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Show "Prev/Next arrows ?"', 'alian4x'),
                'param_name' => 'show_pr',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                    esc_html__('No', 'alian4x') => 'false',
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Infinite Scroll ?"', 'alian4x'),
                'param_name' => 'infinite',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                    esc_html__('No', 'alian4x') => 'false',
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'dropdown',
                'heading' => esc_html__('Show Dots ?', 'alian4x'),
                'param_name' => 'show_dots',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'true',
                    esc_html__('No', 'alian4x') => 'false',
                ),
                'group' => 'General'
            ),
            array(
                'type' => 'vc_link',
                'heading' => esc_html__('Link to all services', 'alian4x'),
                'param_name' => 'all_services_link',
                'value' => '#',
                'group' => 'General'
            ),
            array(
                'type' => 'colorpicker',
                'param_name' => 'colorlink',
                'heading' => esc_html__('Link Color', 'alian4x'),
                'value' => '',
                'group' => 'General'
            ),
            array(
                'type' => 'checkbox',
                'heading' => esc_html__('Dark style the content ?', 'alian4x'),
                'param_name' => 'darkstyle',
                'value' => array(
                    esc_html__('Yes', 'alian4x') => 'al-section-dark',
                ),
                'admin_label' => true,
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