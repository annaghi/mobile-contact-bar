<?php
/**
 * Mobile Contact Bar Admin Settings
 *
 * @package Mobile_Contact_Bar\Admin
 */

defined( 'ABSPATH' ) || exit;


/**
 * Mobile_Contact_Bar_Settings class
 */
final class Mobile_Contact_Bar_Settings {



	/**
	 * Defines the translateble titles for meta boxes in specific order.
	 *
	 * @since 2.1.0
	 *
	 * @return array
	 */
	public static function string_literals() {
		return array(
			'general' => _x( 'General', 'meta box title', 'mobile-contact-bar' ),
			'bar'     => _x( 'Bar', 'meta box title', 'mobile-contact-bar' ),
			'icons'   => _x( 'Icons', 'meta box title', 'mobile-contact-bar' ),
			'badges'  => _x( 'Badges', 'meta box title', 'mobile-contact-bar' ),
			'toggle'  => _x( 'Toggle', 'meta box title', 'mobile-contact-bar' ),
		);
	}



	/**
	 * Defines the setting fields.
	 *
	 * @since 0.0.1
	 *
	 * @return array Multidimensional array of settings, divided into sections
	 */
	public static function settings() {
		return array(

			'general' => array(
				'device'           => array(
					'type'    => 'radio',
					'align'   => 'horizontal',
					'default' => 'none',
					'title'   => __( 'Display on Devices', 'mobile-contact-bar' ),
					'options' => array(
						'mobile'  => __( 'mobile', 'mobile-contact-bar' ),
						'desktop' => __( 'desktop', 'mobile-contact-bar' ),
						'both'    => __( 'both', 'mobile-contact-bar' ),
						'none'    => __( 'disable', 'mobile-contact-bar' ),
					),
				),
				'device_detection' => array(
					'type'    => 'radio',
					'align'   => 'vertical',
					'default' => 'php',
					'title'   => __( 'Device Detection', 'mobile-contact-bar' ),
					'options' => array(
						'php' => __( 'PHP - Official way of device detection (see wp_is_mobile)', 'mobile-contact-bar' ),
						'css' => __( 'CSS - Media query, useful if you are using a cache plugin without mobile support', 'mobile-contact-bar' ),
					),
				),
				'max_screen_width' => array(
					'type'    => 'number',
					'default' => 960,
					'min'     => 0,
					'title'   => __( 'Max Screen Width', 'mobile-contact-bar' ),
					'postfix' => 'px',
					'desc'    => __( 'The bar will be displayed on those screens where the width is below of this value.', 'mobile-contact-bar' ),
					'visible' => array(
						'general-device_detection' => '==css',
					),
				),
				'is_new_tab'       => array(
					'type'    => 'checkbox',
					'default' => 0,
					'title'   => __( 'Open in New Tab', 'mobile-contact-bar' ),
					'label'   => __( 'Open links in a new browser tab', 'mobile-contact-bar' ),
				),
			),

			'bar'     => array(
				'color'               => array(
					'type'    => 'color-picker',
					'default' => '#3cc391',
					'title'   => __( 'Bar Color', 'mobile-contact-bar' ),
				),
				'opacity'             => array(
					'type'    => 'slider',
					'default' => 1,
					'min'     => 0,
					'max'     => 1,
					'step'    => 0.05,
					'title'   => __( 'Bar Opacity', 'mobile-contact-bar' ),
					'desc'    => __( 'You can set transparency individually on each color with the Color Pickers\' horizontal slider.', 'mobile-contact-bar' ),
				),
				'height'              => array(
					'type'    => 'number',
					'default' => 50,
					'min'     => 0,
					'title'   => __( 'Bar Height', 'mobile-contact-bar' ),
					'postfix' => 'px',
				),
				'width'               => array(
					'type'    => 'number',
					'default' => 100,
					'min'     => 0,
					'max'     => 100,
					'title'   => __( 'Bar Width', 'mobile-contact-bar' ),
					'postfix' => '%',
				),
				'horizontal_position' => array(
					'type'    => 'radio',
					'align'   => 'horizontal',
					'default' => 'center',
					'title'   => __( 'Horizontal Position', 'mobile-contact-bar' ),
					'desc'    => __( 'It has effect if Bar Width is smaller than 100%.', 'mobile-contact-bar' ),
					'options' => array(
						'left'   => __( 'left', 'mobile-contact-bar' ),
						'center' => __( 'center', 'mobile-contact-bar' ),
						'right'  => __( 'right', 'mobile-contact-bar' ),
					),
					'visible' => array(
						'bar-width' => '<100',
					),
				),
				'vertical_position'   => array(
					'type'    => 'radio',
					'align'   => 'horizontal',
					'default' => 'bottom',
					'title'   => __( 'Vertical Position', 'mobile-contact-bar' ),
					'options' => array(
						'top'    => __( 'top', 'mobile-contact-bar' ),
						'bottom' => __( 'bottom', 'mobile-contact-bar' ),
					),
				),
				'is_fixed'            => array(
					'type'    => 'checkbox',
					'default' => 1,
					'title'   => __( 'Fixed Position', 'mobile-contact-bar' ),
					'label'   => __( 'Fix bar at its position on the screen', 'mobile-contact-bar' ),
				),
				'space_height'        => array(
					'type'    => 'number',
					'default' => 0,
					'min'     => 0,
					'title'   => __( 'Space Height', 'mobile-contact-bar' ),
					'postfix' => 'px',
				),
				'placeholder_height'  => array(
					'type'    => 'number',
					'default' => 50,
					'min'     => 0,
					'title'   => __( 'Placeholder Height', 'mobile-contact-bar' ),
					'postfix' => 'px',

				),
				'placeholder_color'   => array(
					'type'    => 'color-picker',
					'default' => '#ff647d',
					'title'   => __( 'Placeholder Color', 'mobile-contact-bar' ),
				),
				'is_border'           => array(
					'type'    => 'radio',
					'align'   => 'horizontal',
					'default' => 'none',
					'title'   => __( 'Border', 'mobile-contact-bar' ),
					'options' => array(
						'one'  => __( 'top or bottom', 'mobile-contact-bar' ),
						'two'  => __( 'top and bottom', 'mobile-contact-bar' ),
						'none' => __( 'no border', 'mobile-contact-bar' ),
					),
				),
				'border_color'        => array(
					'type'    => 'color-picker',
					'default' => '#174b38',
					'title'   => __( 'Border Color', 'mobile-contact-bar' ),
					'visible' => array(
						'bar-is_border' => '!=none',
					),
				),
				'border_width'        => array(
					'type'    => 'number',
					'default' => 1,
					'min'     => 0,
					'max'     => 100,
					'title'   => __( 'Border Width', 'mobile-contact-bar' ),
					'postfix' => 'px',
					'visible' => array(
						'bar-is_border' => '!=none',
					),
				),
			),

			'icons'   => array(
				'size'         => array(
					'type'    => 'select',
					'default' => 'lg',
					'title'   => __( 'Icon Size', 'mobile-contact-bar' ),
					'options' => array(
						'xs'  => 'xs',
						'sm'  => 'sm',
						'lg'  => 'lg',
						'1x'  => '1x',
						'2x'  => '2x',
						'3x'  => '3x',
						'4x'  => '4x',
						'5x'  => '5x',
						'6x'  => '6x',
						'7x'  => '7x',
						'8x'  => '8x',
						'9x'  => '9x',
						'10x' => '10x',
					),
				),
				'color'        => array(
					'type'    => 'color-picker',
					'default' => '#ffffff',
					'title'   => __( 'Icon Color', 'mobile-contact-bar' ),
				),
				'alignment'    => array(
					'type'    => 'radio',
					'align'   => 'horizontal',
					'default' => 'justified',
					'title'   => __( 'Alignment', 'mobile-contact-bar' ),
					'options' => array(
						'justified' => __( 'justified', 'mobile-contact-bar' ),
						'centered'  => __( 'centered', 'mobile-contact-bar' ),
					),
				),
				'width'        => array(
					'type'    => 'number',
					'default' => 70,
					'min'     => 0,
					'title'   => __( 'Icon Width', 'mobile-contact-bar' ),
					'postfix' => 'px',
					'visible' => array(
						'icons-alignment' => '==centered',
					),
				),
				'is_border'    => array(
					'type'    => 'radio',
					'align'   => 'horizontal',
					'default' => 'none',
					'title'   => __( 'Border', 'mobile-contact-bar' ),
					'options' => array(
						'two'  => __( 'left and right', 'mobile-contact-bar' ),
						'four' => __( 'all around', 'mobile-contact-bar' ),
						'none' => __( 'no border', 'mobile-contact-bar' ),
					),
				),
				'border_color' => array(
					'type'    => 'color-picker',
					'default' => '#ffffff',
					'title'   => __( 'Border Color', 'mobile-contact-bar' ),
					'visible' => array(
						'icons-is_border' => '!=none',
					),
				),
				'border_width' => array(
					'type'    => 'number',
					'default' => 1,
					'min'     => 0,
					'max'     => 100,
					'title'   => __( 'Border Width', 'mobile-contact-bar' ),
					'postfix' => 'px',
					'visible' => array(
						'icons-is_border' => '!=none',
					),
				),
			),

			'badges'  => array(
				'background_color' => array(
					'type'    => 'color-picker',
					'default' => '#c86414',
					'title'   => __( 'Background Color', 'mobile-contact-bar' ),
				),
				'font_color'       => array(
					'type'    => 'color-picker',
					'default' => '#ffffff',
					'title'   => __( 'Font Color', 'mobile-contact-bar' ),
				),
				'size'             => array(
					'type'    => 'slider',
					'default' => 0.5,
					'min'     => 0,
					'max'     => 1,
					'step'    => 0.05,
					'title'   => __( 'Badge Size', 'mobile-contact-bar' ),
				),
				'corner'           => array(
					'type'    => 'radio',
					'align'   => 'horizontal',
					'default' => 'top-right',
					'title'   => __( 'Corner', 'mobile-contact-bar' ),
					'options' => array(
						'top-right'    => __( 'top-right', 'mobile-contact-bar' ),
						'bottom-right' => __( 'bottom-right', 'mobile-contact-bar' ),
						'bottom-left'  => __( 'bottom-left', 'mobile-contact-bar' ),
						'top-left'     => __( 'top-left', 'mobile-contact-bar' ),
					),
				),
			),

			'toggle'  => array(
				'is_render'    => array(
					'type'    => 'checkbox',
					'default' => 0,
					'title'   => __( 'Show / Hide Toggle', 'mobile-contact-bar' ),
					'label'   => __( 'Show toggle', 'mobile-contact-bar' ),
					'desc'    => __( 'The toggle will be displayed only if the bar is fixed at its position.', 'mobile-contact-bar' ),
				),
				'state'        => array(
					'type'    => 'radio',
					'align'   => 'horizontal',
					'default' => 'open',
					'title'   => __( 'Initial State', 'mobile-contact-bar' ),
					'options' => array(
						'open'   => __( 'bar is open', 'mobile-contact-bar' ),
						'closed' => __( 'bar is closed', 'mobile-contact-bar' ),
					),
				),
				'is_cookie'    => array(
					'type'    => 'checkbox',
					'default' => 1,
					'title'   => __( 'Dynamic State', 'mobile-contact-bar' ),
					'label'   => __( 'Save toggle state (bar is open or closed) in a cookie', 'mobile-contact-bar' ),
				),
				'shape'        => array(
					'type'    => 'radio',
					'align'   => 'horizontal',
					'default' => 'rounded',
					'title'   => __( 'Shape', 'mobile-contact-bar' ),
					'options' => array(
						'rounded' => __( 'rounded corners', 'mobile-contact-bar' ),
						'sharp'   => __( 'sharp corners', 'mobile-contact-bar' ),
					),
				),
				'color'        => array(
					'type'    => 'color-picker',
					'default' => '#2a8966',
					'title'   => __( 'Color', 'mobile-contact-bar' ),
				),
				'label'        => array(
					'type'    => 'text',
					'default' => 'Contact Us',
					'title'   => __( 'Label', 'mobile-contact-bar' ),
					'desc'    => __( 'Display a short text on the toggle.', 'mobile-contact-bar' ),
				),
				'size'         => array(
					'type'    => 'slider',
					'default' => 0.9,
					'min'     => 0,
					'max'     => 1,
					'step'    => 0.05,
					'title'   => __( 'Label Font Size', 'mobile-contact-bar' ),
				),
				'is_animation' => array(
					'type'    => 'checkbox',
					'default' => 1,
					'title'   => __( 'Animation Ease', 'mobile-contact-bar' ),
					'label'   => __( 'Slow down toggle animation', 'mobile-contact-bar' ),
				),
			),
		);
	}



	/**
	 * Filters setting fields for defaults.
	 *
	 * @since 2.0.0
	 *
	 * @return array Default settings
	 */
	public static function get_defaults() {
		$settings         = self::settings();
		$default_settings = array();

		foreach ( $settings as $section => $fields ) {
			$default_settings[ $section ] = array_map(
				function( $field ) {
					return $field['default'];
				}, $fields
			);
		}
		return $default_settings;
	}
}
