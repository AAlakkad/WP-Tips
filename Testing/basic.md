When you're writing tests for your plugins/themes or you want to test something using WordPress stuff, you need to include a file that load the WordPress core stuff for you.

By stuff I mean the global variables like `$wpdb` for dealing with database.

Currently I'm copying the wp-config.php content to the _bootstrap.php file and update the ABSPATH to relative correct path.
