<?php
/**
 * Unyt thema functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Unyt_thema
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'unyt_thema_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function unyt_thema_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Unyt thema, use a find and replace
		 * to change 'unyt-thema' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'unyt-thema', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'unyt-thema' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'unyt_thema_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'unyt_thema_setup' );


//Enqueue scripts and styles.
function unyt_thema_scripts() {
	// deregister default jQuery included with Wordpress
	wp_deregister_script( 'jquery' );

	// Adding jquery to the Theme - Start
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true );

	// Adding Bootstrap to the Theme - Start
	wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery') );

	//Main Javascript
	wp_enqueue_script( 'main', '/wp-content/themes/unyt-thema/js/main.js');

}
add_action( 'wp_enqueue_scripts', 'unyt_thema_scripts' );


//enqueue style
function unyt_thema_styles() {
	// Adding Bootstrap to the Theme - Start
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	
	//Main CSS
	wp_enqueue_style( 'unyt-thema-style', '/wp-content/themes/unyt-thema/style.css', array(), _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'unyt_thema_styles' );




//Slick toevoegen
add_action( 'wp_enqueue_scripts', 'slick_register_styles' );
function slick_register_styles() {
   wp_enqueue_style( 'slick-css', untrailingslashit( get_template_directory_uri() ) . '/assets/src/library/css/slick.css', [], false, 'all' );
   wp_enqueue_style( 'slick-theme-css', untrailingslashit( get_template_directory_uri() ) . '/assets/src/library/css/slick-theme.css', ['slick-css'], false, 'all' );
   wp_enqueue_script( 'slick-js', untrailingslashit( get_template_directory_uri() ) . '/assets/src/library/js/slick.min.js', ['jquery'], false, true );
   wp_enqueue_script( 'carousel-js', untrailingslashit( get_template_directory_uri() ) . '/assets/src/carousel/index.js', ['jquery', 'slick-js'], filemtime( untrailingslashit( get_template_directory() ) . '/assets/src/carousel/index.js' ), true );
}



/**
 * de tekst die een gebruiker in het inhoud veld intypt wordt in de the_excerpt() functie gezet om deze in header.php te tonen in de slick slider.
 */
add_filter( 'the_excerpt', function( $excerpt ) {
	$your_field = get_post_meta( get_the_ID(), 'inhoud', true );

	return $excerpt . $your_field;
});

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




//het bestand voor de themaopties plugin
include('theme-options-functions.php');

//het bestand voor de footeropties plugin
include("footer-options-functions.php");