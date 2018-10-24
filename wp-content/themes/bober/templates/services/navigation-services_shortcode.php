<?php

    global $post;

    $post_id = $post->ID;

    $icon_color = '';
    $title_color = '';
    $small_description_color = '';
    $background_item = '';

    if(class_exists('acf')) {
        $small_description = get_field('service_small_description');
        $icon = get_field('service_icon');
        $custom_icon = get_field('service_custom_icon');
        $styles = get_field('service_styles');

        if(!empty($custom_icon)){
            $icon = $custom_icon;
        }


        if(!empty($styles['service_icon_color'])){
            $icon_color = 'style=color:'.$styles['service_icon_color'].'';
        }
        if(!empty($styles['service_title_color'])){
            $title_color = 'style=color:'.$styles['service_title_color'].'';
        }
        if(!empty($styles['service_small_description_color'])){
            $small_description_color = 'style=color:'.$styles['service_small_description_color'].'';
        }
        if(!empty($styles['service_background_item'])){
            $background_item = 'style=background-color:'.$styles['service_background_item'].'';
        }
    }

?>

<li class="animated-service anim-shadow al-service-head-item">
    <a <?php echo esc_attr($background_item); ?> class="al-no-click" href="#<?php echo esc_attr($post_id); ?>">

        <?php if(!empty($icon)){
            echo '<div class="al-service-mini-icon"><i '.esc_attr($icon_color).' class="'. esc_attr($icon).'"></i></div>';
            echo '<i '.esc_attr($icon_color).' class="al-bg-service-icon '. esc_attr($icon).'"></i>';
        } ?>

        <?php echo '<h4 '.esc_attr($title_color).' >'.get_the_title().'</h4>'; ?>

        <?php if(!empty($small_description)){
            echo '<p '.esc_attr($small_description_color).' >'.esc_html($small_description).'</p>';
        } ?>
    </a>
</li>