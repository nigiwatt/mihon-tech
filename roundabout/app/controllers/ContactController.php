
<?php

class ContactController {

    public function index() {

        return [
            'form_action' => admin_url( 'admin-post.php' ),
            'form_nonce'  => wp_create_nonce( 'contact_form_nonce' ),
        ];
    }

    public function index_handle() {

        // reCAPCHA v2
        $recaptcha_secret = get_option( 'google_recaptcha_v2_secretkey' );
        $response = $_POST[ 'g-recaptcha-response' ] ?? '';

        $verify = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$response}"
        );
        $captcha_success = json_decode( $verify );
        if ( ( defined( 'WP_ENV' ) && WP_ENV === 'production' ) && !$captcha_success->success ) {

            wp_die( 'reCAPTCHA verification failed.' );
        }

        // CSRF check
        check_admin_referer( 'contact_form_nonce', 'contact_form_nonce_field' );

        if ( !isset( $_POST[ 'contact_form_nonce_field' ] ) ||
            !wp_verify_nonce( $_POST[ 'contact_form_nonce_field' ], 'contact_form_nonce' ) ) {

            wp_die( 'Invalid transmission.' );
        }

        // Save to session
        if ( !session_id() ) session_start();

        // Obtain and sanitize data
        $_SESSION[ 'form_data' ] = [
            'type' => sanitize_text_field( $_POST[ 'type' ] ?? '' ),
            'name' => sanitize_text_field( $_POST[ 'name' ] ?? '' ),
            'kana' => sanitize_text_field( $_POST[ 'kana' ] ?? '' ),
            'organization' => sanitize_text_field( $_POST[ 'organization' ] ?? '' ),
            'postal-code' => sanitize_text_field( $_POST[ 'postal-code' ] ?? '' ),
            'street-address' => sanitize_text_field( $_POST[ 'street-address' ] ?? '' ),
            'email' => sanitize_email( $_POST[ 'email' ] ?? '' ),
            'tel' => sanitize_text_field( $_POST[ 'tel' ] ?? '' ),
            'content' => sanitize_textarea_field( $_POST[ 'content' ] ?? '' ),
        ];

        // Redirect to confirm
        wp_safe_redirect( get_page_url( 'contact/confirm' ) );
        exit;
    }

    public function confirm() {

        // Load to session
        if ( !session_id() ) session_start();

        // ToDo
        if ( strpos( $_SESSION[ 'form_data' ][ 'type' ], '採用' ) !== false ) {

            $_SESSION[ 'form_data' ][ 'organization' ] = '';
        }

        $data = $_SESSION[ 'form_data' ] ?? null;
        if ( !$data ) {

            wp_safe_redirect( get_page_url( 'contact' ) );
            exit;
        }
        $data = array_merge( $data, [ 'form_action' => admin_url( 'admin-post.php?action=form_send_action' ) ] );
        return $data;
    }

    public function send_handle() {

        // Load to session
        if ( !session_id() ) session_start();

        $data = $_SESSION[ 'form_data' ] ?? null;
        if ( !$data ) {

            wp_die('No data found.');
        }

        // Load email template for sender
        $message = file_get_contents( get_template_directory() . '/resources/mail/auto-reply.txt' );
        list( $from, $to, $subject, $message ) = $this->replace_keyword( $data, $message );

        $headers[] = "From: {$from}";
        wp_mail( $to, $subject, $message, $headers );

        // Load email template for admin
        $message = file_get_contents( get_template_directory() . '/resources/mail/admin-notify.txt' );
        list( $from, $to, $subject, $message ) = $this->replace_keyword( $data, $message );

        $headers[] = "From: {$from}";
        wp_mail( $to, $subject, $message, $headers );


        // Delete session
        unset( $_SESSION[ 'form_data' ] );

        // Redirect to thanks
        wp_safe_redirect( get_page_url( 'contact/thanks' ) );
        exit;
    }

    private function replace_keyword( $data, $message ) {

        foreach ( $data as $key => $value ) {

            $message = str_replace( '[your-' . $key . ']', $value, $message );
        }
        $message = str_replace( '[_site_title]', get_bloginfo( 'name' ), $message );
        $message = str_replace( '[_site_admin_email]', get_option( 'admin_email' ), $message );
        $message = str_replace( '[_datetime]', date_i18n('Y-m-d H:i:s'), $message );
        $message = str_replace( '[_ip_addr]', $this->get_client_ip(), $message );
        $message = str_replace( '[_user_agent]', ( $_SERVER['HTTP_USER_AGENT'] ?? '' ), $message );

        // Read line
        $message = str_replace( array( "\r\n", "\r", "\n" ), "\n", $message );
        $lines = explode( "\n", $message );

        // Sort header
        $header = array( 'From: ', 'To: ', 'Subject: ' );
        foreach ( $lines as $line ) {

            if ( strncmp( $header[0], $line, strlen( $header[0] ) ) === 0 ) {

                $from    = str_replace( $header[0], '', $line );
                $message = str_replace( $line . "\n", '', $message );
            }
            if ( strncmp( $header[1], $line, strlen( $header[1] ) ) === 0 ) {

                $to      = str_replace( $header[1], '', $line );
                $message = str_replace( $line . "\n", '', $message );
            }
            if ( strncmp( $header[2], $line, strlen( $header[2] ) ) === 0 ) {

                $subject = str_replace( $header[2], '', $line );
                $message = str_replace( $line . "\n", '', $message );
            }
        }
        return [ $from, $to, $subject, $message ];
    }

    private function get_client_ip() {

        if ( !empty( $_SERVER[ 'HTTP_CLIENT_IP' ] ) ) {

            return $_SERVER[ 'HTTP_CLIENT_IP' ];

        } else if ( !empty( $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] ) ) {

            return explode( ',', $_SERVER[ 'HTTP_X_FORWARDED_FOR' ] )[0];

        } else {

            return $_SERVER[ 'REMOTE_ADDR' ] ?? '';
        }
    }
}

// For login user
add_action( 'admin_post_contact_form_action', [ new ContactController(), 'index_handle' ] );
add_action( 'admin_post_form_send_action', [ new ContactController(), 'send_handle' ] );

// For non login user
add_action( 'admin_post_nopriv_contact_form_action', [ new ContactController(), 'index_handle' ] );
add_action( 'admin_post_nopriv_form_send_action', [ new ContactController(), 'send_handle' ] );

// Filtering
add_filter( 'wp_mail', function( $args ) {

    // For development
    if ( defined( 'WP_ENV' ) && WP_ENV === 'development' ) {

        // Send email data to Node.js mail server
        wp_remote_post( 'http://localhost:3010/send-mail', [
            'headers' => [ 'Content-Type' => 'application/json; charset=utf-8' ],
            'body'    => wp_json_encode( $args ),
            'timeout' => 5,
        ] );

        // Does not send from WordPress
        return false;
    }
    return $args;
});
