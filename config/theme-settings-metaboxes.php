<?php
/**
 * Config: Genesis settings meta boxes.
 *
 * @package   Generico\Theme
 * @author    Craig Simpson <craig@craigsimpson.scot>
 * @copyright Copyright (c) 2019, Craig Simpson
 * @license   GPL-2.0-or-later
 */

namespace Generico\Theme;

use Generico\Core\ThemeSettings\MetaBoxes;

return [
	MetaBoxes::REMOVE => [
		MetaBoxes::HEADER,
		MetaBoxes::NAV,
	],
];
