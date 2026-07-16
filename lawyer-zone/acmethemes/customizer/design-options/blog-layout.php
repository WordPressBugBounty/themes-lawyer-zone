<?php
/*active callback function for excerpt*/
if ( !function_exists('lawyer_zone_active_callback_content_from_excerpt') ) :
	function lawyer_zone_active_callback_content_from_excerpt() {
		$lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
		if( 'excerpt' == $lawyer_zone_customizer_all_values['lawyer-zone-blog-archive-content-from'] ){
			return true;
		}
		return false;
	}
endif;

/*adding sections for blog layout options*/
$wp_customize->add_section( 'lawyer-zone-design-blog-layout-option', array(
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
    'title'          => esc_html__( 'Default Blog/Archive Layout', 'lawyer-zone' ),
    'panel'          => 'lawyer-zone-design-panel'
) );

/*blog layout*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-blog-archive-img-size]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-blog-archive-img-size'],
    'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_get_image_sizes_options(1);
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-blog-archive-img-size]', array(
    'choices'  	    => $choices,
    'label'		    => esc_html__( 'Blog/Archive Feature Image Size', 'lawyer-zone' ),
    'section'       => 'lawyer-zone-design-blog-layout-option',
    'settings'      => 'lawyer_zone_theme_options[lawyer-zone-blog-archive-img-size]',
    'type'	  	    => 'select'
) );

/*blog content from*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-blog-archive-content-from]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-blog-archive-content-from'],
	'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_blog_archive_content_from();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-blog-archive-content-from]', array(
	'choices'  	    => $choices,
	'label'		    => esc_html__( 'Blog/Archive Content From', 'lawyer-zone' ),
	'section'       => 'lawyer-zone-design-blog-layout-option',
	'settings'      => 'lawyer_zone_theme_options[lawyer-zone-blog-archive-content-from]',
	'type'	  	    => 'select'
) );

/*Excerpt Length*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-blog-archive-excerpt-length]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-blog-archive-excerpt-length'],
	'sanitize_callback' => 'absint'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-blog-archive-excerpt-length]', array(
	'label'		        => esc_html__( 'Except Length', 'lawyer-zone' ),
	'section'           => 'lawyer-zone-design-blog-layout-option',
	'settings'          => 'lawyer_zone_theme_options[lawyer-zone-blog-archive-excerpt-length]',
	'type'	  	        => 'number',
	'active_callback'   => 'lawyer_zone_active_callback_content_from_excerpt'
) );

/*Read More Text*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-blog-archive-more-text]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['lawyer-zone-blog-archive-more-text'],
    'sanitize_callback' => 'sanitize_text_field'
) );
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-blog-archive-more-text]', array(
    'label'		=> esc_html__( 'Read More Text', 'lawyer-zone' ),
    'section'   => 'lawyer-zone-design-blog-layout-option',
    'settings'  => 'lawyer_zone_theme_options[lawyer-zone-blog-archive-more-text]',
    'type'	  	=> 'text'
) );

/*Pagination Options*/
$wp_customize->add_setting( 'lawyer_zone_theme_options[lawyer-zone-pagination-option]', array(
	'capability'		=> 'edit_theme_options',
	'default'			=> $defaults['lawyer-zone-pagination-option'],
	'sanitize_callback' => 'lawyer_zone_sanitize_select'
) );
$choices = lawyer_zone_pagination_options();
$wp_customize->add_control( 'lawyer_zone_theme_options[lawyer-zone-pagination-option]', array(
	'choices'  	    => $choices,
	'label'		    => esc_html__( 'Pagination Options', 'lawyer-zone' ),
	'description'   => esc_html__( 'Blog and Archive Pages Pagination', 'lawyer-zone' ),
	'section'       => 'lawyer-zone-design-blog-layout-option',
	'settings'      => 'lawyer_zone_theme_options[lawyer-zone-pagination-option]',
	'type'	  	    => 'select'
) );