<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );

function mon_site_image_sizes() {
    add_image_size( 'custom-size', 800, 600, true );
}
add_action( 'after_setup_theme', 'mon_site_image_sizes' );




 