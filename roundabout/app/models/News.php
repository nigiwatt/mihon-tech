
<?php

class News {

    public $cat;
    public $content;
    public $id;
    public $title;

    public function __construct( $post_id ) {

        $this->cat     = get_the_category()[0]->cat_name;
        $this->content = get_the_content( $post_id );
        $this->id      = $post_id;
        $this->title   = get_the_title( $post_id );
    }

    public function date( $format = '' ) {

        return get_the_date( $format, $this->id );
    }

    public function permalink() {

        return get_permalink( $this->id );
    }
}
