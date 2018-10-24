<?php get_header(); ?>

    <div class="container single-blog right-sidebar">
        <div class="row">

            <div class="col-lg-8 single-post al-single">

                <?php if (have_posts()): the_post();
                    get_template_part('templates/content/content-post', 'single');
                endif; ?>

                <?php if (function_exists( 'alian4x_share_buttons' )) { echo alian4x_share_buttons(); } ?>

                <!--About author-->
                <?php get_template_part('templates/content/content-post-about', 'author'); ?>
                <!--About author-->

                <!--comments-->
                <?php if ( comments_open() || get_comments_number() ){ comments_template(); }?>
                <!--comments-->

            </div>
            <div id="sidebar" class="col-lg-4 right-sidebar">
                <?php get_sidebar(); ?>
            </div>


        </div>
    </div>

<?php get_footer(); ?>