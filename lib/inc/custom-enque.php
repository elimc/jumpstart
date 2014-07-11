<?php
/**
 * Enque theme scripts and styles.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_style Enque styles.
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script Enque scripts.
 */
function jumpstart_scripts() {
	wp_enqueue_style( 'jumpstart-style', get_stylesheet_uri(), array( 'dashicons' ) );

    // Load the toggle module.
    wp_enqueue_script( 'jumpstart-navigation', get_template_directory_uri() . '/js/toggler.js', array( 'jquery' ), '1.0', TRUE );
}
add_action( 'wp_enqueue_scripts', 'jumpstart_scripts' );