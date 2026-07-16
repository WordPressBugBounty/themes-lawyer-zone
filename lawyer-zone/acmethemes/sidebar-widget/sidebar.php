<?php
/**
 * Sanitize choices
 * @since Lawyer Zone 1.0.0
 * @param null
 * @return string $lawyer_zone_about_column_number
 *
 */
if ( ! function_exists( 'lawyer_zone_sanitize_choice_options' ) ) :
	function lawyer_zone_sanitize_choice_options( $value, $choices, $default ) {
		$input = wp_kses_post( $value );
		$output = array_key_exists( $input, $choices ) ? $input : $default;
		return $output;
	}
endif;

/**
 * Common functions for widgets
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 *
 * @return array $lawyer_zone_about_column_number
 *
 */
if ( ! function_exists( 'lawyer_zone_background_options' ) ) :
	function lawyer_zone_background_options() {
		$lawyer_zone_about_column_number = array(
			'default'   => esc_html__( 'Default', 'lawyer-zone' ),
			'gray'      => esc_html__( 'Gray', 'lawyer-zone' )
		);

		return apply_filters( 'lawyer_zone_background_options', $lawyer_zone_about_column_number );
	}
endif;

/**
 * Column Number
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 *
 * @return array $lawyer_zone_about_column_number
 *
 */
if ( ! function_exists( 'lawyer_zone_widget_column_number' ) ) :
	function lawyer_zone_widget_column_number() {
		$lawyer_zone_about_column_number = array(
			1 => esc_html__( '1', 'lawyer-zone' ),
			2 => esc_html__( '2', 'lawyer-zone' ),
			3 => esc_html__( '3', 'lawyer-zone' ),
			4 => esc_html__( '4', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_widget_column_number', $lawyer_zone_about_column_number );
	}
endif;

/**
 * Widget Image Popup Type
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 * @return array $lawyer_zone_gallery_image_popup
 *
 */
if ( !function_exists('lawyer_zone_gallery_image_popup') ) :
	function lawyer_zone_gallery_image_popup() {
		$lawyer_zone_gallery_image_popup =  array(
			'gallery'   => esc_html__( 'Gallery', 'lawyer-zone' ),
			'single'    => esc_html__( 'Single', 'lawyer-zone' ),
			'disable'   => esc_html__( 'Disable', 'lawyer-zone' ),
		);
		return apply_filters( 'lawyer_zone_gallery_image_popup', $lawyer_zone_gallery_image_popup );
	}
endif;

/**
 * Content From
 *
 * @since Lawyer Zone 1.0.0
 *
 * @param null
 *
 * @return array $lawyer_zone_content_from
 *
 */
if ( ! function_exists( 'lawyer_zone_content_from' ) ) :
	function lawyer_zone_content_from() {
		$lawyer_zone_about_column_number = array(
			'excerpt' => esc_html__( 'Excerpt', 'lawyer-zone' ),
			'content' => esc_html__( 'Content', 'lawyer-zone' )
		);
		return apply_filters( 'lawyer_zone_content_from', $lawyer_zone_about_column_number );
	}
endif;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lawyer_zone_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Right Sidebar', 'lawyer-zone' ),
        'id'            => 'lawyer-zone-sidebar',
        'description'   => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    if ( is_customize_preview() ) {
        $lawyer_zone_home_description = sprintf( esc_html__( 'Displays widgets on home page main content area.%1$s Note : Please go to %2$s "Static Front Page"%3$s setting, Select "A static page" then "Front page" and "Posts page" to show added widgets', 'lawyer-zone' ), '<br />','<b><a class="at-customizer" data-section="static_front_page" style="cursor: pointer">','</a></b>' );
    }
    else{
        $lawyer_zone_home_description = esc_html__( 'Displays widgets on Front/Home page. Note : Please go to Setting => Reading, Select "A static page" then "Front page" and "Posts page" to show added widgets', 'lawyer-zone' );
    }
    register_sidebar(array(
        'name'          => esc_html__('Home Main Content Area', 'lawyer-zone'),
        'id'            => 'lawyer-zone-home',
        'description'	=> $lawyer_zone_home_description,
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title init-animate zoomIn"><span>',
        'after_title'   => '</span></h2>',
    ));

	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar', 'lawyer-zone' ),
		'id'            => 'lawyer-zone-sidebar-left',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar(array(
        'name'          => esc_html__('Footer Column One', 'lawyer-zone'),
        'id'            => 'footer-col-one',
        'description'   => esc_html__('Displays items on top footer section.', 'lawyer-zone'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title"><span>',
        'after_title'   => '</span></h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Column Two', 'lawyer-zone'),
        'id'            => 'footer-col-two',
        'description'   => esc_html__('Displays items on top footer section.', 'lawyer-zone'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title"><span>',
        'after_title'   => '</span></h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Column Three', 'lawyer-zone'),
        'id'            => 'footer-col-three',
        'description'   => esc_html__('Displays items on top footer section.', 'lawyer-zone'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title"><span>',
        'after_title'   => '</span></h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Column Four', 'lawyer-zone'),
        'id'            => 'footer-col-four',
        'description'   => esc_html__('Displays items on top footer section.', 'lawyer-zone'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title"><span>',
        'after_title'   => '</span></h3>',
    ));

	register_sidebar(array(
		'name'          => esc_html__('Popup Widget Area', 'lawyer-zone'),
		'id'            => 'popup-widget-area',
		'description'   => esc_html__('Displays items on Pop up', 'lawyer-zone'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	));

    /*Widgets*/
	register_widget( 'Lawyer_Zone_Accordion' );
	register_widget( 'Lawyer_Zone_Posts_Col' );
	register_widget( 'Lawyer_Zone_Contact' );
	register_widget( 'Lawyer_Zone_Service' );
	register_widget( 'Lawyer_Zone_Gallery' );
	register_widget( 'Lawyer_Zone_Team' );
	register_widget( 'Lawyer_Zone_Testimonial' );
}
add_action( 'widgets_init', 'lawyer_zone_widgets_init' );

/* ajax callback for get_edit_post_link*/
add_action( 'wp_ajax_at_get_edit_post_link', 'lawyer_zone_get_edit_post_link' );
function lawyer_zone_get_edit_post_link(){
    if( isset( $_GET['id'] ) ){
	    $id = absint( $_GET['id'] );
	    if( get_edit_post_link( $id ) ){
		    ?>
            <a class="button button-link at-postid alignright" target="_blank" href="<?php echo esc_url( get_edit_post_link( $id ) ); ?>">
			    <?php esc_html_e('Full Edit','lawyer-zone');?>
            </a>
		    <?php
	    }
	    else{
		    echo 0;
	    }
	    exit;
    }
}