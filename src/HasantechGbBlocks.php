<?php

namespace Hasan\HasantechGbBlocks;

use Hasan\HasantechGbBlocks\App\BlockHandler;

if (!defined('ABSPATH')) {
    exit;
}



class HasantechGbBlocks
{
    use \Hasan\HasantechGbBlocks\App\Traits\Singleton;

    public function init()
    {


        add_action('plugins_loaded', [$this, 'plugins_loaded']);
    }

    public function plugins_loaded()
    {
        $this->includes();
        $this->register_hooks();
    }

    public function includes()
    {
        BlockHandler::instance()->init();
    }

    public function register_hooks()
    {
        load_textdomain('hasantech-gb-blocks', plugin_dir_path(__DIR__) . 'i18n/');

    }
}




