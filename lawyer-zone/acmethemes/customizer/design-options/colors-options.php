<?php
/*Primary color*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-primary-color]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-primary-color'],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'lawyer_zone_theme_options[lawyer-zone-primary-color]',
        array(
            'label'		=> esc_html__( 'Primary Color', 'lawyer-zone' ),
            'section'   => 'colors',
            'settings'  => 'lawyer_zone_theme_options[lawyer-zone-primary-color]',
            'type'	  	=> 'color'
        ) )
);

/*Header TOP color*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-header-top-bg-color]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-header-top-bg-color'],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'lawyer_zone_theme_options[lawyer-zone-header-top-bg-color]',
        array(
            'label'		=> esc_html__( 'Header Top Background Color', 'lawyer-zone' ),
            'description'=> esc_html__( 'Also used as secondary color', 'lawyer-zone' ),
            'section'   => 'colors',
            'settings'  => 'lawyer_zone_theme_options[lawyer-zone-header-top-bg-color]',
            'type'	  	=> 'color'
        )
    )
);

/* Footer Background Color*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-footer-bg-color]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-footer-bg-color'],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'lawyer_zone_theme_options[lawyer-zone-footer-bg-color]',
        array(
            'label'		=> esc_html__( 'Footer Background Color', 'lawyer-zone' ),
            'section'   => 'colors',
            'settings'  => 'lawyer_zone_theme_options[lawyer-zone-footer-bg-color]',
            'type'	  	=> 'color'
        )
    )
);

/*Footer Bottom Background Color*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-footer-bottom-bg-color]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-footer-bottom-bg-color'],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'lawyer_zone_theme_options[lawyer-zone-footer-bottom-bg-color]',
        array(
            'label'		=> esc_html__( 'Footer Bottom Background Color', 'lawyer-zone' ),
            'section'   => 'colors',
            'settings'  => 'lawyer_zone_theme_options[lawyer-zone-footer-bottom-bg-color]',
            'type'	  	=> 'color'
        )
    )
);

/*Link color*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-link-color]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-link-color'],
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-link-color]', array(
	'label'		=> esc_html__( 'Link Color', 'lawyer-zone' ),
	'section'   => 'colors',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-link-color]',
	'type'	  	=> 'color'
) );

/*Link Hover color*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-link-hover-color]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-link-hover-color'],
	'sanitize_callback' => 'sanitize_hex_color'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-link-hover-color]', array(
	'label'		=> esc_html__( 'Link Hover Color', 'lawyer-zone' ),
	'section'   => 'colors',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-link-hover-color]',
	'type'	  	=> 'color'
) );