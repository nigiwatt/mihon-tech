
<?php

/**
* Theme Name: Roundabout
* Description: URL helper module
*/


// Convert menu link URL to absolute path
add_filter( 'nav_menu_link_attributes', function( $atts, $item, $args ) {

    if ( !isset( $atts[ 'href' ] ) ) return $atts;

    // ID or slug of the posts (Custom link only)
    $menu_item_ref = get_post_meta( $item->ID, '_menu_item_ref', true );
    if ( $item->type === 'custom' && $menu_item_ref !== '' ) {

        // If meta value is slug
        if ( !is_numeric( $menu_item_ref ) ) {

            // From page
            $page = get_page_by_path( $menu_item_ref );
            if ( $page ) {

                $atts_href = get_permalink( $page->ID );

            } else {

                // From posts
                $posts = get_posts( [
                    'name' => $menu_item_ref,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'numberposts' => 1
                ] );
                $atts_href = $posts ? get_permalink( $posts[0]->ID ) : $atts[ 'href' ];
            }

        // If meta value is ID
        } else {

            $atts_href = get_permalink( intval( $menu_item_ref ) );
        }

        // Complete paths
        $atts_href = esc_url( home_url() . str_replace( home_url(), '', $atts_href ) );

        $atts_href_shape = explode( '#', $atts[ 'href' ], 2 );
        $atts_href_query = explode( '?', $atts_href_shape[0], 2 );
        if ( count( $atts_href_query ) > 1 )
            $atts_href .= ( strpos( $atts_href, '?' ) !== false ? '&' : '?' ) . $atts_href_query[1];
        if ( count( $atts_href_shape ) > 1 )
            $atts_href .= '#' . $atts_href_shape[1];

        $atts[ 'href' ] = $atts_href;
    }
    return $atts;
}, 10, 3 );


// Get page URL from slug
function get_page_url( $slug, $param = null ) {

    $page = get_page_by_path( $slug );
    if ( $page ) {

        $page_url = get_permalink( $page->ID );
        if ( $param ) {

            if ( strpos( $page_url, '?' ) !== false )
                $page_url .= str_replace( '?', '&', $param );
            else
                $page_url .= $param;
        }

    } else {

        $page_url = esc_url( home_url( '/' ) );
    }
    return $page_url;
}

// Get post URL from slug
function get_post_url( $slug, $param = null, $post_type = 'post' ) {

    $posts = get_posts( [
        'name' => $slug,
        'post_type' => $post_type,
        'post_status' => 'publish',
        'numberposts' => 1,
    ] );
    if ( $posts ) {

        $posts_url = get_permalink( $posts[0]->ID );
        if ( $param ) {

            if ( strpos( $posts_url, '?' ) !== false )
                $posts_url .= str_replace( '?', '&', $param );
            else
                $posts_url .= $param;
        }

    } else {

        $posts_url = esc_url( home_url( '/' ) );
    }
    return $posts_url;
}

// Get term URL from slug
function get_term_url( $slug, $param = null, $taxonomy = 'category' ) {

    $term = get_term_by( 'slug', $slug, $taxonomy );
    if ( $term ) {

        $term_url = get_term_link( $term );
        if ( $param ) {

            if ( strpos( $term_url, '?' ) !== false )
                $term_url .= str_replace( '?', '&', $param );
            else
                $term_url .= $param;
        }

    } else {

        $term_url = esc_url( home_url( '/' ) );
    }
    return $term_url;
}


// Show field
add_action( 'wp_nav_menu_item_custom_fields', function( $item_id, $item ) {

    if ( $item->type === 'custom' ) {

        $ref_id = get_post_meta( $item_id, '_menu_item_ref', true );
        ?>
        <p class="description description-wide">
        <label for="edit-menu-item-ref-<?php echo $item_id; ?>">
            <?php _e( 'ID or slug of the posts (Prepend it with a permalink to URL)', 'roundabout' ); ?><br>
            <input type="text" id="edit-menu-item-ref-<?php echo $item_id; ?>"
            class="widefat code edit-menu-item-ref"
            name="menu-item-ref[<?php echo $item_id; ?>]"
            value="<?php echo esc_attr( $ref_id ); ?>" />
        </label>
        </p>
        <?php
    }
}, 10, 2 );

// Save field
add_action( 'wp_update_nav_menu_item', function( $menu_id, $menu_item_db_id, $args ) {

    if ( isset( $_POST[ 'menu-item-ref' ][ $menu_item_db_id ] ) ) {

        update_post_meta(
            $menu_item_db_id,
            '_menu_item_ref',
            $_POST[ 'menu-item-ref' ][ $menu_item_db_id ]
        );

    } else {

        delete_post_meta(
            $menu_item_db_id,
            '_menu_item_ref'
        );
    }
}, 10, 3 );
