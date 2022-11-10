<?php

// wright way to connect css and js (1)
add_action( 'wp_enqueue_scripts', 'interior_scripts' );
// register my menu (1)
add_action( 'after_setup_theme', 'my_nav_menu' );

// register my menu (2)  it will work only after add_action( 'after_setup_theme', 'my_nav_menu' );
// register_nav_menu( $location = top_menu, $description = Menu in header );
function my_nav_menu() {
	register_nav_menu( 'top_menu', 'Menu in header' );
}

// add_action('wp_print_styles', 'theme_name_scripts'); // its other hook
// wright way to connect css and js (2)
function interior_scripts() {
    
    // out styles
    wp_enqueue_style( 'min-css', get_template_directory_uri() . '/assets/css/all.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/main.css' );
	
    // wp is dowloaded inside, so previous version need to switch off and then swith on the new one
    // cancel jQuery
	wp_deregister_script( 'jquery' );
    // register our new link jQuery
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    // use jquery
	wp_enqueue_script( 'jquery' );
    // our js
    wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
}

// support images in posts
add_theme_support('post-thumbnails');
// change title
add_theme_support('title-tag');
// change logo
add_theme_support('custom-logo');
// add menu in WP
// add_theme_support('menus');

add_filter( 'upload_mimes', 'svg_upload_allow' );


# Add SVg to allowed files (1)
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

# Add SVg to allowed files (2)
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	if( $dosvg ){

		// allow
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// prohibit
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

?>