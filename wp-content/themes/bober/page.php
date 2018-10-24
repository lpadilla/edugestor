<?php get_header(); ?>

    <!-- Start Content section	 -->
<section <?php echo bober_page_background(); ?> class="al-display-page al-bg-mask background-image">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <?php echo bober_page_description(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Content section	 -->

<div class="section page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                while ( have_posts() ) : the_post();

                    the_content();

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bober' ),
                        'after'  => '</div>',
                    ) );

                endwhile; // End of the loop.
                ?>
            </div>
        </div>
        <div class="">
            <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
