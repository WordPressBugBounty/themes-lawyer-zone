<?php
/*adding header options panel*/
$wp_customize->add_panel( 'lawyer-zone-header-panel', array(
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Header Options', 'lawyer-zone' ),
    'description'    => esc_html__( 'Customize your awesome site header ', 'lawyer-zone' )
) );

/*
* file for header top options
*/
require lawyer_zone_file_directory('acmethemes/customizer/header-options/header-top.php');

/*
* file for feature info
*/
require lawyer_zone_file_directory('acmethemes/customizer/header-options/feature-info.php');

/*
* file for header logo options
*/
require lawyer_zone_file_directory('acmethemes/customizer/header-options/header-logo.php');

/*
 * file for menu options
*/
require lawyer_zone_file_directory('acmethemes/customizer/header-options/menu-options.php');
/*
* file for booking form
*/
require lawyer_zone_file_directory('acmethemes/customizer/header-options/popup-widgets.php');

/* feature section height*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-header-height]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-header-height'],
    'sanitize_callback' => 'lawyer_zone_sanitize_number'
) );

$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-header-height]', array(
    'type'              => 'range',
    'priority'          => 100,
    'section'           => 'header_image',
    'label'		        => esc_html__( 'Inner Page Header Section Height', 'lawyer-zone' ),
    'description'       => esc_html__( 'Control the height of Header section. The minimum height is 100px and maximium height is 500px', 'lawyer-zone' ),
    'input_attrs'       => array(
        'min'           => 100,
        'max'           => 500,
        'step'          => 1,
        'class'         => 'lawyer-zone-header-height',
        'style'         => 'color: #0a0',
    ),
    'active_callback'   => 'lawyer_zone_if_header_bg_image'
) );

/*Header Image Display*/
$choices = lawyer_zone_header_image_display();
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-header-image-display]', array(
	'capability'		        => 'edit_theme_options',
	'default'			        => $defaults['lawyer-zone-header-image-display'],
	'sanitize_callback'         => 'lawyer_zone_sanitize_select'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-header-image-display]', array(
	'choices'  	                => $choices,
	'priority'                  => 1,
	'label'		                => esc_html__( 'Header Image Display', 'lawyer-zone' ),
	'section'                   => 'header_image',
	'settings'                  => 'lawyer_zone_theme_options[lawyer-zone-header-image-display]',
	'type'	  	                => 'select'
) );

/*check if header bg*/
if ( !function_exists('lawyer_zone_if_header_bg_image') ) :
	function lawyer_zone_if_header_bg_image() {
		$lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
		if( 'bg-image' == $lawyer_zone_customizer_all_values['lawyer-zone-header-image-display'] ){
			return true;
		}
		return false;
	}
endif;