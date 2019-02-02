<?php
/**
 * Config: Genesis page layouts.
 *
 * @package   Generico\Theme
 * @author    Craig Simpson <craig@craigsimpson.scot>
 * @copyright Copyright (c) 2019, Craig Simpson
 * @license   GPL-2.0-or-later
 */

namespace Generico\Theme;

use Generico\Core\Layouts;

return [
	Layouts::ADD    => [],
	Layouts::REMOVE => [
		'content-sidebar-sidebar',
		'sidebar-content-sidebar',
		'sidebar-sidebar-content',
	],
];
