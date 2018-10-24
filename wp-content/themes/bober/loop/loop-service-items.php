<?php

    if(class_exists('acf')){
        $services_navigation = get_field('service_page_navigation');
        $rows = get_field('service_page_rows');
        $items_per = get_field('service_items_per');
    }

    $rows_template = 1;

    if($rows > 1){
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


?>

<div class="section page-section portfolio-pd">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div data-size="<?php echo esc_attr($rows); ?>" class="al-posts al-masonry-posts">
                    <div class="gutter-sizer"></div>
                    <?php
                        while ($all_services->have_posts()) : $all_services->the_post();
                            get_template_part('templates/services/columns/content-col', $rows_template);
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
        </div>
    </div>
</div>
