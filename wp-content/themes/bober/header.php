<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>

</head>

<body id="top" <?php body_class(); ?>>

<?php

    $menu_class = 'sf-menu sf-menu-header';
    $menu_id = '';

    if(bober_menu_position() === 'left'){
        $menu_class .= ' sf-vertical';
    }else{
        $menu_id = 'id=top-nav';
    }
?>

<?php if(bober_get_option('al-preloader', 'on') === 'on' ){
    echo '<div id="preloader"><div class="cssload-thecube"><div class="cssload-cube cssload-c1"></div><div class="cssload-cube cssload-c2"></div><div class="cssload-cube cssload-c4"></div><div class="cssload-cube cssload-c3"></div></div></div>';
} ?>

<?php if(bober_menu_position() === 'left'){
    echo '<div class="content-wrap-lfm">';
} ?>

<!--Full screen top nav start-->
<?php if(bober_get_option('al-fullscreen-nav-show') === 'on'){
    get_template_part('templates/header/header','fullscreen-nav');
} ?>
<!--Full screen top nav end-->

<header <?php echo bober_nav_background(); ?> <?php echo esc_attr($menu_id); ?> class="<?php echo bober_header_class(); ?>">
    <?php if(bober_menu_position() === 'top'){
        echo '<div class="container">';
    }else{
        echo '<div class="al-nav-container-rel">';
    } ?>


        <?php get_template_part('templates/site/site','header-logo'); ?>

        <?php if(bober_get_option('al-fullscreen-nav-show') === 'on' ){
            if(bober_menu_position() === 'left'){
                echo '<a href="#" class="toggle-top al-toggle-full-nav"><span></span><span></span><span></span><span></span><span></span></a>';
            }
        } ?>

        <nav class="top-menu">
            <?php
                if(has_nav_menu('primary-menu'))
                {
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => FALSE,
                        'menu_class' => $menu_class,
                        'echo' => true
                    ));
                }
                else
                {
                    echo '<ul class="sf-menu">';
                    echo '<li><a class="selected" href="#">' . esc_html__('No Menu', 'bober') . '</a></li>';
                    echo '</ul>';
                }
            ?>
            <!-- Start toggle menu-->
            <a href="#" class="toggle-mnu"><span></span></a>

            <!-- Start toggle menu-->
            <?php if(bober_get_option('al-fullscreen-nav-show') === 'on' ){
                echo '<a href="#" class="toggle-top"><span></span><span></span><span></span><span></span><span></span></a>';
            } ?>


        </nav>


    <?php if(bober_menu_position() === 'left'){
        if(bober_get_option('al-left-menu-social') === 'true'){
            get_template_part('templates/site/site','social-icons');
        }
    } ?>




    </div>

</header>

<?php get_template_part('templates/header/header-mobile','nav'); ?>

<?php if(bober_get_option('al-back-to-top') === 'on'){
    echo '<div class="top icon-down toTopFromBottom"><a href="#" class="al-btn-to-top"><i class="pe-7s-angle-up"></i></a></div>';
} ?>
