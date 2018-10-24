<?php

global $post;

$post_id = $post->ID;

$img_class = 'icon-service  al-bg-mask background-image';
$content_class = 'content-service';
$article_class = 'two-col item-service';

if(class_exists('acf')) {
    $small_description = get_field('service_small_description');
    $icon = get_field('service_icon');
    $custom_icon = get_field('service_custom_icon');
    $service_supported = get_field('service_supported_list');
    $small_title = get_field('service_small_title');
    $description = get_field('service_description');

    if(!empty($custom_icon)){
        $icon = $custom_icon;
    }
}


?>
<article class="<?php echo esc_attr($article_class); ?>">
    <div data-image="<?php echo bober_get_thumbnail($post_id, 'bober_service_thumb'); ?>" class="<?php echo esc_attr($img_class); ?>">
        <?php
        if(!empty($icon)){
            echo '<div class="small-i"><i class="'.esc_attr($icon).'"></i></div><div class="large-i"><i class="'.esc_attr($icon).'"></i></div>';
        }
        ?>
    </div>
    <div class="<?php echo esc_attr($content_class); ?>">
        <h2><?php echo get_the_title(); ?></h2>
        <?php echo wp_kses_post($description); ?>
        <hr>
        <div class="buttons-section left">
            <a href="<?php echo get_the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ); ?>" class="btn white-btn"><?php echo esc_html('Get started', 'bober'); ?></a>
        </div>
    </div>
</article>