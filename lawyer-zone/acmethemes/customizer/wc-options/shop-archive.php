<?php
/*adding sections for sidebar options */
$wp_customize->add_section( 'lawyer-zone-wc-shop-archive-option', array(
	'priority'       => 20,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Shop Archive Sidebar Layout', 'lawyer-zone' ),
	'panel'          => 'lawyer-zone-wc-panel'
) );

/*Sidebar Layout*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-wc-shop-archive-sidebar-layout]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-wc-shop-archive-sidebar-layout'],
	'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_sidebar_layout();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-wc-shop-archive-sidebar-layout]', array(
	'choices'  	=> $choices,
	'label'		=> esc_html__( 'Shop Archive Sidebar Layout', 'lawyer-zone' ),
	'section'   => 'lawyer-zone-wc-shop-archive-option',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-wc-shop-archive-sidebar-layout]',
	'type'	  	=> 'select'
) );

/*wc-product-column-number*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-wc-product-column-number]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-wc-product-column-number'],
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-wc-product-column-number]', array(
	'label'		=> esc_html__( 'Products Per Row', 'lawyer-zone' ),
	'section'   => 'lawyer-zone-wc-shop-archive-option',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-wc-product-column-number]',
	'type'	  	=> 'number'
) );

/*wc-shop-archive-total-product*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-wc-shop-archive-total-product]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-wc-shop-archive-total-product'],
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-wc-shop-archive-total-product]', array(
	'label'		=> esc_html__( 'Total Products Per Page', 'lawyer-zone' ),
	'section'   => 'lawyer-zone-wc-shop-archive-option',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-wc-shop-archive-total-product]',
	'type'	  	=> 'number'
) );