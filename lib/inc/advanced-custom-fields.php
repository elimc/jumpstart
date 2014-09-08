<?php
/*
 * Custom Advanced Custom Fields functions.
 */



/**
 * Create a custom menu, on the admin, that will house global options sub-pages.
 *
 * @link http://www.advancedcustomfields.com/resources/acf_add_options_page/ Options Page menu.
 */
if( function_exists( 'acf_add_options_page' ) ) {
	$page = acf_add_options_page(array(
		'page_title' 	=> 'Global Custom Fields',
		'menu_title' 	=> 'Global Custom Fields',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'edit_posts',
        'icon_url'      => 'dashicons-admin-site',
		'redirect' 	=> true
	) );
}



/**
 * Create sub-pages, that have global variables, that sit under the Custom Fields menu.
 *
 * @link http://www.advancedcustomfields.com/resources/acf_add_options_sub_page/ Options sub-pages description.
 */
if( function_exists( 'acf_add_options_sub_page' ) ) {
    acf_add_options_sub_page( array(
        'title' => 'Header',
        'parent' => 'theme-general-settings',
        'capability' => 'manage_options'
    ) );
    acf_add_options_sub_page( array(
        'title' => 'Footer',
        'parent' => 'theme-general-settings',
        'capability' => 'manage_options'
    ) );
    acf_add_options_sub_page( array(
        'title' => 'Sidebar',
        'parent' => 'theme-general-settings',
        'capability' => 'manage_options'
    ) );
}

