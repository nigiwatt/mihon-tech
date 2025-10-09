
<?php

/**
* Theme Name: Roundabout
* Description: Load style helper module
*/


// Load CSS
add_action( 'wp_enqueue_scripts', function() {

    // Common styles
    wp_enqueue_style(
        'common-style',
        get_template_directory_uri() . '/assets/css/style.min.css',
        [],
        filemtime( get_template_directory() . '/assets/css/style.min.css' )
    );
} );


// Preload
add_action( 'wp_head', function() {

    // Common styles
    echo '<link rel="preload" href="' . get_template_directory_uri() . '/assets/css/style.min.css" as="style">';

    // Web fonts
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" as="style">';
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" as="style">';
    echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" media="print" onload="this.media=\'all\'">';
    echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" media="print" onload="this.media=\'all\'">';
}, 1 );

add_filter( 'style_loader_tag', function( $html ) {

    return str_replace( [
        ' type="text/css"',
        " type='text/css'"
    ], '', $html );
} );
