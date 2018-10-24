<article class="<?php echo bober_photos_folio_class(); ?>">
    <a href="<?php the_post_thumbnail_url() ?>" class="wrap-ms-pr link-portfolio dh-container">
        <div class="bg-mask-pr dh-overlay">
            <div class="icon"><i class="pe-7s-search"></i></div>
        </div>
        <img src="<?php esc_url( the_post_thumbnail_url() ); ?>" class="img-responsive" alt="<?php echo esc_attr( get_the_title() ); ?>" >
    </a>
</article>




