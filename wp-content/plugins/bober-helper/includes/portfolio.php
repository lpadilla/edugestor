<?php


add_action( 'init', 'register_portfolio_post_type' );
function register_portfolio_post_type() {
    register_post_type( 'folio',
        array(
            'labels' => array(
                'name'			=> esc_html__('Portfolio',"alian4x"),
                'singular_name' => esc_html__('Portfolio',"alian4x"),
                'add_new'		=> esc_html__('Add Portfolio Item',"alian4x"),
                'add_new_item'	=> esc_html__('Add Portfolio Item',"alian4x"),
                'edit_item'		=> esc_html__('Edit Portfolio Item',"alian4x"),
                'new_item'		=> esc_html__('New Portfolio Item',"alian4x"),
                'not_found'		=> esc_html__('No Portfolio Item found',"alian4x"),
                'not_found_in_trash' => esc_html__('No Portfolio Item found in Trash',"alian4x"),
                'menu_name'		=> esc_html__('Default Portfolio',"alian4x"),
            ),
            'description' => 'Manipulating with our Portfolio',
            'public' => true,
            'show_in_nav_menus' => true,
            'supports' => array(
                'title',
                'thumbnail',
                'comments',
                'editor',
            ),
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 35,
            'has_archive' => true,
            'menu_icon' => 'dashicons-layout',
            'query_var' => true,
            'rewrite' => array('slug' => 'folio'),
            'capability_type' => 'post',
            'map_meta_cap'=>true

        )
    );

    add_custom_taxonomies_portfolio();
    flush_rewrite_rules(false);
}
function add_custom_taxonomies_portfolio() {
    register_taxonomy('folio_cat', 'folio', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => esc_html__( 'Portfolio', 'taxonomy general name',"alian4x" ),
            'singular_name' => esc_html__( 'Portfolio', 'taxonomy singular name' ,"alian4x"),
            'search_items' =>  esc_html__( 'Search Locations' ,"alian4x"),
            'all_items' => esc_html__( 'All Portfolio' ,"alian4x"),
            'parent_item' => esc_html__( 'Parent Location' ,"alian4x"),
            'parent_item_colon' => esc_html__( 'Parent Location:' ,"alian4x"),
            'edit_item' => esc_html__( 'Edit Location' ,"alian4x"),
            'update_item' => esc_html__( 'Update Portfolio' ,"alian4x"),
            'add_new_item' => esc_html__( 'Add New Portfolio' ,"alian4x"),
            'new_item_name' => esc_html__( 'New Portfolio' ,"alian4x"),
            'menu_name' => esc_html__( 'Portfolio Catagory' ,"alian4x"),
        ),
        'rewrite' => array(
            'slug' => 'folio_cat',
            'with_front' => false,
            'hierarchical' => true
        )

    ));
}