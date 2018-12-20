<?php
/*adding sections for category selection for promo section in homepage*/
$wp_customize->add_section( 'penman-site-layout', array(
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'title'          => __( 'Design Layout', 'penman' )
) );

/* feature cat selection */
$wp_customize->add_setting( 'penman_theme_options[penman-layout]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['penman-layout'],
    'sanitize_callback' => 'penman_sanitize_select'
) );

$choices = penman_sidebar_layout();
$wp_customize->add_control('penman_theme_options[penman-layout]',
            array(
            'choices'   => $choices,
            'label'		=> __( 'Select Design Layout', 'penman'),
            'section'   => 'penman-site-layout',
            'settings'  => 'penman_theme_options[penman-layout]',
            'type'	  	=> 'select',
            'priority'  => 10
         )
    );



