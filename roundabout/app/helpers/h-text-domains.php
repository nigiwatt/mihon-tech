
<?php

/**
* Theme Name: Roundabout
* Description: Text domain (i18n) helper module
*/


if ( version_compare( $wp_version, '6.7', '<' ) ) {

    load_theme_textdomain(
        'roundabout',
        get_template_directory() . '/languages'
    );

} else {

    load_textdomain(
        'roundabout',
        get_template_directory() . '/languages/roundabout-' . determine_locale() . '.mo'
    );
}
