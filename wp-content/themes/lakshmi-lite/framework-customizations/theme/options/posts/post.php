<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'Post Options', 'lakshmi-lite'),
		'type'    => 'box',
		'options' => array(	
			'lsi_gallery_format'	=> array(
				'label' => __( 'Gallery Images (Gallery Format Only)', 'lakshmi-lite'),
				'type'  => 'multi-upload',
				'images_only' => true,		
			),
			'lsi_quote_format'	=> array(
				'label' => __( 'Quote (Quote Format Only)', 'lakshmi-lite'),
				'type'  => 'textarea',
				'value' => '',
			),	
			'lsi_quote_format_author'	=> array(
				'label' => __( 'Quote Author (Quote Format Only)', 'lakshmi-lite'),
				'type'  => 'text',
				'value' => '',
			),	
			'lsi_link_format'	=> array(
				'label' => __( 'Link (Link  Format Only)', 'lakshmi-lite'),
				'type'  => 'text',
				'value' => '',
				'desc'  => __( 'Add Your link', 'lakshmi-lite'),
			),
			'lsi_post_excerpt'	=> array(
				'label' => __( 'Unique Excerpt', 'lakshmi-lite'),
				'type'  => 'textarea',
				'value' => '',
				'desc'  => __( 'Add unique excerpt for the blog or leave it blank.', 'lakshmi-lite'),
			),
			'lsi_post_nav'	=> array(
				'label'        => __( 'Post Navigation', 'lakshmi-lite'),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'lakshmi-lite')
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'lakshmi-lite')
				),
				'value'        => 'yes',
				'desc'         => __( 'Yes or no.', 'lakshmi-lite'),				
			),
			'lsi_basic_post_layer_select'	=> array(
				'label'   => __( 'Layout', 'lakshmi-lite'),
				'type'    => 'image-picker',
				'value'   => '',
				'desc'    => __( 'Select the layout for the post.', 'lakshmi-lite'),
				'choices' => array(
					'default' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/mb-default.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/mb-default.png'
						),
					),
					'1-col' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/mb-1c.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/mb-1c.png'
						),
					),
					'2-col-l' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/mb-2cl.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/mb-2cl.png'
						),
					),
					'2-col-r' => array(
						'small' => array(
							'height' => 70,
							'src'    => get_template_directory_uri() . '/images/mb-2cr.png'
						),
						'large' => array(
							'height' => 214,
							'src'    => get_template_directory_uri() . '/images/mb-2cr.png'
						),
					),
				),
			),	
		),
	),		
);