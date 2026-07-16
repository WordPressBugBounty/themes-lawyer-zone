<?php
/*adding sections for design options panel*/
$wp_customize->add_section( 'lawyer-zone-animation', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Animation', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-design-panel'
) );

/*enable disable animation*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-enable-animation]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-enable-animation'],
    'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-enable-animation]', array(
    'label'		        => esc_html__( 'Disable animation', 'lawyer-zone' ),
    'description'       => esc_html__( 'Check this to disable overall site animation effect provided by theme', 'lawyer-zone' ),
    'section'           => 'lawyer-zone-animation',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-enable-animation]',
    'type'	  	        => 'checkbox'
) );