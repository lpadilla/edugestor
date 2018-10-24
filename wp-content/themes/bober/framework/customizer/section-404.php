<?php

/**
 *
 *
 * 404 settings
 *
 *
 */

Kirki::add_section( '404_settings', array(
    'title'      => esc_attr__( '404 settings', 'bober' ),
    'priority'   => 6,
    'capability' => 'edit_theme_options',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-404-title',
    'label'    => esc_html__( 'Heading title', 'bober' ),
    'section'  => '404_settings',
    'sanitize_callback' => 'wp_kses_post',
    'default'  => esc_attr__( 'Page 404', 'bober' ),

) );

Kirki::add_field( 'bober', array(
    'type'     => 'textarea',
    'settings' => 'al-404-description',
    'label'    => esc_html__( 'Description', 'bober' ),
    'section'  => '404_settings',
    'sanitize_callback' => 'wp_kses_post',
    'default'  => esc_attr__( 'Oops, Page Not Found', 'bober' ),

) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-404-label',
    'label'    => esc_html__( 'Button label', 'bober' ),
    'section'  => '404_settings',
    'default'  => esc_attr__( 'Go to back', 'bober' ),

) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-404-image',
    'label'       => esc_html__( 'Background image', 'bober' ),
    'section'     => '404_settings',
) );

