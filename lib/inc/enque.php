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
    // wp_enqueue_style( 'slick-carousel-style', LIB . '/bower_components/slick-carousel/slick/slick.css', array( 'jquery' ), '1.0', TRUE );

    wp_enqueue_script('modernizr', LIB . '/foundation/js/vendor/modernizr.js', array(), '2.8.3', FALSE);

    // Load Base Foundation JS.
    wp_enqueue_script( 'foundation', LIB . '/foundation/js/foundation/foundation.js', array( 'jquery' ), '1.0', TRUE );
    wp_enqueue_script( 'fastClick', LIB . '/foundation/js/vendor/fastclick.js', array(), '1.0', TRUE );
    wp_enqueue_script( 'placeholder', LIB . '/foundation/js/vendor/placeholder.js', array('jquery'), '2.0.8', TRUE );

    // Foundation Modules
    //wp_enqueue_script( 'foundation-abide', LIB . '/foundation/js/foundation/foundation.abide.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-accordion', LIB . '/foundation/js/foundation/foundation.accordion.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-alert', LIB . '/foundation/js/foundation/foundation.alert.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-clearing', LIB . '/foundation/js/foundation/foundation.clearing.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-dropdown', LIB . '/foundation/js/foundation/foundation.dropdown.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-equalizer', LIB . '/foundation/js/foundation/foundation.equalizer.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-interchange', LIB . '/foundation/js/foundation/foundation.interchange.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-joyride', LIB . '/foundation/js/foundation/foundation.joyride.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-magellan', LIB . '/foundation/js/foundation/foundation.magellan.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-offcanvas', LIB . '/foundation/js/foundation/foundation.offcanvas.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-orbit', LIB . '/foundation/js/foundation/foundation.orbit.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-reveal', LIB . '/foundation/js/foundation/foundation.reveal.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-slider', LIB . '/foundation/js/foundation/foundation.slider.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-tab', LIB . '/foundation/js/foundation/foundation.tab.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-tooltip', LIB . '/foundation/js/foundation/foundation.tooltip.js', array( 'jquery', 'foundation' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-toolbar', LIB . '/foundation/js/foundation/foundation.toolbar.js', array( 'jquery', 'foundation' ), '1.0', TRUE );

    // All vendor scripts in lib/js/vendor
    wp_enqueue_script( 'vendor-scripts', get_stylesheet_directory_uri() . '/vendor.js', array('jquery', 'foundation'), '1.0', TRUE );

    // All custom scripts in lib/js
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/scripts.js', array('jquery', 'foundation', 'vendor-scripts'), '1.0', TRUE );
}
add_action( 'wp_enqueue_scripts', 'jumpstart_scripts' );