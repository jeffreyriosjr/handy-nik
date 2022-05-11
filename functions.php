<?php
/**
 * handy-nick functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package handy-nick
 */

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
function handy_nick_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on handy-nick, use a find and replace
		* to change 'handy-nick' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'handy-nick', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'handy-nick' ),
			'footer-menu' => esc_html__( 'Footer', 'handy-nick')
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
			'handy_nick_custom_background_args',
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
add_action( 'after_setup_theme', 'handy_nick_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function handy_nick_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'handy_nick_content_width', 640 );
}
add_action( 'after_setup_theme', 'handy_nick_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function handy_nick_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'handy-nick' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'handy-nick' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'handy_nick_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function handy_nick_scripts() {
	wp_enqueue_style( 'handy-nick-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'handy-nick-style', 'rtl', 'replace' );

	wp_enqueue_script( 'handy-nick-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'handy_nick_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom Footer Menu
 */
function wpb_custom_new_menu() {
	register_nav_menu('footer-menu',__( 'Footer' ));
	register_nav_menu('footer-community-menu',__( 'Footer Community Menu' ));
}

add_action( 'init', 'wpb_custom_new_menu' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


function create_custom_post_type(){
    register_taxonomy_for_object_type('category', 'announcement');
    register_post_type('announcement',
        array(
            'labels' => array(
                'name' => __('Announcement Post', 'announcement'),
                'singular_name' => __('Announcement Post', 'announcement'),
                'add_new' => __('Add New', 'announcements'),
                'add_new_item' => __('Add New Announcement Post', 'announcement'),
                'edit' => __('Edit', 'announcement'),
                'edit_item' => __('Edit Announcement Post', 'announcement'),
                'new_item' => __('New Announcement Post', 'announcement'),
                'view' => __('View Announcement Post', 'announcement'),
                'view_item' => __('View Announcement Post', 'announcement'),
                'search_items' => __('Search Announcement Post', 'announcement'),
                'not_found' => __('No Announcement Posts found', 'announcement'),
                'not_found_in_trash' => __('No Announcement Posts found in Trash', 'announcement')
            ),
            'public' => true,
            'hierarchical' => false,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => array(
                'title',
                'editor'
            ),
            'can_export' => true,
            'taxonomies' => array(
                'post_tag',
                'category'
            )
        ));

}
add_action( 'init', 'create_custom_post_type', 0 );

// Get Alt Description of Media Image
function alt_description($img_url) {
	$img_id = attachment_url_to_postid($img_url);
	$img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', TRUE);
	return $img_alt;
}

// Sanitize textarea while keeping line breaks
function sanitize_textarea_keep_linebreaks($textarea) {
	$sanitized_textarea = sanitize_textarea_field($textarea);
    $clean_textarea = nl2br($sanitized_textarea);
	return $clean_textarea;
}

add_filter( 'wp_editor_set_quality', 'image_quality_update' );
add_filter( 'jpeg_quality', 'image_quality_update' );
function image_quality_update( $quality )
{
    return 100;
}

function return_style_string($background_field = '', $default_background = '', $text_field = '', $default_text = ''){
    $style_str  = '';

    if (!empty($default_background)) {
        $background_color = $background_field ? $background_field : $default_background;
        $style_str .= 'background-color:' . sanitize_hex_color($background_color ) . ';';
    }
    if (!empty($default_text)) {
        $text_color = $text_field ? $text_field : $default_text;
        $style_str .= ' color: ' . sanitize_hex_color($text_color) . ';';
    }

    return $style_str;
}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

