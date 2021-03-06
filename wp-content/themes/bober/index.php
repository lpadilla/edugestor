<?php get_header(); ?>

<section <?php echo bober_blog_background(); ?> class="display-page al-bg-mask background-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2">
                <div class="heading-title al-center">
                    <!-- heading title-->
                    <h1 class="al-headitg-title"><?php echo esc_html(bober_get_option('al-blog-heading', 'Blog')); ?></h1>
                    <!-- horizontal line-->
                    <div class="al-line-title">
                        <svg class="al-svg-line" fill="red" x="0px" y="0px" viewBox="0 0 100 19.5" ><g><polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"/></g></svg>
                    </div>
                    <!-- description slider-->

                    <div class="al-subtitle">
                        <?php if( bober_get_option('al-blog-description') ):
                            echo '<p>'.esc_html( bober_get_option('al-blog-description', 'Description blog') ).'</p>';
                        else:
                            bloginfo('description');
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('loop/loop-post','default'); ?>

<?php get_template_part('templates/content/content', 'navigation'); //nav ?>



<?php get_footer(); ?>
