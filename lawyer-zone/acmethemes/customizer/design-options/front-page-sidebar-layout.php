<?php
/*adding sections for default layout options panel*/
$wp_customize->add_section( 'lawyer-zone-front-page-sidebar-layout', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Front/Home Sidebar Layout', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-design-panel'
) );

/*Sidebar Layout*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-front-page-sidebar-layout]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-front-page-sidebar-layout'],
    'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_sidebar_layout();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-front-page-sidebar-layout]', array(
    'choices'  	        => $choices,
    'label'		        => esc_html__( 'Front/Home Sidebar Layout', 'lawyer-zone' ),
    'section'           => 'lawyer-zone-front-page-sidebar-layout',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-front-page-sidebar-layout]',
    'type'	  	        => 'select'
) );