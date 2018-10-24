<?php


add_action( 'init', 'register_services_post_type' );
function register_services_post_type() {
    register_post_type( 'service',
        array(
            'labels' => array(
                'name'			=> esc_html__('Service',"alian4x"),
                'singular_name' => esc_html__('Service',"alian4x"),
                'add_new'		=> esc_html__('Add Service Item',"alian4x"),
                'add_new_item'	=> esc_html__('Add Service Item',"alian4x"),
                'edit_item'		=> esc_html__('Edit Service Item',"alian4x"),
                'new_item'		=> esc_html__('New Service Item',"alian4x"),
                'not_found'		=> esc_html__('No Service Item found',"alian4x"),
                'not_found_in_trash' => esc_html__('No Service Item found in Trash',"alian4x"),
                'menu_name'		=> esc_html__('Services',"alian4x"),
            ),
            'description' => 'Manipulating with our Service',
            'public' => true,
            'show_in_nav_menus' => true,
            'supports' => array(
                'title',
                'thumbnail',
                'editor',
            ),
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 36,
            'has_archive' => true,
            'menu_icon' => 'dashicons-building',
            'query_var' => true,
            'rewrite' => array('slug' => 'service'),
            'capability_type' => 'post',
            'map_meta_cap'=>true

        )
    );

//    add_custom_taxonomies_service();
    flush_rewrite_rules(false);
}
function add_custom_taxonomies_service() {
    register_taxonomy('services_cat', 'service', array(
        'hierarchical' => true,
        'labels' => array(
            'name' => esc_html__( 'Service', 'taxonomy general name',"alian4x" ),
            'singular_name' => esc_html__( 'Service', 'taxonomy singular name' ,"alian4x"),
            'search_items' =>  esc_html__( 'Search Locations' ,"alian4x"),
            'all_items' => esc_html__( 'All Services' ,"alian4x"),
            'parent_item' => esc_html__( 'Parent Location' ,"alian4x"),
            'parent_item_colon' => esc_html__( 'Parent Location:' ,"alian4x"),
            'edit_item' => esc_html__( 'Edit Location' ,"alian4x"),
            'update_item' => esc_html__( 'Update Service' ,"alian4x"),
            'add_new_item' => esc_html__( 'Add New Service' ,"alian4x"),
            'new_item_name' => esc_html__( 'New Service' ,"alian4x"),
            'menu_name' => esc_html__( 'Service Catagory' ,"alian4x"),
        ),
        'rewrite' => array(
            'slug' => 'services_cat',
            'with_front' => false,
            'hierarchical' => true
        )

    ));
}