
<?php

/**
* Theme Name: Roundabout
* Description: Breadcrumb helper module
*/


function get_breadcrumb_items() {

    global $post;
    $position = 1;
    $items = [];

    // Top
    $items[] = [
        'label'    => __( 'Top', 'roundabout' ),
        'url'      => get_page_url( 'index' ),
        'position' => $position++
    ];

    if ( is_category() || is_single() ) {

        // Categories or posts
        $categories = get_the_category();
        if ( $categories ) {

            $cat = $categories[0];
            $ancestors = array_reverse( get_ancestors( $cat->term_id, 'category' ) );
            foreach ( $ancestors as $ancestor_id ) {

                $ancestor = get_category( $ancestor_id );
                $items[] = [
                    'label'    => $ancestor->name,
                    'url'      => get_category_link( $ancestor->term_id ),
                    'position' => $position++
                ];
            }

            // Current category
            $items[] = [
                'label'    => $cat->name,
                'url'      => is_single() ? get_category_link( $cat->term_id ) : null,
                'position' => $position++
            ];

        } else {

            $items[] = [
                'label'    => single_cat_title( '', false ),
                'url'      => null,
                'position' => $position++
            ];
        }

        if ( is_single() ) {

            $items[] = [
                'label'    => get_the_title(),
                'url'      => null,
                'position' => $position++
            ];
        }

    } else if ( is_page() ) {

        // Page
        if ( $post->post_parent ) {

            $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
            foreach ( $ancestors as $ancestor ) {

                $items[] = [
                    'label'    => get_the_title( $ancestor ),
                    'url'      => get_permalink( $ancestor ),
                    'position' => $position++
                ];
            }
        }

        $items[] = [
            'label'    => get_the_title(),
            'url'      => null,
            'position' => $position++
        ];

    } else if ( is_search() ) {

        // Search
        $items[] = [
            'label'    => get_search_query(),
            'url'      => null,
            'position' => $position++
        ];

    } else if ( is_404() ) {

        // Page not found
        $items[] = [
            'label'    => __( '404 not found', 'roundabout' ),
            'url'      => null,
            'position' => $position++
        ];
    }
    return $items;
}
