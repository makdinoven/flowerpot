<?php
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('style', get_template_directory_uri(). '/assets/css/style.css');
//wp_enqueue_scripts('app', get_template_directory_uri(). '/assets/js/app.js', array(),'1.0');
});

// add_action( 'wp_enqueue_scripts', function(){
   
//  	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array(), '3.0');
//  });

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>