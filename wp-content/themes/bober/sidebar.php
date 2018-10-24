<?php if ( function_exists('dynamic_sidebar')) {

    global $post;
    global $woocommerce;

    $posttype = get_post_type($post);

    if( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag() || is_search() )) && ( $posttype == 'post') ) {
        dynamic_sidebar('blog_sidebar');
    }
    elseif($woocommerce && is_shop() || $woocommerce && is_product_category() || $woocommerce && is_product_tag() || $woocommerce && is_product()){
        dynamic_sidebar('sidebar-woocommerce');
    }else{
        dynamic_sidebar('blog_sidebar');
    }

}