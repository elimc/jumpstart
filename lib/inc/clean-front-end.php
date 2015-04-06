<?php
/**
 * There is a lot of ugliness in the code on the front end. Let's clean it up.
 */



/**
 * Remove the version number of the script or style to ensure proxy caching
 *
 * @link http://www.paulund.co.uk/remove-query-string-stylesheets Technique description.
 *
 * @param string $src Version number of script/style, or WP version.
 * @return string
 */
function jumpstart_remove_script_version( $src ) {
    return remove_query_arg( 'ver', $src );
}
add_filter( 'script_loader_src', 'jumpstart_remove_script_version' );
add_filter( 'style_loader_src', 'jumpstart_remove_script_version' );



/**
 * Remove structural information that hackers could use on your site.
 *
 * wlwmanifest_link is for Windows Live Writer.
 * rsd_link is for Really Simple Discovery.
 *
 * @link http://wordpress.org/support/topic/xmlrpcphp-and-wlwmanifest-should-be-off-by-defualt Turn off rsd and wlwmanifest.
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );



/**
 * Remove the inline styles that appear in the header.
 *
 * @link https://core.trac.wordpress.org/ticket/11928 Explanation of style cleanup.
 *
 * @global class $wp_widget_factory
 */
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}
add_action( 'widgets_init', 'my_remove_recent_comments_style' );
