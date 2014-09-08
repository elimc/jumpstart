<?php
/**
 * Add theme support and run some filters.
 */



/*
 * Enable support for Post Thumbnails (Featured Images) on posts and pages.
 *
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
 */
add_theme_support( 'post-thumbnails' );



// Add default posts and comments RSS feed links to head.
//add_theme_support( 'automatic-feed-links' );



/**
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 *
 * @link http://make.wordpress.org/core/2014/04/15/html5-galleries-captions-in-wordpress-3-9/ HTML5 support info.
 */
add_theme_support( 'html5',
    array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    )
);



/**
 * Register widget area.
 *
 * This creates a physical area on the site where the widgets will appear.
 * Sidebar.php contains the function that calls this code.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function jumpstart_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'jumpstart' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'jumpstart_widgets_init' );