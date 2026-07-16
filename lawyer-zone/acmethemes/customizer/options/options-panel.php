<?php
/*adding theme options panel*/
$wp_customize->add_panel( 'lawyer-zone-options', array(
    'priority'       => 90,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Theme Options', 'lawyer-zone' ),
    'description'    => esc_html__( 'Customize your awesome site with theme options ', 'lawyer-zone' )
) );

/*
* file for header breadcrumb options
*/
require lawyer_zone_file_directory('acmethemes/customizer/options/breadcrumb.php');

/*
* file for header search options
*/
require lawyer_zone_file_directory('acmethemes/customizer/options/search.php');

/*
* file for social options
*/
require lawyer_zone_file_directory('acmethemes/customizer/options/social-options.php');