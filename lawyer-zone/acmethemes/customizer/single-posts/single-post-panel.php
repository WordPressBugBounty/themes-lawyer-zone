<?php
/*adding theme options panel*/
$wp_customize->add_panel( 'lawyer-zone-single-post', array(
	'priority'       => 85,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Single Post Option', 'lawyer-zone' )
) );

/*
* file for entry meta
*/
require_once lawyer_zone_file_directory('acmethemes/customizer/single-posts/header-title.php');

/*
* file for feature-image
*/
require_once lawyer_zone_file_directory('acmethemes/customizer/single-posts/feature-image.php');