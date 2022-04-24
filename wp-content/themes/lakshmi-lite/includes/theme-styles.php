<?php
/*********Lakshmi Styles**************/
function lakshmi_lite_customize_style() {
	global $wp_customize;
	if ( isset( $wp_customize ) ) {
		wp_enqueue_style('lakshmi-lite-customize-css', get_template_directory_uri().'/admin/css/customize.css');
	}
}
add_action( 'admin_enqueue_scripts', 'lakshmi_lite_customize_style' );

function lakshmi_lite_about_theme_style($hook) {
	global $lakshmi_lite_about_theme_page;
	if( $hook != $lakshmi_lite_about_theme_page ) { 
		return;
	}
	wp_enqueue_style('lakshmi-lite-about-theme-style-css', get_template_directory_uri().'/admin/css/about-theme.css');
}
add_action( 'admin_enqueue_scripts', 'lakshmi_lite_about_theme_style' );

function lakshmi_lite_custom_admin_style($hook) {
	if( $hook != 'edit.php' && $hook != 'post.php' && $hook != 'post-new.php' ) { 
		return;
	}
	wp_enqueue_style('lakshmi-lite-unyson-admin-css', get_template_directory_uri().'/admin/css/edit.css');
}
add_action( 'admin_enqueue_scripts', 'lakshmi_lite_custom_admin_style' );

function lakshmi_lite_styles() {
	$lsi_style_css = 'default';
	if ( function_exists( 'fw_get_db_customizer_option') ) $lsi_style_css = fw_get_db_customizer_option( 'lsi_style_css');
	
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', '', '', 'screen, all');
	wp_enqueue_style('flexslider', get_template_directory_uri().'/css/flexslider.css', '', '', 'screen, all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/owl-carousel.css', '', '', 'screen, all');
	wp_enqueue_style('prettyphoto-css', get_template_directory_uri().'/css/prettyPhoto.css', '', '', 'screen, all');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' , array(), '4.4.0', 'all' );
			
	wp_enqueue_style('lakshmi-lite-main-css', get_bloginfo( 'stylesheet_url' ), '', '', 'all');	
	
	if ($lsi_style_css == 'blogger') {
		wp_enqueue_style('lakshmi-lite-blogger-style-css', get_template_directory_uri().'/css/styles/blogger-styles.css', '', '', 'screen, all');
		wp_enqueue_style('lakshmi-lite-blogger-google-fonts', '//fonts.googleapis.com/css?family=Nunito:300,400|Roboto:400,500,300|Roboto+Slab');
	} elseif ($lsi_style_css == 'hinduist') {
		wp_enqueue_style('lakshmi-lite-hinduist-style-css', get_template_directory_uri().'/css/styles/hinduist-styles.css', '', '', 'screen, all');
		wp_enqueue_style('lakshmi-lite-hinduist-google-fonts', '//fonts.googleapis.com/css?family=Average+Sans|Andika|Fjalla+One|Fredericka+the+Great');
	} elseif ($lsi_style_css == 'africa') {
		wp_enqueue_style('lakshmi-lite-africa-style-css', get_template_directory_uri().'/css/styles/africa-styles.css', '', '', 'screen, all');
		wp_enqueue_style('lakshmi-lite-africa-google-fonts', '//fonts.googleapis.com/css?family=Source+Serif+Pro:regular,700|Cinzel+Decorative:regular|Cinzel:regular');
	} elseif ($lsi_style_css == 'clean') {
		wp_enqueue_style('lakshmi-lite-clean-style-css', get_template_directory_uri().'/css/styles/clean-styles.css', '', '', 'screen, all');
		wp_enqueue_style('lakshmi-lite-clean-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,regular|Open+Sans+Condensed:300');
	} elseif ($lsi_style_css == 'fashion') {
		wp_enqueue_style('lakshmi-lite-fashion-style-css', get_template_directory_uri().'/css/styles/fashion-styles.css', '', '', 'screen, all');
		wp_enqueue_style('lakshmi-lite-fashion-google-fonts', '//fonts.googleapis.com/css?family=Playfair+Display:regular|Playfair+Display+SC:regular');
	} elseif ($lsi_style_css == 'blue') {
		wp_enqueue_style('lakshmi-lite-blue-style-css', get_template_directory_uri().'/css/styles/blue-styles.css', '', '', 'screen, all');
		wp_enqueue_style('lakshmi-lite-blue-google-fonts', '//fonts.googleapis.com/css?family=Lato:300,regular,700|Finger+Paint:regular');
	} elseif ($lsi_style_css == 'cream') {
		wp_enqueue_style('lakshmi-lite-cream-style-css', get_template_directory_uri().'/css/styles/cream-styles.css', '', '', 'screen, all');
		wp_enqueue_style('lakshmi-lite-cream-google-fonts', '//fonts.googleapis.com/css?family=Space+Mono:regular|Oswald:regular|Lily+Script+One:regular');
	} elseif ($lsi_style_css == 'texts') {
		wp_enqueue_style('lakshmi-lite-texts-style-css', get_template_directory_uri().'/css/styles/texts-styles.css', '', '', 'screen, all');
		wp_enqueue_style('lakshmi-lite-texts-google-fonts', '//fonts.googleapis.com/css?family=Playfair+Display:regular|Arimo:regular,700');
	} else {
		wp_enqueue_style('lakshmi-lite-default-style-css', get_template_directory_uri().'/css/styles/default-styles.css', '', '', 'screen, all');
		wp_enqueue_style('lakshmi-lite-default-google-fonts', '//fonts.googleapis.com/css?family=Playfair+Display|Pinyon+Script|Josefin+Sans:400,600|Josefin+Slab:600,700');
	}
								
}
add_action('wp_enqueue_scripts', 'lakshmi_lite_styles');
