<?php

class Penman_Press_Widget extends WP_Widget{
     public function __construct(){
          parent::__construct(
               'press-widget',
               __( 'Press Widget', 'penman' ),
               array( 'description' => __( 'Best displayed in Home page.', 'penman' ) )
          );
     }



     public function widget( $args, $instance ){
          extract( $args );
           if(!empty($instance)){ 
            ?>
              <section  class="widget">
                 <a href="<?php echo esc_url($instance['link']);?>">
                    <h2><span><?php echo esc_html( $instance['title'] );?></span></h2>
                    <figure>
                        <img src="<?php echo esc_url( $instance['image_uri'] );?>" >
                    </figure>
                 </a>
              </section>
         <?php
       }
     }



     public function update( $new_instance, $old_instance ){
          $instance = $old_instance;
          $instance['title'] = strip_tags( $new_instance['title'] );
          $instance['link'] = esc_url_raw( $new_instance['link'] );
          $instance['image_uri'] = esc_url_raw( $new_instance['image_uri'] );
          return $instance;
     }

     public function form($instance ){
          ?>

              <p>
                 <label for="<?php echo $this->get_field_id('image_uri'); ?>"><?php _e( 'Image', 'penman' ); ?></label><br />
                 <?php
                     if (isset($instance['image_uri']) && $instance['image_uri'] != '' ) :
                         echo '<img class="custom_media_image" src="' . esc_url( $instance['image_uri'] ). '" style="margin:0;padding:0;max-width:100px;float:left;display:inline-block" /><br />';
                     endif;
                 ?>
                 <input type="text" class="widefat custom_media_url" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>" value="<?php 
                if (isset($instance['image_uri']) && $instance['image_uri'] != '' ) :
                     echo esc_url( $instance['image_uri'] );
                    endif;
                     ?>" style="margin-top:5px;">
                 <input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name('image_uri'); ?>" value="<?php esc_attr_e('Upload Image','penman')?>" style="margin-top:5px;" />
             </p>

             <p>

                 <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e( 'Title', 'penman' ); ?></label><br />
                 <input type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" value="<?php
                  if (isset($instance['title']) && $instance['title'] != '' ) :
                    echo esc_attr($instance['title']);
                   endif;

                   ?>" class="widefat" />
             </p>
              <p>
                 <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e( 'Link', 'penman' ); ?></label><br />
                 <input type="text" name="<?php echo $this->get_field_name('link'); ?>" id="<?php echo $this->get_field_id('link'); ?>" value="<?php 
                   if (isset($instance['link']) && $instance['link'] != '' ) :
                    echo esc_url( $instance['link'] ); 

                 endif;


                 ?>" class="widefat" />
                 <span class="small"></span>
              </p>
          <?php
     }
}


add_action( 'admin_enqueue_scripts', 'penman_press_widgets_backend_enqueue' ); 
function penman_press_widgets_backend_enqueue(){     
    wp_register_script( 'penman-custom-widgets', get_template_directory_uri().'/assets/js/widgets.js', array( 'jquery' ), true );
    wp_enqueue_media();
    wp_enqueue_script( 'penman-custom-widgets' );
}
add_action( 'widgets_init', 'penman_press_widget' );
function penman_press_widget(){     
    register_widget( 'Penman_Press_Widget' );
}















