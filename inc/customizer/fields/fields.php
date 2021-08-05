<?php 
/**
 * @Packge     : Gym
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'gym_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'gym' ),
        'description' => esc_html__( 'Select the theme color.', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_general_section',
        'default'     => '#131313',
    )
);

// Header button label
Epsilon_Customizer::add_field(
    'gym_header_btn_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Button Text', 'gym' ),
        'section'     => 'gym_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Join Us', 'gym' ),
    )
);

// Header button url
Epsilon_Customizer::add_field(
    'gym_header_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Button URL', 'gym' ),
        'section'     => 'gym_header_section',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

// Header call button bg color
Epsilon_Customizer::add_field(
    'gym_book_btn_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Color', 'gym' ),
        'description' => esc_html__( 'Select the color.', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_header_section',
        'default'     => '#131313',
    )
);

// Header book button hover bg color
Epsilon_Customizer::add_field(
    'gym_book_btn_hvr_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Hover Bg Color', 'gym' ),
        'description' => esc_html__( 'Select the color.', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_header_section',
        'default'     => '#131313',
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'gym' ),
        'section'     => 'gym_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'gym_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'gym' ),
        'description' => esc_html__( 'Select the header background color.', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'gym_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'gym_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'gym_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'gym_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_header_section',
        'default'     => '#808080',
    )
);


// Social Profile section
Epsilon_Customizer::add_field(
    'footer_social_profile_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'gym' ),
        'section'     => 'gym_social_section',

    )
);

// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'gym_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'gym' ),
        'section'     => 'gym_social_section',
        'default'     => true,
    )
);

// Footer Social Profile links
Epsilon_Customizer::add_field(
	'gym_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'gym_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'gym' ),
        'button_label' => esc_html__( 'Add new social link', 'gym' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'gym' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Google Plus', 'gym' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-google-plus',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'gym' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'gym' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'gym' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'gym' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'gym' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'gym_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'gym' ),
        'description' => esc_html__( 'Set post excerpt length.', 'gym' ),
        'section'     => 'gym_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'gym_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'gym' ),
        'section'     => 'gym_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'gym_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'gym' ),
        'section'     => 'gym_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'gym_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'gym' ),
        'section'     => 'gym_blog_section',
        'default'     => true
    )
);
 

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'gym' ),
        'section'     => 'gym_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'gym_footer_brochure_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Footer Brochure Link', 'gym' ),
        'description' => esc_html__( 'Paste Brochure Link Here', 'gym' ),
        'section'     => 'gym_footer_section',
    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'gym_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'gym' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'gym' ),
        'section'     => 'gym_footer_section',
        'default'     => true,
    )
);

// Footer Additional Settings section
Epsilon_Customizer::add_field(
    'footer_additional_settings_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Additional Settings', 'gym' ),
        'section'     => 'gym_footer_section',

    )
);


// Footer short text title
Epsilon_Customizer::add_field(
    'gym_footer_text_title',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Footer widget short text title', 'gym' ),
        'section'           => 'gym_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => esc_html__( 'About', 'gym' ),
    )
);

// Footer short text field
Epsilon_Customizer::add_field(
    'gym_footer_text',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Footer short text', 'gym' ),
        'section'           => 'gym_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '<p>5th flora, 700/D kings road, green
        lane New York-1782
        <a href="#">+10 367 826 2567</a>
        <a href="#">contact@carpenter.com</a>
        </p><p></p>',
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'gym_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'gym' ),
        'section'           => 'gym_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'gym_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'gym' ),
        'section'           => 'gym_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'gym_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'gym_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'gym_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_fof_section',
        'default'     => '#fff',
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'gym_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'gym' ),
        'section'     => 'gym_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'gym' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'gym_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'gym' ),
        'section'     => 'gym_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget bg color field
Epsilon_Customizer::add_field(
    'gym_footer_widget_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Bg Color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_footer_section',
        'default'     => '#1f1b1b',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'gym_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'gym_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_footer_section',
        'default'     => '#a3a3a3',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'gym_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_footer_section',
        'default'     => '#9e9e9e',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'gym_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'gym' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'gym_footer_section',
        'default'     => '#ffffff',
    )
);

