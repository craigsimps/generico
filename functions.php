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

define( 'CHILD_THEME_NAME', 'Generico' );
define( 'CHILD_THEME_URL', 'https://genericotheme.com' );
define( 'CHILD_THEME_VERSION', '0.1.0' );

load_child_theme_textdomain( 'generico', get_stylesheet_directory() . '/languages' );
