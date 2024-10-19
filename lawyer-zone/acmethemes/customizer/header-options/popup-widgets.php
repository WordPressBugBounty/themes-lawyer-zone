<?php
/*Title*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-popup-widget-title]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-popup-widget-title'],
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-popup-widget-title]', array(
	'label'		        => esc_html__( 'Popup Main Title', 'lawyer-zone' ),
	'section'           => 'lawyer-zone-menu-options',
	'settings'          => 'lawyer_zone_theme_options[lawyer-zone-popup-widget-title]',
	'type'	  	        => 'text',
    'active_callback'   => 'lawyer_zone_menu_right_button_if_booking',
) );