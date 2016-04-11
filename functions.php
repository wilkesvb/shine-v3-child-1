<?php function child_theme_styles() {  /*wpt is for name spacing, unique so it doesn't conflict with other functions or theme calls*/

	wp_enqueue_style( 'emp-portal_css', get_stylesheet_directory_uri() . '/stylesheets/emp-portal.css' );
}
add_action( 'wp_enqueue_scripts', 'child_theme_styles' );

?>