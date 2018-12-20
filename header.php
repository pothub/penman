<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penman
 */
global $penman_theme_options;
$penman_theme_options  = penman_get_theme_options();
$category_id = $penman_theme_options['penman-promo-cat'];
$category_name=$penman_theme_options['penman-feature-cat'];

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="boxed">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<div id="page">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'penman' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<nav id="site-navigation" class="main-navigation navbar" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only"><?php _e('Toggle navigation', 'penman');?></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
					    <div class="penman-logo">		
							<?php penman_the_custom_logo();?>		 
							 
						 </div>	 

                         <?php
							if ( is_front_page() && is_home() ) : ?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
								<?php
							endif; ?>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>


		<nav  class="main-navigation" role="navigation">

		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<?php if($category_name>0){ ?>

	<section  class="owl-wrapper clearfix">
		<div id="featured-slider">
			<?php penman_slider_images_selection(); ?>	
		</div>
	</section>

	<?php } if($category_id>0){ ?>
	<section class="promo-area">
	  <?php if ( is_front_page() && is_home() ){  ?>
			<div class="container">
				<div class="row">
						<?php
						$args = array( 'cat' =>$category_id , 'posts_per_page' =>3,'order'=>'DESC' );

						  $query = new WP_Query($args);

						  if($query->have_posts()):

							while($query->have_posts()):

							 $query->the_post();
					?>

							<div class="col-md-4">
								<a href="<?php the_permalink(); ?>">
								<?php

								 if(has_post_thumbnail())
							   {

									 $image_id = get_post_thumbnail_id();
									 $image_url = wp_get_attachment_image_src($image_id,'penman-promo-post',true);

								 ?>

									<figure>
										<img src="<?php echo esc_url($image_url[0]);?>">
									</figure>
								<?php } ?>

									<div class="category">
										<?php $posttags = get_the_tags();

										if(!empty($posttags))
										{
										?>
											<h2>
												<?php
													$count=0;
													if ($posttags) {
													  foreach($posttags as $tag) {
														$count++;
														if (1 == $count) {
														  echo $tag->name;
														}
													  }
													} ?>
											</h2>
										<?php } ?>
									</div>
								</a>
							</div>

					<?php    endwhile; endif;wp_reset_postdata();    ?>

				</div>
			</div>
     <?php } ?>
	</section>
	<?php } ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">