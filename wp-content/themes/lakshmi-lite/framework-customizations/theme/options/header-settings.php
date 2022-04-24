<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header' => array(
		'title' => __('Header', 'lakshmi-lite'),
		'type' => 'tab',
		'options' => array(
			'lsi_header_layout'	=> array(
				'label'   => __( 'Header Layout', 'lakshmi-lite'),
				'type'    => 'radio',
				'value'   => 'logo-rightmenu-buttons',
				'desc'    => __( 'Choose one of the header layouts.', 'lakshmi-lite'),
				'choices' => array(
					'logo-menu-buttons' => __( 'Logo - Menu - Buttons', 'lakshmi-lite'),
					'logo-rightmenu-buttons' => __( 'Logo - Right Menu - Buttons', 'lakshmi-lite'),
					'toplogo-centermenu-centerbuttons' => __( 'Top Logo - Center Menu - Buttons', 'lakshmi-lite' ),
					'toplogowa-menu-buttons' => __( 'Top Logo With Ad - Menu - Buttons', 'lakshmi-lite'),
				),
			),
			'lsi_header_style_text'                      => array(
				'label' => __( 'Header Style', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the header as You want.', 'lakshmi-lite'),
				'html'  => '',
			),
			'lsi_header_background_image' => array(
				'label' => __('Header Background Image', 'lakshmi-lite'),
				'desc' => __('Upload an image for header background.', 'lakshmi-lite'),
				'type' => 'upload',
			),
			'lsi_header_image_size' => array(
				'label' => __('Header Background Image Size', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'inherit',
				'choices' => array(
					'inherit' => __( 'inherit', 'lakshmi-lite'),
					'initial' => __( 'initial', 'lakshmi-lite'),
					'cover'   => __( 'cover', 'lakshmi-lite'),
					'contain' => __( 'contain', 'lakshmi-lite'),
				),
			),
			'lsi_header_image_repeat' => array(
				'label' => __('Header Background Image Repeat', 'lakshmi-lite'),
				'type' => 'short-select',
				'value' => 'no-repeat',
				'choices' => array(
					'no-repeat'=> __( 'no-repeat', 'lakshmi-lite'),
					'repeat'   => __( 'repeat', 'lakshmi-lite'),
					'repeat-x' => __( 'repeat-x', 'lakshmi-lite'),
					'repeat-y' => __( 'repeat-y', 'lakshmi-lite'),
				),
			),
			'lsi_logo_style_text'                      => array(
				'label' => __( 'Logo Style', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the logo area as You want.', 'lakshmi-lite'),
				'html'  => '',
			),
			'lsi_logo_type' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'value' => array(
					'logo' => 'text', ),
				'picker' => array(
					'logo' => array(
						'label' => __('Logo Type', 'lakshmi-lite'),
						'type' => 'radio',
						'choices' => array(
							'text' => __('Text-based Logo', 'lakshmi-lite'),
							'image' => __('Image Logo', 'lakshmi-lite')
						),
						'desc' => __('Select one from the logo types and add the content.',
							'lakshmi-lite'),
					)
				),
				'choices' => array(
					'image' => array(
						'lsi_logo_image' => array(
							'label' => __('Logo Image', 'lakshmi-lite'),
							'desc' => __('Upload the logo image.', 'lakshmi-lite'),
							'type' => 'upload',
						),
					),
				),
				'show_borders' => false,
			),
			'lsi_logo_padding' => array(
				'label' => __('Logo Padding', 'lakshmi-lite'),
				'desc' => __('Padding CSS value for the logo area (top, right, bottom, left).', 'lakshmi-lite'),
				'type' => 'text',
				'value' => '12px 20px 20px 0'
			),
			'lsi_tagline' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Display Tagline', 'lakshmi-lite'),
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
						'desc' => __('Display tagline under the logo.', 'lakshmi-lite'),
					)
				),
				'show_borders' => false,
			),
			'lsi_logo_advert' => array(
				'label' => __('Header Banner Ad (728 X 90)', 'lakshmi-lite'),
				'desc' => __('Adsense, Buy Sell Ads or Custom Code, if You`ve choosen "Top Logo With Ad" style.', 'lakshmi-lite'),
				'type' => 'textarea',
				'value' => ''
			),
			'lsi_menu_item_text'                      => array(
				'label' => __( 'Menu Item', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
			),
			'lsi_menu_item_mr' => array(
				'label' => __('Menu Item Margin Right', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 5,
			),
			'lsi_menu_item_pt' => array(
				'label' => __('Menu Item Padding Top', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_menu_item_pr' => array(
				'label' => __('Menu Item Padding Right', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 8,
			),
			'lsi_menu_item_pb' => array(
				'label' => __('Menu Item Padding Bottom', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 25,
			),
			'lsi_menu_item_pl' => array(
				'label' => __('Menu Item Padding Left', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 8,
			),
			'lsi_menu_item_hover_effect' => array(
				'label' => __('Menu Item Hover Effect', 'lakshmi-lite'),
				'type' => 'select',
				'value' => 'line-animation',
				'choices' => array(
					'none'       => __('none', 'lakshmi-lite'),
					'line-animation' => __('line-animation', 'lakshmi-lite'),
					'line-through' => __('line-through', 'lakshmi-lite'),
					'overline'  => __('overline', 'lakshmi-lite'),
					'underline'  => __('underline', 'lakshmi-lite'),
				),
			),
			'lsi_menu_item_transition' => array(
				'type' => 'text',
				'label' => __('Item Transition Speed', 'lakshmi-lite'),
				'value' => '0.2',
				'desc' => __('Add the speed of the hover effect in sec.', 'lakshmi-lite'),
			),
			'lsi_submenu_item_text'                      => array(
				'label' => __( 'Submenu Item', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
			),
			'lsi_submenu_allow_icon'                    => array(
				'label'        => __( 'Submenu Indicator', 'lakshmi-lite'),
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
				'desc'         => __( 'Allow submenu indicator icon.', 'lakshmi-lite'),
			),
			'lsi_submenu_width' => array(
				'label' => __('Submenu width', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 12,
				'desc' => __('Add the width of the submenu.', 'lakshmi-lite'),
			),
			'lsi_submenu_item_pt' => array(
				'label' => __('Submenu Item Padding Top', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_pr' => array(
				'label' => __('Submenu Item Padding Right', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_pb' => array(
				'label' => __('Submenu Item Padding Bottom', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_pl' => array(
				'label' => __('Submenu Item Padding Left', 'lakshmi-lite'),
				'type' => 'slider',
				'value' => 10,
			),
			'lsi_submenu_item_hover_effect' => array(
				'label' => __('Item Hover Effect', 'lakshmi-lite'),
				'type' => 'select',
				'value' => 'none',
				'choices' => array(
					'none'       => __('none', 'lakshmi-lite'),
					'line-through' => __('line-through', 'lakshmi-lite'),
					'overline'  => __('overline', 'lakshmi-lite'),
					'underline'  => __('underline', 'lakshmi-lite'),
				),
			),
			'lsi_header_buttons_text'                      => array(
				'label' => __( 'Header Buttons', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
			),
			'lsi_header_buttons' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Allow Buttons', 'lakshmi-lite'),
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
						'desc' => __('Turn on or off.', 'lakshmi-lite'),
					)
				),
				'choices' => array(
					'on' => array(
						'lsi_hb_padding' => array(
							'label' => __('Buttons Area Padding', 'lakshmi-lite'),
							'desc' => __('Buttons area padding (top, right, bottom, left).', 'lakshmi-lite'),
							'type' => 'text',
							'value' => '10px 0 20px 10px'
						),
						'lsi_hb_ivp' => array(
							'label' => __('Buttons Inner Vertical Padding', 'lakshmi-lite'),
							'type' => 'slider',
							'value' => 5,
						),
						'lsi_hb_ihp' => array(
							'label' => __('Buttons Inner Horizontal Padding', 'lakshmi-lite'),
							'type' => 'slider',
							'value' => 10,
						),
						'lsi_hb_search'                    => array(
							'label'        => __( 'Search Button', 'lakshmi-lite'),
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
							'desc'         => __( 'Allow search field on header.', 'lakshmi-lite'),
						),
						'lsi_text' => array(
							'type' => 'text',
							'label' => __('Extra Button Text', 'lakshmi-lite'),
							'value' => '',
							'desc' => __('Leave blank, if You don`t need extra button.', 'lakshmi-lite'),
						),
						'lsi_link' => array(
							'type' => 'text',
							'label' => __('Extra Button Link', 'lakshmi-lite'),
							'desc' => __('Add the link of the extra button.', 'lakshmi-lite'),
						),
					),

				),
				'show_borders' => false,
			),
			'lsi_mobil_menu_text'                      => array(
				'label' => __( 'Mobil Menu', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'html'  => '',
				'desc' => __('Setup the mobil menu as You want.', 'lakshmi-lite'),
			),
			'lsi_mm_start' => array(
				'type'  => 'slider',
				'value' => 967,
				'properties' => array(
					'min' => 300,
					'max' => 1920,
					'step' => 1, // Set slider step. Always > 0. Could be fractional.
				),
				'label' => __('Mobil Menu Under', 'lakshmi-lite'),
				'desc'  => __('Add the device width (in px) where You want to change the basic menu to mobile menu.', 'lakshmi-lite'),
			),
			'lsi_mm' => array(
				'type' => 'multi-picker',
				'label' => false,
				'desc' => false,
				'picker' => array(
					'on_off' => array(
						'label' => __('Display Mobil Menu', 'lakshmi-lite'),
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
						'desc' => __('Turn on or off.', 'lakshmi-lite'),
					)
				),
				'choices' => array(
					'on' => array(
						'lsi_mm_vp' => array(
							'label' => __('Mobil Menu Item Padding', 'lakshmi-lite'),
							'type' => 'slider',
							'value' => 5,
							'description' => __('Vertical padding for the items in px.', 'lakshmi-lite')
						),					),

				),
				'show_borders' => false,
			),
			'lsi_mm_transparent_header'                    => array(
				'label'        => __( 'Transparent Header on Mobile', 'lakshmi-lite'),
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
				'desc'         => __( 'Allow transparent header on mobile', 'lakshmi-lite'),
			),
			'lsi_transparent_header_text'                      => array(
				'label' => __( 'Transparent Header', 'lakshmi-lite'),
				'type'  => 'html',
				'value' => '',
				'desc'  => __( 'Customize the transparent header as You want.', 'lakshmi-lite'),
				'html'  => '',
			),
			'lsi_th_allow'                    => array(
				'label'        => __( 'Transparent Header For Pages', 'lakshmi-lite'),
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
				'desc'         => __( 'Allow transparent header for all pages.', 'lakshmi-lite'),
			),
		)
	)
);