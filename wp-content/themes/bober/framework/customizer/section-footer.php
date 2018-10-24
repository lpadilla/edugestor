<?php

/**
 *
 *
 * Footer settings
 *
 *
 */

Kirki::add_section( 'footer_settings', array(
    'title'      => esc_attr__( 'Footer settings', 'bober' ),
    'priority'   => 4,
    'capability' => 'edit_theme_options',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'textarea',
    'settings' => 'al-footer-copyright',
    'sanitize_callback' => 'wp_kses_post',
    'default' => esc_html__('2018 All Rights Reserved.  -   Created by <a href="https://themeforest.net/user/alian4x" target="_blank">Alian4x</a>', 'bober'),
    'label'    => esc_html__( 'Copyright', 'bober' ),
    'description'  => esc_html__( 'Insert your copyright here', 'bober' ),
    'section'  => 'footer_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'textarea',
    'settings' => 'al-footer-description',
    'label'    => esc_html__( 'Description', 'bober' ),
    'description'  => esc_html__( 'Insert your description here', 'bober' ),
    'section'  => 'footer_settings',
    'active_callback'  => array(
        array(
            'setting'  => 'al-type-footer',
            'operator' => '==',
            'value'    => 'minimal',
        ),
    )
) );


Kirki::add_field( 'bober', array(
    'type'        => 'select',
    'settings'    => 'al-type-footer',
    'label'       => esc_html__( 'Choose the type of footer', 'bober' ),
    'section'     => 'footer_settings',
    'default'     => 'minimal',
    'multiple'    => 1,
    'choices'     => array(
        'default' => esc_attr__( 'Default', 'bober' ),
        'minimal' => esc_attr__( 'Minimal', 'bober' ),
        'hide' => esc_attr__( 'Hide', 'bober' )
    )
) );