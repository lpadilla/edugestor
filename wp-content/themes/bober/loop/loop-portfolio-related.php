<?php

global $post;
$postID = $post->ID;

$paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
$portfolio_max_posts = '4';

$args = array(
    'paged' => $paged,
    'posts_per_page' => $portfolio_max_posts,
    'post_type' => 'folio',
    'post__not_in'=> array($postID)
);

$portfolio_related = new WP_Query($args);

?>

<div class="al-related-projects">
    <?php
        while ($portfolio_related->have_posts()) : $portfolio_related->the_post();
            get_template_part('templates/portfolio/portfolio-related','item');
        endwhile;
    ?>
</div>


