<div class="container single-blog">
    <div class="row">



        <div class="col-lg-8 single-post">

            <?php if(have_posts()):?>

            <div class="al-index-posts">
                <?php
                    while (have_posts()) : the_post();

                        get_template_part('templates/content/content-post', get_post_format());

                    endwhile;
                ?>
            </div>

            <?php
                else:
                    get_template_part('templates/content/content', 'none'); //none
                endif;
            ?>
        </div>

        <!-- START Sidebar-->
        <div id="sidebar" class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
        <!-- END Sidebar-->

    </div>
</div>