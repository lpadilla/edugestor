<!-- Start mobile menu-->
<div id="mobile-menu">
    <div class="inner-wrap">
        <nav>
            <?php
            if(has_nav_menu('mobile-menu'))
            {
                wp_nav_menu(array(
                    'theme_location' => 'mobile-menu',
                    'container' => FALSE,
                    'menu_class' => 'nav_menu',
                    'echo' => true
                ));
            }
            else
            {
                echo '<ul class="nav_menu">';
                echo '<li><a class="selected" href="#">' . esc_html__('No Menu', 'bober') . '</a></li>';
                echo '</ul>';
            }
            ?>
        </nav>
    </div>
</div>
<!-- End mobile menu-->