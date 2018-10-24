<?php

/**
 *
 *
 * Woocommerce settings
 *
 *
 */

Kirki::add_section( 'woocommerce', array(
    'title'      => esc_attr__( 'Shop settings', 'bober' ),
    'capability' => 'edit_theme_options',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-background-woocommerce-page',
    'label'       => esc_html__( 'Background page image', 'bober' ),
    'section'     => 'woocommerce',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-heading-archive-woocommerce',
    'label'    => esc_html__( 'Heading title', 'bober' ),
    'section'  => 'woocommerce',
    'default'  => esc_attr__( 'Shop', 'bober' ),
) );

Kirki::add_field( 'bober', array(
    'type'     => 'textarea',
    'settings' => 'al-description-archive-woocommerce',
    'label'    => esc_html__( 'Description', 'bober' ),
    'section'  => 'woocommerce',
    'default'  => esc_attr__( 'Description', 'bober' ),
) );


Kirki::add_field( 'bober', array(
    'type'        => 'switch',
    'settings'    => 'al-sidebar-archive',
    'label'       => esc_html__( 'Show sidebar on Arhive page ?', 'bober' ),
    'description'  => esc_html__( 'Turn On if you want display it', 'bober' ),
    'section'     => 'woocommerce',
    'default'     => '1',
    'choices'     => array(
        'on'  => esc_attr__( 'Enable', 'bober' ),
        'off' => esc_attr__( 'Disable', 'bober' ),
    ),
) );

