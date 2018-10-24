<?php if (get_the_author_meta('description') ) :  ?>

    <div class="al-author-bio">
        <div class="al-profile-img">
            <?php echo get_avatar(get_the_author_meta( 'ID' ), 90); ?>
        </div>

        <div class="al-author-info">
            <h3 class="al-author-title"><?php echo esc_html__('Written', 'bober'); ?> <?php echo esc_attr( get_the_author_meta('nickname') ); ?></h3>
            <?php echo get_the_author_meta('description'); ?>
        </div>
    </div>

<?php endif; ?>


