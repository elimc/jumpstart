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

    // Load minified Foundation.
//    wp_enqueue_script( 'foundation', LIB . '/js/min/foundation.min.js', array( 'jquery' ), '1.0', TRUE );


            wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/bower_components/magnific-popup/dist/magnific-popup.css' );
    wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js', array( 'jquery' ), '1.0', TRUE );
    // Load minified cusom JS.
    wp_enqueue_script( 'custom-scripts', LIB . '/js/min/scripts.min.js', array( 'jquery', 'foundation' ), '1.0', TRUE );


}
add_action( 'wp_enqueue_scripts', 'jumpstart_scripts' );