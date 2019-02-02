<?php
/**
 * Theme setup.
 *
 * @package   Generico\Theme
 * @author    Craig Simpson <craig@craigsimpson.scot>
 * @copyright Copyright (c) 2019, Craig Simpson
 * @license   GPL-2.0-or-later
 *                              _
 *    __ _  ___ _ __   ___ _ __(_) ___ ___
 *   / _` |/ _ \ '_ \ / _ \ '__| |/ __/ _ \
 *  | (_| |  __/ | | |  __/ |  | | (_| (_) |
 *   \__, |\___|_| |_|\___|_|  |_|\___\___/
 *   |___/
 *
 */

namespace Generico\Theme;

use Generico\Core\ImageSizes;
use Generico\Core\Layouts;
use Generico\Core\Sidebars;
use Generico\Core\Theme;
use Generico\Core\ThemeSettings;
use Generico\Core\ThemeSupport;

define( 'CHILD_THEME_NAME', 'Generico' );
define( 'CHILD_THEME_URL', 'https://genericotheme.com' );
define( 'CHILD_THEME_VERSION', '0.1.0' );

load_child_theme_textdomain( 'generico', get_stylesheet_directory() . '/languages' );

add_action( 'genesis_setup', __NAMESPACE__ . '\\generico_setup', 15 );
/**
 * Child theme setup.
 *
 * @since 0.1.0
 *
 * @return void
 */
function generico_setup() {

	$config = [
		ImageSizes::class               => include __DIR__ . '/config/image-sizes.php',
		Layouts::class                  => include __DIR__ . '/config/layouts.php',
		Sidebars::class                 => include __DIR__ . '/config/sidebars.php',
		ThemeSettings::class            => include __DIR__ . '/config/theme-settings.php',
		ThemeSettings\Customizer::class => include __DIR__ . '/config/theme-settings-customizer.php',
		ThemeSettings\MetaBoxes::class  => include __DIR__ . '/config/theme-settings-metaboxes.php',
		ThemeSupport::class             => include __DIR__ . '/config/theme-support.php',
	];

	$generico = new Theme( $config );
	$generico->setup();

}
