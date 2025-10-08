
<?php

/**
* Theme Name: Roundabout
* Description: Add "options detail" item for admin menu
*/


add_action( 'admin_menu', function() {

    // Add "Detail" under "General" in settings menu
    add_options_page(
        __( 'Detail Settings', 'roundabout' ),
        __( 'Detail', 'roundabout' ),
        'manage_options',
        'options_detail',
        'options_detail_page',
        1
    );

    // Add section
    add_settings_section(
        'options_detail_section',
        '',
        '',
        'options_detail'
    );

    // Add fields
    add_settings_field(
        'feature_enables',
        __( 'Feature Enables', 'roundabout' ),
        'options_detail_feature',
        'options_detail',
        'options_detail_section',
        array(
            'label_for' => 'feature_enables'
        )
    );

    add_settings_field(
        'admin_menu_enables',
        __( 'Admin Menu Enables', 'roundabout' ),
        'options_detail_admin_menu',
        'options_detail',
        'options_detail_section',
        array(
            'label_for' => 'admin_menu_enables'
        )
    );

    add_settings_field(
        'debug_display_enables',
        __( 'Debug Display Enables', 'roundabout' ),
        'options_detail_debug_display',
        'options_detail',
        'options_detail_section',
        array(
            'label_for' => 'debug_display_enables'
        )
    );

    add_settings_field(
        'structured_data',
        __( 'Structured Data', 'roundabout' ),
        'options_detail_structured_data',
        'options_detail',
        'options_detail_section',
        array(
            'label_for' => 'structured_data'
        )
    );

    add_settings_field(
        'google_recaptcha_v2_settings',
        __( 'Google reCAPTCHA v2 Settings', 'roundabout' ),
        'options_detail_google_recaptcha_v2',
        'options_detail',
        'options_detail_section',
        array(
            'label_for' => 'google_recaptcha_v2_settings'
        )
    );

    // Register
    register_setting(
        'options_detail',
        'feature_enables',
        array(
            'sanitize_callback' => 'sanitize_fields'
        )
    );

    register_setting(
        'options_detail',
        'admin_menu_enables',
        array(
            'sanitize_callback' => 'sanitize_fields'
        )
    );

    register_setting(
        'options_detail',
        'debug_display_enables',
        array(
            'sanitize_callback' => 'sanitize_fields'
        )
    );

    register_setting(
        'options_detail',
        'structured_data',
        array(
            'sanitize_callback' => 'sanitize_fields'
        )
    );

    register_setting(
        'options_detail',
        'google_recaptcha_v2_sitekey',
        array(
            'sanitize_callback' => 'esc_attr'
        )
    );

    register_setting(
        'options_detail',
        'google_recaptcha_v2_secretkey',
        array(
            'sanitize_callback' => 'esc_attr'
        )
    );
} );

// "Detail" page contents
function options_detail_page() {

?>
<div class="wrap">
  <h1><?= _e( 'Detail Settings', 'roundabout' ) ?></h1>
  <form method="post" action="options.php">
<?php

    settings_fields( 'options_detail' );
    do_settings_sections( 'options_detail' );
    submit_button();

?>
  </form>
</div>
<?php
}

// "Feature Enables" field contents
function options_detail_feature() {

    $item = array(
        'menus'   => __( 'Menus', 'roundabout' ),
        'widgets' => __( 'Widgets', 'roundabout' )
    );

    $enable = get_option( 'feature_enables' );
    $enable = sanitize_fields( $enable );
    $enable = array_flip( $enable );

    foreach ( $item as $key => $value ) {

?>
<label><input type="checkbox" name="feature_enables[]"
<?= checked( isset( $enable[ $key ] ), true ) ?> value="<?= $key ?>">
<?= $value ?></label><br>
<?php
    }
}

// "Admin Menu Enables" field contents
function options_detail_admin_menu() {

    $item = array(
        'dashboard'     => __( 'Dashboard', 'roundabout' ),
        'posts'         => __( 'Posts', 'roundabout' ),
        'media'         => __( 'Media', 'roundabout' ),
        'pages'         => __( 'Pages', 'roundabout' ),
        'comments'      => __( 'Comments', 'roundabout' ),
        'appearance'    => __( 'Appearance', 'roundabout' ),
        'theme-editor'  => __( 'Theme File Editor', 'roundabout' ),
        'plugins'       => __( 'Plugins', 'roundabout' ),
        'plugin-editor' => __( 'Plugin File Editor', 'roundabout' ),
        'users'         => __( 'Users', 'roundabout' ),
        'tools'         => __( 'Tools', 'roundabout' )
    );

    $enable = get_option( 'admin_menu_enables', array_keys( $item ) );
    $enable = sanitize_fields( $enable );
    $enable = array_flip( $enable );

    foreach ( $item as $key => $value ) {

?>
<label><input type="checkbox" name="admin_menu_enables[]"
<?= checked( isset( $enable[ $key ] ), true ) ?> value="<?= $key ?>">
<?= $value ?></label><br>
<?php
    }
}

// "Debug Display Enables" field contents
function options_detail_debug_display() {

    $item = array(
        'notice'     => __( 'Notice', 'roundabout' ),
        'warning'    => __( 'Warning', 'roundabout' ),
        'deprecated' => __( 'Deprecated', 'roundabout' )
    );

    $enable = get_option( 'debug_display_enables', array_keys( $item ) );
    $enable = sanitize_fields( $enable );
    $enable = array_flip( $enable );

    foreach ( $item as $key => $value ) {

?>
<label><input type="checkbox" name="debug_display_enables[]"
<?= checked( isset( $enable[ $key ] ), true ) ?> value="<?= $key ?>">
<?= $value ?></label><br>
<?php
    }
}

// "Structured Data" field contents
function options_detail_structured_data() {

    $item = array(
        'activate' => __( 'Activate Structured Data', 'roundabout' )
    );

    $enable = get_option( 'structured_data', array_keys( $item ) );
    $enable = sanitize_fields( $enable );
    $enable = array_flip( $enable );

    foreach ( $item as $key => $value ) {

?>
<label><input type="checkbox" name="structured_data[]"
<?= checked( isset( $enable[ $key ] ), true ) ?> value="<?= $key ?>">
<?= $value ?></label><br>
<?php
    }
}

// "Google reCAPTCHA v2" field contents
function options_detail_google_recaptcha_v2() {

    $sitekey   = get_option( 'google_recaptcha_v2_sitekey' );
    $secretkey = get_option( 'google_recaptcha_v2_secretkey' );

?>
<p><label><?php _e( 'Site key', 'roundabout' ); ?>:<br><input type="text" name="google_recaptcha_v2_sitekey"
id="google_recaptcha_v2_sitekey" value="<?= $sitekey ?>" class="regular-text"></label></p>
<p><label><?php _e( 'Secret key', 'roundabout' ); ?>:<br><input type="text" name="google_recaptcha_v2_secretkey"
id="google_recaptcha_v2_secretkey" value="<?= $secretkey ?>" class="regular-text"></label></p>
<?php
}

// Sanitize fields
function sanitize_fields( $args ) {

    $args = isset( $args ) ? (array) $args : [];
    $args = array_map( 'esc_attr', $args );

    return $args;
}


// Get option
$feature = get_option( 'feature_enables' );
$admin_menu = get_option( 'admin_menu_enables' );
$debug_display = get_option( 'debug_display_enables' );

if ( is_array( $feature ) ) {

    // Menus support
    if ( in_array( 'menus', $feature, true ) ) {

        add_theme_support( 'menus' );
    }

    // Widgets support
    if ( in_array( 'widgets', $feature, true ) ) {

        add_action( 'widgets_init', function() {

            register_sidebar( array(
                'name' => __( 'Default widgets', 'roundabout' ),
                'id' => 'default_widgets'
            ) );

        } );
    }
}

if ( is_array( $admin_menu ) ) {

    // Display switching
    add_action( 'admin_menu', function() {

        global $admin_menu;

        // Dashboard
        if ( !in_array( 'dashboard', $admin_menu, true ) )
            remove_menu_page( 'index.php' );

        // Posts
        if ( !in_array( 'posts', $admin_menu, true ) )
            remove_menu_page( 'edit.php' );

        // Media
        if ( !in_array( 'media', $admin_menu, true ) )
            remove_menu_page( 'upload.php' );

        // Pages
        if ( !in_array( 'pages', $admin_menu, true ) )
            remove_menu_page( 'edit.php?post_type=page' );

        // Comments
        if ( !in_array( 'comments', $admin_menu, true ) )
            remove_menu_page( 'edit-comments.php' );

        // Appearance
        if ( !in_array( 'appearance', $admin_menu, true ) )
            remove_menu_page( 'themes.php' );

        // Theme file editor
        if ( !in_array( 'theme-editor', $admin_menu, true ) )
            remove_submenu_page( 'themes.php', 'theme-editor.php' );

        // Plugins
        if ( !in_array( 'plugins', $admin_menu, true ) )
            remove_menu_page( 'plugins.php' );

        // Plugins file editor
        if ( !in_array( 'plugin-editor', $admin_menu, true ) )
            remove_submenu_page( 'plugins.php', 'plugin-editor.php' );

        // Users
        if ( !in_array( 'users', $admin_menu, true ) )
            remove_menu_page( 'users.php' );

        // Tools
        if ( !in_array( 'tools', $admin_menu, true ) )
            remove_menu_page( 'tools.php' );
    }, 102 );
}

if ( is_array( $debug_display ) ) {

    // Debug display
    $level = E_ALL;

    // Hide notice
    if ( !in_array( 'notice', $debug_display, true ) )
        $level &= ~E_NOTICE;

    // Hide warning
    if ( !in_array( 'warning', $debug_display, true ) )
        $level &= ~E_WARNING;

    // Hide deprecated
    if ( !in_array( 'deprecated', $debug_display, true ) )
        $level &= ~E_DEPRECATED;

    error_reporting( $level );

    // Always show fatal errors
    @ini_set( 'display_errors', 1 );
}
