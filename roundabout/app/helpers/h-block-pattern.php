
<?php

/**
* Theme Name: Roundabout
* Description: Block pattern helper module
*/


add_action( 'init', function() {

    register_block_pattern_category(
        'my-pattern-category',
        array(
            'label' => __( 'My Pattern Category', 'roundabout' ),
            'description' => __( 'Colored h2 tags and p tags', 'roundabout' ),
        )
    );

    register_block_pattern(
        'my-plugin/my-custom-pattern',
        array(
            'title' => __( 'Annotation', 'roundabout' ),
            'description' => __( 'Annotation pattern', 'roundabout' ),
            'content' =>
                '<div class="annotation">' .
                '<h2>' . __( 'Title', 'roundabout' ) . '</h2>' .
                '<p>' . __( 'Text', 'roundabout' ) . '</p>' .
                '</div>',
            'categories' => array( 'my-pattern-category' ),
        )
    );
} );
