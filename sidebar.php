<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penman
 */
global $penman_theme_options;
$designlayout = $penman_theme_options['penman-layout'];



if ( ! is_active_sidebar( 'sidebar-1' ) || 'no-sidebar' == $designlayout ) {
	return;
}
$side_col = 'left-s-bar';
if( 'left-sidebar' == $designlayout ){
	$side_col = 'right-s-bar';
}
?>

<aside id="secondary" class="col-md-3 widget-area <?php echo $side_col; ?>" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
