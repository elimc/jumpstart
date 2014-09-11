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

    // Load Base Foundation JS.
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.js', array( 'jquery' ), '1.0', TRUE );

    // Foundation Modules
    //wp_enqueue_script( 'foundation-abide', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.abide.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-accordion', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.accordion.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-alert', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.alert.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-clearing', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.clearing.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-dropdown', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.dropdown.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-equalizer', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.equalizer.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-interchange', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.interchange.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-joyride', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.joyride.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-magellan', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.magellan.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-offcanvas', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.offcanvas.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-orbit', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.orbit.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-reveal', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.reveal.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-slider', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.slider.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-tab', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.tab.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-tooltip', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.tooltip.js', array( 'jquery' ), '1.0', TRUE );
    //wp_enqueue_script( 'foundation-toolbar', get_template_directory_uri() . '/lib/foundation/js/foundation/foundation.toolbar.js', array( 'jquery' ), '1.0', TRUE );

    // All vendor scripts in lib/js/vendor
    wp_enqueue_script( 'vendor-scripts', get_template_directory_uri() . '/vendor.js', array('jquery', 'foundation'), '1.0', TRUE );

    // All custom scripts in lib/js
    wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/scripts.js', array('jquery', 'foundation', 'vendor-scripts'), '1.0', TRUE );
}
add_action( 'wp_enqueue_scripts', 'jumpstart_scripts' );