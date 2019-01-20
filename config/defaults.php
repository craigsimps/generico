<?php
/**
 * Runtime configuration.
 *
 * @package   Generico\Theme
 * @author    Craig Simpson <craig@craigsimpson.scot>
 * @copyright Copyright (c) 2019, Craig Simpson
 * @license   GPL-2.0-or-later
 */

namespace Generico\Theme;

use Generico\Core\ImageSizes;
use Generico\Core\Layouts;
use Generico\Core\Sidebars;
use Generico\Core\ThemeSettings;
use Generico\Core\ThemeSettingsCustomizer;
use Generico\Core\ThemeSettingsMetaBoxes;
use Generico\Core\ThemeSupport;

$generico_add_theme_support = [
	'html5'                           => [
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	],
	'genesis-accessibility'           => [
		'404-page',
		'drop-down-menu',
		'headings',
		'search-form',
		'skip-links',
	],
	'genesis-responsive-viewport'     => '',
	'custom-logo'                     => [
		'height'      => 120,
		'width'       => 700,
		'flex-height' => true,
		'flex-width'  => true,
	],
	'genesis-menus'                   => [
		'primary'   => __( 'Header Menu', 'generico' ),
		'secondary' => __( 'Footer Menu', 'generico' ),
	],
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 3,
	'editor-styles'                   => '',
	'align-wide'                      => '',
	'responsive-embeds'               => '',
	'editor-font-sizes'               => [
		[
			'name' => __( 'Small', 'generico' ),
			'size' => 12,
			'slug' => 'small',
		],
		[
			'name' => __( 'Normal', 'generico' ),
			'size' => 16,
			'slug' => 'normal',
		],
		[
			'name' => __( 'Large', 'generico' ),
			'size' => 20,
			'slug' => 'large',
		],
		[
			'name' => __( 'Larger', 'generico' ),
			'size' => 24,
			'slug' => 'larger',
		],
	],
	'editor-color-palette'            => [
		[
			'name'  => __( 'Light gray', 'generico' ),
			'slug'  => 'light-gray',
			'color' => '#f5f5f5',
		],
		[
			'name'  => __( 'Medium gray', 'generico' ),
			'slug'  => 'medium-gray',
			'color' => '#999',
		],
		[
			'name'  => __( 'Dark gray', 'generico' ),
			'slug'  => 'dark-gray',
			'color' => '#333',
		],
	],
];

$generico_image_sizes = [
	ImageSizes::ADD => [
		'sidebar-featured' => [ 75, 75, true ],
	],
];

$generico_layouts = [
	Layouts::REMOVE => [
		'content-sidebar-sidebar',
		'sidebar-content-sidebar',
		'sidebar-sidebar-content',
	],
];

$generico_sidebars = [
	Sidebars::REMOVE => [
		'header-right',
		'sidebar-alt',
	],
];

$generico_theme_settings = [
	'blog_cat_num'              => 6,
	'breadcrumb_front_page'     => 0,
	'content_archive'           => 'full',
	'content_archive_limit'     => 0,
	'content_archive_thumbnail' => 0,
	'posts_nav'                 => 'numeric',
	'site_layout'               => 'content-sidebar',
];

$generico_theme_settings_customizer = [
	ThemeSettingsCustomizer::REMOVE => [
		ThemeSettingsCustomizer::HEADER,
	],
];

$generico_theme_settings_meta_boxes = [
	ThemeSettingsMetaBoxes::REMOVE => [
		ThemeSettingsMetaBoxes::HEADER,
		ThemeSettingsMetaBoxes::NAV,
	],
];

return [
	ThemeSupport::class            => [
		ThemeSupport::ADD    => $generico_add_theme_support,
		ThemeSupport::REMOVE => [],
	],
	ImageSizes::class              => $generico_image_sizes,
	Layouts::class                 => $generico_layouts,
	Sidebars::class                => $generico_sidebars,
	ThemeSettings::class           => $generico_theme_settings,
	ThemeSettingsCustomizer::class => $generico_theme_settings_customizer,
	ThemeSettingsMetaBoxes::class  => $generico_theme_settings_meta_boxes,
];
