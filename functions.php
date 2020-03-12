<?php
/**
 * resumee functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package resumee
 */

$resumee = get_option('resumee');

if ( ! function_exists( 'resumee_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function resumee_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on resumee, use a find and replace
	 * to change 'resumee' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'resumee', get_template_directory() . '/languages' );

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
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'resumee' ),
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*Allows to link a custom stylesheet file to the TinyMCE visual editor.*/
	add_editor_style();

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'resumee' ),
	) );


	 add_theme_support( 'starter-content', array(

	

	  // Content Section for Widgets
	  'widgets' => array(
	    // Frontpage
	    'frontpage-1' => array( 
		// Widget ID
	        'WP_Widget_Text' => array(
			// Widget $id -> set when creating a Widget Class
	        	'text' , 
	        	// Widget $instance -> settings 
			array(
			 
					)
				  )
			    )
			  ),
			   
	 ));

	 	//Add responsive embed for Gutenberg
		add_theme_support( 'responsive-embeds' );


		//Add default Gutenberg editor styles
		add_theme_support( 'wp-block-styles' );


		//Add Gutenberg image align wide feature
		add_theme_support( 'align-wide' );




	/*
	 * Enable support for custom-logo
	 */	add_theme_support( 'custom-logo', array(
	   'flex-width' => false,
	   'height'     => 100,
   	  'width'      => 100,
	) );

	/*
	 * Enable selective customizer refresh
	 */
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'resumee_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'resumee_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function resumee_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'resumee_content_width', 640 );
}
add_action( 'after_setup_theme', 'resumee_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function resumee_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'resumee' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Adding widgets to this widget area will appear in Blog page sidebar', 'resumee' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Frontpage', 'resumee' ),
		'id'            => 'frontpage-1',
		'description'   => esc_html__( 'Add frontpage widgets in this section', 'resumee' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

  register_sidebar( array(
    'name'          => esc_html__( 'Footer', 'resumee' ),
    'id'            => 'footer-1',
    'description'   => esc_html__( 'Adding widgets to this widget area will appear in the footer', 'resumee' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );


}
add_action( 'widgets_init', 'resumee_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function resumee_scripts() {

	wp_enqueue_style( 'resumee-style', get_stylesheet_uri() );
	wp_enqueue_script( 'resumee-sidr', get_template_directory_uri() . '/js/sidr.js', array('jquery'), '0.0.1', true );
	wp_enqueue_script( 'resumee-js', get_template_directory_uri() . '/js/resumee.js', array('jquery'), '0.0.1', true );
	wp_enqueue_style('resumee-fontawesome',get_template_directory_uri().'/assets/fonts/font-awesome.css', array(), '4.7.0' );
  
	wp_enqueue_script( 'resumee-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'resumee_scripts' );



/* Add bootstrap support to the Wordpress theme*/
 
function resumee_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
}
 
add_action( 'wp_enqueue_scripts', 'resumee_add_bootstrap' );






//Theme upsell function
function resumee_upsell_notice() {
	 // Enqueue the script
	 wp_enqueue_script(
	 'resumee-customizer-upsell',
	 get_template_directory_uri() . '/js/upsell.js',
	 array(), '1.0.0',
	 true
	 );
	 // Localize the script
	 wp_localize_script(
	 'resumee-customizer-upsell',
	 'resumeeL10n',
	 array(
	 'resumeeURL'  => esc_url( 'https://asphaltthemes.com/resumee' ),
	 'resumeeLabel'  => __( 'Upgrade to PRO', 'resumee' ),
	 )
	 );
	}
add_action( 'customize_controls_enqueue_scripts', 'resumee_upsell_notice' );







//google font enqueue
function resumee_google_fonts() {
	$query_args = array(
		'family' => 'Open+Sans:300,400,700|Source+Sans+Pro:300,600,latin-ext',
	);
	wp_enqueue_style( 'resumee_google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
            }
            
add_action('wp_enqueue_scripts', 'resumee_google_fonts'); 



//remove [...] from excerpt
function resumee_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'resumee_excerpt_more');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Frontpage widgets
 */
require get_template_directory() . '/inc/widgets/front-intro-one.php';
require get_template_directory() . '/inc/widgets/front-experience-one.php';
require get_template_directory() . '/inc/widgets/front-education-two.php';
require get_template_directory() . '/inc/widgets/front-skill-one.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Default customizer settings for theme
 */
require get_template_directory() . '/inc/defaults.php';



/**
 * Theme activation redirector
 */
require_once( trailingslashit( get_template_directory() ) . '/inc/dashboard/resumee-info-dashboard.php');



/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer/customizer-function.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';