<?php
/**
 * Lawyer Zone functions.
 * @package Lawyer Zone
 * @since 1.0.0
 */

/**
 * check if WooCommerce activated
 */
function lawyer_zone_is_woocommerce_active() {
	return class_exists( 'WooCommerce' ) ? true : false;
}

/**
 * Checks if the current page is a product archive
 * @return boolean
 */
function lawyer_zone_is_product_archive() {
	if ( lawyer_zone_is_woocommerce_active() ) {
		if ( is_shop() || is_product_taxonomy() || is_product_category() || is_product_tag() ) {
			return true;
		} else {
			return false;
		}
	}
	else {
		return false;
	}
}

add_action( 'init', 'lawyer_zone_remove_wc_breadcrumbs' );
function lawyer_zone_remove_wc_breadcrumbs() {
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
}

/*https://gist.github.com/mikejolley/2044109*/
add_filter( 'woocommerce_add_to_cart_fragments', 'lawyer_zone_header_add_to_cart_fragment' );
function lawyer_zone_header_add_to_cart_fragment( $fragments ) {
	ob_start();
	?>
    <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
	<?php
	$fragments['span.cart-value'] = ob_get_clean();
	return $fragments;
}

/**
 * Woo Commerce Number of row filter Function
 */
if (!function_exists('lawyer_zone_loop_columns')) {
	function lawyer_zone_loop_columns() {
		$lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
		$lawyer_zone_wc_product_column_number = $lawyer_zone_customizer_all_values['lawyer-zone-wc-product-column-number'];
		if ($lawyer_zone_wc_product_column_number) {
			$column_number = $lawyer_zone_wc_product_column_number;
		}
		else {
			$column_number = 3;
		}
		return $column_number;
	}
}
add_filter('loop_shop_columns', 'lawyer_zone_loop_columns');

function lawyer_zone_loop_shop_per_page( $cols ) {
	// $cols contains the current number of products per page based on the value stored on Options -> Reading
	// Return the number of products you wanna show per page.
	$lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();
	$lawyer_zone_wc_product_total_number = $lawyer_zone_customizer_all_values['lawyer-zone-wc-shop-archive-total-product'];
	if ($lawyer_zone_wc_product_total_number) {
		$cols = $lawyer_zone_wc_product_total_number;
	}
	return $cols;
}
add_filter( 'loop_shop_per_page', 'lawyer_zone_loop_shop_per_page', 20 );