
<?php

/**
* Theme Name: Roundabout
* Description: Archive helper module
*/


// If you have Yoast v20.0 or later enabled,
// specifying $args[ 'has_archive' ] = 'news' will result in
// "Content types -> Posts" will not be displayed due to "t.split is not a function" error.
add_filter( 'register_post_type_args', function( $args, $post_type ) {

    if ( $post_type === 'post' ) {

        $args[ 'rewrite' ] = true;
        $args[ 'has_archive' ] = 'news';
    }
    return $args;
}, 10, 2 );


add_filter( 'navigation_markup_template', function( $template ) {

	$template = '
	<nav class="p-n-pagination navigation %1$s" aria-label="%2$s">
	  <h2 class="screen-reader-text">%2$s</h2>
	  <div class="nav-links">%3$s</div>
	</nav>';
	return $template;
} );
