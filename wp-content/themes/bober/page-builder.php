<?php
/**
 * template name: Visual Composer Page
 */
?>
<?php get_header(); ?>


    <div class="container al-side-container">
        <?php
            while ( have_posts() ) : the_post();
                the_content();
            endwhile; // End of the loop.
        ?>
    </div>

<?php get_footer(); ?>
