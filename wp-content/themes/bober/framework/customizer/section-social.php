<?php

Kirki::add_section( 'social_settings', array(
    'title'      => esc_attr__( 'Social settings', 'bober' ),
    'capability' => 'edit_theme_options',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'select',
    'settings'    => 'al-social-target',
    'label'       => esc_html__( 'Target:', 'bober' ),
    'default'     => '_self',
    'section'     => 'social_settings',
    'multiple'    => 1,
    'choices'     => array(
        '_self' => esc_attr__( 'This site', 'bober' ),
        '_blank' => esc_attr__( 'New page', 'bober' )
    ),
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-facebook',
    'label'    => esc_html__( 'Facebook', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
    'default'     => '#',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-twitter',
    'label'    => esc_html__( 'Twitter', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
    'default'     => '#',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-linkedin',
    'label'    => esc_html__( 'Linkedin', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
    'default'     => '#',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-instagram',
    'label'    => esc_html__( 'Instagram', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
    'default'     => '#',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-google',
    'label'    => esc_html__( 'Google Plus', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-skype',
    'label'    => esc_html__( 'Skype', 'bober' ),
    'description'  => esc_html__( 'Insert your profile nick', 'bober' ),
    'section'  => 'social_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-dribbble',
    'label'    => esc_html__( 'Dribbble', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-pinterest',
    'label'    => esc_html__( 'Pinterest', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-rss',
    'label'    => esc_html__( 'RSS', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-youtube',
    'label'    => esc_html__( 'Youtube', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-vimeo',
    'label'    => esc_html__( 'Vimeo', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-bitbucket',
    'label'    => esc_html__( 'Bitbucket', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-github',
    'label'    => esc_html__( 'Github', 'bober' ),
    'description'  => esc_html__( 'Insert your link here', 'bober' ),
    'section'  => 'social_settings',
) );