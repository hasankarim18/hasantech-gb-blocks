<?php


/**
 * Plugin Name: Hasantech Gb Blocks
 * Plugin URI: https://example.com/
 * Description: A Collection of Blocks for Gutenberg Blocks
 * Version: 1.0.0
 * Author: Hasan
 * Author URI: https://hasantech.xyz/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: hasantech-gb-blocks
 * Domain Path: /i18n
 */

namespace Hasan\HasantechGbBlocks;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('HNTGB_PATH', plugin_dir_path(__FILE__));
define('HNTGB_URL', plugin_dir_url(__FILE__));


if (!class_exists(HasantechGbBlocks::class) && is_readable(__DIR__ . '/vendor/autoload.php')) {

    require_once __DIR__ . '/vendor/autoload.php';
}



class_exists(HasantechGbBlocks::class) && HasantechGbBlocks::instance()->init();

