<?php

function bst_enqueues() {

	/* Styles */
	
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');
	
	wp_register_style('slick-css', get_template_directory_uri() . '/css/slick/slick.css', false, null);
    wp_enqueue_style('slick-css');

    wp_register_style('slick-theme-css', get_template_directory_uri() . '/css/slick/slick-theme.css', false, null);
    wp_enqueue_style('slick-theme-css');


    wp_register_style('main-css', get_template_directory_uri() . '/css/main.css', false, '1.0', null);
    wp_enqueue_style('main-css');

    wp_register_style('shapes-css', get_template_directory_uri() . '/css/shapes.css', false, '1.0', null);
    wp_enqueue_style('shapes-css');

	/* Scripts */
	
	wp_enqueue_script( 'jquery' );
	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, true);
	wp_enqueue_script('modernizr');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('bst-js', get_template_directory_uri() . '/js/bst.js', false, null, true);
    wp_enqueue_script('bst-js');

    wp_register_script('anime-min-js', get_template_directory_uri() . '/js/shapes/anime.min.js', false, null, true);
    wp_enqueue_script('anime-min-js');

    wp_register_script('scrollMonitor-js', get_template_directory_uri() . '/js/shapes/scrollMonitor.js', false, null, true);
    wp_enqueue_script('scrollMonitor-js');

    wp_register_script('shapes-js', get_template_directory_uri() . '/js/shapes/shapes.js', false, null, true);
    wp_enqueue_script('shapes-js');
    
    wp_register_script('slick-js', get_template_directory_uri() . '/js/slick.min.js', false, null, true);
    wp_enqueue_script('slick-js');
    
    wp_register_script('scrollreveal-js', get_template_directory_uri() . '/js/parallax/scrollreveal.min.js', false, null, true);
    wp_enqueue_script('scrollreveal-js');
            
    wp_register_script('main-js', get_template_directory_uri() . '/js/main.js', false, null, true);
	wp_enqueue_script('main-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
