<?php
/**
 * This file simply triggers the Bootstrap file before the init hook.
 */



/**
 * Load the bootstrapper. Removing this line will break all the functionality of the site.
 */
if ( ! function_exists( 'jumpstart_bootstrapper' ) ) {
    function jumpstart_bootstrapper() {
        require get_template_directory() . '/lib/bootstrapper.php';
    }
}
add_action( 'after_setup_theme', 'jumpstart_bootstrapper' );