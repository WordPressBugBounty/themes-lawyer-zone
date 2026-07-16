<?php
/*adding sections for footer options*/
$wp_customize->add_section( 'lawyer-zone-footer-copyright-option', array(
    'priority'              => 20,
    'capability'            => 'edit_theme_options',
    'title'                 => esc_html__( 'Bottom Copyright Section', 'lawyer-zone' ),
    'panel'                 => 'lawyer-zone-footer-panel',
) );

/*copyright*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-footer-copyright]', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => $defaults['lawyer-zone-footer-copyright'],
    'sanitize_callback'     => 'wp_kses_post'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-footer-copyright]', array(
    'label'		            => esc_html__( 'Copyright Text', 'lawyer-zone' ),
    'section'               => 'lawyer-zone-footer-copyright-option',
    'settings'              => 'lawyer_zone_theme_options[lawyer-zone-footer-copyright]',
    'type'	  	            => 'text'
) );

/*footer copyright beside*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-footer-copyright-beside-option]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-footer-copyright-beside-option'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_footer_copyright_beside_option();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-footer-copyright-beside-option]', array(
	'choices'  	            => $choices,
	'label'		            => esc_html__( 'Footer Copyright Beside Option', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-footer-copyright-option',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-footer-copyright-beside-option]',
	'type'	  	            => 'select'
) );