<?php
if ( ! defined( 'SAMARYTANIN_VERSION' ) ) {
	define( 'SAMARYTANIN_VERSION', '1.0.0' );
}

function samarytanin_setup() {

	load_theme_textdomain( 'samarytanin', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	
    add_theme_support( 'automatic-feed-links' );

    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);
	
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'align-wide' );
	
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'samarytanin' ),
			'menu-2' => esc_html__( 'footer', 'samarytanin' ),
			'menu-3' => esc_html__( 'footerTwo', 'samarytanin' ),
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

function samarytanin_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'samarytanin_content_width', 640 );
}
add_action( 'after_setup_theme', 'samarytanin_content_width', 0 );

function samarytanin_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'samarytanin' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'samarytanin' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'samarytanin_widgets_init' );

function enqueue_samarytanin_scripts() {

    $cssFilePath = glob( get_stylesheet_directory() . '/assets/build/css/main.min.*.css' );
    $cssFileURI = get_stylesheet_directory_uri() . '/assets/build/css/' . basename($cssFilePath[0]);
    wp_enqueue_style( 'main_css', $cssFileURI );

    $jsFilePath = glob( get_stylesheet_directory() . '/assets/build/js/main.min.*.js' );
    $jsFileURI = get_stylesheet_directory_uri() . '/assets/build/js/' . basename($jsFilePath[0]);
    wp_enqueue_script( 'main_js', $jsFileURI , null , null , true );

    // wp_localize_script('main_js', 'wpApiSettings', array(

    //   'root' => esc_url_raw( rest_url() ), 
    //   'nonce' => wp_create_nonce( 'wp_rest' ),
    //   'my_home_url' => esc_url( home_url() ),
    // ));

  }
add_action( 'wp_enqueue_scripts', 'enqueue_samarytanin_scripts' );


function wpdocs_theme_add_editor_styles() {

	$cssFilePath = glob( get_stylesheet_directory() . '/assets/build/css/main.min.*.css' );
    $cssFileURI = get_stylesheet_directory_uri() . '/assets/build/css/' . basename($cssFilePath[0]);
    
	add_theme_support('editor-styles');
	add_editor_style($cssFileURI);

}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

/**
 * Add inline css editor width
 */

function editor_full_width_gutenberg() {
  echo '<style>
    body.gutenberg-editor-page .editor-post-title__block, body.gutenberg-editor-page .editor-default-block-appender, body.gutenberg-editor-page .editor-block-list__block {
		max-width: none !important;
	}
    .block-editor__container .wp-block {
        max-width: none !important;
    }
    /*code editor*/
    .edit-post-text-editor__body {
    	max-width: none !important;	
    	margin-left: 2%;
    	margin-right: 2%;
    }
  </style>';
}

add_action('admin_head', 'editor_full_width_gutenberg');

require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/my-customizer.php';

require get_template_directory() . '/blocks/register-acf-blocks.php';
