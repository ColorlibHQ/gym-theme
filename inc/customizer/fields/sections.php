<?php 
/**
 * @Packge     : Gym
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'gym_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'gym' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'gym_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'gym' ),
            'panel'    => 'gym_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'gym_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'gym' ),
            'panel'    => 'gym_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'gym_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'gym' ),
            'panel'    => 'gym_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'gym_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'gym' ),
            'panel'    => 'gym_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'gym_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'gym' ),
            'panel'    => 'gym_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'gym_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'gym' ),
            'panel'    => 'gym_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'gym_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'gym' ),
            'panel'    => 'gym_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'gym_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'gym' ),
            'panel'    => 'gym_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>