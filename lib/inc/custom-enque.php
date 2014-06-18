<?php
/**
 * Enque theme scripts and styles.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_style Enque styles.
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script Enque scripts.
 */
function jumpstart_scripts() {
	wp_enqueue_style( 'jumpstart-style', get_stylesheet_uri() );

    // Sample script to load.
//    wp_enqueue_script( 'jumpstart-custom', get_template_directory_uri() . '/inc/js/custom.js', array( 'jquery' ), '1.0', TRUE );

    // Load a default responsive menu.
    wp_enqueue_script( 'jumpstart-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', TRUE );
}
add_action( 'wp_enqueue_scripts', 'jumpstart_scripts' );