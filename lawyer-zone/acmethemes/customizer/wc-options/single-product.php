<?php
/*adding sections for sidebar options */
$wp_customize->add_section( 'lawyer-zone-wc-single-product-options', array(
	'priority'       => 20,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Single Product', 'lawyer-zone' ),
	'panel'          => 'lawyer-zone-wc-panel'
) );

/*Sidebar Layout*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-wc-single-product-sidebar-layout]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-wc-single-product-sidebar-layout'],
	'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_sidebar_layout();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-wc-single-product-sidebar-layout]', array(
	'choices'  	=> $choices,
	'label'		=> esc_html__( 'Single Product Sidebar Layout', 'lawyer-zone' ),
	'section'   => 'lawyer-zone-wc-single-product-options',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-wc-single-product-sidebar-layout]',
	'type'	  	=> 'select'
) );