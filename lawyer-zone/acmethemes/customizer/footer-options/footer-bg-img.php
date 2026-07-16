<?php
/*adding sections for footer background image*/
$wp_customize->add_section( 'lawyer-zone-footer-bg-img', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Footer Background Image', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-footer-panel',
) );

/*footer background image*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-footer-bg-img]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-footer-bg-img'],
    'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'lawyer_zone_theme_options[lawyer-zone-footer-bg-img]',
        array(
            'label'		=> esc_html__( 'Footer Background Image', 'lawyer-zone' ),
            'section'   => 'lawyer-zone-footer-bg-img',
            'settings'  => 'lawyer_zone_theme_options[lawyer-zone-footer-bg-img]',
            'type'	  	=> 'image'
        )
    )
);