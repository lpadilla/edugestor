<div class="slider al-404-page">
    <div class="wrap-header">
        <!-- Start slide-->
        <div <?php echo bober_page_background(); ?> class="slide al-bg-mask background-image al-full-vh">
            <div class="container-slide al-vertical-align center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-title-big">
                                <h1>
                                    <?php echo wp_kses_post( bober_get_option('al-404-title1', 'Page <span>404</span>') ); ?>
                                </h1>

                            </div>
                            <div class="description-slide"><p><?php echo bober_get_option('al-404-description', 'Oops, Page Not Found'); ?></p></div>
                            <div class="buttons-section"><a href="<?php echo esc_url( home_url() ); ?>" class=" btn dark-btn large-btn"><?php echo esc_html( bober_get_option('al-404-label', 'Go to back') ); ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>