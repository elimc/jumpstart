<?php
/**
 * Enque theme scripts and styles.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_style Enque styles.
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_script Enque scripts.
 */
function jumpstart_scripts() {
    // Load stylesheed with dashicons as a dependency.
    // Learn about dashicons: http://melchoyce.github.io/dashicons/
	wp_enqueue_style( 'jumpstart-style', get_stylesheet_uri(), array( 'dashicons' ) );

    // Load Base Foundation JS.
//    wp_enqueue_script( 'foundation', FOUNDATION . '/foundation/foundation.js', array( 'jquery' ), '1.0', TRUE );
//    wp_enqueue_script( 'fastClick', FOUNDATION . '/vendor/fastclick.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'placeholder', FOUNDATION . '/vendor/placeholder.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'modernizr', FOUNDATION . '/vendor/modernizr.js', array( 'jquery', 'foundation' ), '1.0', FALSE );
    wp_enqueue_script( 'foundation', LIB . '/js/vendor/foundation-bootstrap.min.js', array( 'jquery' ), '1.0', TRUE );

    // Foundation Modules
//    wp_enqueue_script( 'foundation-abide', FOUNDATION . '/foundation/foundation.abide.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-accordion', FOUNDATION . '/foundation/foundation.accordion.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-alert', FOUNDATION . '/foundation/foundation.alert.js', array( 'jquery' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-clearing', FOUNDATION . '/foundation/foundation.clearing.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-dropdown', FOUNDATION . '/foundation/foundation.dropdown.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-equalizer', FOUNDATION . '/foundation/foundation.equalizer.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-interchange', FOUNDATION . '/foundation/foundation.interchange.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-joyride', FOUNDATION . '/foundation/foundation.joyride.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-magellan', FOUNDATION . '/foundation/foundation.magellan.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-offcanvas', FOUNDATION . '/foundation/foundation.offcanvas.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-orbit', FOUNDATION . '/foundation/foundation.orbit.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-reveal', FOUNDATION . '/foundation/foundation.reveal.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-slider', FOUNDATION . '/foundation/foundation.slider.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-tab', FOUNDATION . '/foundation/foundation.tab.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-tooltip', FOUNDATION . '/foundation/foundation.tooltip.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
//    wp_enqueue_script( 'foundation-toolbar', FOUNDATION . '/foundation/foundation.topbar.js', array( 'jquery', 'foundation' ), '1.0', TRUE );

    // All custom scripts in lib/js
    wp_enqueue_script( 'custom-scripts', LIB . '/js/custom/main.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'custom-scripts', LIB . '/js/custom/toggler.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
}
add_action( 'wp_enqueue_scripts', 'jumpstart_scripts' );