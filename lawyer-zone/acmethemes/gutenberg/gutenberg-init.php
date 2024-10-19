<?php
if ( ! function_exists( 'lawyer_zone_gutenberg_setup' ) ) :
	/**
	 * Making theme gutenberg compatible
	 */
	function lawyer_zone_gutenberg_setup() {
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'lawyer_zone_gutenberg_setup' );

function lawyer_zone_dynamic_editor_styles(){

    $lawyer_zone_customizer_all_values = lawyer_zone_get_theme_options();

	$custom_css = '';

	$custom_css .= "
            .edit-post-visual-editor, 
			.edit-post-visual-editor p {
               color: #666;
            }";

	$custom_css .= "
	        .wp-block .wp-block-heading h1, 
	        .wp-block .wp-block-heading h1 a,
	        .wp-block .wp-block-heading h2,
	        .wp-block .wp-block-heading h2 a,
	        .wp-block .wp-block-heading h3, 
	        .wp-block .wp-block-heading h3 a,
	        .wp-block .wp-block-heading h4, 
	        .wp-block .wp-block-heading h4 a,
	        .wp-block .wp-block-heading h5, 
	        .wp-block .wp-block-heading h5 a,
	        .wp-block .wp-block-heading h6,
	        .wp-block .wp-block-heading h6 a{
	            color: #3a3a3a;
	        }";

    if( isset($lawyer_zone_customizer_all_values['lawyer-zone-link-color'])){
        $lawyer_zone_link_color               = esc_attr( $lawyer_zone_customizer_all_values['lawyer-zone-link-color'] );
        $custom_css .= "
	        .wp-block a{
	            color: {$lawyer_zone_link_color};
	        }";
    }
    if( isset($lawyer_zone_customizer_all_values['lawyer-zone-link-hover-color'])){
        $lawyer_zone_link_hover_color         = esc_attr( $lawyer_zone_customizer_all_values['lawyer-zone-link-hover-color'] );;
        $custom_css .= "
	        .wp-block a:hover,
	        .wp-block a:active,
	        .wp-block a:focus{
	            color: {$lawyer_zone_link_hover_color};
	        }";
    }
    return wp_strip_all_tags( $custom_css );
}

/**
 * Enqueue block editor style
 */
function lawyer_zone_block_editor_styles() {
	wp_enqueue_style( 'lawyer-zone-googleapis', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i', array(), null );
	wp_enqueue_style( 'lawyer-zone-block-editor-styles', get_template_directory_uri() . '/acmethemes/gutenberg/gutenberg-edit.css', false, '1.0' );

	/**
	 * Styles from the customizer
	 */
	wp_add_inline_style( 'lawyer-zone-block-editor-styles', lawyer_zone_dynamic_editor_styles() );
}
add_action( 'enqueue_block_editor_assets', 'lawyer_zone_block_editor_styles',99 );

function lawyer_zone_gutenberg_scripts() {
	wp_enqueue_style( 'lawyer-zone-block-front-styles', get_template_directory_uri() . '/acmethemes/gutenberg/gutenberg-front.css', false, '1.0' );
	wp_style_add_data( 'lawyer-zone-block-front-styles', 'rtl', 'replace' );
}
add_action( 'wp_enqueue_scripts', 'lawyer_zone_gutenberg_scripts' );