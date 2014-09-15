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
 * assets       -       Theme specific assets, e.g., sprites, images, etc ...
 * branding     -       All web associated branding, e.g, favicon, login-logo, etc ...
 * fonts        -       Any web fonts to be loaded locally.
 * inc          -       All classes and function files.
 * js           -       All js files.
 * scss         -       SASS files and partials.
 *
 */



require_once 'inc/custom-enque.php';                             // Enque theme scripts and styles.
require_once 'inc/custom-functions.php';                         // Write any custom, theme specific functionality; a blank canvas ...
require_once 'inc/custom-nav.php';                               // Register custom navigation menus.
require_once 'inc/custom-template-tags.php';                     // Display information dynamically.
require_once 'inc/clean-front-end.php';                          // Clean up WP junk code, on the front-end.
require_once 'inc/custom-admin.php';                             // Customize the admin section.
require_once 'inc/custom-utility-functions.php';                 // Add theme support and run some filters.
// require_once 'inc/advanced-custom-fields.php';                   // Call any custom ACF functions.
//require_once 'inc/cpt-init.php';                                 // Magically load any Custom Posts Types and Custom Taxonomies.
//require_once 'inc/responsive-content.php';						 // Logic related to generating responsive content.