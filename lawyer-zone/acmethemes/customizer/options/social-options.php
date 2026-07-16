<?php
/*adding sections for header social options */
$wp_customize->add_section( 'lawyer-zone-social-options', array(
    'priority'              => 20,
    'capability'            => 'edit_theme_options',
    'title'                 => esc_html__( 'Social Options', 'lawyer-zone' ),
    'panel'                 => 'lawyer-zone-options'
) );

/*repeater social data*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-social-data]', array(
	'sanitize_callback'     => 'lawyer_zone_sanitize_social_data',
	'default'               => $defaults['lawyer-zone-social-data']
) );
$wp_customize->add_control(
	new Lawyer_Zone_Repeater_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-social-data]',
		array(
			'label'                         => esc_html__('Social Options Selection','lawyer-zone'),
			'description'                   => esc_html__('Select Social Icons and enter link','lawyer-zone'),
			'section'                       => 'lawyer-zone-social-options',
			'settings'                      => 'lawyer_zone_theme_options[lawyer-zone-social-data]',
			'repeater_main_label'           => esc_html__('Social Icon','lawyer-zone'),
			'repeater_add_control_field'    => esc_html__('Add New Icon','lawyer-zone')
		),
		array(
			'icon' => array(
				'type'        => 'icons',
				'label'       => esc_html__( 'Select Icon', 'lawyer-zone' ),
			),
			'link' => array(
				'type'        => 'url',
				'label'       => esc_html__( 'Enter Link', 'lawyer-zone' ),
			),
			'checkbox' => array(
				'type'        => 'checkbox',
				'label'       => esc_html__( 'Open in New Window', 'lawyer-zone' ),
			)
		)
	)
);