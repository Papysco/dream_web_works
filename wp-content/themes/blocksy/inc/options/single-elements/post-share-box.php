<?php

if (! isset($skip_sync_id)) {
	$skip_sync_id = null;
}

if (! isset($prefix)) {
	$prefix = '';
} else {
	$prefix = $prefix . '_';
}

if (! isset($sync_prefix)) {
	$sync_prefix = $prefix;
}

if (! isset($has_module_title_design)) {
	$has_module_title_design = 'inline';
}

if (! isset($has_module_title_tag)) {
	$has_module_title_tag = true;
}

if (! isset($has_share_box_type)) {
	$has_share_box_type = true;
}

if (! isset($has_share_box_location1)) {
	$has_share_box_location1 = true;
}

if (! isset($has_share_box)) {
	$has_share_box = 'no';
}

if (! isset($general_tab_end)) {
	$general_tab_end = [];
}

if (! isset($has_share_box_wrapper_attr)) {
	$has_share_box_wrapper_attr = false;
}

if (! isset($has_bottom_share_box_spacing)) {
	$has_bottom_share_box_spacing = true;
}

if (! isset($has_share_items_border)) {
	$has_share_items_border = true;
}

if (! isset($has_share_items_visibility)) {
	$has_share_items_visibility = true;
}

if (! isset($has_forced_icons_spacing)) {
	$has_forced_icons_spacing = false;
}

if (! isset($display_style)) {
	$display_style = 'panel';
}

$networks_options = [
	$prefix . 'share_networks' => [
		'type' => 'ct-layers',
		'itemClass' => $has_share_box_wrapper_attr ? 'ct-inner-layer' : '',
		'label' => __('Share Networks', 'blocksy'),
		'manageable' => true,
		'value' => [
			[
				'id' => 'facebook',
				'enabled' => true,
			],
			[
				'id' => 'twitter',
				'enabled' => true,
			],
			[
				'id' => 'pinterest',
				'enabled' => true,
			],
			[
				'id' => 'linkedin',
				'enabled' => true,
			]
		],
		'settings' => [
			'facebook' => [
				'id' => 'facebook',
				'label' => __('Facebook', 'blocksy'),
			],
			'twitter' => [
				'id' => 'twitter',
				'label' => __('X (Twitter)', 'blocksy'),
			],
			'pinterest' => [
				'id' => 'pinterest',
				'label' => __('Pinterest', 'blocksy'),
			],
			'linkedin' => [
				'id' => 'linkedin',
				'label' => __('LinkedIn', 'blocksy'),
			],
			'reddit' => [
				'id' => 'reddit',
				'label' => __('Reddit', 'blocksy'),
			],
			'hacker_news' => [
				'id' => 'hacker_news',
				'label' => __('Hacker News', 'blocksy'),
			],
			'vk' => [
				'id' => 'vk',
				'label' => __('VKontakte', 'blocksy'),
			],
			'ok' => [
				'id' => 'ok',
				'label' => __('Odnoklassniki', 'blocksy'),
			],
			'telegram' => [
				'id' => 'telegram',
				'label' => __('Telegram', 'blocksy'),
			],
			'viber' => [
				'id' => 'viber',
				'label' => __('Viber', 'blocksy'),
			],
			'whatsapp' => [
				'id' => 'whatsapp',
				'label' => __('WhatsApp', 'blocksy'),
			],
			'flipboard' => [
				'id' => 'flipboard',
				'label' => __('Flipboard', 'blocksy'),
			],
			'line' => [
				'id' => 'line',
				'label' => __('Line', 'blocksy'),
			],
			'threads' => [
				'id' => 'threads',
				'label' => __('Threads', 'blocksy'),
			],
			'email' => [
				'id' => 'email',
				'label' => __('Email', 'blocksy'),
			],
			'bluesky' => [
				'id' => 'bsky',
				'label' => __('Bluesky', 'blocksy'),
			],
			'clipboard' => [
				'id' => 'clipboard',
				'label' => __('Copy to Clipboard', 'blocksy'),
			],
		],
	],
];

$general_tab_options = array_merge(
	[
		$prefix . 'share_box_type' => [
			'label' => false,
			'type' => $has_share_box_type ? 'ct-image-picker' : 'hidden',
			'value' => 'type-1',
			'attr' => [ 'data-type' => 'background' ],
			'switchDeviceOnChange' => 'desktop',
			'sync' => blocksy_sync_whole_page([
				'prefix' => $sync_prefix
			]),
			'choices' => [
				'type-1' => [
					'src'   => blocksy_image_picker_url( 'share-box-type-1.svg' ),
					'title' => __( 'Type 1', 'blocksy' ),
				],

				'type-2' => [
					'src'   => blocksy_image_picker_url( 'share-box-type-2.svg' ),
					'title' => __( 'Type 2', 'blocksy' ),
				],
			],
		],

		blocksy_rand_md5() => [
			'type' => 'ct-condition',
			'condition' => [
				$prefix . 'share_box_type' => 'type-2'
			],
			'options' => [

				$prefix . 'share_box2_colors' => [
					'label' => __( 'Icons Color', 'blocksy' ),
					'type' => 'ct-radio',
					'value' => 'custom',
					'view' => 'text',
					'design' => 'block',
					'divider' => 'top',
					'choices' => [
						'custom' => __( 'Custom', 'blocksy' ),
						'official' => __( 'Official', 'blocksy' ),
					],
					'sync' => blocksy_sync_whole_page([
						'prefix' => $sync_prefix,
						'loader_selector' => '.ct-share-box'
					]),
				],

			]
		],

		$prefix . 'share_box1_location' => [
			'label' => __( 'Box Location', 'blocksy' ),
			'type' => $has_share_box_location1 ? 'ct-checkboxes' : 'hidden',
			'design' => $has_share_box_location1 ? 'block' : 'none',
			'view' => 'text',
			'value' => [
				'top' => false,
				'bottom' => true,
			],
			'choices' => blocksy_ordered_keys([
				'top' => __( 'Top', 'blocksy' ),
				'bottom' => __( 'Bottom', 'blocksy' ),
			]),
			'sync' => blocksy_sync_whole_page([
				'prefix' => $sync_prefix
			]),
		],

		$prefix . 'share_box_title' => array_merge([
			'label' => __( 'Module Title', 'blocksy' ),
			'type' =>  'text',
			'value' => __( 'Share your love', 'blocksy' ),
			'design' => $has_module_title_design,
			'divider' => 'top:full',
		], $skip_sync_id ? [
			'sync' => $skip_sync_id,
			'setting' => [ 'transport' => 'postMessage' ],
		] : [
			'sync' => 'live'
		]),

		$prefix . 'share_box_title_tag' => [
			'label' => __( 'Module Title Tag', 'blocksy' ),
			'type' =>  $has_module_title_tag ? 'ct-select' : 'hidden',
			'value' => 'span',
			'view' => 'text',
			'design' => 'inline',
			'choices' => blocksy_ordered_keys(
				[
					'h1' => 'H1',
					'h2' => 'H2',
					'h3' => 'H3',
					'h4' => 'H4',
					'h5' => 'H5',
					'h6' => 'H6',
					'p' => 'p',
					'span' => 'span',
				]
			),
			'sync' => blocksy_sync_whole_page([
				'prefix' => $sync_prefix,
				'loader_selector' => '.ct-share-box'
			]),
		],

		blocksy_rand_md5() => [
			'type' => 'ct-divider',
		],
	],

		$networks_options,

	[
		blocksy_rand_md5() => [
			'type' => 'ct-divider',
		],

		$prefix . 'share_item_tooltip' => [
			'type'  => 'ct-switch',
			'label' => __( 'Tooltip', 'blocksy' ),
			'value' => 'no',
		],

		$prefix . 'share_links_nofollow' => [
			'type'  => 'ct-switch',
			'label' => __( 'Set links to nofollow', 'blocksy' ),
			'value' => 'yes',
		],

		blocksy_rand_md5() => [
			'type' => 'ct-divider',
		],

		$prefix . 'share_box_icon_size' => array_merge([
			'label' => __( 'Icon Size', 'blocksy' ),
			'type' => 'ct-slider',
			'value' => '15px',
			'units' => blocksy_units_config([
				[ 'unit' => 'px', 'min' => 0, 'max' => 100 ],
				['unit' => '', 'type' => 'custom'],
			]),
			'responsive' => true,
			'setting' => [ 'transport' => 'postMessage' ],
		], $skip_sync_id ? [
			'sync' => $skip_sync_id
		] : []),

		blocksy_rand_md5() => [
			'type' => 'ct-divider',
		],

		blocksy_rand_md5() => [
			'type' => 'ct-condition',
			'condition' => $has_forced_icons_spacing ? [
				$prefix . 'share_box_type' => 'type-1'
			] : [
				$prefix . 'share_box_type' => '!type-1'
			],
			'options' => [

				$prefix . 'share_box_icons_spacing' => array_merge([
					'label' => __( 'Icons Spacing', 'blocksy' ),
					'type' => 'ct-slider',
					'value' => '15px',
					'units' => blocksy_units_config([
						[ 'unit' => 'px', 'min' => 0, 'max' => 100 ],
						['unit' => '', 'type' => 'custom'],
					]),
					'responsive' => true,
					'setting' => [ 'transport' => 'postMessage' ],
				], $skip_sync_id ? [
					'sync' => $skip_sync_id
				] : []),

				blocksy_rand_md5() => [
					'type' => 'ct-divider',
				],

			],
		],

		blocksy_rand_md5() => [
			'type' => 'ct-condition',
			'condition' => [
				$prefix . 'share_box1_location/top' => true
			],
			'options' => [

				$prefix . 'top_share_box_spacing' => [
					'label' => __( 'Top Box Spacing', 'blocksy' ),
					'type' => 'ct-slider',
					'value' => '50px',
					'units' => blocksy_units_config([
						[ 'unit' => 'px', 'min' => 0, 'max' => 100],
						['unit' => '', 'type' => 'custom'],
					]),
					'responsive' => true,
					'sync' => 'live',
					'divider' => 'bottom',
				],

			],
		],

		blocksy_rand_md5() => [
			'type' => 'ct-condition',
			'condition' => [
				$prefix . 'share_box1_location/bottom' => true
			],
			'options' => [
				$has_bottom_share_box_spacing ? [
					$prefix . 'bottom_share_box_spacing' => [
						'label' => __( 'Bottom Box Spacing', 'blocksy' ),
						'type' => 'ct-slider',
						'value' => '50px',
						'units' => blocksy_units_config([
							[ 'unit' => 'px', 'min' => 0, 'max' => 100],
							['unit' => '', 'type' => 'custom'],
						]),
						'responsive' => true,
						'sync' => 'live',
					],

					blocksy_rand_md5() => [
						'type' => 'ct-divider',
					],
				] : []
			],
		],

		blocksy_rand_md5() => [
			'type' => 'ct-condition',
			'condition' => [ $prefix . 'share_box_type' => 'type-2' ],
			'options' => [

				$prefix . 'share_box_alignment' => [
					'type' => 'ct-radio',
					'label' => __( 'Content Alignment', 'blocksy' ),
					'view' => 'text',
					'design' => 'block',
					'divider' => 'bottom:full',
					'responsive' => true,
					'attr' => [ 'data-type' => 'alignment' ],
					'setting' => [ 'transport' => 'postMessage' ],
					'value' => 'CT_CSS_SKIP_RULE',
					'choices' => [
						'flex-start' => '',
						'center' => '',
						'flex-end' => '',
					],
				],

			],
		],

		$prefix . 'share_box_visibility' => [
			'label' => __( 'Visibility', 'blocksy' ),
			'type' => $has_share_items_visibility ? 'ct-visibility' : 'hidden',
			'design' => 'block',
			'sync' => 'live',
			'value' => blocksy_default_responsive_value([
				'desktop' => true,
				'tablet' => true,
				'mobile' => false,
			]),
			'choices' => blocksy_ordered_keys([
				'desktop' => __( 'Desktop', 'blocksy' ),
				'tablet' => __( 'Tablet', 'blocksy' ),
				'mobile' => __( 'Mobile', 'blocksy' ),
			]),
		],

	],

	$general_tab_end
);

$design_tab_options = [

	$prefix . 'share_box_title_font' => [
		'type' => 'ct-typography',
		'label' => __( 'Module Title Font', 'blocksy' ),
		'sync' => 'live',
		'value' => blocksy_typography_default_values([
			'size' => '14px',
			'variation' => 'n6',
		]),
	],

	$prefix . 'share_box_title_color' => [
		'label' => __( 'Module Title Font Color', 'blocksy' ),
		'type'  => 'ct-color-picker',
		'design' => 'inline',
		'divider' => 'bottom:full',
		'sync' => 'live',
		'value' => [
			'default' => [
				'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT'),
			],
		],
		'pickers' => [
			[
				'title' => __( 'Initial', 'blocksy' ),
				'id' => 'default',
				'inherit' => [
					'var(--theme-heading-1-color, var(--theme-headings-color))' => [
						$prefix . 'share_box_title_tag' => 'h1'
					],

					'var(--theme-heading-2-color, var(--theme-headings-color))' => [
						$prefix . 'share_box_title_tag' => 'h2'
					],

					'var(--theme-heading-3-color, var(--theme-headings-color))' => [
						$prefix . 'share_box_title_tag' => 'h3'
					],

					'var(--theme-heading-4-color, var(--theme-headings-color))' => [
						$prefix . 'share_box_title_tag' => 'h4'
					],

					'var(--theme-heading-5-color, var(--theme-headings-color))' => [
						$prefix . 'share_box_title_tag' => 'h5'
					],

					'var(--theme-heading-6-color, var(--theme-headings-color))' => [
						$prefix . 'share_box_title_tag' => 'h6'
					],

					'var(--theme-text-color)' => [
						$prefix . 'share_box_title_tag' => 'span|p'
					],
				]
			],
		],
	],

	blocksy_rand_md5() => [
		'type' => 'ct-condition',
		'condition' => $display_style === 'design_only' ? [
			$prefix . 'share_box_type' => '! type-1'
		] : [
			$prefix . 'share_box_type' => 'type-1'
		],
		'options' => [

			[
				$prefix . 'share_items_icon_color' => [
					'label' => __( 'Icons Color', 'blocksy' ),
					'type'  => 'ct-color-picker',
					'design' => 'inline',

					'sync' => 'live',

					'value' => [
						'default' => [
							'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT'),
						],

						'hover' => [
							'color' => Blocksy_Css_Injector::get_skip_rule_keyword('DEFAULT'),
						],
					],

					'pickers' => [
						[
							'title' => __( 'Initial', 'blocksy' ),
							'id' => 'default',
							'inherit' => 'var(--theme-text-color)'
						],

						[
							'title' => __( 'Hover', 'blocksy' ),
							'id' => 'hover',
							'inherit' => 'var(--theme-palette-color-2)'
						],
					],
				],
			],

			$has_share_items_border ? [
				$prefix . 'share_items_border' => [
					'label' => __( 'Border', 'blocksy' ),
					'type' => 'ct-border',
					'design' => 'inline',
					'divider' => 'top',
					'sync' => 'live',
					'value' => [
						'width' => 1,
						'style' => 'solid',
						'color' => [
							'color' => 'var(--theme-border-color)',
						],
					]
				],
			] : []
		],
	],

	blocksy_rand_md5() => [
		'type' => 'ct-condition',
		'condition' => [
			$prefix . 'share_box_type' => 'type-2',
			$prefix . 'share_box2_colors' => 'custom'
		],
		'options' => [

			$prefix . 'share_items_icon' => [
				'label' => __( 'Icons Color', 'blocksy' ),
				'type'  => 'ct-color-picker',
				'design' => 'inline',
				'sync' => 'live',

				'value' => [
					'default' => [
						'color' => '#ffffff',
					],

					'hover' => [
						'color' => '#ffffff',
					],
				],

				'pickers' => [
					[
						'title' => __( 'Initial', 'blocksy' ),
						'id' => 'default',
					],

					[
						'title' => __( 'Hover', 'blocksy' ),
						'id' => 'hover',
					],
				],
			],

			$prefix . 'share_items_background' => [
				'label' => __( 'Background Color', 'blocksy' ),
				'type'  => 'ct-color-picker',
				'design' => 'inline',
				'sync' => 'live',

				'value' => [
					'default' => [
						'color' => 'var(--theme-palette-color-1)',
					],

					'hover' => [
						'color' => 'var(--theme-palette-color-2)',
					],
				],

				'pickers' => [
					[
						'title' => __( 'Initial', 'blocksy' ),
						'id' => 'default',
					],

					[
						'title' => __( 'Hover', 'blocksy' ),
						'id' => 'hover',
					],
				],
			],
		],
	],
];

$inner_options = [
	blocksy_rand_md5() => [
		'title' => __('General', 'blocksy'),
		'type' => 'tab',
		'options' => $general_tab_options
	],

	blocksy_rand_md5() => [
		'title' => __('Design', 'blocksy'),
		'type' => 'tab',
		'options' => $design_tab_options
	]
];

if ($display_style === 'panel') {
	$options = [
		$prefix . 'has_share_box' => [
			'label' => __( 'Share Box', 'blocksy' ),
			'type' => 'ct-panel',
			'switch' => true,
			'value' => $has_share_box,
			'sync' => blocksy_sync_whole_page([
				'prefix' => $sync_prefix
			]),
			'inner-options' => $inner_options
		],
	];
}

if ($display_style === 'switch') {
	$options = [
		[
			$prefix . 'has_share_box' => [
				'label' => __( 'Share Box', 'blocksy' ),
				'type' => 'ct-switch',
				'divider' => 'top:full',
				'value' => $has_share_box,
				'sync' => blocksy_sync_whole_page([
					'prefix' => $sync_prefix
				])
			],
		],

		blocksy_rand_md5() => [
			'type' => 'ct-condition',
			'condition' => [
				$prefix . 'has_share_box' => 'yes'
			],
			'options' => $inner_options
		]
	];
}

if ($display_style === 'general_only') {
	$options = $general_tab_options;
}

if ($display_style === 'design_only') {
	$options = $design_tab_options;
}

if ($display_style === 'networks_only') {
	$options = $networks_options;
}