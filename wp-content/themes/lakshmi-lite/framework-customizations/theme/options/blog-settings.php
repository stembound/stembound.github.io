<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'blog' => array(
		'title' => __('Blog', 'lakshmi-lite'),
		'type' => 'tab',
		'options' => array(
			'lsi_blog_basic_layer_select' => array(
				'label' => __('Blog Layout', 'lakshmi-lite'),
				'type' => 'image-picker',
				'value' => '2-col-l',
				'desc' => __('Select the layout for your blog loops.', 'lakshmi-lite'),
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
			'lsi_feautered_blog_posts'                    => array(
				'label'        => __( 'Featured Blog Posts', 'lakshmi-lite'),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'on',
					'label' => __( 'On', 'lakshmi-lite')
				),
				'left-choice'  => array(
					'value' => 'off',
					'label' => __( 'Off', 'lakshmi-lite')
				),
				'value'        => 'off',
				'desc'         => __( 'Featured posts on blog pages.', 'lakshmi-lite'),
			),
			'lsi_allow_post_info' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Post Infos', 'lakshmi-lite'),
						'type' => 'switch',
						'right-choice' => array(
							'value' => 'off',
							'label' => __('Off', 'lakshmi-lite')
						),
						'left-choice' => array(
							'value' => 'on',
							'label' => __('On', 'lakshmi-lite')
						),
						'value' => 'on',
						'desc' => __('Display infos about the posts.', 'lakshmi-lite'),
					)
				),
				'choices' => array(
					'on' => array(
						'lsi_allow_infos_for' => array(
							'type'  => 'checkboxes',
							'value' => array(
								'blog' => true,
								'post' => true,
							),
							'label' => __('Allow for post types', 'lakshmi-lite'),
							'desc'  => __('Uncheck to disable for any type', 'lakshmi-lite'),
							'choices' => array(
								'blog' => __('Blog', 'lakshmi-lite'),
								'post' => __('Post', 'lakshmi-lite'),
							),
							'inline' => false,
						),
						'lsi_infos' => array(
							'type'  => 'checkboxes',
							'value' => array(
								'date' => true,
								'author' => true,
								'categories' => true,
								'comments' => true,
								'tags' => true,
							),
							'label' => __('Info Types', 'lakshmi-lite'),
							'desc'  => __('Select the info types for Single Posts.', 'lakshmi-lite'),
							'choices' => array(
								'date' => __('Date', 'lakshmi-lite'),
								'author' => __('Author', 'lakshmi-lite'),
								'categories' => __('Categories', 'lakshmi-lite'),
								'comments' => __('Comments', 'lakshmi-lite'),
								'tags' => __('Tags', 'lakshmi-lite'),
							),
							'inline' => true,
						),
						'lsi_normal_blog_infos' => array(
							'type'  => 'checkboxes',
							'value' => array(
								'date' => true,
								'author' => true,
								'categories' => true,
								'comments' => true,
								'tags' => true,
							),
							'label' => __('Normal Blog Info Types', 'lakshmi-lite'),
							'desc'  => __('Select the info types for Normal Blog page template.', 'lakshmi-lite'),
							'choices' => array(
								'date' => __('Date', 'lakshmi-lite'),
								'author' => __('Author', 'lakshmi-lite'),
								'categories' => __('Categories', 'lakshmi-lite'),
								'comments' => __('Comments', 'lakshmi-lite'),
								'tags' => __('Tags', 'lakshmi-lite'),
							),
							'inline' => true,
						),
					),

				),
				'show_borders' => false,
			),
		)
	)
);