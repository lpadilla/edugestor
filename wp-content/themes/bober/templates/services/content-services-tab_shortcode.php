<?php

    global $post;

    $post_id = $post->ID;

    $content_class = 'col-md-6';
    $list_class = 'col-md-5 col-md-push-1';

    if(class_exists('acf')) {
        $small_description = get_field('service_small_description');
        $service_supported = get_field('service_supported_list');
        $small_title = get_field('service_small_title');
        $description = get_field('service_description');

        if(empty($service_supported)){
            $content_class = 'col-md-12';
        }
    }

?>

<!--Start tabs-->
<div class="animated fadeIn al-content-service-shortcode container" id="<?php echo esc_attr($post_id); ?>">
    <div class="<?php echo esc_attr($content_class); ?>">
        <div class="head-service small-head text-left">
            <?php if(!empty($small_title)){
                echo ' <h2>'.esc_html($small_title).'</h2>';
            } ?>
        </div>
        <?php echo wp_kses_post($description); ?>

        <div class="al-all-services-link">
           <a class="al-btn al-btn-border-accent" href="<?php echo esc_url( get_the_permalink() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>"><?php echo esc_html('Go to the service', 'bober'); ?><i aria-hidden="true" class="fa fa-angle-right"></i></a>
        </div>
    </div>

    <?php if(!empty($service_supported)): ?>
        <div class="<?php echo esc_attr($list_class); ?>">
            <ul class="list">
                <?php
                    foreach ($service_supported as $val) {
                        echo '<li>'.$val['service_supported_list_item'].'</li>';
                    }
                ?>
            </ul>
        </div>
    <?php endif; ?>





</div>





