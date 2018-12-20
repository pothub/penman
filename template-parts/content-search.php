<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package penman
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="penman-post-wrapper">
		<div class="penman-postcontent">
			<div class="penman-post-left">
				<div class="penman-post-icon-wrapper">
					<i class="fa fa-pencil"></i>
				</div>
				<div class="authorinfo">
					<?php
					if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php penman_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php
					endif; ?>
				</div>
			</div>
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->

			<footer class="entry-footer">
				<?php penman_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</div>
</article><!-- #post-## -->
