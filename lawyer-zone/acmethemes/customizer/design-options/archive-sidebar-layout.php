<?php
/*adding sections for default layout options panel*/
$wp_customize->add_section( 'lawyer-zone-archive-sidebar-layout', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Category/Archive Sidebar Layout', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-design-panel'
) );

/*Sidebar Layout*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-archive-sidebar-layout]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-archive-sidebar-layout'],
    'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_sidebar_layout();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-archive-sidebar-layout]', array(
    'choices'  	        => $choices,
    'label'		        => esc_html__( 'Category/Archive Sidebar Layout', 'lawyer-zone' ),
    'description'       => esc_html__( 'Sidebar Layout for listing pages like category, author etc', 'lawyer-zone' ),
    'section'           => 'lawyer-zone-archive-sidebar-layout',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-archive-sidebar-layout]',
    'type'	  	        => 'select'
) );