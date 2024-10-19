<?php
/**
 * Setting global variables for all theme options saved values
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_set_global' ) ) :
    function lawyer_zone_set_global() {
        /*Getting saved values start*/
        $lawyer_zone_saved_theme_options = lawyer_zone_get_theme_options();
        $GLOBALS['lawyer_zone_customizer_all_values'] = $lawyer_zone_saved_theme_options;
        /*Getting saved values end*/
    }
endif;
add_action( 'lawyer_zone_action_before_head', 'lawyer_zone_set_global', 0 );

/**
 * Doctype Declaration
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_doctype' ) ) :
    function lawyer_zone_doctype() {
        ?>
        <!DOCTYPE html><html <?php language_attributes(); ?>>
        <?php
    }
endif;
add_action( 'lawyer_zone_action_before_head', 'lawyer_zone_doctype', 10 );

/**
 * Code inside head tage but before wp_head funtion
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_before_wp_head' ) ) :

    function lawyer_zone_before_wp_head() {
        ?>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="profile" href="//gmpg.org/xfn/11">
        <?php
    }
endif;
add_action( 'lawyer_zone_action_before_wp_head', 'lawyer_zone_before_wp_head', 10 );

/**
 * Add body class
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array
 *
 */
if ( ! function_exists( 'lawyer_zone_body_class' ) ) :

    function lawyer_zone_body_class( $lawyer_zone_body_classes ) {

        global $lawyer_zone_customizer_all_values;
        $lawyer_zone_enable_animation = $lawyer_zone_customizer_all_values['lawyer-zone-enable-animation'];
        $lawyer_zone_enable_transparent = $lawyer_zone_customizer_all_values['lawyer-zone-enable-transparent'];
    
        /*wow animation*/
        if( 1 != $lawyer_zone_enable_animation ){
            $lawyer_zone_body_classes[] = 'acme-animate';
        }
        $lawyer_zone_body_classes[] = lawyer_zone_sidebar_selection();

        $lawyer_zone_enable_feature = $lawyer_zone_customizer_all_values['lawyer-zone-enable-feature'];
         if( is_front_page() ) {
             if( 1 == $lawyer_zone_enable_feature && !is_home() ){
                 if( 1 == $lawyer_zone_enable_transparent  ){
                     $lawyer_zone_body_classes[] = 'header-transparent';
                     $lawyer_zone_enable_header_top = $lawyer_zone_customizer_all_values['lawyer-zone-enable-header-top'];
                     if( 1 == $lawyer_zone_enable_header_top  ){
                         $lawyer_zone_body_classes[] = 'header-enable-top';
                     }
                 }
             }
         }else{
                 if( 1 == $lawyer_zone_enable_transparent  ){
                     $lawyer_zone_body_classes[] = 'header-transparent';
                     $lawyer_zone_enable_header_top = $lawyer_zone_customizer_all_values['lawyer-zone-enable-header-top'];
                     if( 1 == $lawyer_zone_enable_header_top  ){
                         $lawyer_zone_body_classes[] = 'header-enable-top';
                     }
                 }
             }

         if ( 1 != $lawyer_zone_enable_feature && is_front_page()){
            $lawyer_zone_body_classes[] = 'at-front-no-feature';
         }
        return $lawyer_zone_body_classes;
    }
endif;
add_action( 'body_class', 'lawyer_zone_body_class', 10, 1 );

/**
 * Start site div
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_site_start' ) ) :

    function lawyer_zone_site_start() {
        ?>
        <div class="site" id="page">
        <?php
    }
endif;
add_action( 'lawyer_zone_action_before', 'lawyer_zone_site_start', 20 );

/**
 * Skip to content
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_skip_to_content' ) ) :

    function lawyer_zone_skip_to_content() {
        ?>
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lawyer-zone' ); ?></a>
        <?php
    }
endif;
add_action( 'lawyer_zone_action_before_header', 'lawyer_zone_skip_to_content', 10 );

/**
 * Main header
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return void
 *
 */
if ( ! function_exists( 'lawyer_zone_header' ) ) :
    function lawyer_zone_header() {
        global $lawyer_zone_customizer_all_values;
        $lawyer_zone_enable_header_top = $lawyer_zone_customizer_all_values['lawyer-zone-enable-header-top'];
	    $lawyer_zone_nav_class = '';
	    $lawyer_zone_enable_sticky = $lawyer_zone_customizer_all_values['lawyer-zone-enable-sticky'];
        $lawyer_zone_enable_transparent = $lawyer_zone_customizer_all_values['lawyer-zone-enable-transparent'];
	    if( 1 == $lawyer_zone_enable_sticky || 1 == $lawyer_zone_enable_transparent  ){
		    $lawyer_zone_nav_class .= ' lawyer-zone-sticky';
	    }
    
        if( 1 == $lawyer_zone_enable_header_top ){
            ?>
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <?php
                                $lawyer_zone_header_top_menu_display_selection = $lawyer_zone_customizer_all_values['lawyer-zone-header-top-menu-display-selection'];
                                $lawyer_zone_header_top_info_display_selection = $lawyer_zone_customizer_all_values['lawyer-zone-header-top-info-display-selection'];
                                $lawyer_zone_header_top_social_display_selection = $lawyer_zone_customizer_all_values['lawyer-zone-header-top-social-display-selection'];

                                if( 'left' == $lawyer_zone_header_top_menu_display_selection ){
                                    do_action('lawyer_zone_action_top_menu');
                                }
                                if( 'left' == $lawyer_zone_header_top_social_display_selection ){
                                    do_action('lawyer_zone_action_social_links');
                                }
                                if( 'left' == $lawyer_zone_header_top_info_display_selection ){
                                    do_action('lawyer_zone_action_feature_info');
                                }
                            ?>
                        </div>
                        <div class="col-sm-6 text-right">
                            <?php
                                if( 'right' == $lawyer_zone_header_top_menu_display_selection ){
                                    do_action('lawyer_zone_action_top_menu');
                                }
                                if( 'right' == $lawyer_zone_header_top_social_display_selection ){
                                    do_action('lawyer_zone_action_social_links');
                                }
                                if( 'right' == $lawyer_zone_header_top_info_display_selection ){
                                    do_action('lawyer_zone_action_feature_info');
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <div class="navbar at-navbar <?php echo  $lawyer_zone_nav_class;?>" id="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
                    <?php
                    $lawyer_zone_display_site_logo = $lawyer_zone_customizer_all_values['lawyer-zone-display-site-logo'];
	                $lawyer_zone_display_site_title = $lawyer_zone_customizer_all_values['lawyer-zone-display-site-title'];
	                $lawyer_zone_display_site_tagline = $lawyer_zone_customizer_all_values['lawyer-zone-display-site-tagline'];
	                
                    if( 1== $lawyer_zone_display_site_logo || 1 == $lawyer_zone_display_site_title || 1 == $lawyer_zone_display_site_tagline ):
                        if ( 1 == $lawyer_zone_display_site_logo && function_exists( 'the_custom_logo' ) ):
                            the_custom_logo();
                        endif;
                        if ( 1== $lawyer_zone_display_site_title  ):
                            if ( is_front_page() && is_home() ) : ?>
                                <h1 class="site-title">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                                </h1>
                            <?php else : ?>
                                <p class="site-title">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                                </p>
                            <?php endif;
                        endif;
                        if ( 1== $lawyer_zone_display_site_tagline  ):
                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                                <p class="site-description"><?php echo esc_html( $description ); ?></p>
                            <?php endif;
                        endif;
                    endif;
                    ?>
                </div>
                <div class="at-beside-navbar-header">
	                <?php
	                 lawyer_zone_primary_menu();
	                ?>
                </div>
                <!--.at-beside-navbar-header-->
            </div>
        </div>
        <?php
    }
endif;
add_action( 'lawyer_zone_action_header', 'lawyer_zone_header', 10 );