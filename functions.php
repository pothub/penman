<?php
/**
 * penman functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package penman
 */

if ( ! function_exists( 'penman_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function penman_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on penman, use a find and replace
		 * to change 'penman' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'penman', get_template_directory() . '/languages' );

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

		add_image_size( 'penman-promo-post', 360, 261, array( 'left', 'bottom' ) ); //(cropped)
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'penman' ),
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
		add_theme_support( 'custom-background', apply_filters( 'penman_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
endif;
add_action( 'after_setup_theme', 'penman_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function penman_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'penman_content_width', 640 );
}
add_action( 'after_setup_theme', 'penman_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function penman_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'penman' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'penman' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'penman' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here', 'penman' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'penman' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here', 'penman' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'penman' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here', 'penman' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'penman' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here', 'penman' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title"><span>',
		'after_title'   => '</span></h2>',
	) );
}
add_action( 'widgets_init', 'penman_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function penman_scripts() {
	/*google font  */
	wp_enqueue_style( 'penman-googleapis', '//fonts.googleapis.com/css?family=Muli:300,400|Source+Sans+Pro:600,700', array(), null );

	/*Font-Awesome-master*/
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/framework/Font-Awesome/css/font-awesome.min.css', array(), '4.5.0' );

	/*Bootstrap CSS*/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/framework/bootstrap/css/bootstrap.min.css', array(), '4.5.0' );

	/*Owl CSS*/
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/framework/owl-carousel/owl.carousel.css', array(), '4.5.0' );


	/*Style CSS*/
	wp_enqueue_style( 'penman-style', get_stylesheet_uri() );



	/*Bootstrap JS*/
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/framework/bootstrap/js/bootstrap.min.js', array('jquery'), '4.5.0' );


	/*navigation JS*/
	wp_enqueue_script( 'penman-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20151215', true );

	/*owl*/
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/framework/owl-carousel/owl.carousel.min.js', array('jquery'), '4.5.0' );

	/*Custom JS*/
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '4.5.0' );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'penman_scripts' );


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


/**
 * Load theme info file.
 */
require get_template_directory() . '/inc/customizer-inc/customizer-pro/class-customize.php';


/**
 * Load theme-function  file.
 */
require get_template_directory() . '/inc/theme-function.php';

/**
 * Load Custom widget File.
 */
require get_template_directory() . '/inc/custom-widget/press-widget.php';
require get_template_directory() . '/inc/custom-widget/author-widget.php';



function penman_custom_logo_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 70,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
add_action( 'after_setup_theme', 'penman_custom_logo_setup' );



function penman_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}

/*
 * Remove [...] from default fallback excerpt content
 *
 */
function penman_excerpt_more( $more ) {
	if(is_admin())
	{
		return $more;
	}
	return '';
}
add_filter( 'excerpt_more', 'penman_excerpt_more');

function my_php_Include($params = array()) {
	extract(shortcode_atts(array('file' => 'default'), $params));
	ob_start();
	include(STYLESHEETPATH . "/$file.php");
	return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');


function form_post() {
	echo "aa";
	// if(isset($_POST)){
		echo $_POST['name_'];
	// 	$email = $_POST['email'];
	// 	echo '<ul>';
	// 	echo '<li>'.$name.'</li>'
	// 		echo '<li>'.$email.'</li>'
	// 		echo '</ul>';
	}
// }
add_shortcode('sc_form_post', 'form_post');
