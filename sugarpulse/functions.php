<?php
/**
 * sugarpulse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package sugarpulse
 */

define( 'THEME_VERSION', '1.0.0' );
define( 'THEME_PATH', get_template_directory_uri() );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sugarpulse_setup() {
	load_theme_textdomain( 'sugarpulse', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'main-menu-top' => esc_html__( 'Верхний элемент меню', 'sugarpulse' ),
			'main-menu-bot' => esc_html__( 'Нижний элемент меню', 'sugarpulse' ),
		)
	);

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
}
add_action( 'after_setup_theme', 'sugarpulse_setup' );

function sugarpulse_scripts() {
	wp_enqueue_script( 'app',  THEME_PATH . '/assets/js/app.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'ajax',  THEME_PATH . '/assets/js/backend.js', array(), THEME_VERSION, true );
	
	wp_enqueue_style( 'app-style', THEME_PATH . '/assets/css/app.css', array(), THEME_VERSION );
	wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), THEME_VERSION );

	wp_localize_script('ajax', 'ajax', array(
		'url' => admin_url('admin-ajax.php')
	));
}
add_action( 'wp_enqueue_scripts', 'sugarpulse_scripts' );

if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

require get_template_directory() . '/inc/cpt.php';
require get_template_directory() . '/inc/metafields.php';
require get_template_directory() . '/inc/walker.php';
