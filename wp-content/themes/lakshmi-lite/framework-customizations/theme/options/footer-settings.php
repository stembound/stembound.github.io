<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer' => array(
		'title' => __('Footer', 'lakshmi-lite'),
		'type' => 'tab',
		'options' => array(
			'lsi_footer_widget_text'                      => array(
				'label' => __( 'Footer Widget Area', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the footer widget area as You want.', 'lakshmi-lite'),
				'html'  => '',
			),
			'lsi_allow_f_widgets'                    => array(
				'label'        => __( 'Allow Footer Widgets', 'lakshmi-lite'),
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
				'desc'         => __( 'Display widget area on footer or not.', 'lakshmi-lite'),
			),
			'lsi_footer_column' => array(
				'label' => __('Footer Columns', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => '4',
				'desc' => __('The value is column for display in footer column.',
					'lakshmi-lite'),
				'choices' => array(
					'1' => '1',
					'1-2' => '2',
					'1-2-3' => '3',
					'1-2-3-4' => '4',
					'1-2-3-4-5' => '5',
				),
			),
			'lsi_fw_background_image' => array(
				'label' => __('Footer Widgets Background Image', 'lakshmi-lite'),
				'desc' => __('Upload an image for the background.', 'lakshmi-lite'),
				'type' => 'upload',
			),
			'lsi_fw_image_size' => array(
				'label' => __('Footer Widgets Background Image Size', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'inherit',
				'choices' => array(
					'inherit' => __( 'inherit', 'lakshmi-lite'),
					'initial' => __( 'initial', 'lakshmi-lite'),
					'cover' => __( 'cover', 'lakshmi-lite'),
					'contain' => __( 'contain', 'lakshmi-lite'),
				),
			),
			'lsi_fw_image_repeat' => array(
				'label' => __('Footer Widgets Background Image Repeat', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'no-repeat',
				'choices' => array(
					'no-repeat' => __( 'no-repeat', 'lakshmi-lite'),
					'repeat' => __( 'repeat', 'lakshmi-lite'),
					'repeat-x' => __( 'repeat-x', 'lakshmi-lite'),
					'repeat-y' => __( 'repeat-y', 'lakshmi-lite'),
				),
			),
			'lsi_fw_image_fixed' => array(
				'label'        => __( 'Fixed Footer Widgets Background Image', 'lakshmi-lite'),
				'type'         => 'switch',
				'right-choice' => array(
					'value' => 'yes',
					'label' => __( 'Yes', 'lakshmi-lite')
				),
				'left-choice'  => array(
					'value' => 'no',
					'label' => __( 'No', 'lakshmi-lite')
				),
				'value'        => 'no',
			),
			'lsi_fw_image_layer' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Layer On Background Image', 'lakshmi-lite'),
						'type' => 'switch',
						'right-choice' => array(
							'value' => 'no',
							'label' => __('No', 'lakshmi-lite')
						),
						'left-choice' => array(
							'value' => 'yes',
							'label' => __('Yes', 'lakshmi-lite')
						),
						'value' => 'yes',
						'desc' => __('Layer on background image.', 'lakshmi-lite'),
					)
				),
				'show_borders' => false,
			),
			'lsi_fw_padding' => array(
				'label' => __('Footer Widgets Padding', 'lakshmi-lite'),
				'desc' => __('Footer widgets padding (top, right, bottom, left).', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '50px 10px'
			),
			'lsi_fwc_padding' => array(
				'label' => __('Footer Column Padding', 'lakshmi-lite'),
				'desc' => __('Footer widgets columns padding (top, right, bottom, left).', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '10px 0 10px 0'
			),
			'lsi_copyright_area_text'                      => array(
				'label' => __( 'Copyright Area', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the footer copyright area as You want.', 'lakshmi-lite'),
				'html'  => '',
			),
			'lsi_bf_layout'	=> array(
				'label'   => __( 'Bottom Footer Layout', 'lakshmi-lite'),
				'type'    => 'radio',
				'value'   => 'cr-menu',
				'desc'    => __( 'Choose one of the bottom footer layouts.', 'lakshmi-lite'),
				'choices' => array(
					'cr-menu' => __( 'Copyright - Menu', 'lakshmi-lite'),
					'menu-cr' => __( 'Menu - Copyright', 'lakshmi-lite'),
				),
			),
			'lsi_footer_social_switch' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Social Icons', 'lakshmi-lite'),
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
						'desc' => __('Display social icons on the footer.', 'lakshmi-lite'),
					)
				)
			),
			'lsi_bf_menu_switch' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Bottom Footer Menu', 'lakshmi-lite'),
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
						'desc' => __('Display menu on the bottom footer.', 'lakshmi-lite'),
					)
				)
			),
			'lsi_copyright_content' => array(
				'label' => __('Copyright Text', 'lakshmi-lite'),
				'type' => 'textarea',
				'value' => '',
				'desc' => __('If you dont need to add a copyright message to your website, leave this field blank.', 'lakshmi-lite'),
			),
			'lsi_bf_padding' => array(
				'label' => __('Bottom Footer Padding', 'lakshmi-lite'),
				'desc' => __('top, right, bottom, left', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '40px 0 30px 0'
			),
			'lsi_bf_mi_padding' => array(
				'label' => __('Menu Item Padding', 'lakshmi-lite'),
				'desc' => __('top, right, bottom, left', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '0 0 0 10px'
			),
			'lsi_allow_link_animation'                    => array(
				'label'        => __( 'Allow Link Animation', 'lakshmi-lite'),
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
				'desc'         => __( 'Allow line animation on link elements.', 'lakshmi-lite'),
			),
		)
	)
);