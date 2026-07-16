<?php
/*adding sections for enabling feature section in front page*/
$wp_customize->add_section( 'lawyer-zone-enable-feature', array(
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Enable Feature Section', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-feature-panel'
) );

/*enable feature section*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-enable-feature]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-enable-feature'],
    'sanitize_callback' => 'lawyer_zone_sanitize_checkbox'
) );

$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-enable-feature]', array(
    'label'		        => esc_html__( 'Enable Feature Section', 'lawyer-zone' ),
    'description'	    => sprintf( esc_html__( 'Feature section will display on front/home page. Feature Section includes Feature Slider and Feature Column.%1$s Note : Please go to %2$s "Static Front Page"%3$s setting, Select "A static page" then "Front page" and "Posts page" to enable it', 'lawyer-zone' ), '<br />','<b><a class="at-customizer" data-section="static_front_page"> ','</a></b>' ),
    'section'           => 'lawyer-zone-enable-feature',
    'settings'          => 'lawyer_zone_theme_options[lawyer-zone-enable-feature]',
    'type'	  	        => 'checkbox'
) );