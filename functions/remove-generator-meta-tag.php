<?php
/**
 * Remove generator meta tag in <head>
 */
 
add_filter('the_generator', 'remove_generator_meta');
function remove_generator_meta() {
    return '';
}
