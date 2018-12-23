<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penman
 */
 global $penman_theme_options;
  $copyright= wp_kses_post($penman_theme_options['penman-footer-copyright']);
?>
			</div><!-- #row -->
		</div><!-- #container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
		<?php
			
			if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4'))
			{ 

			?>

				<div class="top-footer">
					<div class="container">
						<div class="row">
							
						<?php
						   	$count = 0;
								for ( $i = 1; $i <= 4; $i++ )
								    {
									  if ( is_active_sidebar( 'footer-' . $i ) )
									        {
												$count++;
											}
									}
								$column = 3;
								if( $count == 4 ) 
								{
								   	$column = 3;  
							   
								}
						        elseif( $count == 3)
						        {
						             	$column = 4;
						        }
						        elseif( $count == 2) 
						        {
						             	$column = 6;
						        }
						       elseif( $count == 1) 
						        {
						             	$column = 12;
						        }	
 							
 							for ( $i = 1; $i <= $count ; $i++ )
					    	{
		    				  	if ( is_active_sidebar( 'footer-' . $i ) )
		    				  	{
							?>	
								<div class="col-md-<?php echo esc_attr($column ); ?>">
									   <?php dynamic_sidebar( 'footer-' . $i ); ?>
								</div>

							   <?php


							    }  
							}	
							?>


						</div>
					</div>
				</div>
      <?php } ?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
