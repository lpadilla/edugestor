<?php get_header(); ?>
<div class="container al-side-container">
    <?php while ( have_posts() ) : the_post() ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php if ( comments_open() || get_comments_number() ) : ?>
    <div class="al-comment-any-page">
        <div class="container">
            <div class="row">
                <?php comments_template(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php echo bober_portfolio_navigation('<div class="al-portfolio-single-navigation">', '</div>'); ?>

<?php get_footer(); ?>
