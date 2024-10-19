<?php
if ( ! function_exists( 'lawyer_zone_posts_navigation' ) ) :
	/**
	 * Post navigation
	 *
	 * @since Lawyer Zone 1.0.0
	 *
	 * @return void
	 */
	function lawyer_zone_posts_navigation() {
		global $lawyer_zone_customizer_all_values;
		$lawyer_zone_pagination_option = $lawyer_zone_customizer_all_values['lawyer-zone-pagination-option'];
		if( 'default' == $lawyer_zone_pagination_option ){
			// Previous/next page navigation.
			the_posts_navigation();
		}
		else {
			// Previous/next page navigation.
			the_posts_pagination();
		}
	}
endif;
add_action( 'lawyer_zone_action_posts_navigation', 'lawyer_zone_posts_navigation' );

/**
 * Feature Options
 *
 * @since Medical Circle 1.0.0
 *
 * @param null
 * @return string
 *
 */
if ( !function_exists('lawyer_zone_featured_image_display') ) :
	function lawyer_zone_featured_image_display( ) {
		global $lawyer_zone_customizer_all_values;
		$lawyer_zone_single_image_layout = $lawyer_zone_customizer_all_values['lawyer-zone-single-img-size'];

		return $lawyer_zone_single_image_layout;
	}
endif;