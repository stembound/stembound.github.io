<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'shortcode_styles_settings' => array(
		'title' => __('Shortcode Styles', 'lakshmi-lite'),
		'type' => 'tab',
		'options' => array(
			'lsi_s_cta_style_text'                      => array(
				'label' => __( 'Featured Carousels', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the Call To Action, Post 1 shortcodes as You want.', 'lakshmi-lite'),
				'html'  => '',
			),
			'lsi_s_cta_padding' => array(
				'type' => 'text',
				'label' => __('Item Padding', 'lakshmi-lite'),
				'desc' => __('Add the padding css for the items.', 'lakshmi-lite'),
				'value' => '10px',
			),
			'lsi_s_cta_line' => array(
				'label' => __('Line Animation', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'none',
				'choices' => array(
					'none' => __('None', 'lakshmi-lite'),
					'frame' => __('Frame', 'lakshmi-lite'),
				),
			),
			'lsi_s_cta_img_an' => array(
				'label' => __('Image Animation', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'none',
				'choices' => array(
					'none' => __('None', 'lakshmi-lite'),
					'zoom' => __('Zoom', 'lakshmi-lite'),
				),
			),
			'lsi_s_quotecarousel_style_text'                      => array(
				'label' => __( 'Quote Carousel', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the Quote Carousel shortcode as You want.', 'lakshmi-lite'),
				'html'  => '',
			),
			'lsi_s_quotecarousel_image' => array(
				'label' => __('Author Background Image', 'lakshmi-lite'),
				'desc' => __('Upload an image for quote carousel author background. (Prefered size is 105px X 105px.)', 'lakshmi-lite'),
				'type' => 'upload',
				'value' => array(
					'url' => get_template_directory_uri().'/images/vinyl-small.png'
				),
			),
		)
	)
);