<?php
/*It is underscores functions.php file and its modification*/
if ( ! function_exists( 'lawyer_zone_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function lawyer_zone_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Lawyer Zone, use a find and replace
         * to change 'lawyer-zone' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'lawyer-zone', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for custom logo.
         *
          */
        add_theme_support( 'custom-logo', array(
            'height'      => 70,
            'width'       => 290,
            'flex-height' => true,
            'flex-width' => true
        ) );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
	    add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 340, 240, true );

        // Adding excerpt for page
        add_post_type_support( 'page', 'excerpt' );

        // This theme uses wp_nav_menu() in four location.
        register_nav_menus( array(
	        'top-menu'      => esc_html__( 'Top Menu ( Support First Level Only )', 'lawyer-zone' ),
	        'primary'       => esc_html__( 'Primary Menu', 'lawyer-zone' ),
            'one-page'      => esc_html__( 'One Page Menu for Front Page', 'lawyer-zone' ),
	        'footer-menu'   => esc_html__( 'Footer Menu ( Support First Level Only )', 'lawyer-zone' )
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'gallery',
            'caption',
        ) );
        
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'lawyer_zone_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // This theme styles the visual editor with editor-style.css to match the theme style.
	    add_editor_style();

        /*woocommerce support*/
        add_theme_support( 'woocommerce' );

	    /*Set up the woocommerce Gallery Lightbox*/
	    add_theme_support( 'wc-product-gallery-zoom' );
	    add_theme_support( 'wc-product-gallery-lightbox' );
	    add_theme_support( 'wc-product-gallery-slider' );
    }
endif;
add_action( 'after_setup_theme', 'lawyer_zone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lawyer_zone_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'lawyer_zone_content_width', 640 );
}
add_action( 'after_setup_theme', 'lawyer_zone_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function lawyer_zone_scripts() {
    global $lawyer_zone_customizer_all_values;

    /*animation*/
    $lawyer_zone_enable_animation = $lawyer_zone_customizer_all_values['lawyer-zone-enable-animation'];
    /*google font  */
	wp_enqueue_style( 'lawyer-zone-googleapis', '//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i', array(), null );

	/*Bootstrap*/
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/library/bootstrap/css/bootstrap.min.css', array(), '3.3.6' );
	wp_style_add_data( 'bootstrap', 'rtl', 'replace' );

    /*Font-Awesome-master*/
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/library/Font-Awesome/css/font-awesome.min.css', array(), '4.5.0' );
	wp_style_add_data( 'font-awesome', 'rtl', 'replace' );

    /*slick slider*/
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/library/slick/slick.css', array(), '1.3.3' );
    wp_style_add_data( 'slick', 'rtl', 'replace' );
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/library/slick/slick.min.js', array('jquery'), '1.1.2', 1);

	/*magnific-popup*/
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/library/magnific-popup/magnific-popup.css', array(), '1.1.0' );
	wp_style_add_data( 'magnific-popup', 'rtl', 'replace' );

    /*Select2*/
    if( lawyer_zone_is_woocommerce_active() ){
        wp_enqueue_style('select2');
        wp_enqueue_script('select2');
    }

    wp_enqueue_style( 'lawyer-zone-style', get_stylesheet_uri() );
	wp_style_add_data( 'lawyer-zone-style', 'rtl', 'replace' );


	wp_enqueue_script( 'lawyer-zone-skip-link-focus-fix', get_template_directory_uri() . '/acmethemes/core/js/skip-link-focus-fix.js', array(), '20130115', true );

    /*html5*/
    wp_enqueue_script('html5', get_template_directory_uri() . '/assets/library/html5shiv/html5shiv.min.js', array('jquery'), '3.7.3', false);
    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

    /*respond*/
    wp_enqueue_script('respond', get_template_directory_uri() . '/assets/library/respond/respond.min.js', array('jquery'), '1.1.2', false);
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

    /*Bootstrap*/
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/library/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.6', 1);
    
    /*wow animation*/
    if( 1 != $lawyer_zone_enable_animation ){
        wp_enqueue_script('wow', get_template_directory_uri() . '/assets/library/wow/js/wow.min.js', array('jquery'), '1.1.2', 1);
    }
    /*magnific-popup*/
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/library/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', 1);

	wp_enqueue_script( 'masonry' );

	/*theme custom js*/
    wp_enqueue_script('lawyer-zone-custom', get_template_directory_uri() . '/assets/js/lawyer-zone-custom.js', array('jquery'), '1.0.5', 1);

	wp_localize_script( 'lawyer-zone-custom', 'lawyer_zone_ajax', array(
		'ajaxurl'           => admin_url( 'admin-ajax.php' )
	));

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'lawyer_zone_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function lawyer_zone_is_edit_page() {
	//make sure we are on the backend
	if ( !is_admin() ){
		return false;
	}
	global $pagenow;
	return in_array( $pagenow, array( 'post.php', 'post-new.php' ) );
}

function lawyer_zone_admin_scripts( $hook ) {

    if ( 'widgets.php' == $hook || lawyer_zone_is_edit_page() ) {
	    wp_enqueue_media();
        wp_enqueue_script( 'lawyer-zone-widgets-script', get_template_directory_uri() . '/assets/js/acme-admin.js', array( 'jquery' ), '1.0.0' );
	    wp_enqueue_style( 'lawyer-zone-widgets-style', get_template_directory_uri() . '/assets/css/acme-admin.css', array(), '1.0.0' );
	    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/library/Font-Awesome/css/font-awesome.min.css', array(), '4.5.0' );
    }
}
add_action( 'admin_enqueue_scripts', 'lawyer_zone_admin_scripts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function lawyer_zone_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'lawyer_zone_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require lawyer_zone_file_directory('acmethemes/core/custom-header.php');

/**
 * Custom template tags for this theme.
 */
require lawyer_zone_file_directory('acmethemes/core/template-tags.php');

/**
 * Custom functions that act independently of the theme templates.
 */
require lawyer_zone_file_directory('acmethemes/core/extras.php');

/**
 * Load Jetpack compatibility file.
 */
require lawyer_zone_file_directory('acmethemes/core/jetpack.php');