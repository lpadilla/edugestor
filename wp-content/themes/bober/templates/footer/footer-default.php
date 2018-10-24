
<footer>
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar('footer_sidebar'); ?>
        </div>
    </div>
    <div class="down-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if(bober_get_option('al-footer-copyright')){
                        echo '<p>'.wp_kses_post(bober_get_option('al-footer-copyright')).'</p>';
                    } ?>

                    <?php
                        if(has_nav_menu('footer-menu'))
                        {
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                                'container' => FALSE,
                                'menu_class' => 'footer-menu',
                                'echo' => true
                            ));
                        }
                        else
                        {
                            echo '<ul class="footer-menu">';
                            echo '<li><a href="#">' . esc_html__('No Menu', 'bober') . '</a></li>';
                            echo '</ul>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

