<?php
/*adding sections for category section in front page*/
$wp_customize->add_section( 'lawyer-zone-feature-page', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Feature Slider Selection', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-feature-panel'
) );

/* feature parent all-slides selection */
$slider_pages = array();
$slider_pages_obj = get_pages();
$slider_pages[''] = esc_html__('Select Slider Page','lawyer-zone');
foreach ($slider_pages_obj as $page) {
	$slider_pages[$page->ID] = $page->post_title;
}
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-slides-data]', array(
	'sanitize_callback' => 'lawyer_zone_sanitize_slider_data',
	'default'           => $defaults['lawyer-zone-slides-data']
) );
$wp_customize->add_control(
	new Lawyer_Zone_Repeater_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-slides-data]',
		array(
			'label'                         => esc_html__('Slider Selection','lawyer-zone'),
			'description'                   => esc_html__('Select Page For Slider','lawyer-zone'),
			'section'                       => 'lawyer-zone-feature-page',
			'settings'                      => 'lawyer_zone_theme_options[lawyer-zone-slides-data]',
			'repeater_main_label'           => esc_html__('Select Slide of Slider','lawyer-zone'),
			'repeater_add_control_field'    => esc_html__('Add New Slide','lawyer-zone'),
		),
		array(
			'selectpage' => array(
				'type'        => 'select',
				'label'       => esc_html__( 'Select Page For Slide', 'lawyer-zone' ),
				'options'     => $slider_pages
			),
			'button_1_text' => array(
				'type'        => 'text',
				'label'       => esc_html__( 'Button One Text', 'lawyer-zone' ),
			),
			'button_1_link' => array(
				'type'        => 'url',
				'label'       => esc_html__( 'Button One Link', 'lawyer-zone' ),
			),
			'button_2_text' => array(
				'type'        => 'text',
				'label'       => esc_html__( 'Button Two Text', 'lawyer-zone' ),
			),
			'button_2_link' => array(
				'type'        => 'url',
				'label'       => esc_html__( 'Button Two Link', 'lawyer-zone' ),
			)
		)
	)
);

/*enable animation*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-feature-slider-enable-animation]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-feature-slider-enable-animation'],
    'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-feature-slider-enable-animation]', array(
    'label'		        => esc_html__( 'Enable Animation', 'lawyer-zone' ),
    'section'           => 'lawyer-zone-feature-page',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-feature-slider-enable-animation]',
    'type'	  	        => 'checkbox',

) );

/*display-title*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-feature-slider-display-title]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-feature-slider-display-title'],
    'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-feature-slider-display-title]', array(
    'label'		            => esc_html__( 'Display Title', 'lawyer-zone' ),
    'section'               => 'lawyer-zone-feature-page',
    'settings'              => 'lawyer_zone_theme_options[lawyer-zone-feature-slider-display-title]',
    'type'	  	            => 'checkbox',
) );

/*display-excerpt*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-feature-slider-display-excerpt]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-feature-slider-display-excerpt'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_checkbox'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-feature-slider-display-excerpt]', array(
	'label'		            => esc_html__( 'Display Excerpt', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-page',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-feature-slider-display-excerpt]',
	'type'	  	            => 'checkbox',
) );

/*Image Display Behavior*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-fs-image-display-options]', array(
    'capability'		    => 'edit_theme_options',
    'default'			    => $defaults['lawyer-zone-fs-image-display-options'],
    'sanitize_callback'     => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_fs_image_display_options();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-fs-image-display-options]', array(
    'choices'  	            => $choices,
    'label'		            => esc_html__( 'Feature Slider Image Display Options', 'lawyer-zone' ),
    'section'               => 'lawyer-zone-feature-page',
    'settings'              => 'lawyer_zone_theme_options[lawyer-zone-fs-image-display-options]',
    'type'	  	            => 'radio',
) );

/*Slider Selection Text Align*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-feature-slider-text-align]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-feature-slider-text-align'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_select',
) );
$choices = lawyer_zone_slider_text_align();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-feature-slider-text-align]', array(
	'choices'  	            => $choices,
	'label'		            => esc_html__( 'Slider Text Align', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-page',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-feature-slider-text-align]',
	'type'	  	            => 'select',
) );