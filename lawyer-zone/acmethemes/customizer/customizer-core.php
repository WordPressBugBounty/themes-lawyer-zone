<?php
/**
 * Menu and Logo Display Options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_header_image_display
 *
 */
if ( !function_exists('lawyer_zone_header_image_display') ) :
	function lawyer_zone_header_image_display() {
		$lawyer_zone_header_image_display =  array(
			'hide'              => esc_html__( 'Hide', 'lawyer-zone' ),
			'bg-image'          => esc_html__( 'Background Image', 'lawyer-zone' ),
			'normal-image'      => esc_html__( 'Normal Image', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_header_image_display', $lawyer_zone_header_image_display );
	}
endif;

/**
 * Menu Right Button Link Options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_menu_right_button_link_options
 *
 */
if ( !function_exists('lawyer_zone_menu_right_button_link_options') ) :
	function lawyer_zone_menu_right_button_link_options() {
		$lawyer_zone_menu_right_button_link_options =  array(
			'disable'       => esc_html__( 'Disable', 'lawyer-zone' ),
			'booking'       => esc_html__( 'Popup Widgets ( Booking Form )', 'lawyer-zone' ),
			'link'          => esc_html__( 'One Link', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_menu_right_button_link_options', $lawyer_zone_menu_right_button_link_options );
	}
endif;

/**
 * Header top display options of elements
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_header_top_display_selection
 *
 */
if ( !function_exists('lawyer_zone_header_top_display_selection') ) :
	function lawyer_zone_header_top_display_selection() {
		$lawyer_zone_header_top_display_selection =  array(
			'hide'          => esc_html__( 'Hide', 'lawyer-zone' ),
			'left'          => esc_html__( 'on Top Left', 'lawyer-zone' ),
			'right'         => esc_html__( 'on Top Right', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_header_top_display_selection', $lawyer_zone_header_top_display_selection );
	}
endif;

/**
 * Feature slider text align
 *
 * @since Mercantile 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_slider_text_align
 *
 */
if ( !function_exists('lawyer_zone_slider_text_align') ) :
	function lawyer_zone_slider_text_align() {
		$lawyer_zone_slider_text_align =  array(
			'alternate'     => esc_html__( 'Alternate', 'lawyer-zone' ),
			'text-left'     => esc_html__( 'Left', 'lawyer-zone' ),
			'text-right'    => esc_html__( 'Right', 'lawyer-zone' ),
			'text-center'   => esc_html__( 'Center', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_slider_text_align', $lawyer_zone_slider_text_align );
	}
endif;

/**
 * Featured Slider Image Options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_fs_image_display_options
 *
 */
if ( !function_exists('lawyer_zone_fs_image_display_options') ) :
	function lawyer_zone_fs_image_display_options() {
		$lawyer_zone_fs_image_display_options =  array(
			'full-screen-bg' => esc_html__( 'Full Screen Background', 'lawyer-zone' ),
			'responsive-img' => esc_html__( 'Responsive Image', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_fs_image_display_options', $lawyer_zone_fs_image_display_options );
	}
endif;

/**
 * Feature Info number
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_feature_info_number
 *
 */
if ( !function_exists('lawyer_zone_feature_info_number') ) :
	function lawyer_zone_feature_info_number() {
		$lawyer_zone_feature_info_number =  array(
			1               => esc_html__( '1', 'lawyer-zone' ),
			2               => esc_html__( '2', 'lawyer-zone' ),
			3               => esc_html__( '3', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_feature_info_number', $lawyer_zone_feature_info_number );
	}
endif;

/**
 * Footer copyright beside options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_footer_copyright_beside_option
 *
 */
if ( !function_exists('lawyer_zone_footer_copyright_beside_option') ) :
	function lawyer_zone_footer_copyright_beside_option() {
		$lawyer_zone_footer_copyright_beside_option =  array(
			'hide'          => esc_html__( 'Hide', 'lawyer-zone' ),
			'social'        => esc_html__( 'Social Links', 'lawyer-zone' ),
			'footer-menu'   => esc_html__( 'Footer Menu', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_footer_copyright_beside_option', $lawyer_zone_footer_copyright_beside_option );
	}
endif;

/**
 * Sidebar layout options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_sidebar_layout
 *
 */
if ( !function_exists('lawyer_zone_sidebar_layout') ) :
    function lawyer_zone_sidebar_layout() {
        $lawyer_zone_sidebar_layout =  array(
	        'right-sidebar' => esc_html__( 'Right Sidebar', 'lawyer-zone' ),
	        'left-sidebar'  => esc_html__( 'Left Sidebar' , 'lawyer-zone' ),
	        'both-sidebar'  => esc_html__( 'Both Sidebar' , 'lawyer-zone' ),
	        'middle-col'    => esc_html__( 'Middle Column' , 'lawyer-zone' ),
	        'no-sidebar'    => esc_html__( 'No Sidebar', 'lawyer-zone' )
        );
        return apply_filters( 'lawyer_zone_sidebar_layout', $lawyer_zone_sidebar_layout );
    }
endif;

/**
 * Blog content from
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_blog_archive_content_from
 *
 */
if ( !function_exists('lawyer_zone_blog_archive_content_from') ) :
	function lawyer_zone_blog_archive_content_from() {
		$lawyer_zone_blog_archive_content_from =  array(
			'excerpt'    => esc_html__( 'Excerpt', 'lawyer-zone' ),
			'content'    => esc_html__( 'Content', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_blog_archive_content_from', $lawyer_zone_blog_archive_content_from );
	}
endif;

/**
 * Image Size
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_get_image_sizes_options
 *
 */
if ( !function_exists('lawyer_zone_get_image_sizes_options') ) :
	function lawyer_zone_get_image_sizes_options( $add_disable = false ) {
		global $_wp_additional_image_sizes;
		$choices = array();
		if ( true == $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'lawyer-zone' );
		}
		foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
			$choices[ $_size ] = $_size . ' ('. get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
		}
		$choices['full'] = esc_html__( 'full (original)', 'lawyer-zone' );
		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {

			foreach ($_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key . ' ('. $size['width'] . 'x' . $size['height'] . ')';
			}
		}
		return apply_filters( 'lawyer_zone_get_image_sizes_options', $choices );
	}
endif;

/**
 * Pagination Options
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array lawyer_zone_pagination_options
 *
 */
if ( !function_exists('lawyer_zone_pagination_options') ) :
	function lawyer_zone_pagination_options() {
		$lawyer_zone_pagination_options =  array(
			'default'  => esc_html__( 'Default', 'lawyer-zone' ),
			'numeric'  => esc_html__( 'Numeric', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_pagination_options', $lawyer_zone_pagination_options );
	}
endif;