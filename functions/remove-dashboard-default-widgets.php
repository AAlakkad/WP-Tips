<?php
/**
 * Remove dashboard default widgets in wp-admin home.
 */
 
add_action('admin_init', create_function('', 'remove_meta_box("dashboard_incoming_links", "dashboard", "normal");'));
add_action('admin_init', create_function('', 'remove_meta_box("dashboard_plugins", "dashboard", "normal");'));
add_action('admin_init', create_function('', 'remove_meta_box("dashboard_primary", "dashboard", "normal");'));
add_action('admin_init', create_function('', 'remove_meta_box("dashboard_secondary", "dashboard", "normal");'));
add_action('admin_init', create_function('', 'remove_meta_box("dashboard_quick_press", "dashboard", "normal");'));
add_action('admin_init', create_function('', 'remove_meta_box("dashboard_recent_comments", "dashboard", "normal");'));
add_action('admin_init', create_function('', 'remove_meta_box("dashboard_recent_drafts", "dashboard", "normal");'));
add_action('admin_init', create_function('', 'remove_meta_box("dashboard_right_now", "dashboard", "normal");'));
