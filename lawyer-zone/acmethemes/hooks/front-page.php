<?php
/**
 * Front page hook for all WordPress Conditions
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_featured_slider' ) ) :

    function lawyer_zone_featured_slider() {
        global $lawyer_zone_customizer_all_values;

        $lawyer_zone_enable_feature = $lawyer_zone_customizer_all_values['lawyer-zone-enable-feature'];
        if( is_front_page() && 1 == $lawyer_zone_enable_feature && !is_home() ) :
	        do_action( 'lawyer_zone_action_feature_slider' );
	
        endif;
    }
endif;
add_action( 'lawyer_zone_action_front_page', 'lawyer_zone_featured_slider', 10 );

if ( ! function_exists( 'lawyer_zone_front_page' ) ) :

    function lawyer_zone_front_page() {
        global $lawyer_zone_customizer_all_values;

        $lawyer_zone_hide_front_page_content = $lawyer_zone_customizer_all_values['lawyer-zone-hide-front-page-content'];

        /*show widget in front page, now user are not force to use front page*/
        if( is_active_sidebar( 'lawyer-zone-home' ) && !is_home() ){
            dynamic_sidebar( 'lawyer-zone-home' );
        }
        if ( 'posts' == get_option( 'show_on_front' ) ) {
            include( get_home_template() );
        }
        else {
            if( 1 != $lawyer_zone_hide_front_page_content ){
                include( get_page_template() );
            }
        }
    }
endif;
add_action( 'lawyer_zone_action_front_page', 'lawyer_zone_front_page', 20 );