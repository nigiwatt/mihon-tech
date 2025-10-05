
<?php

class NewsController {

    public static function latest() {

        return new WP_Query( [
            'category_name' => 'news',
            'post_type' => 'post',
            'posts_per_page' => 1
        ] );
    }

    public static function top_archive( $count = 5 ) {

        return new WP_Query( [
            'category_name' => 'news',
            'post_type' => 'post',
            'posts_per_page' => $count
        ] );
    }
}
