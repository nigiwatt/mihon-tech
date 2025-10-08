
<?php

/**
* Theme Name: Roundabout
* Description: Load script helper module
*/


// Load JS
add_action( 'wp_enqueue_scripts', function() {

    // Common scripts
    wp_enqueue_script(
        'common-script',
        get_template_directory_uri() . '/assets/js/common.min.js',
        [],
        filemtime( get_template_directory() . '/assets/js/common.min.js' ),
        true
    );

    // Swiper
    $swiper_pages = [ 'company' ];
    if ( is_front_page() || is_page( $swiper_pages ) ) {

        wp_enqueue_script(
            'swiper-script',
            get_template_directory_uri() . '/assets/js/swiper.min.js',
            [],
            filemtime( get_template_directory() . '/assets/js/swiper.min.js' ),
            true
        );
    }

    // Convert postal code to address
    $yubinbango_pages = [ 'contact' ];
    if ( is_page( $yubinbango_pages ) ) {

        wp_enqueue_script(
            'yubinbango-script',
            get_template_directory_uri() . '/assets/js/yubinbango.min.js',
            [],
            filemtime( get_template_directory() . '/assets/js/yubinbango.min.js' ),
            true
        );
    }
} );
