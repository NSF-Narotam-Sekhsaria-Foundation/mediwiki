<?php
/**
 * mediwikiwp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mediwikiwp
 */

if ( ! function_exists( 'mediwikiwp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mediwikiwp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mediwikiwp, use a find and replace
		 * to change 'mediwikiwp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mediwikiwp', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'mediwikiwp' ),
			'primary_mobile_menu' => esc_html__( 'Primary-Mobile Menu', 'mediwikiwp' ),
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
		add_theme_support( 'custom-background', apply_filters( 'mediwikiwp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mediwikiwp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mediwikiwp_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'mediwikiwp_content_width', 640 );
}
add_action( 'after_setup_theme', 'mediwikiwp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mediwikiwp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mediwikiwp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mediwikiwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mediwikiwp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mediwikiwp_scripts() {
	wp_enqueue_style( 'mediwikiwp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'mediwikiwp-bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'mediwikiwp-custom-style', get_stylesheet_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'mediwikiwp-responsive-style', get_stylesheet_directory_uri() . '/css/responsive.css' );

	wp_enqueue_script( 'mediwikiwp-jquery', get_stylesheet_directory_uri() . '/js/jquery-1.12.4.js', array(), '1.12.4', true );
	wp_enqueue_script( 'mediwikiwp-bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );
	wp_enqueue_script( 'mediwikiwp-masonry', get_stylesheet_directory_uri() . '/js/masonry.pkgd.min.js', array(), '3.3.7', true );
	wp_enqueue_script( 'mediwikiwp-bootstrap-masonry', get_stylesheet_directory_uri() . '/js/bootstrap-masonry-plugin.js', array(), '3.3.7', true );
	wp_enqueue_script( 'mediwikiwp-script', get_stylesheet_directory_uri() . '/js/script.js', array(), '1.1.0', true );
    wp_enqueue_script( 'mediwikiwp-matchheight', get_stylesheet_directory_uri() . '/js/jquery.matchHeight.js', array(), '1.1.0', true );
	wp_localize_script( 'mediwikiwp-script', 'ajax_url', admin_url( 'admin-ajax.php' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mediwikiwp_scripts' );

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

//ACF Option Page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Options',
		//'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'General',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// Customize wp query object using pre_get_posts.
/*add_action( 'pre_get_posts', 'modify_wp_query_object' );
function modify_wp_query_object( $query ) {  
	// Customize archive query.
	if ( is_archive() ) {
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 2 );
	}
}*/

//Custom Search Form Start
function wpbsearchform( $form ) {
 
    $form = '<form role="search" method="get" class="search_form" id="searchform" action="' . home_url( '/' ) . '" >
    <div class="col-sm-9">
    	<input type="text" required placeholder="Search here" class="form-control search_field" value="' . get_search_query() . '" name="s" id="s" />
    </div>
    <div class="col-sm-3">
    	<span class="fa fa-search"></span>
    	<input type="submit" class="search_button" id="searchsubmit" value="'. esc_attr__('Search') .'" />
	</div>
	</form>';
 
    return $form;
}
 
add_shortcode('wpbsearch', 'wpbsearchform');
//Custom Search Form End


/**
* Ajax file
*/
require get_template_directory() . '/library/ajax.php';
require get_template_directory() . '/library/ajax-resource.php';

/**
* Enable SVG files to upload.
*/
function wp_mediwiki_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wp_mediwiki_mime_types');

function array_flatten($array) {
    if (!is_array($array)) {
        return FALSE;
    }
    $result = array();
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, array_flatten($value));
        }
        else {
            $result[$key] = $value;
        }
    }
    return $result;
}