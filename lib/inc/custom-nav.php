<?php
/**
 * Great place for custom navigation menus.
 */



// Register some sweet, sweet, menus.
function register_my_menus() {
    register_nav_menus(
        array(
            'header_menu' => 'Header Menu',
            'footer_menu' => 'Footer Menu',
        )
    );
}
add_action( 'init', 'register_my_menus' );