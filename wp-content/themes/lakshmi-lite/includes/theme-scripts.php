<?php
/*********Lakshmi Scripts**************/
function lakshmi_lite_script() {
	if ( function_exists( 'fw_get_db_customizer_option') ) {
		$lsi_gmap_key = fw_get_db_customizer_option( 'lsi_gmap_key');
	}
	wp_enqueue_script('flexslider', get_template_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'), '2.1', true);
	wp_enqueue_script('directionalhover', get_template_directory_uri().'/js/jquery.directionalhover.js', array('jquery'), '2.1', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), '1.0', true);
	wp_enqueue_script('lakshmi-lite-custom', get_template_directory_uri().'/js/custom.js', array('jquery'), '1.0', true);
	wp_enqueue_script('owl-carousel', get_template_directory_uri().'/js/owl.carousel.min.js', true, '1.0', true);
	wp_enqueue_script('prettyphoto', get_template_directory_uri().'/js/jquery.prettyPhoto-min.js', array('jquery'), '3.1.6', true);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if(isset($lsi_gmap_key) && ($lsi_gmap_key != '')){
		wp_enqueue_script('google-maps-api-v3', 'https://maps.googleapis.com/maps/api/js?v=3.23&key='.$lsi_gmap_key.'&libraries=places' ,array(),'3.23',true);
	}
}
add_action('wp_enqueue_scripts', 'lakshmi_lite_script');

function lakshmi_lite_custom_admin_script($hook) {
	if( $hook != 'post.php' && $hook != 'post-new.php' ) { 
		return;
	}
	wp_enqueue_script('lakshmi-lite-post-format-options', get_template_directory_uri().'/admin/js/post-format-options.js', array('jquery'), true);
}
add_action( 'admin_enqueue_scripts', 'lakshmi_lite_custom_admin_script' );