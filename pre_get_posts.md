##pre\_get\_post

You might use `pre_get_posts` action to add alter to the main query.

But *Remember* to add the appropriate conditions before.

**Note:** It's [recommended](http://tommcfarlin.com/pre_get_posts-in-wordpress/) not to use `pre_get_posts`, but if you have to do it, do it in a right way!


###Example

We've custom post type named "gallery", and in the gallery archive page we want to display all items in a specific category, e.g category: 1

We can add: 

```PHP
add_action('pre_get_posts', 'gallery_archive');

function gallery_archive($query) {
	if(is_post_type_archive( 'gallery' )) {
		$category = get_aliqtisadi_category(true);
		$query->set('category__in', $category);
	}
	return $query;
}
```

That code will work as we want, but wait!
it'll change every gallery archive page, including the admin page!

I told you to use it carefully!

To fix it we can update the code to be: 

```PHP
add_action('pre_get_posts', 'gallery_archive');

function gallery_archive($query) {
	if(is_post_type_archive( 'gallery' ) && !is_admin()) {
		$category = get_aliqtisadi_category(true);
		$query->set('category__in', $category);
	}
	return $query;
}
```

`is_admin()` will determine if we're in the dashboard.
