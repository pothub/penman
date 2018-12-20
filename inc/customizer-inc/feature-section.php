<?php
/*adding sections for category section in front page*/
$wp_customize->add_section( 'penman-feature-category', array(
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'title'          => __( 'Featured Section', 'penman' ),
    'description'          => __( 'Recommended image for slider is 1920*700', 'penman' )

) );

/* feature cat selection */
$wp_customize->add_setting( 'penman_theme_options[penman-feature-cat]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['penman-feature-cat'],
    'sanitize_callback' => 'absint'
) );

$wp_customize->add_control(
    new Penman_Customize_Category_Dropdown_Control(
        $wp_customize,
        'penman_theme_options[penman-feature-cat]',
        array(
            'label'		=> __( 'Select Category', 'penman' ),
            'section'   => 'penman-feature-category',
            'settings'  => 'penman_theme_options[penman-feature-cat]',
            'type'	  	=> 'category_dropdown',
            'priority'  => 10
        )
    )
);

