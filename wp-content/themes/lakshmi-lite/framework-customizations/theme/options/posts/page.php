<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title' => __('Page Options', 'lakshmi-lite'),
		'type' => 'box',
		'options' => array(
			'lsi_basic_post_layer_select' => array(
				'label' => __('Layout', 'lakshmi-lite'),
				'type' => 'image-picker',
				'value' => '',
				'desc' => __('Select the layout for the page.',
					'lakshmi-lite'),
				'choices' => array(
					'default' => array(
						'small' => array(
							'height' => 70,
							'src' => get_template_directory_uri().
							'/images/mb-default.png'
						),
						'large' => array(
							'height' => 214,
							'src' => get_template_directory_uri().
							'/images/mb-default.png'
						),
					),
					'1-col' => array(
						'small' => array(
							'height' => 70,
							'src' => get_template_directory_uri().
							'/images/mb-1c.png'
						),
						'large' => array(
							'height' => 214,
							'src' => get_template_directory_uri().
							'/images/mb-1c.png'
						),
					),
					'2-col-l' => array(
						'small' => array(
							'height' => 70,
							'src' => get_template_directory_uri().
							'/images/mb-2cl.png'
						),
						'large' => array(
							'height' => 214,
							'src' => get_template_directory_uri().
							'/images/mb-2cl.png'
						),
					),
					'2-col-r' => array(
						'small' => array(
							'height' => 70,
							'src' => get_template_directory_uri().
							'/images/mb-2cr.png'
						),
						'large' => array(
							'height' => 214,
							'src' => get_template_directory_uri().
							'/images/mb-2cr.png'
						),
					),
				),
			),
			'lsi_post_transparent_header' => array(
				'label' => __('Transparent Header', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'default',
				'choices' => array(
					'default' => 'Default',
					'yes' => 'Yes',
					'no' => 'No',
				),
			),
			'lsi_top_padding' => array(
				'label' => __('Top Padding', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 50,
				'desc' => __('Add padding in px. Default is 50.', 'lakshmi-lite'),

			),
			'lsi_bottom_padding' => array(
				'label' => __('Bottom Padding', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 40,
				'desc' => __('Add padding in px. Default is 50.', 'lakshmi-lite'),

			),
			'lsi_page_custom_css' => array(
				'label' => __('Custom CSS', 'lakshmi-lite'),
				'type' => 'textarea',
				'value' => '',
				'desc' => __('You can add Your custom css here.', 'lakshmi-lite'),

			),
		)
	)
);