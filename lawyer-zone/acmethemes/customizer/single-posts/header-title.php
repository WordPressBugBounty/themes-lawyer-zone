<?php
/*adding sections for header title*/
$wp_customize->add_section( 'lawyer-zone-single-header-title', array(
	'priority'              => 20,
	'capability'            => 'edit_theme_options',
	'title'                 => esc_html__( 'Single Header Title', 'lawyer-zone' ),
	'panel'                 => 'lawyer-zone-single-post',
) );

/*header title*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-single-header-title]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-single-header-title'],
	'sanitize_callback'     => 'sanitize_text_field'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-single-header-title]', array(
	'label'		            => esc_html__( 'Header Title', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-single-header-title',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-single-header-title]',
	'type'	  	            => 'text'
) );