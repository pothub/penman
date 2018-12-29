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

function wpcf7_main_validation_filter( $result, $tag ) {
	$type = $tag['type'];
	$name = $tag['name'];
	$_POST[$name] = trim( strtr( (string) $_POST[$name], "\n", " " ) );
	if ( 'email' == $type || 'email*' == $type ) {
		if (preg_match('/(.*)_confirm$/', $name, $matches)){
			$target_name = $matches[1];
			if ($_POST[$name] != $_POST[$target_name]) {
				if (method_exists($result, 'invalidate')) {
					$result->invalidate( $tag,"確認用のメールアドレスが一致していません");
				} else {
					$result['valid'] = false;
					$result['reason'][$name] = '確認用のメールアドレスが一致していません';
				}
			}
		}
	}
	return $result;
}
add_filter( 'wpcf7_validate_email', 'wpcf7_main_validation_filter', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_main_validation_filter', 11, 2 );

// Contact Form 7 に独自チェックリストを追加
add_action( 'wpcf7_init', 'wpcf7_add_form_tag_catlist' );

function wpcf7_add_form_tag_catlist() {
	wpcf7_add_form_tag( array( 'get_from_subject_db', 'get_from_subject_db*' ),
		'wpcf7_pagelist_form_tag_handler', // 下で設定する関数名が入る
		array(
			'name-attr' => true,
			'selectable-values' => true,
			'multiple-controls-container' => true,
		)
	);
}
$global_name_sub;
$global_fee;
// 独自タグの内容を定義する関数
function wpcf7_pagelist_form_tag_handler( $tag ) {
	if ( empty( $tag->name ) ) {
		return '';
	}
	$validation_error = wpcf7_get_validation_error( $tag->name );
	$class = wpcf7_form_controls_class( $tag->type );
	if ( $validation_error ) {
		$class .= ' wpcf7-not-valid';
	}
	// オプションの設定
	$use_label_element  = $tag->has_option( 'use_label_element' );
	$exclusive          = $tag->has_option( 'exclusive' );
	$multiple           = false;
	// if ( 'cat_list' == $tag->basetype ) {
	// 	$multiple = ! $exclusive;
	// }
	if ( $exclusive ) {
		$class .= ' wpcf7-exclusive-checkbox';
	}
	$atts = array();
	$atts['class']  = $tag->get_class_option( $class );
	$atts['id']     = $tag->get_id_option();
	$html = '';
	$count = 0;

	$class = 'wpcf7-list-item';
	$key        = $count;
	global $global_name_sub;
	global $global_fee;
	if($tag->has_option( 'subject_name' )){
		$value      = $global_name_sub;
	}
	if($tag->has_option( 'subject_fee' )){
		$value      = $global_fee;
	}

	$label      = $value;
	$item_atts = array(
		'type'      => 'checkbox',
		'name'      => $tag -> name . ( $multiple ? '[]' : '' ),
		'value'     => $value,
	);
	$item_atts = wpcf7_format_atts( $item_atts );
	$item = sprintf(
		'<input %2$s checked="checked" onclick="return false;" /><span class="wpcf7-list-item-label">%1$s</span>',esc_html( $label ), $item_atts );
	if ( $use_label_element ) {
		$item = '<label>' . $item . '</label>';
	}
	$count += 1;
	if ( 1 == $count ) {
		$class .= ' first';
	}
	if ( count( $children ) == $count ) { // last round
		$class .= ' last';
	}
	$item = '<span class="' . esc_attr( $class ) . '">' . $item . '</span>';
	$html .= $item;
	// } // foreach
	$atts = wpcf7_format_atts( $atts );
	$html = sprintf(
		'<span class="wpcf7-form-control-wrap %1$s"><span %2$s>%3$s</span>%4$s</span>',
		sanitize_html_class( $tag->name ), $atts, $html, $validation_error );
	// postをリセット
	wp_reset_postdata();
	return $html;
}
// バリデートの設定
add_filter( 'wpcf7_validate_cat_list', 'wpcf7_cat_list_validation_filter', 10, 2 );
add_filter( 'wpcf7_validate_cat_list*', 'wpcf7_cat_list_validation_filter', 10, 2 );
function wpcf7_cat_list_validation_filter( $result, $tag ) {
	$type = $tag->type;
	$name = $tag->name;
	$is_required = $tag->is_required() || 'get_from_subject_db*' == $type; // 'cat_list*' は独自タグ
	$value = isset( $_POST[$name] ) ? (array) $_POST[$name] : array();
	if ( $is_required && empty( $value ) ) {
		$result->invalidate( $tag, wpcf7_get_message( 'invalid_required' ) );
	}
	return $result;
}

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

$dbh = new PDO('mysql:dbname=mydb;host=localhost', 'wordpressuser', 'Vista');
// $sql_nagoya = 'select * from subjects_hiroshima';
$sql_nagoya = 'select * from subjects_nagoya';

function check_deadline_($attr) {
	$today = new DateTime();
	$today->setTimeZone(new DateTimeZone('Asia/Tokyo'));
	try{
		ob_start();
		global $dbh;
		global $sql_nagoya;
		foreach ($dbh->query($sql_nagoya) as $row) {
			if(strcmp($attr[0],$row['id_subject']) == 0){
				// if (!is_null($row['apply_deadline'])){
				if(strtotime($today->format('Y-m-d H:i:s')) < strtotime($row['apply_deadline'])){
					print '<center>お申し込み受付中<br>申し込まれる方は以下のフォームに入力して、最終行の送信ボタンを押してください。</center>';
					echo do_shortcode('[contact-form-7 id="398" title="cource_apply_template"]');
				}
				else{
					print '<center>募集を締め切りました</center>';
				}
				print('<br />');
			}
		}
		return ob_get_clean();
	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}

}
add_shortcode('check_deadline', 'check_deadline_');

function show_subject_detile_($attr) {
	ob_start();
	global $global_name_sub;
	global $global_fee;
	try{
		global $dbh;
		global $sql_nagoya;
		$mode_parent_child;
		foreach ($dbh->query($sql_nagoya) as $row) {
			if(strcmp($attr[0],$row['id_subject']) == 0){
				if (is_null($row['id_parent'])){ // if no child
					$mode_parent_child = 0;
					print '<center>'.$row['name_subject'].'</center>';
					$global_name_sub = $row['name_subject'];
				}
				else{
					$mode_parent_child = 1;
					foreach ($dbh->query($sql_nagoya) as $row_p) {
						if(strcmp($row_p['id_subject'],$row['id_parent']) == 0){
							print '<center>'.$row_p['name_subject'].' '.$row['name_child'].'</center>';
							$global_name_sub = $row_p['name_subject'].' '.$row['name_child'];
							$opening_time_ = $row_p['opening_time'];
							$fee_ = $row_p['fee'];
						}
					}
				}


				print('・開講日');
				print('<br />');
				print($row['opening_date_begin']);
				print('<br />');
				print('<br />');

				print('・開講時間');
				print('<br />');
				if($mode_parent_child == 0){
					print($row['opening_time']);
				}
				else{
					print($opening_time_);
				}

				print('<br />');
				print('<br />');
				print('・受講申込期間');
				print('<br />');
				print($row['apply_deadline'].' まで');
				print('<br />');
				print('<br />');

				print('・受講料');
				print('<br />');
				if($mode_parent_child == 0){
					print($row['fee']);
					$global_fee = $row['fee'];
				}
				else{
					print($fee_);
					$global_fee = $fee_;
				}
				print('<br />');
				print('<br />');

			}
		}
	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}
}
add_shortcode('show_subject_detile', 'show_subject_detile_');

function show_subjetList_nagoya_($attr) {
	try{
		ob_start();
?>
<table border="1">
<tr>
<?php
		global $dbh;
		global $sql_nagoya;
		$num = 0;
		foreach ($dbh->query($sql_nagoya) as $row) {
			if ((!is_null($row['name_subject']) and ($row['type'] == $attr[0]))){
				print '<td><center><u><h4><a href="'.$row['URL'].'">'.$row['name_subject'].'</a></h4></u></center></td>';
				$num += 1;
				if($num %3 == 0){
					echo '<tr>';
				}
			}
		}
?>
</table>
<?php
		return ob_get_clean();
	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		die();
	}
}
add_shortcode('show_subjetList_nagoya', 'show_subjetList_nagoya_');
