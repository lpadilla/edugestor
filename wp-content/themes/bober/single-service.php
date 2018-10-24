<?php

    get_header();
    global $post;
    $paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);

    $args = array(
        'paged' => $paged,
        'post_type' => 'service'
    );

    $all_services = new WP_Query($args);

    if(class_exists('acf')) {
        $small_description = get_field('service_small_description');
        $icon = get_field('service_icon');
        $service_supported = get_field('service_supported_list');
        $small_title = get_field('service_small_title');
        $description = get_field('service_description');

        if(empty($service_supported)){
            $content_class = 'col-md-12';
        }
    }

?>

<section class="service-single">
    <div class="container">
        <div class="row al-service-single">
            <div class="col-md-3 al-services-nav">
                <ul class="al-services-list">
                    <?php
                        while ($all_services->have_posts()) : $all_services->the_post();
                            echo '<li><a href="'.esc_url( get_the_permalink() ).'" title="'.esc_attr( get_the_title() ).'">'.esc_html( get_the_title() ).'</a></li>';
                        endwhile;
                    ?>
                </ul>
            </div>
            <?php while ( have_posts() ) : the_post() ?>


            <div class="al-services-content col-md-9">
                <div class="content-service-single">
                    <div class="heading-title al-left">
                        <h4><?php echo get_the_title(); ?></h4>
                        <span class="al-line-title">
                        <svg x="0px" y="0px" viewBox="0 0 100 19.5">
                        <g>
                            <polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7
                                40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3 	"></polygon>
                        </g>
                        </svg>
                    </span>
                    </div>

                    <?php echo wp_kses_post($description); ?>
                </div>

                <?php if(!empty($service_supported)): ?>
                    <ul class="list">
                        <?php
                        foreach ($service_supported as $val) {
                            echo '<li>'.$val['service_supported_list_item'].'</li>';
                        }
                        ?>
                    </ul>
                <?php endif; ?>

            </div>

            <?php endwhile; ?>


        </div>
    </div>
</section>

<div class="container al-side-container">
    <?php while ( have_posts() ) : the_post() ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php if ( comments_open() || get_comments_number() ) : ?>
    <div class="al-comment-any-page">
        <div class="container">
            <div class="row">
                <?php comments_template(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php get_footer(); ?>