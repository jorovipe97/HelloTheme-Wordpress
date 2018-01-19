<?php
// Add functions
function hellotheme_script() {
	//code
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7');
  wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7' );
}
add_action( 'wp_enqueue_scripts', 'hellotheme_script');


// Add Google Fonts
function hellotheme_google_fonts() {
	wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
	wp_enqueue_style( 'OpenSans');
}
add_action('wp_print_styles', 'hellotheme_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

?>
