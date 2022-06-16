<?php
/**
 * Womazing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Womazing
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'womazing_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function womazing_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Womazing, use a find and replace
		 * to change 'womazing' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'womazing', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'womazing' ),
				'menu-2' => esc_html__( 'Подвал desc', 'womazing' ),
				'menu-3' => esc_html__( 'Подвал mobi_vers', 'womazing' ),
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
				'womazing_custom_background_args',
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
add_action( 'after_setup_theme', 'womazing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function womazing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'womazing_content_width', 640 );
}
add_action( 'after_setup_theme', 'womazing_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function womazing_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'womazing' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'womazing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'womazing_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function womazing_scripts() {

	wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/assets/css/bootstrap-reboot.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'womazing-main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION );

	
	wp_enqueue_script( 'jquery',);
	wp_enqueue_script( 'jquery.validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'womazing-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'womazing_scripts' );

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

/*
 * Redux config
 */
require get_template_directory() . '/inc/redux-config.php';


//Разрешить загрузку svg 
function allow_type($type) {
    $type['svg'] = 'image/svg+xml';
    return $type;
}
add_filter('upload_mimes', 'allow_type');

//Breadcrumb
function wpcourses_breadcrumb( $sep = '' ) {
	global $post;
	$out = '';
	$out .= '<li class="breadcrumb__list">';
	$out .= '<a href="' . home_url( '/' ) . '">Главная</a>';
	$out .= '<span class="breadcrumb__item">' . $sep . '</span>';
	if ( is_single() ) {
		$terms = get_the_terms( $post, 'category' );
		if ( is_array( $terms ) && $terms !== array() ) {
			$out .= '<a href="' . get_term_link( $terms[0] ) . '">' . $terms[0]->name . '</a>';
			$out .= '<span class="breadcrumb__item">' . $sep . '</span>';
		}
	}
	if ( is_singular() ) {
		$out .= '<span class="breadcrumb__list active">' . get_the_title() . '</span>';
	}
	if ( is_search() ) {
		$out .= get_search_query();
	}
	$out .= '</li><!--.wpcourses-breadcrumbs-->';
	return $out;
}

/*
 * Woocommerce config
 */
require get_template_directory() . '/inc/woo.php';

