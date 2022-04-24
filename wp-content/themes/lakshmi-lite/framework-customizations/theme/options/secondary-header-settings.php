<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'secondaryheader' => array(
		'title' => __('Secondary Header', 'lakshmi-lite'),
		'type' => 'tab',
		'options' => array(
			'lsi_secondary_header'                    => array(
				'label'        => __( 'Allow Secondary Header', 'lakshmi-lite'),
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
				'desc'         => __( 'Display secondary header.', 'lakshmi-lite'),
			),
			'lsi_sh_mobil'                    => array(
				'label'        => __( 'Allow On Mobil', 'lakshmi-lite'),
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
				'desc'         => __( 'Display secondary header on mobil.', 'lakshmi-lite'),
			),
			'lsi_sh_position'	=> array(
				'label'   => __( 'Secondary Header Positon', 'lakshmi-lite'),
				'type'    => 'radio',
				'value'   => 'top',
				'desc'    => __( 'Secondary Header under or above the basic header.', 'lakshmi-lite'),
				'choices' => array(
					'top' => __( 'Top', 'lakshmi-lite'),
					'bottom' => __( 'Bottom', 'lakshmi-lite'),
				),
			),
			'lsi_sh_layout'	=> array(
				'label'   => __( 'Secondary Header Layout', 'lakshmi-lite'),
				'type'    => 'radio',
				'value'   => 'menu-custom-social',
				'desc'    => __( 'Choose on of the layouts.', 'lakshmi-lite'),
				'choices' => array(
					'custom-social-menu' => __( 'Custom - Menu - Social', 'lakshmi-lite'),
					'menu-social-custom' => __( 'Menu - Social - Custom', 'lakshmi-lite'),
					'menu-custom-social' => __( 'Menu - Custom - Social', 'lakshmi-lite'),
					'social-custom-menu' => __( 'Social - Custom - Menu', 'lakshmi-lite'),
				),
			),
			'lsi_sh_custom_content' => array(
				'label' => __('Custom Content', 'lakshmi-lite'),
				'desc' => __('Add Your custom text here.', 'lakshmi-lite'),
				'type' => 'textarea',
				'value' => ''
			),
			'lsi_sh_padding' => array(
				'label' => __('Secondary Header Padding', 'lakshmi-lite'),
				'desc' => __('Secondary header padding (top, right, bottom, left).', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '0'
			),
			'lsi_sh_custom'                    => array(
				'label'        => __( 'Display Custom Area', 'lakshmi-lite'),
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
				'desc'         => __( 'Display custom area on secondary header.', 'lakshmi-lite'),
			),
			'lsi_sh_custom_padding' => array(
				'label' => __('Custom Area Padding', 'lakshmi-lite'),
				'desc' => __('top, right, bottom, left', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '8px 10px'
			),
			'lsi_sh_menu'                    => array(
				'label'        => __( 'Display Menu', 'lakshmi-lite'),
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
				'desc'         => __( 'Display menu on secondary header. (You can`t use submenu here.)', 'lakshmi-lite'),
			),
			'lsi_sh_menu_padding' => array(
				'label' => __('Menu Padding', 'lakshmi-lite'),
				'desc' => __('top, right, bottom, left', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '0 10px 0 0'
			),
			'lsi_sh_mi_padding' => array(
				'label' => __('Menu Item Padding', 'lakshmi-lite'),
				'desc' => __('top, right, bottom, left', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '8px 12px'
			),
			'lsi_sh_socials'                    => array(
				'label'        => __( 'Display Socials', 'lakshmi-lite'),
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
				'desc'         => __( 'Display socials on secondary header.', 'lakshmi-lite'),
			),
			'lsi_sh_socials_padding' => array(
				'label' => __('Socials Padding', 'lakshmi-lite'),
				'desc' => __('top, right, bottom, left', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '8px 0'
			),
		)
	)
);