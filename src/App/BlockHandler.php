<?php

namespace Hasan\HasantechGbBlocks\App;

if (!defined('ABSPATH')) {
    exit;
}


class BlockHandler
{

    use \Hasan\HasantechGbBlocks\App\Traits\Singleton;

    public function init()
    {

        add_action('init', [$this, 'register_blocks']);
    }

    public function register_blocks()
    {
        error_log('Hello, World! register_blocks is running!');

        $manifest_blocks = require HNTGB_PATH . 'blocks/build/blocks-manifest.php';

        foreach (array_keys($manifest_blocks) as $block_type) {
            register_block_type(HNTGB_PATH . 'blocks/build/' . $block_type);
        }

    }

}