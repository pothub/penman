<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package penman
 */
global $penman_theme_options;
$show_meta_field      = absint($penman_theme_options['show_meta_option']);
$show_gravatar_option = absint($penman_theme_options['show_gravatar_option']);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="penman-post-wrapper">
	   <!--post thumbnal options-->
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>">
			 <?php the_post_thumbnail( 'full' ); ?>
			</a>
		</div><!-- .post-thumb-->
		<div class="penman-postcontent">
			<div class="penman-post-left">
				<div class="penman-post-icon-wrapper">                    
                    <?php
                      	if( $show_gravatar_option == 0 ){                
                      	?>
                  		<i class="fa fa-pencil"></i>
                			<?php }
                      	else{
	                    $user = wp_get_current_user();	 
							if ( $user ) :
							    ?>
							    <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
							<?php endif; 
					  }?>			
				</div>
				<div class="authorinfo">
					<?php
					if ( 'post' === get_post_type() && $show_meta_field == 1 ) : ?>
					<div class="entry-meta">
						<?php penman_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php
					endif; ?>
				</div>
			</div>
			<header class="entry-header">
				<?php
					the_title( '<h1 class="entry-title">', '</h1>' );
				if ( 'post' === get_post_type() ) : ?>
				<?php
				endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-content">
				<?php
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'penman' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'penman' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<?php 
			  	if( $show_meta_field == 1 ){
			    ?>
					<footer class="entry-footer">
						<?php penman_entry_footer(); ?>
					</footer><!-- .entry-footer -->
			<?php } ?>
		</div>
	</div>

	
</article><!-- #post-## -->