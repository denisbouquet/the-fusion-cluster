<?php
/**
 * thefusioncluster functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package thefusioncluster
 */



// REMOVE WP EMOJI
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
// remove wp version
remove_action('wp_head', 'wp_generator');


/**
* Allow additional MIME types
* Use 'text/plain' instead of 'application/json' for JSON because of a current Wordpress core bug
*/

function add_upload_mimes( $types ) { 
	$types['json'] = 'text/plain';
	return $types;
}
add_filter( 'upload_mimes', 'add_upload_mimes' );


// add_action('init', function() {

//   // remove duotone support for Gutenberg blocks
//   remove_filter('render_block', 'wp_render_duotone_support');
// });

remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );



// add 612 x 410px size 
add_image_size( 'article', 612, 410, true );

/*
* my_acf_json_save_point
*/
 

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/afc-json';
    
    // return
    return $path;  
}
 
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]); 
    
    // append path
    $paths[] = get_stylesheet_directory() . '/afc-json'; 
    
    // return
    return $paths;
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

}

// access editor to Ninja form
// Must use all three filters for this to work properly. 
add_filter( 'ninja_forms_admin_parent_menu_capabilities',   'nf_subs_capabilities' ); // Parent Menu
add_filter( 'ninja_forms_admin_all_forms_capabilities',     'nf_subs_capabilities' ); // Forms Submenu
add_filter( 'ninja_forms_admin_submissions_capabilities',   'nf_subs_capabilities' ); // Submissions Submenu

function nf_subs_capabilities( $cap ) {
    return 'edit_posts'; // EDIT: User Capability
}

/**
 * Filter hook used in the API route permission callback to retrieve submissions
 *
 * return bool as for authorized or not.
 */
add_filter( 'ninja_forms_api_allow_get_submissions', 'nf_define_permission_level', 10, 2 );
add_filter( 'ninja_forms_api_allow_delete_submissions', 'nf_define_permission_level', 10, 2 );
add_filter( 'ninja_forms_api_allow_update_submission', 'nf_define_permission_level', 10, 2 );
add_filter( 'ninja_forms_api_allow_handle_extra_submission', 'nf_define_permission_level', 10, 2 );
add_filter( 'ninja_forms_api_allow_email_action', 'nf_define_permission_level', 10, 2 );

function nf_define_permission_level() {
  
  $allowed = \current_user_can("delete_others_posts");
  
  return $allowed;
}


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function thefusioncluster_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on thefusioncluster, use a find and replace
		* to change 'thefusioncluster' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'thefusioncluster', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'thefusioncluster' ),
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
			'thefusioncluster_custom_background_args',
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
add_action( 'after_setup_theme', 'thefusioncluster_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thefusioncluster_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thefusioncluster_content_width', 640 );
}
add_action( 'after_setup_theme', 'thefusioncluster_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thefusioncluster_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'thefusioncluster' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'thefusioncluster' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'thefusioncluster_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thefusioncluster_scripts() {
	wp_enqueue_style( 'thefusioncluster-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'thefusioncluster-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '20151215', true );
	wp_enqueue_script( 'lottiefiles', 'https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/lottie-player.js', array(), '20221802', true );
	wp_enqueue_script( 'custom-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '20220523', true );
	wp_enqueue_script( 'thefusioncluster-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thefusioncluster_scripts' );

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

