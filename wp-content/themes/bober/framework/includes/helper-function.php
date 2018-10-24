<?php

/****************************
    Widgets
***************************/
add_action( 'widgets_init', 'bober_widget_init' );
if(!function_exists('bober_widget_init')) {

    function bober_widget_init() {

        register_sidebar( array(
            'name'          => esc_html__( 'Blog Sidebar', 'bober' ),
            'id'            => 'blog_sidebar',
            'description'   => esc_html__( 'Add widgets here.', 'bober' ),
            'before_widget' => '<div class="al-widget %2$s"><div class="al-widget-content">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<div class="al-widget-title"><h4>',
            'after_title'   => '</h4></div>',
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Sidebar', 'bober' ),
            'id'            => 'footer_sidebar',
            'description'   => esc_html__( 'Add widgets here.', 'bober' ),
            'before_widget' => '<div class="col-md-3"><div id="%1$s" class="al-widget %2$s">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h5 class="al-widget-title">',
            'after_title'   => '</h5>',
        ) );

    }
}

/****************************
    Search form
***************************/
add_filter( 'get_search_form', 'bober_search_form', 100 );
if (!function_exists('bober_search_form')) {

    function bober_search_form( $bober_form ) {

        $bober_form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
        <div class="search-form">
        <input type="text" placeholder="'. esc_attr__( 'Search', 'bober' ) .'" value="' . get_search_query() . '" name="s" id="s" />
        <button class="search-submit"><i class="fa fa-search"></i></button>
        </div>
        </form>';

        return $bober_form;
    }
}

/****************************
    Left nav - adding class
***************************/
add_filter( 'body_class', 'bober_body_class' );
if(!function_exists('bober_body_class')) {
    function bober_body_class( $classes ) {

        $menu_style = '';

        if(class_exists('acf')){
            $menu_style = get_field('page_style_menu');
        }
        if ( bober_menu_position() === 'left') {
            $classes[] = 'al-sidenav';
        }
        if(bober_get_option('al-relative-header') == 'false' || $menu_style == 'relative'){
            $classes[] = 'al-relative-header';
        }

        return $classes;
    }
}

/****************************
    Post footer
***************************/
if(!function_exists('bober_post_footer')) {
    function bober_post_footer() {
        global $post;

        $output = '';

        $output .= '<a href="'.esc_url( get_permalink($post->ID) ).'" title="'.esc_attr( get_the_title($post->ID) ).'" class="btn btn-default">'.esc_html__('Read more','bober').'</a><span class="format"></span>';

        return $output;
    }
}

/****************************
    Portfolio footer
***************************/
if(!function_exists('bober_portfolio_footer')) {
    function bober_portfolio_footer() {
        global $post;
        if(class_exists('acf')){
            $display_btn_see = get_field('portfolio_display_button_see');
            $button_label = get_field('portfolio_see_project_label');
        }

        $output = '';
        if($display_btn_see === true){
            $output .= '<hr><div class="buttons-section center"><a href="'.esc_url( get_permalink($post->ID) ).'" title="'.esc_attr( get_the_title($post->ID) ).'" class="btn accent-br-btn large-btn">'.$button_label.'</a></div>';
        }
        return $output;
    }
}

/****************************
    Header class
***************************/
if(!function_exists('bober_header_class')) {
    function bober_header_class() {

        $output = 'top-nav';
        $menu_style = '';
        if(class_exists('acf')){
            $menu_style = get_field('page_style_menu');
        }

        if(bober_get_option('al-relative-header') == 'false' || $menu_style == 'relative'){
            $output .= ' al-relative-header';
        }

        if(bober_get_option('al-hide-scroll-menu') === 'on'){
            $output .= ' page-header';
        }


        if(bober_menu_position() === 'left'){
            $output = 'top-nav header-type-1 background-image';
        }
        if(bober_get_option('al-fullscreen-nav-show') === 'on'){
            $output .= ' al-have-full-screen';
        }


        return $output;
    }
}

/****************************
    Portfolio slug class
***************************/
if(!function_exists('bober_folio_class')){
    function bober_folio_class(){
        $folio_class = '';
        $output = '';

        if(class_exists('acf')){
            $folio_type = get_field('portfolio_type');
        }

        $output .= $folio_class ;

        $categories = get_the_terms(get_the_ID(), 'folio_cat');
        if (is_array($categories)) {
            foreach ($categories as $cats) {
                $output .= ' folio-'. $cats->slug .'';
            }
        }

        if($folio_type === 'photo_gallery' || $folio_type === 'audio_gallery' || $folio_type === 'video_gallery'){
            $output .= ' al-gallery-folio';
        }

        return $output;
    }
}

/****************************
    Portfolio slug class
***************************/
if(!function_exists('bober_photos_folio_class')){
    function bober_photos_folio_class(){
        $folio_class = '';
        $output = '';

        $output .= $folio_class ;

        $categories = get_the_terms(get_the_ID(), 'folio_photos_cat');
        if (is_array($categories)) {
            foreach ($categories as $cats) {
                $output .= ' folio-'. $cats->slug .'';
            }
        }

        return $output;
    }
}

/****************************
    Post class
***************************/
if(!function_exists('bober_post_class')) {
    function bober_post_class( $output="" ) {
        global $post;

        $class_posts = 'post type-post';
        $class_posts .= ' ' . $output;

        if(!is_single()){
            if(is_sticky($post->ID)){
                $class_posts .= ' ' . 'sticky';
            }
        }


        $post_class = post_class( $class_posts );

        return $post_class;
    }
}

/****************************
    Post navigation
***************************/
if(!function_exists('bober_post_navigation')) {
    function bober_post_navigation($query = null) {
        if($query == null){
            global $wp_query;
            $query = $wp_query;
        }

        $page = $query->query_vars['paged'];
        $pages = $query->max_num_pages;
        $paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);

        if($page == 0) {
            $page = 1;
        }

        $numeric_links = paginate_links(array(
            'foramt' => '',
            'add_args' => '',
            'current' => $paged,
            'total' => $pages,
            'prev_text' => esc_html__('Prev', 'bober'),
            'next_text' => esc_html__('Next', 'bober'),
        ));

        $output = '';

        if($pages > 1) {

                $output .= '<nav class="al-blog-pagination">';
                $output .= $numeric_links;
                $output .= '</nav>';

        return $output;
        }
    }
}

/****************************
    Excerpt_more
***************************/
add_filter( 'excerpt_more', 'bober_excerpt_more' );

if(!function_exists('bober_excerpt_more')) {
    function bober_excerpt_more( $more ) {
        global $post;

        return '<span class="screen-reader-text"><a href="'.get_permalink($post->ID).'" rel="nofollow">'.esc_html__('[...]','bober').'</a></span>';
    }
}

/****************************
    Post Title
***************************/
if(!function_exists('bober_post_title')) {
    function bober_post_title() {
        if ( is_single() ) {
            the_title( '<h1 class="al-entry-title">', '</h1>' );
        } else {
            the_title( '<h3 class="al-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
        }
    }
}

/****************************
    Navigation Background
***************************/
if(!function_exists('bober_nav_background')){
    function bober_nav_background() {

        $output = '';

        if(bober_menu_position() === 'left'){
            $output = 'data-image="'.bober_get_option('al-nav-background').'"';
        }

        return $output;
    }
}

/****************************
    Page Background
***************************/
if(!function_exists('bober_page_background')){
    function bober_page_background() {

        global $woocommerce;

        //START Woocommerce get info category
        global $wp_query;
        $cat = $wp_query->get_queried_object();

        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
            $thumbnail_id = "";
            if( is_product_category() ) {
                $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
            }
            $image = wp_get_attachment_url( $thumbnail_id );
            //END Woocommerce get info category
        }
        $output = '';

        $output .= 'data-image="';

        if(is_page()){
            if( has_post_thumbnail()  ){
                $output .= bober_get_thumbnail(null, 'full');
            }else{
                $output .= bober_get_option('al-bg-page');
            }
        }
        if(is_404() && bober_get_option('al-404-image')){
            $output .= bober_get_option('al-404-image');
        }
        if( $woocommerce && is_shop() || $woocommerce && is_product_tag()){
            $output .= bober_get_option('al-background-woocommerce-page');
        }elseif($woocommerce && is_product_category() ){
            if($image){
                $output .= $image;
            }else{
                $output .= bober_get_option('al-background-woocommerce-page');
            }
        }

        $output .= '"';

        return $output;
    }

}

/****************************
    Page title&description
***************************/
if(!function_exists('bober_page_description')){
    function bober_page_description(){

        global $woocommerce;
        global $wp_query;
        $cat = $wp_query->get_queried_object();

        $output = '';
        $fdsd = '
        
             <div class="heading-title al-center">
                        <h1 class="al-headitg-title"><?php echo esc_html($blog_title); ?></h1>

                        

                        <div class="al-subtitle">
                            <p><?php echo esc_html($blog_description); ?></p>
                        </div>
                    </div>
            
        ';
        $output .= '<div class="heading-title al-center">';
            if($woocommerce && is_shop() ){
                $output .= '<h1 class="al-headitg-title">'.bober_get_option('al-heading-archive-woocommerce', 'shop').'</h1>';
                if(!empty(bober_get_option('al-description-archive-woocommerce'))){
                    $output .= '<div class="al-line-title"><svg class="al-svg-line" fill="red" x="0px" y="0px" viewBox="0 0 100 19.5" ><g><polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"/></g></svg></div>';
                    $output .= '<div class="al-subtitle"><p>'.bober_get_option('al-description-archive-woocommerce', 'Description').'</p></div>';
                }
            }elseif( $woocommerce && is_product_category()){
                $output .= '<h1 class="al-headitg-title"><span>'.esc_html__('Category:', 'bober').' </span>'.$cat->name.'</h1>';
                if($cat->description !== ''){
                    $output .= '<div class="al-line-title"><svg class="al-svg-line" fill="red" x="0px" y="0px" viewBox="0 0 100 19.5" ><g><polygon points="79.3,18 69.6,8.3 60,18 50.3,8.3 40.6,18 31,8.3 21.3,18 11.7,8.3 3.4,16.5 0.6,13.7 11.7,2.7 21.3,12.3 31,2.7 40.6,12.3 50.3,2.7 60,12.3 69.6,2.7 79.3,12.3 88.9,2.7 100,13.6 97.2,16.4 89,8.3"/></g></svg></div>';
                    $output .= '<div class="al-subtitle"><p>'.$cat->description .'</p></div>';
                }
            }else{
                $output .= the_title( '<h1 class="al-headitg-title">', '</h1>' );
            }
        $output .= '</div>';

        return $output;

    }
}

/****************************
    Background page blog
***************************/
if(!function_exists('bober_blog_background')){

    function bober_blog_background(){

        $output = '';

        $bg_image = bober_get_option('al-blog-background');

        if(class_exists('acf')){
            $blog_background_image = get_field('blog_background_image');
        }

        $output = 'data-image="';

        if( is_category() || is_home() || is_archive() ){
            $output .= bober_get_option('al-archive-background');
        }
        if( is_search() ){
            $output .= bober_get_option('al-blog-background');
        }
        if( is_page_template('blog.php') ){
            if(!empty($blog_background_image)){
                $output .= $blog_background_image;
            }else{
                $output .= bober_get_option('al-blog-background');
            }
        }

        $output .= '"';

        return $output;
    }
}

/****************************
   Get Post Thumbnail
***************************/
if(!function_exists('bober_get_thumbnail')){
    function bober_get_thumbnail($post_id, $size) {
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), $size);
        return $thumb['0'];
    }
}

/****************************
    Post Tags
***************************/
if(!function_exists('bober_post_tags')){
    function bober_post_tags(){
        $output = '';

        if(get_the_tags()){

            $tags = get_the_tags();
            $separator = "";
            $out_tags = '';

            foreach ( $tags as $tag ) {
                $tag_link = get_tag_link( $tag->term_id );

                $out_tags .= "<a href='{$tag_link}' title='{$tag->name} Tag'> {$tag->name}</a>";

                $done_tags = trim($out_tags, $separator);
            }

            $output .='<div class="al-post-tags"><span>'.esc_html__('Tags:','bober').'</span> '.$done_tags.'</div>';
        }

        return $output;
    }
}

/****************************
    Post Categories
***************************/
if(!function_exists('bober_post_categories')){
    function bober_post_catogories(){
        global $post;
        $categories = wp_get_object_terms($post->ID, 'category');
        $separator = ", ";

        $output = '';

        if (is_array($categories)) {

            foreach ($categories as $cats) {
                $output .= '<div class="al-category"><a href="'.get_category_link($cats->term_id).'">';
                $output .= ''.$cats->name.'</a></div>'.$separator;
            }

        } else {
            $output .='<div class="al-category" ><a href="#">'.esc_html__('Uncategorized', 'bober').'</a></div>';
        }

        return trim($output, $separator);
    }
}

/****************************
    Post Thumbnails Format
***************************/
if(!function_exists('bober_post_thumbnail_format')){
    function bober_post_thunbnail_format($format='', $size='bober_horizont_post') {

        global $post;
        $format = get_post_format( $post->ID );
        global $wp_embed;


        $output = '';

        if($format == 'gallery'){
            if(class_exists('acf')) {

                $images = get_field('post_gallery_images');

                $output .= '<div class="post-thumb">';
                $output .= '';
                $output .= '<div class="slider-wrap gallery-slide">';
                $output .= '<div class="slider-portfolio-single">';
                if(!empty($images)){
                    foreach ($images as $image) {
                        $output .= '<img src="' . esc_url( $image['sizes'][$size] ) . '" alt="' . esc_attr( $image['alt'] ) . '">';
                    }
                }
                $output .= '</div>';
                $output .= '<div class="prev-next-block-rotate opacity-control al-control-portfolio-slider">
                                <div class="wrap-prev">
                                  <div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
                                </div>
                                <div class="wrap-next">
                                  <div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
                                </div>
                              </div>
                            <!--Control sliders-->
                            <div class="al-dots-control dots-control-carousel"></div>';
                $output .= '</div>';
                $output .= '</div>';
            }
        }elseif($format == 'audio'){
            if(class_exists('acf')):
                $type = get_field('post_audio_type');
                $output .= '<div class="post-thumb">';
                $output .= '';
                switch ($type){
                    case 'link';
                        $audio = get_field('post_local_media');
                        $output .= do_shortcode('[audio src="'.$audio.'" ]');
                        break;
                    case 'iframe';
                        $audio = get_field('post_iframe_audio');
                        $output .= $audio;
                        break;
                }
                $output .= '</div>';
            endif;

        }elseif($format == 'video'){
            if(class_exists('acf')){
                $output .= '<div class="post-thumb">';
                $video = $wp_embed->run_shortcode( ' [embed]' . trim( get_field('post_video_iframe') ) . '[/embed]' );

                $output .= '<div class="embed-responsive">';
                $output .= str_replace('frameborder="0"','',$video );
                $output .= '</div>';
                $output .= '</div>';
            }
                }else{
                    if(has_post_thumbnail()):
                        if(!is_single()){ $output .='<a href="'.get_the_permalink($post->ID).'">'; }
                        $output .= '<div class="post-thumb">';
                            $output .='<img src="'.esc_url( bober_get_thumbnail($post->ID, $size) ).'" alt="'.esc_attr( get_the_title() ).'" >';
                        $output .= '</div>';
                        if(!is_single()){ $output .='</a>'; }
                    endif;

                }

        return $output;

    }
}

/****************************
    Comments layout
***************************/
if (!function_exists('bober_comments')) {

    function bober_comments($comment, $args, $depth) {
        $GLOBAL['comment'] = $comment;

        $comment_class = 'al-comment-content';
        if(empty(get_avatar($comment))){
            $comment_class .=' al-comment-no-padding';
        }

        ?>
        <li class="al-comment-item">
            <div id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
                <?php if(get_avatar($comment)){
                    echo '<div class="al-comment-photo">'.get_avatar($comment, 90, $default='').'</div>';
                } ?>

                <div class="<?php echo esc_attr( $comment_class ); ?>">

                    <div class="al-comment-header">
                        <span class="al-comment-author"><?php comment_author(); ?></span>
                        <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)) ?>" class="al-comment-date"><?php printf( ' %1$s ' . esc_html__('at', 'bober') . ' %2$s', get_comment_date(),  get_comment_time() ); ?></a>
                    </div>

                    <div class="al-comment-text">

                        <?php if ($comment->comment_approved == '0') : ?>
                            <p><?php esc_html_e('Your comment is awaiting moderation.', 'bober'); ?></p>
                        <?php endif; ?>

                        <?php comment_text(); ?>

                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => esc_html__('Reply', 'bober')))); ?>

                        <?php edit_comment_link(esc_html__( 'Edit', 'bober' ), '  ', ''); ?>

                    </div>
                </div>
            </div>
        <?php
    }
}

/****************************
    Portfolio Thumbnails Format
***************************/
if(!function_exists('bober_portfolio_thumbnail_format')){
    function bober_portfolio_thumbnail_format($size='') {

        global $post;

        if(class_exists('acf')){
            $format = get_field('portfolio_type');
            $iframe_size = 'data-height='.get_field('portfolio_iframe_height').'';
        }


        global $wp_embed;
        $output = '';

        if($format == 'photo_gallery'){
            if(class_exists('acf')) {

                $images = get_field('portfolio_gallery_images');

                $output .= '<div class="post-thumb">';
                $output .= '';
                $output .= '<div class="slider-wrap gallery-slide">';
                $output .= '<div class="slider-portfolio-single">';
                foreach ($images as $image) {
                    $output .= '<img src="' . esc_url( $image['sizes'][$size] ) . '" alt="' . esc_attr( $image['alt'] ) . '">';
                }
                $output .= '</div>';
                $output .= '<div class="prev-next-block-rotate opacity-control al-control-portfolio-slider">
                        <div class="wrap-prev">
                          <div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
                        </div>
                        <div class="wrap-next">
                          <div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
                        </div>
                      </div>
                    <!--Control sliders-->
                    <div class="dots-control-carousel al-dots-control"></div>';
                $output .= '</div>';
                $output .= '</div>';
            }
        }elseif($format == 'video_gallery'){
            if(class_exists('acf')) {

                $videos = get_field('p_video_gallery');

                $output .= '<div class="post-thumb">';
                $output .= '';
                $output .= '<div class="slider-wrap gallery-slide">';
                $output .= '<div class="slider-portfolio-single">';
                foreach ($videos as $video) {
                    $output .= '<div class="al-iframe-content" '.esc_attr($iframe_size).'>'.$wp_embed->run_shortcode( ' [embed]' . trim( $video['portfolio_video_gallery'] ) . '[/embed]' ).'</div>';
                }


                $output .= '</div>';
                $output .= '<div class="prev-next-block-rotate opacity-control al-control-portfolio-slider">
                                <div class="wrap-prev">
                                  <div class="prev"><i aria-hidden="true" class="fa fa-angle-left"></i></div>
                                </div>
                                <div class="wrap-next">
                                  <div class="next"><i aria-hidden="true" class="fa fa-angle-right"></i></div>
                                </div>
                              </div>
                            <!--Control sliders-->
                            <div class="al-dots-control dots-control-carousel"></div>';
                $output .= '</div>';
                $output .= '</div>';
            }
        }elseif($format == 'audio_gallery'){
            if(class_exists('acf')) {

                $audios = get_field('portfolio_audio_gallery');


                $output .= '<div class="post-thumb">';
                $output .= '<div class="slider-wrap gallery-slide">';
                $output .= '<div class="slider-portfolio-single">';
                foreach ($audios as $audio) {

                    $output .= '<div class="al-audio-gallery"> <p>'.$audio['portfolio_audio_gallery_repeat']['title'].'</p> '.do_shortcode('[audio src="'.$audio['portfolio_audio_gallery_repeat']['url'].'" ]').'</div>';
                }

                $output .= '</div>';
                $output .= '<div class="al-dots-control dots-control-carousel"></div>';
                $output .= '</div>';
                $output .= '</div>';
            }
        }elseif($format == 'audio'){
            if(class_exists('acf')):
                $type = get_field('portfolio_audio_type');
                $output .= '<div class="post-thumb">';
                $output .= '';
                switch ($type){
                    case 'link';
                        $audio = get_field('portfolio_audio_link');
                        $output .= '<div class="al-audio-gallery">'.do_shortcode('[audio src="'.$audio.'" ]').'</div>';
                        break;
                    case 'iframe';
                        $audio = get_field('portfolio_audio_iframe');
                        $output .= str_replace('frameborder="0"','',$audio );;
                        break;
                    case 'iframe_url';
                        $audio = get_field('portfolio_audio_url');
                        $output .= '<div class="al-iframe-content" '.esc_attr($iframe_size).'>'.$wp_embed->run_shortcode( ' [embed]' . trim( $audio ) . '[/embed]' ).'</div>';
                        break;
                }
                $output .= '</div>';
            endif;

        }elseif($format == 'video'){
            if(class_exists('acf')){
                $output .= '<div class="post-thumb">';
                $video = '<div class="al-iframe-content" '.esc_attr($iframe_size).'>'.$wp_embed->run_shortcode( ' [embed]' . trim( get_field('portfolio_video_iframe') ) . '[/embed]' ).'</div>';

                $output .= '<div class="embed-responsive">';
                $output .= str_replace('frameborder="0"', '',$video );
                $output .= '</div>';
                $output .= '</div>';
            }
        }elseif($format == 'default'){
            if(has_post_thumbnail()):
                $output .= '<div class="post-thumb">';
                $output .='<img src="'.esc_url( bober_get_thumbnail($post->ID, $size) ).'" alt="'.esc_attr( get_the_title() ).'" >';
                $output .= '</div>';
            endif;
        }else{
            if(has_post_thumbnail()):
                $output .= '<div class="post-thumb">';
                $output .='<img src="'.esc_url( bober_get_thumbnail($post->ID, $size) ).'" alt="'.esc_attr( get_the_title() ).'" >';
                $output .= '</div>';
            endif;
        }

        return $output;

    }
}

/****************************
    Type footer
***************************/
if(!function_exists('bober_footer_type')) {
    function bober_footer_type(){

        $output = false;

        if(class_exists('acf')){
            $output = get_field('page_type_footer');
        }

        if('' == $output || false == $output || 'none' == $output){
            $output = bober_get_option('al-type-footer', 'default');
        }

        return $output;
    }
}

/****************************
Menu position
 ***************************/
if(!function_exists('bober_menu_position')) {
    function bober_menu_position(){

        $output = false;

        if(class_exists('acf')){
            $output = get_field('page_nav_position');
        }
        if('' == $output || false == $output || 'none' == $output){
            $output = bober_get_option('al-menu-position', 'top');
        }

        return $output;
    }
}

/****************************
    Portfolio Navigation
***************************/
if(!function_exists('bober_portfolio_navigation')) {
    function bober_portfolio_navigation($before = '', $after = '') {


        $prevPost = get_previous_post();
        $nextPost = get_next_post();

        $output = '';

        if($prevPost || $nextPost):
            $output .= $before;

            $output .= '<div class="container">';

            if($prevPost){
                $output .= '<div class="col-md-6 al-left"><a class="al-previous-post" href="'.get_permalink($prevPost->ID).'">';
                $output .= '<span class="al-previous-title"><i class="fa fa-angle-left"></i>'.esc_html__('Previous Post', 'bober').'</span>';
                $output .= get_the_title($prevPost->ID);
                $output .= '</div></a>';

            }

            if($nextPost){
                $output .= '<div class="col-md-6 al-right"><a class="al-next-post " href="'.get_permalink($nextPost->ID).'">';
                $output .= '<span class="al-next-title">'.esc_html__('Next Post', 'bober').'<i class="fa fa-angle-right"></i></span>';
                $output .= get_the_title($nextPost->ID);
                $output .= '</div></a>';
            }


            $output .= '</div>';
            $output .= $after;
        endif;

        return $output;

    }
}

/****************************
    Password Protected
***************************/
add_filter( 'the_password_form', 'bober_custom_password_form' );
if(!function_exists('bober_custom_password_form')) {
    function bober_custom_password_form() {
        global $post;
        $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
        $output = '<div class="al-content-protected"><form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <p class="al-content-protected__description">' . esc_html__( 'To view this protected post, enter the password below:', 'bober' ) . '</p><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" placeholder="'.esc_attr__('Password:', 'bober').'" /><input class="btn" type="submit" name="Submit" value="' . esc_attr__( 'Submit', 'bober' ) . '" /></form></div>
    ';
        return $output;
    }
}

if(!function_exists('bober_posts_navigation')) {
    function bober_posts_navigation($before = '', $after = '') {


        $prevPost = get_previous_post();
        $nextPost = get_next_post();

        $output = '';

        if($prevPost || $nextPost):
            $output .= $before;

            if($prevPost){
                $prevPostName = get_the_title($prevPost->ID);
                $prevPostNameString = substr($prevPostName, 0, 30);
                $output .= '<div class="al-left"><a class="al-previous-post" href="'.get_permalink($prevPost->ID).'"><i class="fa fa-angle-left"></i>';
                $output .= $prevPostNameString;
                $output .= '</div></a>';

            }

            if($nextPost){
                $nextPostName = get_the_title($nextPost->ID);
                $nextPostNameString = substr($nextPostName, 0, 30);

                $output .= '<div class="al-right"><a class="al-next-post " href="'.get_permalink($nextPost->ID).'">';
                $output .= $nextPostNameString;
                $output .= '<i class="fa fa-angle-right"></i></div></a>';
            }

            $output .= $after;
        endif;

        return $output;

    }
}



