<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package penman
 */

get_header();
global $penman_theme_options;
$designlayout = $penman_theme_options['penman-layout'];
$side_col = 'right-s-bar ';
if( 'left-sidebar' == $designlayout ){
	$side_col = 'left-s-bar';
}
?>

	<div id="primary" class="content-area col-md-9 <?php echo $side_col;?>">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content','single');

			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'penman' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'penman' ),
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'penman' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'penman' ),
			) );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
