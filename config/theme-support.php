<?php
/**
 * Config: Theme support.
 *
 * @package   Generico\Theme
 * @author    Craig Simpson <craig@craigsimpson.scot>
 * @copyright Copyright (c) 2019, Craig Simpson
 * @license   GPL-2.0-or-later
 */

namespace Generico\Theme;

use Generico\Core\ThemeSupport;

return [
	ThemeSupport::ADD    => [
		'html5'                       => [
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form',
		],
		'genesis-accessibility'       => [
			'404-page',
			'drop-down-menu',
			'headings',
			'search-form',
			'skip-links',
		],
		'genesis-responsive-viewport' => '',
		'genesis-menus'               => [
			'primary'   => __( 'Header Menu', 'generico' ),
			'secondary' => __( 'Footer Menu', 'generico' ),
		],
		'genesis-footer-widgets'      => 4,
	],
	ThemeSupport::REMOVE => [],
];
