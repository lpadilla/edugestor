<?php
$paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
$blog_max_posts = get_field('blog_max_posts');
$sidebar_position = get_field('blog_sidebar');
$blog_navigation = get_field('blog_navigation');
$blog_style_posts = get_field('blog_style_posts');
$blog_container_width = get_field('blog_container_width');
$blog_masonry_size = '';
$blog_masonry_style = '';
$blog_class = 'al-posts';
$blog_sidebar_class = 'col-lg-4';


$args = array(
    'paged' => $paged,
    'posts_per_page' => $blog_max_posts,
    'post_type' => 'post'
);

$all_posts = new WP_Query($args);

$container_class = 'col-lg-8 single-post al-posts';

switch ($sidebar_position){
    case 'none';
        $container_class = 'col-md-12 single-post';
        break;
    case 'left';
        $container_class = 'col-lg-8 col-lg-push-4 single-post';
        $blog_sidebar_class = 'col-lg-4 col-lg-pull-8';
        break;
    case 'right';
        $container_class = 'col-lg-8 single-post';
        $blog_sidebar_class = 'col-lg-4';
        break;
}

if($blog_style_posts == 'masonry2' || $blog_style_posts == 'masonry3' || $blog_style_posts == 'masonry4'){
    if($sidebar_position == 'right'){
        $container_class = 'col-lg-8 single-post';
        $blog_sidebar_class = 'col-lg-4';
    }elseif($sidebar_position == 'left'){
        $container_class = 'col-lg-8 col-lg-push-4 single-post';
        $blog_sidebar_class = 'col-lg-4 col-lg-pull-8';
    }
}

switch ($blog_style_posts){
    case 'masonry4';
        $blog_masonry_size = 'data-size=4';
        break;
    case 'masonry3';
        $blog_masonry_size = 'data-size=3';
        break;
    case 'masonry2';
        $blog_masonry_size = 'data-size=2';
        break;
}

if($blog_style_posts == 'masonry2' || $blog_style_posts == 'masonry3' || $blog_style_posts == 'masonry4'){
    $blog_class .= ' ' . 'al-masonry-posts';
    $blog_masonry_style = 'al-masonry-blog';
}
?>
<div <?php echo 'class="'.esc_html( $blog_masonry_style ).'"' ?>>
    <div class="<?php echo esc_attr( $blog_container_width ); ?> single-blog">
        <div class="row">
            <div class="<?php echo esc_attr( $container_class ); ?>">
                <div <?php echo esc_attr( $blog_masonry_size ); ?> class="<?php echo esc_attr( $blog_class ); ?>">
                    <?php if(have_posts()) : ?>

                        <?php if($blog_style_posts == 'masonry2' || $blog_style_posts == 'masonry3' || $blog_style_posts == 'masonry4'){
                            echo '<div class="gutter-sizer"></div>';
                        } ?>

                        <?php
                        $i = 0;
                        while ($all_posts->have_posts()) : $all_posts->the_post();
                            $i++;
                            get_template_part('templates/content/content-post', get_post_format());
                            break;
                        endwhile;
                        wp_reset_postdata();
                        ?>

                    <?php endif; ?>
                </div>

                <?php
                    switch ($blog_navigation){
                        case 'ajax';
                            echo '<div class="al-ajax-navigation al-center-line"><a href="#" class="al-ajax-more-posts btn al-btn-dark large-btn"><span class="al-btn-text">'.esc_html__('Load More', 'bober').'</span><i class="al-btn-icon fa fa-spinner fa-spin"></i></a></div>' . bober_ajax_load($all_posts) . '' ;
                            break;

                        case 'pagination';
                            echo bober_post_navigation($all_posts);
                            break;
                    }
                ?>

            </div>
            <!--Show sidebar start-->
            <?php if( $sidebar_position == 'left' || $sidebar_position == 'right' ): ?>
                <div id="sidebar" class="<?php echo esc_attr( $blog_sidebar_class ); ?>">
                    <?php get_sidebar(); ?>
                </div>
            <?php endif; ?>
            <!--Show sidebar end-->
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>