<?php

/**
 * Disable user gravatar in admin bar.
 */
add_filter('get_avatar', function() { return false; }, 1, 5);
