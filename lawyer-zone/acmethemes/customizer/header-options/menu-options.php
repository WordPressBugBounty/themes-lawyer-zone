<?php
/*check for lawyer-zone-menu-right-button-options*/
if ( !function_exists('lawyer_zone_menu_right_button_if_not_disable') ) :
	function lawyer_zone_menu_right_button_if_not_disable() {
		$lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
		if( 'disable' != $lawyer_zone_customizer_all_values['lawyer-zone-menu-right-button-options'] ){
			return true;
		}
		return false;
	}
endif;

if ( !function_exists('lawyer_zone_menu_right_button_if_booking') ) :
	function lawyer_zone_menu_right_button_if_booking() {
		$lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
		if( 'booking' == $lawyer_zone_customizer_all_values['lawyer-zone-menu-right-button-options'] ){
			return true;
		}
		return false;
	}
endif;

if ( !function_exists('lawyer_zone_menu_right_button_if_link') ) :
	function lawyer_zone_menu_right_button_if_link() {
		$lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
		if( 'link' == $lawyer_zone_customizer_all_values['lawyer-zone-menu-right-button-options'] ){
			return true;
		}
		return false;
	}
endif;

/*Menu Section*/
$wp_customize->add_section( 'lawyer-zone-menu-options', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Menu Options', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-header-panel'
) );

/*enable transparent*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-enable-transparent]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-enable-transparent'],
	'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );

$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-enable-transparent]', array(
	'label'		=> esc_html__( 'Enable Transparent Menu', 'lawyer-zone' ),
	'description'   => esc_html__( 'Enabling Transparent Menu automatically enable Sticky Menu', 'lawyer-zone' ),
	'section'   => 'lawyer-zone-menu-options',
	'settings'  => 'lawyer_zone_theme_options[lawyer-zone-enable-transparent]',
	'type'	  	=> 'checkbox'
) );

/*enable sticky*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-enable-sticky]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-enable-sticky'],
    'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );

$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-enable-sticky]', array(
    'label'		=> esc_html__( 'Enable Sticky Menu', 'lawyer-zone' ),
    'section'   => 'lawyer-zone-menu-options',
    'settings'  => 'lawyer_zone_theme_options[lawyer-zone-enable-sticky]',
    'type'	  	=> 'checkbox'
) );

if( lawyer_zone_is_woocommerce_active() ){
	/*enable cart*/
	$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-enable-cart-icon]', array(
		'capability'		=> 'edit_theme_options',
		'default'			=> $defaults['lawyer-zone-enable-cart-icon'],
		'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
	) );

	$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-enable-cart-icon]', array(
		'label'		=> esc_html__( 'Enable Cart', 'lawyer-zone' ),
		'section'   => 'lawyer-zone-menu-options',
		'settings'  => 'lawyer_zone_theme_options[lawyer-zone-enable-cart-icon]',
		'type'	  	=> 'checkbox'
	) );
}

/*Button Right Message*/
$wp_customize->add_setting('lawyer_zone_theme_options[lawyer-zone-menu-right-button-message]', array(
	'capability'		=> 'edit_theme_options',
	'sanitize_callback' => 'wp_kses_post'
));

$wp_customize->add_control(
	new Lawyer_Zone_Customize_Message_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-menu-right-button-message]',
		array(
			'section'       => 'lawyer-zone-menu-options',
			'description'   => "<hr /><h2>".esc_html__('Special Button On Menu Right','lawyer-zone')."</h2>",
			'settings'      => 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-message]',
			'type'	  	    => 'message'
		)
	)
);

/*Button Link Options*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-options]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-menu-right-button-options'],
	'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_menu_right_button_link_options();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-options]', array(
	'choices'  	    => $choices,
	'label'		    => esc_html__( 'Button Options', 'lawyer-zone' ),
	'section'       => 'lawyer-zone-menu-options',
	'settings'      => 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-options]',
	'type'	  	    => 'select'
) );

/*Button title*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-title]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-menu-right-button-title'],
	'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-title]', array(
	'label'		        => esc_html__( 'Button Title', 'lawyer-zone' ),
	'section'           => 'lawyer-zone-menu-options',
	'settings'          => 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-title]',
	'type'	  	        => 'text',
	'active_callback'   => 'lawyer_zone_menu_right_button_if_not_disable'
) );

/*Button Right booking Message*/
$wp_customize->add_setting('lawyer_zone_theme_options[lawyer-zone-menu-right-button-booking-message]', array(
	'capability'		=> 'edit_theme_options',
	'sanitize_callback' => 'wp_kses_post'
));
$description = sprintf( esc_html__( '%1$s Add Popup Widget from here%2$s ', 'lawyer-zone' ), '<a class="at-customizer" data-section="sidebar-widgets-popup-widget-area" style="cursor: pointer">','</a>' );
$wp_customize->add_control(
	new Lawyer_Zone_Customize_Message_Control(
		$wp_customize,
		'lawyer_zone_theme_options[lawyer-zone-menu-right-button-booking-message]',
		array(
			'section'           => 'lawyer-zone-menu-options',
			'description'       => $description,
			'settings'          => 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-booking-message]',
			'type'	  	        => 'message',
			'active_callback'   => 'lawyer_zone_menu_right_button_if_booking',
            'priority'	  	    => 100
        )
	)
);

/*Button link*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-link]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-menu-right-button-link'],
	'sanitize_callback' => 'esc_url_raw'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-link]', array(
	'label'		        => esc_html__( 'Button Link', 'lawyer-zone' ),
	'section'           => 'lawyer-zone-menu-options',
	'settings'          => 'lawyer_zone_theme_options[lawyer-zone-menu-right-button-link]',
	'type'	  	        => 'url',
	'active_callback'   => 'lawyer_zone_menu_right_button_if_link'
) );