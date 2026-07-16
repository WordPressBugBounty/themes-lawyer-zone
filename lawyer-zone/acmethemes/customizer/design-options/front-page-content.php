<?php
/*active callback function for front-page-header*/
if ( !function_exists('lawyer_zone_active_callback_front_page_header') ) :
    function lawyer_zone_active_callback_front_page_header() {
        $lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
        if( 1 != $lawyer_zone_customizer_all_values['lawyer-zone-hide-front-page-content'] ){
            return true;
        }
        return false;
    }
endif;

/*adding sections for front page content */
$wp_customize->add_section( 'lawyer-zone-front-page-content', array(
    'priority'          => 10,
    'capability'        => 'edit_theme_options',
    'title'             => esc_html__( 'Front Page Content Options', 'lawyer-zone' ),
    'panel'             => 'lawyer-zone-design-panel'

) );

/*hide front page content*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-hide-front-page-content]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-hide-front-page-content'],
    'sanitize_callback' => 'lawyer_zone_sanitize_checkbox',
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-hide-front-page-content]', array(
    'label'		        => esc_html__( 'Hide Front Page Content', 'lawyer-zone' ),
    'description'       => esc_html__( 'You may want to hide front page content and want to show only Feature section and Home Widgets. Check this to hide front page content.', 'lawyer-zone' ),
    'section'           => 'lawyer-zone-front-page-content',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-hide-front-page-content]',
    'type'	  	        => 'checkbox'
) );

/*hide front page header*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-hide-front-page-header]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-hide-front-page-header'],
    'sanitize_callback' => 'lawyer_zone_sanitize_checkbox',
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-hide-front-page-header]', array(
    'label'		        => esc_html__( 'Hide Front Page Header', 'lawyer-zone' ),
    'description'       => esc_html__( 'You may want to hide front page header and want to show only Feature section and Home Widgets. Check this to hide front page Header.', 'lawyer-zone' ),
    'section'           => 'lawyer-zone-front-page-content',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-hide-front-page-header]',
    'type'	  	        => 'checkbox',
    'active_callback'   => 'lawyer_zone_active_callback_front_page_header'
) );