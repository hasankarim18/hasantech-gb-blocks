<?php

?>


<style>
    /* .wp-block-post-content {
        display: block !important;
    } */
</style>



<div style="background-color: lightcoral; max-width: 100%; width: 100%; ">
    <h<?php echo $attributes['level']; ?> style="
        color:<?php echo esc_attr($attributes['color']); ?>;
        text-align:<?php echo esc_attr($attributes['align']); ?>;
     "> <?php echo $attributes['content'] ?? '' ?> </h<?php echo $attributes['level']; ?>>
</div>