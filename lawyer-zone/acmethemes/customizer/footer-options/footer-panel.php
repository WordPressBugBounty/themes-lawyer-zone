<?php
/*adding footer options panel*/
$wp_customize->add_panel( 'lawyer-zone-footer-panel', array(
    'priority'       => 80,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Footer Options', 'lawyer-zone' ),
    'description'    => esc_html__( 'Customize your awesome site footer ', 'lawyer-zone' )
) );

/*
* file for background image
*/
require lawyer_zone_file_directory('acmethemes/customizer/footer-options/footer-bg-img.php');

/*
* file for footer logo options
*/
require lawyer_zone_file_directory('acmethemes/customizer/footer-options/footer-copyright.php');