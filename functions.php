<?php 

function child_theme_styles() {  /*wpt is for name spacing, unique so it doesn't conflict with other functions or theme calls*/
	
	$emppages = array( 'employees', 'membership-login', 'password-reset', 'membership-registration');

	if ( is_page( $emppages ) ) {
		wp_enqueue_style( 'emp-portal_css', get_stylesheet_directory_uri() . '/stylesheets/emp-portal.css' );
	}
}

add_action( 'wp_enqueue_scripts', 'child_theme_styles' );

// function redirect_unlogged_in_user() {
// 	if ( is_user_logged_in( 'false' ) && is_page( 'employees' ) ) {
// 	wp_redirect('/membership-login/');
// 	exit;
// 	}
// }
// add_action( 'template_redirect', 'redirect_unlogged_in_user' );

function redirect_logged_in_user() {

	$page_redirect = array( 'portal', 'membership-login' );

	if ( is_user_logged_in() && is_page( $page_redirect ) ) {
	wp_redirect('/employees/');

	exit;
	} else if ( is_page( 'portal' ) ) {
		wp_redirect('/membership-login/');
		exit;
	}
}
add_action( 'template_redirect' , 'redirect_logged_in_user' );


function employee_bar() {
	if ( is_user_logged_in() ) {
		get_template_part( 'emp-bar' ); }
	}	
add_action( 'emp_partial' , 'employee_bar' );

?>