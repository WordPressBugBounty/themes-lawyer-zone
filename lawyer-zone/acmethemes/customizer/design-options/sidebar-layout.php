<?php
/*adding sections for sidebar options */
$wp_customize->add_section( 'lawyer-zone-design-sidebar-layout-option', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Default Page/Post Sidebar Layout', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-design-panel'
) );

/*Sidebar Layout*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-single-sidebar-layout]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-single-sidebar-layout'],
    'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_sidebar_layout();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-single-sidebar-layout]', array(
    'choices'  	        => $choices,
    'label'		        => esc_html__( 'Default Page/Post Sidebar Layout', 'lawyer-zone' ),
    'description'       => esc_html__( 'Single Page/Post Sidebar', 'lawyer-zone' ),
    'section'           => 'lawyer-zone-design-sidebar-layout-option',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-single-sidebar-layout]',
    'type'	  	        => 'select'
) );