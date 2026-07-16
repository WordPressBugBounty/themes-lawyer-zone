<?php
/*adding feature options panel*/
$wp_customize->add_panel( 'lawyer-zone-feature-panel', array(
    'priority'       => 40,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Featured Section Options', 'lawyer-zone' ),
    'description'    => esc_html__( 'Customize your awesome site feature section ', 'lawyer-zone' )
) );

/*
* file for feature section enable
*/
require lawyer_zone_file_directory('acmethemes/customizer/feature-section/feature-enable.php');

/*
* file for feature slider category
*/
require lawyer_zone_file_directory('acmethemes/customizer/feature-section/feature-slider.php');