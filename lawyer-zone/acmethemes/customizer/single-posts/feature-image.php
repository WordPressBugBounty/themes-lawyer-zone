<?php
/*adding sections for feature image selection*/
$wp_customize->add_section( 'lawyer-zone-single-feature-image', array(
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Feature Image Option', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-single-post'
) );

/*single image size*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-single-img-size]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-single-img-size'],
	'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_get_image_sizes_options(1);
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-single-img-size]', array(
	'choices'  	=> $choices,
	'label'		=> esc_html__( 'Image Size', 'lawyer-zone' ),
	'section'   => 'lawyer-zone-single-feature-image',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-single-img-size]',
	'type'	  	=> 'select'
) );