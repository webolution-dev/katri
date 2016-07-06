<?php
/**
 * Katri functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Katri
 */

if ( ! function_exists( 'index_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function index_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Katri, use a find and replace
	 * to change 'index' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'index', get_template_directory() . '/languages' );

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
	register_nav_menus( array( // Регистрируем меню хедера
		'top' => 'Меню верхнее'
	) );
	register_nav_menus( array( // Регистрируем меню футера
		'bottom' => 'Меню нижнее'
	) );
	register_nav_menus( array( // Регистрируем меню футера
		'all-products' => 'Меню товаров'
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
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'index_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'index_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function index_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'index_content_width', 640 );
}
add_action( 'after_setup_theme', 'index_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function index_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'index' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'index' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'index_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function index_scripts() {
	// wp_enqueue_style( 'index-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'index-query-1.10.2.min', get_template_directory_uri() . '/js/jquery-1.10.2.min.js', array(), '1.0', true );
	wp_enqueue_script( 'index-query.fancybox.pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array(), '1.0', true );
	wp_enqueue_script( 'index-owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0', true );
	wp_enqueue_script( 'index-jquery.maskedinput.min', get_template_directory_uri() . '/js/jquery.maskedinput.min.js', array(), '1.0', true );
	wp_enqueue_script( 'index-lightslider.min', get_template_directory_uri() . '/js/lightslider.min.js', array(), '1.0', true );
	wp_enqueue_script( 'index-jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '1.0', true );
	wp_enqueue_script( 'index-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'index_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}