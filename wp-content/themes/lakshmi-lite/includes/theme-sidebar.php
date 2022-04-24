<?php

/*********Lakshmi Sidebars**************/
if ( ! function_exists( 'lakshmi_lite_sidebars_widgets_init' ) ) {
function lakshmi_lite_sidebars_widgets_init() {
	
    register_sidebar( array(
        'name' => esc_attr__( 'Main Sidebar', 'lakshmi-lite'),
        'id' => 'lakshmi_main_sidebar',
        'description' => esc_attr__( 'Main Sidebar Widget Area', 'lakshmi-lite'),
        'before_widget' 	=> '<ul><li id="%1$s" class="widget-container %2$s"><div class="box">',
		'after_widget' 		=> '<div class="clear"></div></div></li></ul>',
		'before_title' 		=> '<h3 class="widget-title">',
		'after_title' 			=> '</h3>',
    ));
	
	register_sidebar(array(
		'name'          => __('Footer Sidebar 1', 'lakshmi-lite' ),
		'id'         	=> 'footer-1',
		'description'   => __( 'Footer widget column.', 'lakshmi-lite' ),
		'before_widget' => '<ul class="lsi-fw-element"><li id="%1$s" class="widget-container %2$s"><div class="box">',
		'after_widget' 	=> '<div class="clearfix"></div></div></li></ul>',
		'before_title' 	=> '<p class="lsi-footer-title widget-title">',
		'after_title' 	=> '</p>',
	));
	
	register_sidebar(array(
		'name'          => __('Footer Sidebar 2', 'lakshmi-lite' ),
		'id'         	=> 'footer-2',
		'description'   => __( 'Footer widget column.', 'lakshmi-lite' ),
		'before_widget' => '<ul class="lsi-fw-element"><li id="%1$s" class="widget-container %2$s"><div class="box">',
		'after_widget' 	=> '<div class="clearfix"></div></div></li></ul>',
		'before_title' 	=> '<p class="lsi-footer-title widget-title">',
		'after_title' 	=> '</p>',
	));
	
	register_sidebar(array(
		'name'          => __('Footer Sidebar 3', 'lakshmi-lite' ),
		'id'         	=> 'footer-3',
		'description'   => __( 'Footer widget column.', 'lakshmi-lite' ),
		'before_widget' => '<ul class="lsi-fw-element"><li id="%1$s" class="widget-container %2$s"><div class="box">',
		'after_widget' 	=> '<div class="clearfix"></div></div></li></ul>',
		'before_title' 	=> '<p class="lsi-footer-title widget-title">',
		'after_title' 	=> '</p>',
	));
	
	register_sidebar(array(
		'name'          => __('Footer Sidebar 4', 'lakshmi-lite' ),
		'id'         	=> 'footer-4',
		'description'   => __( 'Footer widget column.', 'lakshmi-lite' ),
		'before_widget' => '<ul class="lsi-fw-element"><li id="%1$s" class="widget-container %2$s"><div class="box">',
		'after_widget' 	=> '<div class="clearfix"></div></div></li></ul>',
		'before_title' 	=> '<p class="lsi-footer-title widget-title">',
		'after_title' 	=> '</p>',
	));
	
	register_sidebar(array(
		'name'          => __('Footer Sidebar 5', 'lakshmi-lite' ),
		'id'         	=> 'footer-5',
		'description'   => __( 'Footer widget column.', 'lakshmi-lite' ),
		'before_widget' => '<ul class="lsi-fw-element"><li id="%1$s" class="widget-container %2$s"><div class="box">',
		'after_widget' 	=> '<div class="clearfix"></div></div></li></ul>',
		'before_title' 	=> '<p class="lsi-footer-title widget-title">',
		'after_title' 	=> '</p>',
	));
	
}
add_action( 'widgets_init', 'lakshmi_lite_sidebars_widgets_init' );
}