<?php
// assuming we have custom post type called "gallery" and we want to save it with default categoires.

if(get_bloginfo( 'version' ) < "3.7" ) {
	add_action('save_post', 'save_gallery_with_default_categories');
}
else {
	add_action('save_post_gallery', 'save_gallery_with_default_categories');
}

function save_gallery_with_default_categories($post_id) {
	if(get_post_type() != 'gallery') return;
	if(wp_is_post_revision($post_id)) return;

	global $wpdb;
	if(! has_term('','category',$post_id)) {
	    // get parent (first level) categories
		$main_categories = get_categories( array('parent' => 0, 'hide_empty' => false) );
		$terms = array();
		foreach ($main_categories as $term) {
		    // make sure you have the terms as integer not string
			$terms []= (int) $term->term_id;
		}
		// assign terms to the post
		wp_set_object_terms( $post_id, $terms, 'category' );
	}
}
