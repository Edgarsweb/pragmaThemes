<?php


function myBlog_register_styles(){
    wp_enqueue_style('myBlog', get_template_directory_uri() . '/style.css', array(), rand(11,999), 'all' );    
}

function myBlog_scripts() {
    wp_enqueue_script('myBlog-scripts', get_template_directory_uri() . '/assets/scripts/index.js', array(), null, true);
};

add_action('wp_enqueue_scripts', 'myBlog_register_styles');
add_action('wp_enqueue_scripts', 'myBlog_scripts');




//Menus
register_nav_menus(
	array(
		'top-menu'=> 'Top Menu Location',
		'mobile-menu'=> 'Mobile Menu Location',
		'footer-menu'=> 'Footer Menu Location',

	)
);



    add_theme_support('title-tag');    
    add_theme_support( 'post-thumbnails'); 
    add_theme_support( 'menus' );

    add_theme_support( 'custom-logo');


    remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );



















