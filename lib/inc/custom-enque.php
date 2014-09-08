<?php
/**
 * Enque theme scripts and styles.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_style Enque styles.
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script Enque scripts.
 */
function jumpstart_scripts() {
    //Load stylesheed with dashicons as a dependency.
	wp_enqueue_style( 'jumpstart-style', get_stylesheet_uri(), array( 'dashicons' ) );

    // Load the toggle module.
    wp_enqueue_script( 'jumpstart-navigation', get_template_directory_uri() . '/lib/js/toggler.js', array( 'jquery' ), '1.0', TRUE );

    // Load the default JS module, for site specific scripts.
    wp_enqueue_script( 'jumpstart-main', get_template_directory_uri() . '/lib/js/main.js', array( 'jquery' ), '1.0', TRUE );

    // Load Base Foundation JS.
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.js', array( 'jquery' ), '1.0', TRUE );

    // Foundation Modules
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.abide.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.accordion.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.alert.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.clearing.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.dropdown.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.equalizer.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.interchange.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.joyride.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.magellan.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.offcanvas.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.orbit.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.reveal.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.slider.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.tab.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.tooltip.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'offcanvas-navigation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.toolbar.js', array( 'jquery' ), '1.0', TRUE );

}
add_action( 'wp_enqueue_scripts', 'jumpstart_scripts' );