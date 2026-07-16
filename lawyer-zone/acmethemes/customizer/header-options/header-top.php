<?php
/*check if enable header top*/
if ( !function_exists('lawyer_zone_is_enable_header_top') ) :
	function lawyer_zone_is_enable_header_top() {
		$lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
		if( 1 == $lawyer_zone_customizer_all_values['lawyer-zone-enable-header-top'] ){
			return true;
		}
		return false;
	}
endif;

/*adding sections for header options*/
$wp_customize->add_section( 'lawyer-zone-header-top-option', array(
    'priority'                  => 10,
    'capability'                => 'edit_theme_options',
    'title'                     => esc_html__( 'Header Top', 'lawyer-zone' ),
    'panel'                     => 'lawyer-zone-header-panel',
) );

/*header top enable*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-enable-header-top]', array(
    'capability'		        => 'edit_theme_options',
    'default'			        => $defaults['lawyer-zone-enable-header-top'],
    'sanitize_callback'         => 'lawyer_zone_sanitize_checkbox',
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-enable-header-top]', array(
    'label'		                => esc_html__( 'Enable Header Top Options', 'lawyer-zone' ),
    'section'                   => 'lawyer-zone-header-top-option',
    'settings'                  => 'lawyer_zone_theme_options[lawyer-zone-enable-header-top]',
    'type'	  	                => 'checkbox'
) );

/*header top message*/
$wp_customize->add_setting('lawyer_zone_theme_options[lawyer-zone-header-top-message]', array(
	'capability'		        => 'edit_theme_options',
	'sanitize_callback'         => 'wp_kses_post'
));

$wp_customize->add_control(
	new Lawyer_Zone_Customize_Message_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-header-top-message]',
		array(
			'section'           => 'lawyer-zone-header-top-option',
			'description'       => "<hr /><h2>".esc_html__('Display Different Element on Top Right or Left','lawyer-zone')."</h2>",
			'settings'          => 'lawyer_zone_theme_options[lawyer-zone-header-top-message]',
			'type'	  	        => 'message',
			'active_callback'   => 'lawyer_zone_is_enable_header_top'
		)
	)
);

/*Top Menu Display*/
$choices = lawyer_zone_header_top_display_selection();
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-header-top-menu-display-selection]', array(
	'capability'		        => 'edit_theme_options',
	'default'			        => $defaults['lawyer-zone-header-top-menu-display-selection'],
	'sanitize_callback'         => 'lawyer_zone_sanitize_select'
) );
$description = sprintf( esc_html__( 'Add/Edit Menu Items from %1$s here%2$s and select Menu Location : Top Menu ( Support First Level Only ) ', 'lawyer-zone' ), '<a class="at-customizer button button-primary" data-panel="nav_menus" style="cursor: pointer">','</a>' );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-header-top-menu-display-selection]', array(
	'choices'  	                => $choices,
	'label'		                => esc_html__( 'Top Menu Display', 'lawyer-zone' ),
	'description'		        => $description,
	'section'                   => 'lawyer-zone-header-top-option',
	'settings'                  => 'lawyer_zone_theme_options[lawyer-zone-header-top-menu-display-selection]',
	'type'	  	                => 'select',
	'active_callback'           => 'lawyer_zone_is_enable_header_top'
) );

/*Top Info display*/
$description = sprintf( esc_html__( 'Add/Edit Info Items from %1$s here%2$s', 'lawyer-zone' ), '<a class="at-customizer button button-primary" data-section="lawyer-zone-feature-info" style="cursor: pointer">','</a>' );
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-header-top-info-display-selection]', array(
	'capability'		        => 'edit_theme_options',
	'default'			        => $defaults['lawyer-zone-header-top-info-display-selection'],
	'sanitize_callback'         => 'lawyer_zone_sanitize_select'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-header-top-info-display-selection]', array(
	'choices'  	                => $choices,
	'label'		                => esc_html__( 'Top Info Display', 'lawyer-zone' ),
	'description'		        => $description,
	'section'                   => 'lawyer-zone-header-top-option',
	'settings'                  => 'lawyer_zone_theme_options[lawyer-zone-header-top-info-display-selection]',
	'type'	  	                => 'select',
	'active_callback'           => 'lawyer_zone_is_enable_header_top'
) );

/*Social Display*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-header-top-social-display-selection]', array(
	'capability'		        => 'edit_theme_options',
	'default'			        => $defaults['lawyer-zone-header-top-social-display-selection'],
	'sanitize_callback'         => 'lawyer_zone_sanitize_select'
) );
$description = sprintf( esc_html__( 'Add/Edit Social Items from %1$s here%2$s ', 'lawyer-zone' ), '<a class="at-customizer button button-primary" data-section="lawyer-zone-social-options" style="cursor: pointer">','</a>' );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-header-top-social-display-selection]', array(
	'choices'  	                => $choices,
	'label'		                => esc_html__( 'Social Display', 'lawyer-zone' ),
	'description'               => $description,
	'section'                   => 'lawyer-zone-header-top-option',
	'settings'                  => 'lawyer_zone_theme_options[lawyer-zone-header-top-social-display-selection]',
	'type'	  	                => 'select',
	'active_callback'           => 'lawyer_zone_is_enable_header_top'
) );