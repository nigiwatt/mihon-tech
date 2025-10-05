
<?php

/**
* Theme Name: Roundabout
* Description: Nigiwa's WordPress theme
* Author: Web Production Nigiwa
* Version: 1.0
*/


// Controllers
require get_template_directory() . '/app/controllers/ContactController.php';
require get_template_directory() . '/app/controllers/NewsController.php';

// Models
require get_template_directory() . '/app/models/News.php';

// Helpers
require get_template_directory() . '/app/helpers/h-admin-options-detail.php';
require get_template_directory() . '/app/helpers/h-archives.php';
require get_template_directory() . '/app/helpers/h-block-pattern.php';
require get_template_directory() . '/app/helpers/h-breadcrumbs.php';
require get_template_directory() . '/app/helpers/h-initialize.php';
require get_template_directory() . '/app/helpers/h-load-scripts.php';
require get_template_directory() . '/app/helpers/h-load-styles.php';
require get_template_directory() . '/app/helpers/h-text-domains.php';
require get_template_directory() . '/app/helpers/h-urls.php';


// Description for Poedit
__( 'Roundabout', 'roundabout' );
__( 'Web Production Nigiwa', 'roundabout' );
__( 'The Roundabout theme specializes in allowing you to easily customize the appearance and functionality without touching PHP code as much as possible. The internal directory structure is designed to be simple, making it easy to make future changes to the source code. Additionally, this theme is optimized based on the MVC model, ensuring consistent dependencies in appearance and functionality, allowing for stable WordPress operation.', 'roundabout' );
