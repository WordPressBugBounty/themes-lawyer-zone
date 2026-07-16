<?php
/*adding theme options panel*/
$wp_customize->add_panel( 'lawyer-zone-wc-panel', array(
	'priority'       => 100,
	'capability'     => 'edit_theme_options',
	'title'          => esc_html__( 'WooCommerce Options', 'lawyer-zone' )
) );

/*
* file for shop archive
*/
require_once lawyer_zone_file_directory('acmethemes/customizer/wc-options/shop-archive.php');

/*
* file for single product
*/
require_once lawyer_zone_file_directory('acmethemes/customizer/wc-options/single-product.php');