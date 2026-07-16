<?php
/*adding sections for feature info options */
$wp_customize->add_section( 'lawyer-zone-feature-info', array(
	'priority'       => 20,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'Feature Info', 'lawyer-zone' ),
	'panel'          => 'lawyer-zone-header-panel'
) );

/* basic info number*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-feature-info-number]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-feature-info-number'],
	'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_feature_info_number();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-feature-info-number]', array(
	'choices'  	        => $choices,
	'label'		        => esc_html__( 'Basic Info Number Display', 'lawyer-zone' ),
	'section'           => 'lawyer-zone-feature-info',
	'settings'          => 'lawyer_zone_theme_options[lawyer-zone-feature-info-number]',
	'type'	  	        => 'select',
) );

/*first info*/
$wp_customize->add_setting('lawyer_zone_theme_options[lawyer-zone-first-info-message]', array(
	'capability'		=> 'edit_theme_options',
	'sanitize_callback' => 'wp_kses_post'
));

$wp_customize->add_control(
	new Lawyer_Zone_Customize_Message_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-first-info-message]',
		array(
			'section'      => 'lawyer-zone-feature-info',
			'description'  => "<hr /><h2>".esc_html__('First Info','lawyer-zone')."</h2>",
			'settings'     => 'lawyer_zone_theme_options[lawyer-zone-first-info-message]',
			'type'	  	   => 'message',
		)
	)
);
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-first-info-icon]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-first-info-icon'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );

$wp_customize->add_control(
	new Lawyer_Zone_Customize_Icons_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-first-info-icon]',
		array(
			'label'		    => esc_html__( 'Icon', 'lawyer-zone' ),
			'section'       => 'lawyer-zone-feature-info',
			'settings'      => 'lawyer_zone_theme_options[lawyer-zone-first-info-icon]',
			'type'	  	    => 'text'
		)
	)
);

$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-first-info-title]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-first-info-title'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-first-info-title]', array(
	'label'		            => esc_html__( 'Title', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-info',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-first-info-title]',
	'type'	  	            => 'text'
) );

$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-first-info-desc]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-first-info-desc'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-first-info-desc]', array(
	'label'		            => esc_html__( 'Very Short Description', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-info',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-first-info-desc]',
	'type'	  	            => 'text'
) );

/*Second Info*/
$wp_customize->add_setting('lawyer_zone_theme_options[lawyer-zone-second-info-message]', array(
	'capability'		    => 'edit_theme_options',
	'sanitize_callback'     => 'wp_kses_post'
));

$wp_customize->add_control(
	new Lawyer_Zone_Customize_Message_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-second-info-message]',
		array(
			'section'       => 'lawyer-zone-feature-info',
			'description'   => "<hr /><h2>".esc_html__('Second Info','lawyer-zone')."</h2>",
			'settings'      => 'lawyer_zone_theme_options[lawyer-zone-second-info-message]',
			'type'	  	    => 'message',
		)
	)
);
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-second-info-icon]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-second-info-icon'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control(
	new Lawyer_Zone_Customize_Icons_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-second-info-icon]',
		array(
			'label'		    => esc_html__( 'Icon', 'lawyer-zone' ),
			'section'       => 'lawyer-zone-feature-info',
			'settings'      => 'lawyer_zone_theme_options[lawyer-zone-second-info-icon]',
			'type'	  	    => 'text'
		)
	)
);

$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-second-info-title]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-second-info-title'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-second-info-title]', array(
	'label'		            => esc_html__( 'Title', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-info',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-second-info-title]',
	'type'	  	            => 'text'
) );

$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-second-info-desc]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-second-info-desc'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-second-info-desc]', array(
	'label'		            => esc_html__( 'Very Short Description', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-info',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-second-info-desc]',
	'type'	  	            => 'text'
) );

/*third info*/
$wp_customize->add_setting('lawyer_zone_theme_options[lawyer-zone-third-info-message]', array(
	'capability'		    => 'edit_theme_options',
	'sanitize_callback'     => 'wp_kses_post'
));

$wp_customize->add_control(
	new Lawyer_Zone_Customize_Message_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-third-info-message]',
		array(
			'section'       => 'lawyer-zone-feature-info',
			'description'   => "<hr /><h2>".esc_html__('Third Info','lawyer-zone')."</h2>",
			'settings'      => 'lawyer_zone_theme_options[lawyer-zone-third-info-message]',
			'type'	  	    => 'message',
		)
	)
);
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-third-info-icon]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-third-info-icon'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control(
	new Lawyer_Zone_Customize_Icons_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-third-info-icon]',
		array(
			'label'		    => esc_html__( 'Icon', 'lawyer-zone' ),
			'section'       => 'lawyer-zone-feature-info',
			'settings'      => 'lawyer_zone_theme_options[lawyer-zone-third-info-icon]',
			'type'	  	    => 'text'
		)
	)
);

$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-third-info-title]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-third-info-title'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-third-info-title]', array(
	'label'		            => esc_html__( 'Title', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-info',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-third-info-title]',
	'type'	  	            => 'text'
) );

$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-third-info-desc]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-third-info-desc'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-third-info-desc]', array(
	'label'		            => esc_html__( 'Very Short Description', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-info',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-third-info-desc]',
	'type'	  	            => 'text'
) );

/*forth info*/
$wp_customize->add_setting('lawyer_zone_theme_options[lawyer-zone-forth-info-message]', array(
	'capability'		    => 'edit_theme_options',
	'sanitize_callback'     => 'wp_kses_post'
));

$wp_customize->add_control(
	new Lawyer_Zone_Customize_Message_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-forth-info-message]',
		array(
			'section'       => 'lawyer-zone-feature-info',
			'description'   => "<hr /><h2>".esc_html__('Forth Info','lawyer-zone')."</h2>",
			'settings'      => 'lawyer_zone_theme_options[lawyer-zone-forth-info-message]',
			'type'	  	    => 'message',
		)
	)
);
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-forth-info-icon]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-forth-info-icon'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control(
	new Lawyer_Zone_Customize_Icons_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-forth-info-icon]',
		array(
			'label'		    => esc_html__( 'Icon', 'lawyer-zone' ),
			'section'       => 'lawyer-zone-feature-info',
			'settings'      => 'lawyer_zone_theme_options[lawyer-zone-forth-info-icon]',
			'type'	  	    => 'text'
		)
	)
);

$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-forth-info-title]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-forth-info-title'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-forth-info-title]', array(
	'label'		            => esc_html__( 'Title', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-info',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-forth-info-title]',
	'type'	  	            => 'text'
) );

$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-forth-info-desc]', array(
	'capability'		    => 'edit_theme_options',
	'default'			    => $defaults['lawyer-zone-forth-info-desc'],
	'sanitize_callback'     => 'lawyer_zone_sanitize_allowed_html'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-forth-info-desc]', array(
	'label'		            => esc_html__( 'Very Short Description', 'lawyer-zone' ),
	'section'               => 'lawyer-zone-feature-info',
	'settings'              => 'lawyer_zone_theme_options[lawyer-zone-forth-info-desc]',
	'type'	  	            => 'text'
) );