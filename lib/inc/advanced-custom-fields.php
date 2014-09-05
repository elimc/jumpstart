<?php
/*
 * Custom Advanced Custom Fields functions.
 */



/**
 * Create sub-pages, that have global variables, that sit under the Custom Fields menu.
 */
if( function_exists( 'acf_add_options_sub_page' ) ) {
    acf_add_options_sub_page(array(
        'title' => 'Header',
        'parent' => 'edit.php?post_type=acf-field-group',
        'capability' => 'manage_options'
    ));
    acf_add_options_sub_page(array(
        'title' => 'Footer',
        'parent' => 'edit.php?post_type=acf-field-group',
        'capability' => 'manage_options'
    ));
    acf_add_options_sub_page(array(
        'title' => 'Sidebar',
        'parent' => 'edit.php?post_type=acf-field-group',
        'capability' => 'manage_options'
    ));
}