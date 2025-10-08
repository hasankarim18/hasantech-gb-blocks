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
        // wordpress 6.8
        // if (function_exists('wp_register_block_types_from_metadata_collection')) {
        //     wp_register_block_types_from_metadata_collection(HNTGB_PATH . 'blocks/build', HNTGB_PATH . 'blocks/build/blocks-manifest.php');

        //     return;
        // }

        // wordpress 6.7
        // if (function_exists('wp_register_block_metadata_collection')) {
        //     wp_register_block_metadata_collection(HNTGB_PATH . 'blocks/build', HNTGB_PATH . 'blocks/build/blocks-manifest.php');
        // }


        $manifest_blocks = require HNTGB_PATH . 'blocks/build/blocks-manifest.php';

        foreach (array_keys($manifest_blocks) as $block_type) {
            register_block_type(HNTGB_PATH . 'blocks/build/' . $block_type);
        }

    }

}