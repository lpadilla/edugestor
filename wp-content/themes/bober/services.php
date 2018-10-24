<?php

    /* Template Name: Services */
    get_header();

?>

    <section <?php echo bober_page_background(); ?> class="al-display-page al-bg-mask background-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="al-heading-title-big"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('loop/loop-service','items'); ?>


    <div class="container al-side-container">
            <?php while ( have_posts() ) : the_post() ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    </div>

<?php get_footer(); ?>