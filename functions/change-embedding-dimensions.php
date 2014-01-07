<?php
/**
 * Change default embeding dimensions to fit theme width, e.g. YouTube videos
 */
 
add_filter( 'embed_defaults', 'change_embed_defaults');
function change_embed_defaults($arg) {
    return array('width' => '684', 'height' => '410');
}
