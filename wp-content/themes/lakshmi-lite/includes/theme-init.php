<?php
/*********Lakshmi Setup**************/
add_action( 'after_setup_theme', 'lakshmi_lite_setup' );
if ( ! function_exists( 'lakshmi_lite_setup' ) ):
function lakshmi_lite_setup() {

	add_editor_style('admin/css/custom-editor-style.css');
	
	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	
	add_theme_support( 'title-tag' );
	
	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );
		
	// This theme supports a variety of post formats.
	if (defined('FW')) {
		add_theme_support( 'post-formats', array( 'gallery', 'link', 'quote' ) );
	}
	
	//Add Custom Image Size
	add_image_size( 'lakshmi-lite-entry-image', '890', '420', true );
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'mainmenu' => __( 'Main Menu', 'lakshmi-lite')

	) );
	register_nav_menus( array(
		'mobilmenu' => __( 'Mobil Menu', 'lakshmi-lite')

	) );
	register_nav_menus( array(
		'secondarymenu' => __( 'Secondary Header Menu', 'lakshmi-lite')

	) );
	register_nav_menus( array(
		'footermenu' => __( 'Footer Menu', 'lakshmi-lite')

	) );
}
endif;

/*********Theme Support**************/
if ( ! function_exists( 'lakshmi_lite_custom_setup' ) ):
function lakshmi_lite_custom_setup() {
	if ( ! defined( 'FW' ) ) {
		add_theme_support( "custom-background",
			array(
				'default-color' => 'fcfcfc',
				'default-image' => '',
				'default-repeat'     => 'repeat',
				'default-position-x' => 'center',
				'default-attachment' => 'scroll',
    			'wp-head-callback' => 'lakshmi_lite_custom_background_cb',
			)
		);
		
		add_theme_support( 'custom-logo', array(
			'height'      => 62,
			'width'       => 250,
			'flex-height' => true,
		) );

		add_theme_support( "custom-header",
			array(
				'default-image'          => '',
				'flex-height'            => false,
				'flex-width'             => false,
				'uploads'                => true,
				'random-default'         => false,
				'header-text'            => false,
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
			)
		);
		
		add_theme_support( 'starter-content', array(
			'nav_menus' => array(
				'mainmenu' => array(
					'items' => array(
						'page_home',
						'page_about',
						'page_contact',
						'page_blog',
					)
				),
			),
			'posts' => array(
				'home',
				'about',
				'contact',
				'blog',
			),
		));
	}
}
endif;
add_action( 'after_setup_theme', 'lakshmi_lite_custom_setup' );

if ( ! function_exists ('lakshmi_lite_custom_background_cb') ):
function lakshmi_lite_custom_background_cb() {
    ob_start();
}
endif;

/*********Customizer without Unyson**************/
if ( ! function_exists ('lakshmi_lite_customize_register') ):
function lakshmi_lite_customize_register( $wp_customize ) {
	if ( ! defined( 'FW' ) ) {

		$wp_customize->add_section( 'lakshmi_lite_header_settings' , array(
			'title'      => __( 'Header Settings', 'lakshmi-lite' ),
			'priority'   => 50,
		) );
		
		$wp_customize->add_setting( 'header_title_text' , array(
			'default'     => '',
			'transport'   => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'top_header_text', array(
			'label'        => __( 'Top Header Text', 'lakshmi-lite' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'header_title_text',
			'description'   => __( 'Add Your text to the top header', 'lakshmi-lite' ),
		) ) );
		
		$wp_customize->add_setting( 'feautered_blog_posts' , array(
			'default'     => __( 'off', 'lakshmi-lite' ),
			'transport'   => 'refresh',
			'sanitize_callback' => 'lakshmi_lite_sanitize_onoff',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'feautered_blog_posts', array(
			'label'        => __( 'Featured Blog Posts', 'lakshmi-lite' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'feautered_blog_posts',
			'type'           => 'radio',
            'choices'        => array(
                'on'   => __( 'on', 'lakshmi-lite' ),
                'off'  => __( 'off', 'lakshmi-lite' )
            ),
			'description'   => __( 'Featured posts on blog page.', 'lakshmi-lite' ),
		) ) );
		
		$wp_customize->add_setting( 'header_button_text' , array(
			'default'     => __( 'Lakshmi', 'lakshmi-lite' ),
			'transport'   => 'refresh',
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_text', array(
			'label'        => __( 'Header Button Text', 'lakshmi-lite' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'header_button_text',
			'description'   => __( 'Add Your text or leave empty.', 'lakshmi-lite' ),
		) ) );
		
		$wp_customize->add_setting( 'header_button_link' , array(
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_button_link', array(
			'label'        => __( 'Header Button Link', 'lakshmi-lite' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'header_button_link',
			'description'   => __( 'Add Your link.', 'lakshmi-lite' ),
		) ) );
		
		$wp_customize->add_setting( 'social_1' , array(
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_link_1', array(
			'label'        => __( 'Facebook', 'lakshmi-lite' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'social_1',
			'description'   => __( 'Add Your link or leave empty.', 'lakshmi-lite' ),
		) ) );
		
		$wp_customize->add_setting( 'social_2' , array(
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_link_2', array(
			'label'        => __( 'Google', 'lakshmi-lite' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'social_2',
			'description'   => __( 'Add Your link or leave empty.', 'lakshmi-lite' ),
		) ) );
		
		$wp_customize->add_setting( 'social_3' , array(
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_link_3', array(
			'label'        => __( 'Twitter', 'lakshmi-lite' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'social_3',
			'description'   => __( 'Add Your link or leave empty.', 'lakshmi-lite' ),
		) ) );
		
		$wp_customize->add_setting( 'social_4' , array(
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_link_4', array(
			'label'        => __( 'Youtube', 'lakshmi-lite' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'social_4',
			'description'   => __( 'Add Your link or leave empty.', 'lakshmi-lite' ),
		) ) );
		
		$wp_customize->add_setting( 'social_5' , array(
			'default'     => '#',
			'transport'   => 'refresh',
			'sanitize_callback' => 'esc_url_raw',
		) );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_link_5', array(
			'label'        => __( 'Linkedin', 'lakshmi-lite' ),
			'section'    => 'lakshmi_lite_header_settings',
			'settings'   => 'social_5',
			'description'   => __( 'Add Your link or leave empty.', 'lakshmi-lite' ),
		) ) );
	}
}
endif;
add_action( 'customize_register', 'lakshmi_lite_customize_register' );

if ( ! function_exists ('lakshmi_lite_sanitize_onoff') ):
function lakshmi_lite_sanitize_onoff( $input ) {
 $valid = array(
	'on'   => __( 'on', 'lakshmi-lite' ),
	'off'  => __( 'off', 'lakshmi-lite' )
 );
 if ( array_key_exists( $input, $valid ) ) {
  return $input;
 } else {
  return '';
 }
}
endif;