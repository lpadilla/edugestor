<article id="post-<?php the_ID(); ?>" <?php bober_post_class(); ?> >

    <?php echo bober_post_thunbnail_format(); ?>

    <div class="content">
        <?php echo bober_post_title(); ?>

        <?php echo get_template_part('templates/content/content-post','meta'); ?>

            <?php the_content(); ?>


        <?php echo bober_post_footer(); ?>
    </div>

</article>