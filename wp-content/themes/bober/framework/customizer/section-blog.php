<?php

/**
 *
 *
 * Blog settings
 *
 *
 */

Kirki::add_section( 'blog_settings', array(
    'title'      => esc_attr__( 'Blog settings', 'bober' ),
    'priority'   => 3,
    'capability' => 'edit_theme_options',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-blog-heading',
    'label'    => esc_html__( 'Heading title', 'bober' ),
    'section'  => 'blog_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'textarea',
    'settings' => 'al-blog-description',
    'label'    => esc_html__( 'Description', 'bober' ),
    'section'  => 'blog_settings',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-blog-background',
    'label'       => esc_html__( 'Background image', 'bober' ),
    'section'     => 'blog_settings',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-archive-background',
    'label'       => esc_html__( 'Background image: Archive page', 'bober' ),
    'section'     => 'blog_settings',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-search-background',
    'label'       => esc_html__( 'Background image: Search page', 'bober' ),
    'section'     => 'blog_settings',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-show-share',
    'label'       => esc_html__( 'Showing share buttons ?', 'bober' ),
    'description'  => esc_html__( 'Turn On if you want display it', 'bober' ),
    'section'     => 'blog_settings',
    'default'     => 'on',
    'choices'     => array(
        'on'   => esc_html__( 'On', 'bober' ),
        'off' => esc_html__( 'Off', 'bober' ),
    ),
) );