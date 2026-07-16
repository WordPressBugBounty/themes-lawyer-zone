<?php
/*adding sections for breadcrumb */
$wp_customize->add_section( 'lawyer-zone-breadcrumb-options', array(
    'priority'          => 20,
    'capability'        => 'edit_theme_options',
    'title'             => esc_html__( 'Breadcrumb Options', 'lawyer-zone' ),
    'panel'             => 'lawyer-zone-options'
) );

/*Show breadcrumb*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-show-breadcrumb]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-show-breadcrumb'],
    'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );

$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-show-breadcrumb]', array(
    'label'		        => esc_html__( 'Enable Breadcrumb', 'lawyer-zone' ),
    'section'           => 'lawyer-zone-breadcrumb-options',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-show-breadcrumb]',
    'type'	  	        => 'checkbox'
) );