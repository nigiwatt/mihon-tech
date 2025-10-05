
<?php

/**
* Theme Name: Roundabout
* Description: Initialize helper module
*/


// Reduce the risk of information leakage on the server
if( !defined( 'ABSPATH' ) ) exit;

// Title tag support
add_theme_support( 'title-tag' );

// Remove wp styles
add_action( 'init', function() {

    // Emoji styles
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );

    if( function_exists( 'wp_enqueue_emoji_styles' ) )
        remove_action( 'wp_enqueue_scripts', 'wp_enqueue_emoji_styles' );
} );
