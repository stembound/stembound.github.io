<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'sidebars' => array(
		'title' => __('Sidebars', 'lakshmi-lite'),
		'type' => 'tab',
		'options' => array(
			'lsi_basic_layer_select' => array(
				'label' => __('Default Layout', 'lakshmi-lite'),
				'type' => 'image-picker',
				'value' => '1-col',
				'desc' => __('Select the default layout for your theme.',
					'lakshmi-lite'),
				'choices' => array(
					'1-col' => array(
						'small' => array(
							'height' => 70,
							'src' => get_template_directory_uri().
							'/images/1col.png'
						),
						'large' => array(
							'height' => 214,
							'src' => get_template_directory_uri().
							'/images/1col.png'
						),
					),
					'2-col-l' => array(
						'small' => array(
							'height' => 70,
							'src' => get_template_directory_uri().
							'/images/2cl.png'
						),
						'large' => array(
							'height' => 214,
							'src' => get_template_directory_uri().
							'/images/2cl.png'
						),
					),
					'2-col-r' => array(
						'small' => array(
							'height' => 70,
							'src' => get_template_directory_uri().
							'/images/2cr.png'
						),
						'large' => array(
							'height' => 214,
							'src' => get_template_directory_uri().
							'/images/2cr.png'
						),
					),
				),
			),
			'lsi_sidebar_width' => array(
				'label' => __('Sidebar Width', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 25,
				'desc' => __('Sidebar width in %.', 'lakshmi-lite'),
			),
			'lsi_sidebar_padding' => array(
				'label' => __('Sidebar padding', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '0',
				'desc' => __('Add padding css.', 'lakshmi-lite'),
			),
			'lsi_sidebar_background_color' => array(
				'label' => __('Sidebar Background Color', 'lakshmi-lite'),
				'type' => 'rgba-color-picker',
				'value' => '',
				'desc' => __('Pick a color for sidebar background',
					'lakshmi-lite'),
			),
			'lsi_sidebar_background_image' => array(
				'label' => __('Sidebar Background Image', 'lakshmi-lite'),
				'desc' => __('Upload an image for sidebar background.', 'lakshmi-lite'),
				'type' => 'upload',
			),
			'lsi_sidebar_image_size' => array(
				'label' => __('Sidebar Background Image Size', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'inherit',
				'choices' => array(
					'inherit' => __( 'inherit', 'lakshmi-lite'),
					'initial' => __( 'initial', 'lakshmi-lite'),
					'cover'   => __( 'cover', 'lakshmi-lite'),
					'contain' => __( 'contain', 'lakshmi-lite'),
				),
			),
			'lsi_sidebar_image_repeat' => array(
				'label' => __('Sidebar Background Image Repeat', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'no-repeat',
				'choices' => array(
					'no-repeat'=> __( 'no-repeat', 'lakshmi-lite'),
					'repeat'   => __( 'repeat', 'lakshmi-lite'),
					'repeat-x' => __( 'repeat-x', 'lakshmi-lite'),
					'repeat-y' => __( 'repeat-y', 'lakshmi-lite'),
				),
			),
			
		)
	)
);