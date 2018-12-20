<?php
/*adding sections for category selection for promo section in homepage*/
$wp_customize->add_section( 'penman-promo-category', array(
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'title'          => __( 'Promo Section', 'penman' ),
    'description'    => __( 'Recommended image for col section is 600*600', 'penman' )
) );

/* feature cat selection */
$wp_customize->add_setting( 'penman_theme_options[penman-promo-cat]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['penman-promo-cat'],
    'sanitize_callback' => 'absint'
) );

$wp_customize->add_control(
    new Penman_Customize_Category_Dropdown_Control(
        $wp_customize,
        'penman_theme_options[penman-promo-cat]',
        array(
            'label'		=> __( 'Select Category', 'penman' ),
            'section'   => 'penman-promo-category',
            'settings'  => 'penman_theme_options[penman-promo-cat]',
            'type'	  	=> 'category_dropdown',
            'priority'  => 10
        )
    )
);

