<article id="post-<?php the_ID(); ?>" <?php bober_post_class(); ?> >

    <?php echo bober_post_thunbnail_format(); ?>

    <?php

        echo bober_post_title();

        get_template_part('templates/content/content-post', 'meta');

        wp_link_pages( array(
            'before' => '<div class="al-page-links"><span class="al-page-links-title">' . esc_html__( 'Pages:', 'bober' ) . '</span>',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
        ) );

    ?>

    <div class="al-entry-content">
        <?php the_content(); ?>
    </div>

    <?php echo bober_post_tags(); ?>

    <?php echo bober_posts_navigation('<div class="al-post-single-navigation">', '</div>'); ?>

</article>