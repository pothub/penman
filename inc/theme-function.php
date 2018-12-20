<?php
/**
 * Select Images according to Category saved.
 *
 * @since Penman 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( !function_exists('penman_slider_images_selection') ) :
    function penman_slider_images_selection() 
    { 
          global $penman_theme_options;


          $category_name=$penman_theme_options['penman-feature-cat'];
                       
          $args = array( 'cat' =>$category_name , 'posts_per_page' => -1 );

          $query = new WP_Query($args);

          if($query->have_posts()):

            while($query->have_posts()):

             $query->the_post();
             if(has_post_thumbnail())
                {

                     $image_id = get_post_thumbnail_id();
                     $image_url = wp_get_attachment_image_src($image_id,'',true);
?>
                    <div class="feature-area" xmlns="http://www.w3.org/1999/html">
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image_url[0]);?>" alt=""></a>
                         <div class="feature-description text-center">
                            <figcaption>
                                <h2><?php the_title(); ?></h2>
                                <a href="<?php the_permalink(); ?>" class="read-more"><?php _e('Read More...','penman') ?></a>
                            </figcaption>

                         </div>
                    </div>
            

 <?php 
                }
            endwhile; endif;wp_reset_postdata();
   }
endif;



/**

 * Dynamic css

  * @package Paragon Themes

 * @subpackage Newie

 *

 * @param null

 * @return void

 *

 */

if ( !function_exists('penman_dynamic_css') ):

    function penman_dynamic_css(){

    $penman_theme_options  = penman_get_theme_options();
   
   /*====================Basic Color=====================*/

    $penman_primary_color     = $penman_theme_options['primary_color'];

   $penman_hover_color     = $penman_theme_options['primary_hover_color'];
    
  
   $custom_css = '';

/*====================Primary Color =====================*/

$custom_css .= " .site-title a, .main-navigation ul li.current-menu-item a, a:visited, a:focus, a:active, a, .authorinfo .entry-meta .date-day
                  {

                      color: " . $penman_primary_color . ";

                   }

                  ";

$custom_css .= " .a:hover, .main-navigation ul li a:hover, h1.site-title a:hover, a:hover,.nav-links .nav-next a:hover,.widget ul li a:hover
                  {

                      color: " . $penman_hover_color . ";

                   }

                  ";


$custom_css .= ".nav-links .nav-previous a, .nav-links .nav-next a, button, input[type='button'], input[type='reset'], input[type='submit'], .widget .search-submit,.more-area a

                  {

                      background: " . $penman_primary_color . ";

                   }

                  ";  


$custom_css .= ".nav-links .nav-previous a:hover, .nav-links .nav-next a:hover, button:hover, input[type='button']:hover, input[type='reset']:hover, input[type='submit']:hover, .widget .search-submit:hover,.more-area a:hover,.widget_meta ul li a:hover

                  {

                      background: " . $penman_hover_color . ";

                      color: #ffffff;

                   }

                  ";  

$custom_css .= " .widget_categories li a::before, .widget_recent_entries li a::before, .widget_archive li a::before, .widget_categories li a::before

                  {

                      color: " . $penman_primary_color . ";

                   }

                  ";  
       



    /*------------------------------------------------------------------------------------------------- */
    /*custom css*/
 
    wp_add_inline_style('penman-style', $custom_css);

}

endif;

add_action('wp_enqueue_scripts', 'penman_dynamic_css', 99);