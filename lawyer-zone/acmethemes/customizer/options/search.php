<?php
/*adding sections for Search Placeholder*/
$wp_customize->add_section( 'lawyer-zone-search', array(
    'priority'          => 20,
    'capability'        => 'edit_theme_options',
    'title'             => esc_html__( 'Search', 'lawyer-zone' ),
    'panel'             => 'lawyer-zone-options'
) );

/*Search Placeholder*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-search-placeholder]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-search-placeholder'],
    'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-search-placeholder]', array(
    'label'		        => esc_html__( 'Search Placeholder', 'lawyer-zone' ),
    'section'           => 'lawyer-zone-search',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-search-placeholder]',
    'type'	  	        => 'text'
) );