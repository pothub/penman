<?php
/**
 * penman Theme Customizer.
 *
 * @package penman
 */


/**
 * Sanitizing the select callback example
 *
 * @since penman 1.0.0
 *
 * @see sanitize_key()https://developer.wordpress.org/reference/functions/sanitize_key/
 * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
 *
 * @param $input
 * @param $setting
 * @return sanitized output
 *
 */
if ( !function_exists('penman_sanitize_select') ) :
    function penman_sanitize_select( $input, $setting ) {

        // Ensure input is a slug.
        $input = sanitize_key( $input );

        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control( $setting->id )->choices;

        // If the input is a valid key, return it; otherwise, return the default.
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
endif;


/**
 * Sanitize checkbox field
 *
 * @since 1.0.0
 */
if ( !function_exists('penman_sanitize_checkbox') ) :
        function penman_sanitize_checkbox( $checked )
        {
            // Boolean check.
            return ( ( isset( $checked ) && true == $checked ) ? true : false );
        }
    endif;


/**
 * Sidebar layout options
 *
 * @since penman 1.0.0
 *
 * @param null
 * @return array $penman_sidebar_layout
 *
 */
if ( !function_exists('penman_sidebar_layout') ) :
    function penman_sidebar_layout() {
        $penman_sidebar_layout =  array(
            'right-sidebar' => __( 'Right Sidebar', 'penman'),
            'left-sidebar'  => __( 'Left Sidebar' , 'penman'),
            'no-sidebar'    => __( 'No Sidebar', 'penman')
        );
        return apply_filters( 'penman_sidebar_layout', $penman_sidebar_layout );
    }
endif;


/**
 * Blog/Archive excerpt option
 *
 * @since penman 1.0.0
 *
 * @param null
 * @return array $penman_blog_excerpt
 *
 */
if ( !function_exists('penman_blog_excerpt') ) :
    function penman_blog_excerpt() {
        $penman_blog_excerpt =  array(
            'excerpt' => __( 'Excerpt', 'penman'),
            'content'  => __( 'Content' , 'penman'),
        );
        return apply_filters( 'penman_blog_excerpt', $penman_blog_excerpt );
    }
endif;




/**
 *  Default Theme options
 *
 * @since penman 1.0.0
 *
 * @param null
 * @return array $penman_theme_layout
 *
 */
if ( !function_exists('penman_default_theme_options') ) :
    function penman_default_theme_options() {

        $default_theme_options = array(
            /*feature section options*/
            'penman-feature-cat'  => 0,
            
            'penman-promo-cat'    => 0,

            'show_gravatar_option' => 0,

            'primary_color'       => "#f29a7f",

            'primary_hover_color' => "#c97156",

            'show_meta_option'    => 1,

            'excerpt_from'        => 'content',
            
            'read_more_text' => esc_html__('Read More','penman'),
            
            'penman-footer-copyright'=>esc_html__('Copyright &copy 2016 - 2018. All Rights Reserved.','penman'),
            
            'penman-layout'=>'right-sidebar',

            
        );

        return apply_filters( 'penman_default_theme_options', $default_theme_options );
    }
endif;



/**
 *  Get theme options
 *
 * @since penman 1.0.0
 *
 * @param null
 * @return array penman_theme_options
 *
 */
if ( !function_exists('penman_get_theme_options') ) :
    function penman_get_theme_options() {

        $penman_default_theme_options = penman_default_theme_options();
        

        $penman_get_theme_options = get_theme_mod( 'penman_theme_options');
        if( is_array( $penman_get_theme_options )){
            return array_merge( $penman_default_theme_options, $penman_get_theme_options );
        }
        else{
            return $penman_default_theme_options;
        }

    }
endif;

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function penman_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
  
     /*defaults options*/
    $defaults = penman_get_theme_options();

	
    /*adding sections for footer options*/
    $wp_customize->add_section( 'penman-blog-section-option', array(
        'priority'       => 169,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Blog Section Option', 'penman' )
    ) );



    // Setting Show Author Gravatar Image
    $wp_customize->add_setting( 'penman_theme_options[show_gravatar_option]',
        array(
            'default'           => $defaults['show_gravatar_option'],
            'sanitize_callback' => 'penman_sanitize_checkbox',
        )
    );

    $wp_customize->add_control( 'penman_theme_options[show_gravatar_option]',
        array(
            'label'             => esc_html__( 'Show Gravatar Image', 'penman' ),
            'section'           => 'penman-blog-section-option',
            'type'              => 'checkbox',
            'priority'          => 8,
        )
    );



    // Setting Show Metafield
    $wp_customize->add_setting( 'penman_theme_options[show_meta_option]',
        array(
            'default'           => $defaults['show_meta_option'],
            'sanitize_callback' => 'penman_sanitize_checkbox',
        )
    );

    $wp_customize->add_control( 'penman_theme_options[show_meta_option]',
        array(
            'label'             => esc_html__( 'Show Meta Field', 'penman' ),
            'section'           => 'penman-blog-section-option',
            'type'              => 'checkbox',
            'priority'          => 8,
        )
    );


    /**
     * Blog/Archive excerpt option
     */
    $wp_customize->add_setting(
        'penman_theme_options[excerpt_from]',
        array(
            'default' => $defaults['excerpt_from'],
            'sanitize_callback' => 'penman_sanitize_select',
        )
    );
    $blogexcerpt = penman_blog_excerpt();
    $wp_customize->add_control('penman_theme_options[excerpt_from]',
        array(
            'choices' => $blogexcerpt,
            'label' => esc_html__('Show Description From', 'penman'),
            'section' => 'penman-blog-section-option',
            'type' => 'select',
            'priority' => 8
        )
    );


    // Setting for Readmore Tex
    $wp_customize->add_setting( 'penman_theme_options[read_more_text]',
        array(
            'default'           => $defaults['read_more_text'],
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control( 'penman_theme_options[read_more_text]',
        array(
            'label'             => esc_html__( 'Readmore Text Field', 'penman' ),
            'section'           => 'penman-blog-section-option',
            'type'              => 'text',
            'priority'          => 8,
        )
    );



    /*adding sections for footer options*/
    $wp_customize->add_section( 'penman-footer-option', array(
        'priority'       => 170,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __( 'Footer Option', 'penman' )
    ) );

    /*copyright*/
    $wp_customize->add_setting( 'penman_theme_options[penman-footer-copyright]', array(
        'capability'        => 'edit_theme_options',
        'default'           => $defaults['penman-footer-copyright'],
        'sanitize_callback' => 'wp_kses_post'
    ) );
    $wp_customize->add_control( 'penman-footer-copyright', array(
        'label'     => __( 'Copyright Text', 'penman' ),
        'section'   => 'penman-footer-option',
        'settings'  => 'penman_theme_options[penman-footer-copyright]',
        'type'      => 'text',
        'priority'  => 10
    ) );

   
    // Setting site primary color.
    $wp_customize->add_setting( 'penman_theme_options[primary_color]',
        array(
            'default'           => $defaults['primary_color'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'penman_theme_options[primary_color]',
            array(
                'label'       => esc_html__( 'Primary Color', 'penman' ),
                'description' => esc_html__( 'Applied to main color of site.', 'penman' ),
                'section'     => 'colors',  
            )
        )
    );


     // Setting site primary Hover color.
    $wp_customize->add_setting( 'penman_theme_options[primary_hover_color]',
        array(
            'default'           => $defaults['primary_hover_color'],
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'penman_theme_options[primary_hover_color]',
            array(
                'label'       => esc_html__( 'Hover Color', 'penman' ),
                'description' => esc_html__( 'Applied to main color of site.', 'penman' ),
                'section'     => 'colors',  
            )
        )
    );


   
       
    /**
     * Load customizer custom-controls
     */
    require get_template_directory() . '/inc/customizer-inc/custom-controls.php';

    /**
     * Load customizer feature section
     */
    require get_template_directory() . '/inc/customizer-inc/feature-section.php';

     /**
     * Load customizer Promo section
     */
    require get_template_directory() . '/inc/customizer-inc/promo-section.php';

    /**
     * Load customizer Design Layout section
     */
    require get_template_directory() . '/inc/customizer-inc/site-layout-section.php';

}
add_action( 'customize_register', 'penman_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function penman_customize_preview_js() {
	wp_enqueue_script( 'penman_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151216', true );
}
add_action( 'customize_preview_init', 'penman_customize_preview_js' );
