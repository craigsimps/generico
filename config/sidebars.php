<?php
/**
 * Config: Sidebars.
 *
 * @package   Generico\Theme
 * @author    Craig Simpson <craig@craigsimpson.scot>
 * @copyright Copyright (c) 2019, Craig Simpson
 * @license   GPL-2.0-or-later
 */

namespace Generico\Theme;

use Generico\Core\Sidebars;

return [
	Sidebars::ADD    => [],
	Sidebars::REMOVE => [
		'header-right',
		'sidebar-alt',
	],
];
