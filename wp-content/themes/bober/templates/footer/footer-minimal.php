<footer class="footer-minimal">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <?php get_template_part('templates/site/site','header-logo'); ?>
                <?php if(bober_get_option('al-footer-description')){
                    echo '<p>'.wp_kses_post(bober_get_option('al-footer-description')).'</p>';
                } ?>
                <?php get_template_part('templates/site/site','social-icons'); ?>
            </div>
        </div>
    </div>
    <?php if(bober_get_option('al-footer-copyright')): ?>
        <div class="down-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 center">
                        <?php echo '<p>'.bober_get_option('al-footer-copyright').'</p>'; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</footer>