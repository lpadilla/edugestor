<?php

/**
 *
 *
 * full Screen settings
 *
 *
 */

Kirki::add_section( 'full_screen_settings', array(
    'title'      => esc_attr__( 'Full Screen Settings', 'bober' ),
    'priority'   => 1,
    'capability' => 'edit_theme_options',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-full-screen-background',
    'label'       => esc_html__( 'Background', 'bober' ),
    'section'     => 'full_screen_settings',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'textarea',
    'settings'    => 'al-full-screen-form',
    'label'       => esc_html__( 'Shortcode Contact Form 7', 'bober' ),
    'section'     => 'full_screen_settings',
) );


//START Link 1
Kirki::add_section( 'full_screen_settings_link_1', array(
    'title' => esc_html__( 'Link 1', 'bober' ),
    'panel' => 'general',
    'section' => 'full_screen_settings',
    'type'  => 'expanded',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'text',
    'settings'    => 'al-full-link-1-title',
    'label'       => esc_html__( 'Title:', 'bober' ),
    'section'     => 'full_screen_settings_link_1',
) );
Kirki::add_field( 'bober', array(
    'type'        => 'textarea',
    'settings'    => 'al-full-link-1-description',
    'label'       => esc_html__( 'Description:', 'bober' ),
    'section'     => 'full_screen_settings_link_1',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'select',
    'settings'    => 'al-full-link-target-1',
    'label'       => esc_html__( 'Target:', 'bober' ),
    'default'     => '_self',
    'section'     => 'full_screen_settings_link_1',
    'multiple'    => 1,
    'choices'     => array(
        '_self' => esc_attr__( 'This site', 'bober' ),
        '_blank' => esc_attr__( 'New page', 'bober' )
    ),
) );

Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-full-screen-link-type-1',
    'label'       => esc_html__( 'Radio-Buttonset Control', 'bober' ),
    'section'     => 'full_screen_settings_link_1',
    'default'     => 'link',
    'priority'    => 10,
    'choices'     => array(
        'link' => esc_attr__( 'Link', 'bober' ),
        'page' => esc_attr__( 'Page', 'bober' )
    ),
) );



Kirki::add_field( 'bober', array(
    'type'        => 'text',
    'settings'    => 'al-full-link-1',
    'label'       => esc_html__( 'Link:', 'bober' ),
    'section'     => 'full_screen_settings_link_1',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'dropdown-pages',
    'settings'    => 'al-full-link-page-1',
    'label'       => esc_html__( 'Choose page:', 'bober' ),
    'section'     => 'full_screen_settings_link_1',
) );
//END Link 1
//
////START Link 2
Kirki::add_section( 'full_screen_settings_link_2', array(
    'title' => esc_html__( 'Link 2', 'bober' ),
    'panel' => 'general',
    'section' => 'full_screen_settings',
    'type'  => 'expanded',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'text',
    'settings'    => 'al-full-link-2-title',
    'label'       => esc_html__( 'Title:', 'bober' ),
    'section'     => 'full_screen_settings_link_2',
) );
Kirki::add_field( 'bober', array(
    'type'        => 'textarea',
    'settings'    => 'al-full-link-2-description',
    'label'       => esc_html__( 'Description:', 'bober' ),
    'section'     => 'full_screen_settings_link_2',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'select',
    'settings'    => 'al-full-link-target-2',
    'label'       => esc_html__( 'Target:', 'bober' ),
    'default'     => '_self',
    'section'     => 'full_screen_settings_link_2',
    'multiple'    => 1,
    'choices'     => array(
        '_self' => esc_attr__( 'This site', 'bober' ),
        '_blank' => esc_attr__( 'New page', 'bober' )
    ),
) );

Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-full-screen-link-type-2',
    'label'       => esc_html__( 'Radio-Buttonset Control', 'bober' ),
    'section'     => 'full_screen_settings_link_2',
    'default'     => 'link',
    'priority'    => 10,
    'choices'     => array(
        'link' => esc_attr__( 'Link', 'bober' ),
        'page' => esc_attr__( 'Page', 'bober' )
    ),
) );



Kirki::add_field( 'bober', array(
    'type'        => 'text',
    'settings'    => 'al-full-link-2',
    'label'       => esc_html__( 'Link:', 'bober' ),
    'section'     => 'full_screen_settings_link_2',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'dropdown-pages',
    'settings'    => 'al-full-link-page-2',
    'label'       => esc_html__( 'Choose page:', 'bober' ),
    'section'     => 'full_screen_settings_link_2',
) );
//END Link 2

//START description
Kirki::add_section( 'full_screen_settings_description', array(
    'title' => esc_html__( 'Description', 'bober' ),
    'panel' => 'general',
    'section' => 'full_screen_settings',
    'type'  => 'expanded',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'text',
    'settings'    => 'al-full-screen-title',
    'label'       => esc_html__( 'Title:', 'bober' ),
    'section'     => 'full_screen_settings_description',
) );
Kirki::add_field( 'bober', array(
    'type'        => 'textarea',
    'settings'    => 'al-full-screen-description',
    'label'       => esc_html__( 'Description:', 'bober' ),
    'section'     => 'full_screen_settings_description',
) );
//END  description
//
////START description
Kirki::add_section( 'full_screen_settings_video', array(
    'title' => esc_html__( 'Video', 'bober' ),
    'panel' => 'general',
    'section' => 'full_screen_settings',
    'type'  => 'expanded',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'text',
    'settings'    => 'al-full-screen-video-link',
    'label'       => esc_html__( 'Link:', 'bober' ),
    'section'     => 'full_screen_settings_video',
) );
Kirki::add_field( 'bober', array(
    'type'        => 'textarea',
    'settings'    => 'al-full-screen-video-description',
    'label'       => esc_html__( 'Description:', 'bober' ),
    'section'     => 'full_screen_settings_video',
) );
//END  description


