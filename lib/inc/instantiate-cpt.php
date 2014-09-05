<?php
/**
 * Magically load and instantiate Custom Posts and Custom Taxonomies.
 */



/**
 * Load Custom Post and Custom Taxonomy Classes.
 *
 * The load_template() function imports certain gloabal vars; it's like require_once() on steroids.
 */
load_template( get_template_directory() . '/lib/inc/CPT/CustomPost.php' );
load_template( get_template_directory() . '/lib/inc/CPT/CustomTaxonomy.php' );



// Use namespaces to ensure no class conflicts. Create a new variable for each CPT/CT that you want to instantiate.
// WARNING!: Use of namespaces REQUIRES a server with PHP 5.3.
$custom_post = new jumpstart\CustomPost( 'jumpstart' );
$custom_taxonomy = new jumpstart\CustomTaxonomy( 'jumpstart' );



// Instantiate a Custom Post Type.
// List of menu icons: http://melchoyce.github.io/dashicons/
$custom_post->make( 'sample', 'Sample Post', 'Sample Posts', array ( 'menu_icon' => 'dashicons-admin-media' ) );
//$custom_post->make( 'sample2', 'Sample Post2', 'Sample Posts2' );

// Instantiate a Custom Taxonomy, that can be related to the Custom Post Type.
$custom_taxonomy->make( 'sample-taxonomy', 'Sample Taxonomy', 'Sample Taxonomies', array( 'sample' ) );
//$custom_taxonomy->make( 'sample-taxonomy2', 'Sample Taxonomy2', 'Sample Taxonomies2', array( 'sample2' ) );