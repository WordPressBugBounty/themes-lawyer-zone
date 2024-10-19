<?php
/**
 * Lawyer Zone functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */


/**
 * Default Theme layout options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_theme_layout
 *
 */
if ( !function_exists('lawyer_zone_get_default_theme_options') ) :
    function lawyer_zone_get_default_theme_options() {

        $default_theme_options = array(

            /*logo and site title*/
            'lawyer-zone-display-site-logo'      => '',
            'lawyer-zone-display-site-title'     => 1,
            'lawyer-zone-display-site-tagline'   => 1,

            /*header height*/
            'lawyer-zone-header-height'          => 300,
            'lawyer-zone-header-image-display'   => 'normal-image',

            /*header top*/
            'lawyer-zone-enable-header-top'       => '',
            'lawyer-zone-header-top-menu-display-selection'      => 'right',
            'lawyer-zone-header-top-info-display-selection'      => 'left',
            'lawyer-zone-header-top-social-display-selection'    => 'right',

            /*menu options*/
            'lawyer-zone-enable-transparent'             => '',
            'lawyer-zone-enable-sticky'                  => '',
            'lawyer-zone-menu-right-button-options'      => 'disable',
            'lawyer-zone-menu-right-button-title'        => esc_html__('Request a Quote','lawyer-zone'),
            'lawyer-zone-menu-right-button-link'         => '',
            'lawyer-zone-enable-cart-icon'               => '',

            /*feature section options*/
            'lawyer-zone-enable-feature'                         => '',
            'lawyer-zone-slides-data'                            => '',
            'lawyer-zone-feature-slider-enable-animation'        => 1,
            'lawyer-zone-feature-slider-display-title'           => 1,
            'lawyer-zone-feature-slider-display-excerpt'         => 1,
            'lawyer-zone-fs-image-display-options'               => 'full-screen-bg',
            'lawyer-zone-feature-slider-text-align'              => 'text-left',

            /*basic info*/
            'lawyer-zone-feature-info-number'    => 4,
            'lawyer-zone-first-info-icon'        => 'fa-calendar',
            'lawyer-zone-first-info-title'       => esc_html__('Send Us a Mail', 'lawyer-zone'),
            'lawyer-zone-first-info-desc'        => esc_html__('domain@example.com ', 'lawyer-zone'),
            'lawyer-zone-second-info-icon'       => 'fa-map-marker',
            'lawyer-zone-second-info-title'      => esc_html__('Our Location', 'lawyer-zone'),
            'lawyer-zone-second-info-desc'       => esc_html__('Elmonte California', 'lawyer-zone'),
            'lawyer-zone-third-info-icon'        => 'fa-phone',
            'lawyer-zone-third-info-title'       => esc_html__('Call Us', 'lawyer-zone'),
            'lawyer-zone-third-info-desc'        => esc_html__('01-23456789-10', 'lawyer-zone'),
            'lawyer-zone-forth-info-icon'        => 'fa-envelope-o',
            'lawyer-zone-forth-info-title'       => esc_html__('Office Hours', 'lawyer-zone'),
            'lawyer-zone-forth-info-desc'        => esc_html__('8 hours per day', 'lawyer-zone'),

            /*footer options*/
            'lawyer-zone-footer-copyright'                       => esc_html__( '&copy; All right reserved', 'lawyer-zone' ),
            'lawyer-zone-footer-copyright-beside-option'         => 'footer-menu',
            'lawyer-zone-footer-bg-img'                          => '',

            /*layout/design options*/
            'lawyer-zone-pagination-option'      => 'numeric',

            'lawyer-zone-enable-animation'       => '',

            'lawyer-zone-single-sidebar-layout'                  => 'right-sidebar',
            'lawyer-zone-front-page-sidebar-layout'              => 'right-sidebar',
            'lawyer-zone-archive-sidebar-layout'                 => 'right-sidebar',

            'lawyer-zone-blog-archive-img-size'                  => 'full',
            'lawyer-zone-blog-archive-content-from'              => 'excerpt',
            'lawyer-zone-blog-archive-excerpt-length'            => 42,
            'lawyer-zone-blog-archive-more-text'                 => esc_html__( 'Read More', 'lawyer-zone' ),

            'lawyer-zone-primary-color'          => '#44465d',
            'lawyer-zone-header-top-bg-color'    => '#44465d',
            'lawyer-zone-footer-bg-color'        => '#1f1f1f',
            'lawyer-zone-footer-bottom-bg-color' => '#2d2d2d',
            'lawyer-zone-link-color'             => '#c2b697',
            'lawyer-zone-link-hover-color'       => '#c2b697',

            /*Front Page*/
            'lawyer-zone-hide-front-page-content' => '',
            'lawyer-zone-hide-front-page-header'  => '',

            /*single post*/
            'lawyer-zone-single-header-title'            => esc_html__( 'Blog', 'lawyer-zone' ),
            'lawyer-zone-single-img-size'                => 'full',

            /*theme options*/
            'lawyer-zone-popup-widget-title'     => esc_html__( 'Request a Quote', 'lawyer-zone' ),
            'lawyer-zone-show-breadcrumb'        => 1,
            'lawyer-zone-search-placeholder'     => esc_html__( 'Search', 'lawyer-zone' ),
            'lawyer-zone-social-data'            => ''
        );
        return apply_filters( 'lawyer_zone_default_theme_options', $default_theme_options );
    }
endif;

/**
 * Get theme options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array lawyer_zone_theme_options
 *
 */
if ( !function_exists('lawyer_zone_get_theme_options') ) :
    function lawyer_zone_get_theme_options() {

        $lawyer_zone_default_theme_options = lawyer_zone_get_default_theme_options();
        $lawyer_zone_get_theme_options = get_theme_mod( 'lawyer_zone_theme_options');
        if( is_array( $lawyer_zone_get_theme_options )){
            return array_merge( $lawyer_zone_default_theme_options ,$lawyer_zone_get_theme_options );
        }
        else{
            return $lawyer_zone_default_theme_options;
        }
    }
endif;
$lawyer_zone_saved_theme_options = lawyer_zone_get_theme_options();
$GLOBALS['lawyer_zone_customizer_all_values'] = $lawyer_zone_saved_theme_options;

/**
 * Require init.
 */
require trailingslashit( get_template_directory() ).'acmethemes/init.php';