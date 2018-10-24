<?php

/**
 *
 *
 * General settings
 *
 *
 */

Kirki::add_section( 'general_settings', array(
    'title'      => esc_attr__( 'General settings', 'bober' ),
    'priority'   => 1,
    'capability' => 'edit_theme_options',
) );

Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-fullscreen-nav-show',
    'label'       => esc_html__( 'Full screen top menu', 'bober' ),
    'description'  => esc_html__( 'Turn On if you want display it', 'bober' ),
    'section'     => 'general_settings',
    'default'     => 'off',
    'choices'     => array(
        'off' => esc_html__( 'Off', 'bober' ),
        'on'   => esc_html__( 'On', 'bober' )

    ),
) );



Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-menu-position',
    'label'       => esc_html__( 'Menu position', 'bober' ),
    'section'     => 'general_settings',
    'default'     => 'top',
    'choices'     => array(
        'top'   => esc_html__( 'Top', 'bober' ),
        'left' => esc_html__( 'Left', 'bober' ),
    ),
) );
Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-left-menu-social',
    'label'       => esc_html__( 'Show social networks ?', 'bober' ),
    'description'  => esc_html__( 'Showing social networks at the bottom menu', 'bober' ),
    'section'     => 'general_settings',
    'default'     => 'true',
    'choices'     => array(
        'true'   => esc_html__( 'Yes', 'bober' ),
        'false' => esc_html__( 'No', 'bober' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'al-menu-position',
            'operator' => '==',
            'value'    => 'left',
        ),
    )
) );
Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-relative-header',
    'label'       => esc_html__( 'Menu style', 'bober' ),
    'section'     => 'general_settings',
    'default'     => 'true',
    'choices'     => array(
        'true'   => esc_html__( 'Absolute', 'bober' ),
        'false' => esc_html__( 'Relative', 'bober' ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'al-menu-position',
            'operator' => '==',
            'value'    => 'top',
        ),
    )
) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-nav-background',
    'label'       => esc_html__( 'Menu background', 'bober' ),
    'section'     => 'general_settings',
    'active_callback'  => array(
        array(
            'setting'  => 'al-menu-position',
            'operator' => '==',
            'value'    => 'left',
        ),
    )
) );

Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-hide-scroll-menu',
    'label'       => esc_html__( 'Hide menu on scroll ?', 'bober' ),
    'section'     => 'general_settings',
    'default'     => 'on',
    'choices'     => array(
        'on'   => esc_html__( 'On', 'bober' ),
        'off' => esc_html__( 'Off', 'bober' ),
    ),
) );

Kirki::add_field( 'bober', array(
    'type'        => 'radio-image',
    'settings'    => 'al-accent-color',
    'label'       => esc_html__( 'Main color', 'bober' ),
    'description' => esc_attr__( 'Select the main color four your site..', 'bober' ),
    'help'        => esc_attr__( 'The color options you set here apply to all your site.', 'bober' ),
    'section'     => 'general_settings',
    'default'     => '1',
    'choices'     => array(
        '1'   => get_template_directory_uri() . '/assets/img/customizer/1.png',
        '2'   => get_template_directory_uri() . '/assets/img/customizer/2.png',
        '3'   => get_template_directory_uri() . '/assets/img/customizer/3.png',
        '4'   => get_template_directory_uri() . '/assets/img/customizer/4.png',
        '5'   => get_template_directory_uri() . '/assets/img/customizer/5.png',
        '6'   => get_template_directory_uri() . '/assets/img/customizer/6.png',
        '7'   => get_template_directory_uri() . '/assets/img/customizer/7.png',
        '8'   => get_template_directory_uri() . '/assets/img/customizer/8.png',
        '9'   => get_template_directory_uri() . '/assets/img/customizer/9.png',
        '10'   => get_template_directory_uri() . '/assets/img/customizer/10.png',
        '11'   => get_template_directory_uri() . '/assets/img/customizer/11.png',
        '12'   => get_template_directory_uri() . '/assets/img/customizer/12.png',

    ),
) );

//Kirki::add_field( 'bober', array(
//    'type'        => 'typography',
//    'settings'    => 'al-nav-typography',
//    'label'       => esc_attr__( 'Typography for navigation', 'bober' ),
//    'description' => esc_attr__( 'Select the main typography options for main menu.', 'bober' ),
//    'help'        => esc_attr__( 'The typography options you set here apply to your menu.', 'bober' ),
//    'section'     => 'general_settings',
//    'default'     => array(
//        'font-family'    => 'Roboto Slab',
//        'variant'        => '700',
//        'font-size'      => '16px',
//        'letter-spacing' => '0.3px',
//        'line-height'    => '24px',
//    ),
//    'output' => array(
//        array(
//            'element' => '.sf-menu > li',
//        ),
//    ),
//) );

Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-type-logo',
    'label'       => esc_html__( 'Select type of logo', 'bober' ),
    'section'     => 'general_settings',
    'default'     => 'text',
    'choices'     => array(
        'text'   => esc_html__( 'Text', 'bober' ),
        'image' => esc_html__( 'Image', 'bober' ),
    ),
) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-logo-white',
    'label'       => esc_html__( 'White logo', 'bober' ),
    'section'     => 'general_settings',
    'active_callback'  => array(
        array(
            'setting'  => 'al-type-logo',
            'operator' => '==',
            'value'    => 'image',
        ),
    )
) );

Kirki::add_field( 'bober', array(
    'type'        => 'image',
    'settings'    => 'al-logo-dark',
    'label'       => esc_html__( 'Dark logo', 'bober' ),
    'section'     => 'general_settings',
    'active_callback'  => array(
        array(
            'setting'  => 'al-type-logo',
            'operator' => '==',
            'value'    => 'image',
        ),
    )
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-text-logo',
    'label'    => esc_html__( 'Insert your logo', 'bober' ),
    'section'  => 'general_settings',
    'default'     => '',
    'sanitize_callback' => 'wp_kses_post',
    'active_callback'  => array(
        array(
            'setting'  => 'al-type-logo',
            'operator' => '==',
            'value'    => 'text',
        ),
    )
) );

Kirki::add_field( 'bober', array(
    'type'     => 'text',
    'settings' => 'al-height-logo',
    'label'    => esc_html__( 'Logo Height', 'bober' ),
    'section'  => 'general_settings',
    'default'     => '',
    'active_callback'  => array(
        array(
            'setting'  => 'al-type-logo',
            'operator' => '==',
            'value'    => 'image',
        ),
    )
) );

Kirki::add_field( 'bober', array(
    'type'        => 'typography',
    'settings'    => 'al-typography-logo',
    'label'       => esc_attr__( 'Typography for logo', 'bober' ),
    'description' => esc_attr__( 'Select the main typography options for your logo.', 'bober' ),
    'help'        => esc_attr__( 'The typography options you set here apply to your logo.', 'bober' ),
    'section'     => 'general_settings',
    'default'     => array(
        'font-family'    => 'Poppins',
        'variant'        => '600',
        'font-size'      => '29px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'color'          => '',
        'text-transform' => 'none',
        'text-align'     => 'left',
    ),
    'transport' => 'auto',
    'output' => array(
        array(
            'element' => '.al-logo-site'
        ),
    ),
    'active_callback'  => array(
        array(
            'setting'  => 'al-type-logo',
            'operator' => '==',
            'value'    => 'text',
        ),
    )
) );

Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-preloader',
    'label'       => esc_html__( 'Preloader', 'bober' ),
    'description'  => esc_html__( 'Turn On if you want display it', 'bober' ),
    'section'     => 'general_settings',
    'default'     => 'on',
    'choices'     => array(
        'on'   => esc_html__( 'On', 'bober' ),
        'off' => esc_html__( 'Off', 'bober' ),
    ),
) );

Kirki::add_field( 'bober', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'al-back-to-top',
    'label'       => esc_html__( 'Back to top', 'bober' ),
    'description'  => esc_html__( 'Turn On if you want display it', 'bober' ),
    'section'     => 'general_settings',
    'default'     => 'on',
    'choices'     => array(
        'on'   => esc_html__( 'On', 'bober' ),
        'off' => esc_html__( 'Off', 'bober' ),
    ),
) );

