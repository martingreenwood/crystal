<?php
/**
 * crystal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package crystal
 */

if ( ! function_exists( 'crystal_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function crystal_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on crystal, use a find and replace
	 * to change 'crystal' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'crystal', get_template_directory() . '/languages' );

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
	add_image_size( 'cover', '1600', '600', true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'crystal' ),
		'menu-2' => esc_html__( 'Services', 'crystal' ),
	) );

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

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'crystal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crystal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'crystal_content_width', 640 );
}
add_action( 'after_setup_theme', 'crystal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crystal_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'crystal' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'crystal' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'crystal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function crystal_scripts() {
	wp_enqueue_style( 'crystal-style', get_stylesheet_uri() );
	wp_enqueue_style( 'crystal-font', '//fonts.googleapis.com/css?family=Montserrat' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'crystal-fa', 'https://use.fontawesome.com/8b8e037e73.js', array(), '', true );
	wp_enqueue_script( 'crystal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'crystal-modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '', true );
	wp_enqueue_script( 'crystal-parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), '', true );
	wp_enqueue_script( 'crystal-custom', get_template_directory_uri() . '/js/custom.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'crystal_scripts' );

/**
 * Custom post types
 */
require get_template_directory() . '/inc/cpts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
