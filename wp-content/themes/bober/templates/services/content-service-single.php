<?php

if(class_exists('acf')) {
    $service_supported = get_field('service_supported_list');
    $description = get_field('service_description');

    if(empty($service_supported)){
        $content_class = 'col-md-12';
    }
}

?>

<div class="al-services-content col-md-9">
    <div class="content-service-single">
        <h4 class="al-headitg-title"><?php echo get_the_title(); ?></h4>
        <?php echo wp_kses_post($description); ?>
    </div>


    <?php if (has_post_thumbnail()) { ?>
        <div class="al-service-thumb">
            <div class="post-thumb al-responsive-img">
                <?php if (function_exists('add_theme_support'))
                    the_post_thumbnail('bober_service_thumb'); ?>
            </div>
        </div>
    <?php } ?>


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