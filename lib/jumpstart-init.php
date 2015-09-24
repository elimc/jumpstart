<?php
/*
 * Main jumpstart init file.
 *
 * Feel free to browse through the files to pick and choose what functionality you need for your site.
 *
 * Commenting out lines disables functionality.
 *
 **********************************************
 *
 * Folder structure
 *
 * branding     -       All web associated branding, e.g, favicon, login-logo, etc ...
 * fonts        -       Any web fonts to be loaded locally.
 * images       -       All images to be used in the site. These images aren't related to the companies branding.
 * inc          -       All PHP classes and function files.
 * js           -       All custom js files.
 * scss         -       All cutom SASS files and partials.
 *
 */



require_once 'inc/constants.php';                               // Define constants, before you do anything else.
require_once 'inc/enque.php';                                   // Enque theme scripts and styles.
require_once 'inc/functions.php';                               // Write any custom, theme specific functionality; a blank canvas ...
require_once 'inc/nav.php';                                     // Register custom navigation menus.
require_once 'inc/custom-header.php';                           // Display information dynamically.
require_once 'inc/customizer.php';                              // Display information dynamically.
require_once 'inc/template-tags.php';                           // Display information dynamically.
require_once 'inc/clean-front-end.php';                         // Clean up WP junk code, on the front-end.
require_once 'inc/admin.php';                                   // Customize the admin section.
require_once 'inc/utility-functions.php';                       // Add theme support and run some filters.
//require_once 'inc/advanced-custom-fields.php';                // Call any custom ACF functions.
//require_once 'inc/cpt-init.php';                              // Magically load any Custom Posts Types and Custom Taxonomies.