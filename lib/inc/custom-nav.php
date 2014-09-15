<?php
/**
 * Great place for custom navigation menus.
 */



// Register some sweet, sweet, menus.
register_nav_menus(
    array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
    )
);



/**
 * Remove the unescessary div tag around menu.
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu#Removing_the_Navigation_Container Documentation
 *
 * @param array $args
 * @return boolean
 */

function my_wp_nav_menu_args( $args = '' ) {
	$args['container'] = false;
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );