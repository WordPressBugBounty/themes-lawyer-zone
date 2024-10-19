<?php
/**
 * Lawyer Zone Theme Customizer.
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */

/*
* file for upgrade to pro
*/
require lawyer_zone_file_directory('acmethemes/customizer/customizer-pro/class-customize.php');

/*
* file for customizer core functions
*/
require lawyer_zone_file_directory('acmethemes/customizer/customizer-core.php');

/*
* file for customizer sanitization functions
*/
require lawyer_zone_file_directory('acmethemes/customizer/sanitize-functions.php');

/**
 * Adding different options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function lawyer_zone_customize_register( $wp_customize ) {

    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    /*saved options*/
    $options  = lawyer_zone_get_theme_options();

    /*defaults options*/
    $defaults = lawyer_zone_get_default_theme_options();

    /*custom controls*/
    require lawyer_zone_file_directory('acmethemes/customizer/custom-controls.php');
	require lawyer_zone_file_directory('acmethemes/customizer/customizer-repeater/customizer-control-repeater.php');

    /*
     * file for feature panel of home page
     */
    require lawyer_zone_file_directory('acmethemes/customizer/feature-section/feature-panel.php');

    /*
    * file for header panel
    */
    require lawyer_zone_file_directory('acmethemes/customizer/header-options/header-panel.php');

    /*
    * file for customizer footer section
    */
    require lawyer_zone_file_directory('acmethemes/customizer/footer-options/footer-panel.php');

    /*
    * file for design/layout panel
    */
    require lawyer_zone_file_directory('acmethemes/customizer/design-options/design-panel.php');

	/*
   * file for single panel
   */
	require lawyer_zone_file_directory('acmethemes/customizer/single-posts/single-post-panel.php');

    /*
     * file for options panel
     */
    require lawyer_zone_file_directory('acmethemes/customizer/options/options-panel.php');

	/*woocommerce options*/
	if ( lawyer_zone_is_woocommerce_active() ) :
		require_once lawyer_zone_file_directory('acmethemes/customizer/wc-options/wc-panel.php');
	endif;

    /*sorting core and widget for ease of theme use*/
    $wp_customize->get_section( 'static_front_page' )->priority = 10;
    
    $lawyer_zone_home_section = $wp_customize->get_section( 'sidebar-widgets-lawyer-zone-home' );
    if ( ! empty( $lawyer_zone_home_section ) ) {
        $lawyer_zone_home_section->panel         = '';
        $lawyer_zone_home_section->title         = esc_html__( 'Home Main Content Area ', 'lawyer-zone' );
        $lawyer_zone_home_section->priority      = 80;
    }

    /*customizing default colors section and adding new controls-setting too*/
    $wp_customize->get_section( 'colors' )->panel = 'lawyer-zone-design-panel';
    $wp_customize->get_section( 'colors' )->title = esc_html__( 'Basic Color', 'lawyer-zone' );
    $wp_customize->get_section( 'background_image' )->priority = 100;

    /*Background Image*/
    $wp_customize->get_section( 'background_image' )->panel = 'lawyer-zone-design-panel';
    $wp_customize->get_section( 'background_image' )->priority = 60;

    /*adding header image inside this panel*/
    $wp_customize->get_section( 'header_image' )->panel = 'lawyer-zone-header-panel';
    $wp_customize->get_section( 'header_image' )->description = esc_html__( 'Applied to header image of inner pages.', 'lawyer-zone' );

    /*TODO WP 5.8*/
    /*$lawyer_zone_popup_widget_area = $wp_customize->get_section( 'sidebar-widgets-popup-widget-area' );
    if ( ! empty( $lawyer_zone_popup_widget_area ) ) {
        $lawyer_zone_popup_widget_area->panel = 'lawyer-zone-header-panel';
        $lawyer_zone_popup_widget_area->title = esc_html__( 'Popup Widgets', 'lawyer-zone' );
        $lawyer_zone_popup_widget_area->priority = 999;

        $lawyer_zone_popup_widget_title = $wp_customize->get_control( 'lawyer_zone_theme_options[lawyer-zone-popup-widget-title]' );
        if ( ! empty( $lawyer_zone_popup_widget_title ) ) {
            $lawyer_zone_popup_widget_title->section  = 'sidebar-widgets-popup-widget-area';
            $lawyer_zone_popup_widget_title->priority = -1;
        }
    }*/
}
add_action( 'customize_register', 'lawyer_zone_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lawyer_zone_customize_preview_js() {
    wp_enqueue_script( 'lawyer-zone-customizer', get_template_directory_uri() . '/acmethemes/core/js/customizer.js', array( 'customize-preview' ), '1.0.0', true );
}
add_action( 'customize_preview_init', 'lawyer_zone_customize_preview_js' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function lawyer_zone_customize_controls_scripts() {
    wp_enqueue_script( 'lawyer-zone-customizer-controls', get_template_directory_uri() . '/acmethemes/core/js/customizer-controls.js', array( 'customize-preview' ), '1.0.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'lawyer_zone_customize_controls_scripts' );