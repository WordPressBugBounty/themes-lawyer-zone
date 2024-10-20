<?php
/**
 * Lawyer Zone WooCommerce Class
 *
 * @package  Lawyer_Zone
 * @author   Acme Themes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Lawyer_Zone_WooCommerce' ) ) :

	/**
	 * The Lawyer_Zone WooCommerce Integration class
	 */
	class Lawyer_Zone_WooCommerce {

		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {
			add_filter( 'body_class', array( $this, 'woocommerce_body_class' ) );

			/**
			 * Remove WooCommerce Default Sidebar
			 */
			remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
			add_action( 'woocommerce_sidebar', array( $this, 'woocommerce_get_sidebar' ), 10 );
		}

		/**
		 * Add 'woocommerce-active' class to the body tag
		 *
		 * @param  array $classes css classes applied to the body tag.
		 * @return array $classes modified to include 'woocommerce-active' class
		 */
		public function woocommerce_body_class( $classes ) {
			if ( lawyer_zone_is_woocommerce_active() ) {
				$classes[] = 'woocommerce-active';
			}

			return $classes;
		}

		/**
		 * Add 'woocommerce sideabar
		 */
		public function woocommerce_get_sidebar( ) {
			get_sidebar( 'left' );
			get_sidebar();
		}
	}
endif;
return new Lawyer_Zone_WooCommerce();