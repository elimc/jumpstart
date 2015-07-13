<?php
/**
 * Define any Constants.
 */



// The author of the site's Web site. Displayed in admin.
if ( !defined( 'AUTHOR_SITE' ) ) { define( 'AUTHOR_SITE', 'http://elimcmakin.com/' ); }

// The author of the site. Displayed in admin.
if ( !defined( 'AUTHOR' ) ) { define('AUTHOR', 'Eli McMakin'); }

if ( !defined( 'LIB' ) ) {
    $lib = get_stylesheet_directory_uri() . "/lib";
    define('LIB', $lib );
}

if ( !defined( 'FOUNDATION' ) ) {
    $lib = get_stylesheet_directory_uri() . "/bower_components/foundation/js";
    define('FOUNDATION', $lib );
}