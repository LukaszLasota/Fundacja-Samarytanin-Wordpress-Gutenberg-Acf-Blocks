<?php
/**
 * samarytanin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package samarytanin
 */

if ( ! defined( 'SAMARYTANIN_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SAMARYTANIN_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function samarytanin_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on _s, use a find and replace
		* to change '_s' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'samarytanin', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );
	
	/** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

	 /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);
	
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Register support for Gutenberg wide images in your theme
	 */
	function mytheme_setup() {
	add_theme_support( 'align-wide' );
	}
	add_action( 'after_setup_theme', 'mytheme_setup' );
	
	// Add theme support for editor styles, gutenberg blocks
	add_theme_support('editor-styles');
	add_editor_style( 'editor-style.css' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'samarytanin' ),
			'menu-2' => esc_html__( 'footer', 'samarytanin' ),
			'menu-3' => esc_html__( 'footerTwo', 'samarytanin' ),
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
			'samarytanin_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

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
add_action( 'after_setup_theme', 'samarytanin_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function samarytanin_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'samarytanin_content_width', 640 );
}
add_action( 'after_setup_theme', 'samarytanin_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function samarytanin_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_s' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_s' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'samarytanin_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function samarytanin_scripts() {
	wp_enqueue_style( 'samarytanin-style', get_stylesheet_uri(), array(), SAMARYTANIN_VERSION );
	wp_style_add_data( 'samarytanin-style', 'rtl', 'replace' );

	wp_enqueue_script( 'samarytanin-navigation', get_template_directory_uri() . '/js/navigation.js', array(), SAMARYTANIN_VERSION, true );
	wp_enqueue_script( 'samarytanin-js', get_template_directory_uri() . '/js/main.js', array('jquery'), SAMARYTANIN_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'samarytanin_scripts' );

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

require get_template_directory() . '/inc/my-customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Load gutenberg blocks.
 */

require get_template_directory() . '/blocks/register-acf-blocks.php';
