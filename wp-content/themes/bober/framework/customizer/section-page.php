<?php

/**
 *
 *
 * Page settings
 *
 *
 */

Kirki::add_section( 'page_settings', array(
    'title'      => esc_html__( 'Page settings', 'bober' ),
    'priority'   => 2,
    'capability' => 'edit_theme_options',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-bg-page',
    'label'       => esc_html__( 'Background image', 'bober' ),
    'section'     => 'page_settings',
) );