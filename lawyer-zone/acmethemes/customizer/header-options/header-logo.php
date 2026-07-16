<?php
/*Site Logo*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-display-site-logo]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-display-site-logo'],
	'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-display-site-logo]', array(
	'label'		=> esc_html__( 'Display Logo', 'lawyer-zone' ),
	'section'   => 'title_tagline',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-display-site-logo]',
	'type'	  	=> 'checkbox'
) );

/*Site Title*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-display-site-title]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-display-site-title'],
	'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-display-site-title]', array(
	'label'		=> esc_html__( 'Display Site Title', 'lawyer-zone' ),
	'section'   => 'title_tagline',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-display-site-title]',
	'type'	  	=> 'checkbox'
) );

/*Site Tagline*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-display-site-tagline]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-display-site-tagline'],
	'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-display-site-tagline]', array(
	'label'		=> esc_html__( 'Display Site Tagline', 'lawyer-zone' ),
	'section'   => 'title_tagline',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-display-site-tagline]',
	'type'	  	=> 'checkbox'
) );