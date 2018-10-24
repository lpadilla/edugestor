<?php
    get_header();
?>

    <section <?php echo bober_page_background(); ?> class="al-display-page al-bg-mask background-image">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <?php bober_page_description(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Content section	 -->

    <?php get_template_part('loop/loop-service','items'); ?>

<?php get_footer(); ?>