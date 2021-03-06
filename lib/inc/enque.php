<?php
/**
 * Enque theme scripts and styles.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_style Enque styles.
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script Enque scripts.
 */
function jumpstart_scripts() {
    // Load stylesheed with dashicons as a dependency: http://melchoyce.github.io/dashicons/
	wp_enqueue_style( 'jumpstart-style', get_stylesheet_uri(), array( 'dashicons' ) );

    // Load minified Vendor Scripts.
    wp_enqueue_script( 'vendor', LIB . '/js/min/vendorScripts.min.js', array( 'jquery' ), '1.0', TRUE );

    // Load minified cusom JS.
    wp_enqueue_script( 'custom-scripts', LIB . '/js/min/scripts.min.js', array( 'jquery', 'foundation' ), '1.0', TRUE );


}
add_action( 'wp_enqueue_scripts', 'jumpstart_scripts' );