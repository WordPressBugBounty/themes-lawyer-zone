<?php
/**
 * Select sidebar according to the options saved
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return string
 *
 */
if ( !function_exists('lawyer_zone_sidebar_selection') ) :
	function lawyer_zone_sidebar_selection( ) {
		wp_reset_postdata();
		$lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
		global $post;
		if(
			isset( $lawyer_zone_customizer_all_values['lawyer-zone-single-sidebar-layout'] ) &&
			(
				'left-sidebar' == $lawyer_zone_customizer_all_values['lawyer-zone-single-sidebar-layout'] ||
				'both-sidebar' == $lawyer_zone_customizer_all_values['lawyer-zone-single-sidebar-layout'] ||
				'middle-col' == $lawyer_zone_customizer_all_values['lawyer-zone-single-sidebar-layout'] ||
				'no-sidebar' == $lawyer_zone_customizer_all_values['lawyer-zone-single-sidebar-layout']
			)
		){
			$lawyer_zone_body_global_class = $lawyer_zone_customizer_all_values['lawyer-zone-single-sidebar-layout'];
		}
		else{
			$lawyer_zone_body_global_class= 'right-sidebar';
		}

		if ( lawyer_zone_is_woocommerce_active() && ( is_product() || is_shop() || is_product_taxonomy() )) {
			if( is_product() ){
				$post_class = get_post_meta( $post->ID, 'lawyer_zone_sidebar_layout', true );
				$lawyer_zone_wc_single_product_sidebar_layout = $lawyer_zone_customizer_all_values['lawyer-zone-wc-single-product-sidebar-layout'];

				if ( 'default-sidebar' != $post_class ){
					if ( $post_class ) {
						$lawyer_zone_body_classes = $post_class;
					} else {
						$lawyer_zone_body_classes = $lawyer_zone_wc_single_product_sidebar_layout;
					}
				}
				else{
					$lawyer_zone_body_classes = $lawyer_zone_wc_single_product_sidebar_layout;

				}
			}
			else{
				if( isset( $lawyer_zone_customizer_all_values['lawyer-zone-wc-shop-archive-sidebar-layout'] ) ){
					$lawyer_zone_archive_sidebar_layout = $lawyer_zone_customizer_all_values['lawyer-zone-wc-shop-archive-sidebar-layout'];
					if(
						'right-sidebar' == $lawyer_zone_archive_sidebar_layout ||
						'left-sidebar' == $lawyer_zone_archive_sidebar_layout ||
						'both-sidebar' == $lawyer_zone_archive_sidebar_layout ||
						'middle-col' == $lawyer_zone_archive_sidebar_layout ||
						'no-sidebar' == $lawyer_zone_archive_sidebar_layout
					){
						$lawyer_zone_body_classes = $lawyer_zone_archive_sidebar_layout;
					}
					else{
						$lawyer_zone_body_classes = $lawyer_zone_body_global_class;
					}
				}
				else{
					$lawyer_zone_body_classes= $lawyer_zone_body_global_class;
				}
			}
		}
		elseif( is_front_page() ){
			if( isset( $lawyer_zone_customizer_all_values['lawyer-zone-front-page-sidebar-layout'] ) ){
				if(
					'right-sidebar' == $lawyer_zone_customizer_all_values['lawyer-zone-front-page-sidebar-layout'] ||
					'left-sidebar' == $lawyer_zone_customizer_all_values['lawyer-zone-front-page-sidebar-layout'] ||
					'both-sidebar' == $lawyer_zone_customizer_all_values['lawyer-zone-front-page-sidebar-layout'] ||
					'middle-col' == $lawyer_zone_customizer_all_values['lawyer-zone-front-page-sidebar-layout'] ||
					'no-sidebar' == $lawyer_zone_customizer_all_values['lawyer-zone-front-page-sidebar-layout']
				){
					$lawyer_zone_body_classes = $lawyer_zone_customizer_all_values['lawyer-zone-front-page-sidebar-layout'];
				}
				else{
					$lawyer_zone_body_classes = $lawyer_zone_body_global_class;
				}
			}
			else{
				$lawyer_zone_body_classes= $lawyer_zone_body_global_class;
			}
		}

		elseif ( is_singular() && isset( $post->ID ) ) {
			$post_class = get_post_meta( $post->ID, 'lawyer_zone_sidebar_layout', true );
			if ( 'default-sidebar' != $post_class ){
				if ( $post_class ) {
					$lawyer_zone_body_classes = $post_class;
				} else {
					$lawyer_zone_body_classes = $lawyer_zone_body_global_class;
				}
			}
			else{
				$lawyer_zone_body_classes = $lawyer_zone_body_global_class;
			}

		}
		elseif ( is_archive() ) {
			if( isset( $lawyer_zone_customizer_all_values['lawyer-zone-archive-sidebar-layout'] ) ){
				$lawyer_zone_archive_sidebar_layout = $lawyer_zone_customizer_all_values['lawyer-zone-archive-sidebar-layout'];
				if(
					'right-sidebar' == $lawyer_zone_archive_sidebar_layout ||
					'left-sidebar' == $lawyer_zone_archive_sidebar_layout ||
					'both-sidebar' == $lawyer_zone_archive_sidebar_layout ||
					'middle-col' == $lawyer_zone_archive_sidebar_layout ||
					'no-sidebar' == $lawyer_zone_archive_sidebar_layout
				){
					$lawyer_zone_body_classes = $lawyer_zone_archive_sidebar_layout;
				}
				else{
					$lawyer_zone_body_classes = $lawyer_zone_body_global_class;
				}
			}
			else{
				$lawyer_zone_body_classes= $lawyer_zone_body_global_class;
			}
		}
		else {
			$lawyer_zone_body_classes = $lawyer_zone_body_global_class;
		}
		return $lawyer_zone_body_classes;
	}
endif;