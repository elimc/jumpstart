<?php
/*
 * Main PHP bootstrap file.
 *
 * Feel free to browse through the files to pick and choose what functionality you need for your site.
 *
 * Commenting out lines disables functionality.
 *
 **********************************************
 *
 * Folder structure
 *
 * assets       -       Theme specific assets, i.e. sprites, images, etc ...
 * fonts        -       Any web fonts to be loaded locally.
 * inc          -       All classes and function files.
 * js           -       All js files.
 * scss         -       SASS files, and partials.
 *
 */



require_once 'inc/custom-enque.php';                             // Enque theme scripts and styles.
require_once 'inc/custom-functions.php';                         // Write any custom, theme specific functionality; a blank canvas ...
require_once 'inc/custom-template-tags.php';                     // Display information dynamically.
require_once 'inc/custom-admin.php';                             // Customize the admin section.
require_once 'inc/custom-utility-functions.php';                 // Add theme support and run some filters.
require_once 'inc/advanced-custom-fields.php';                   // Call any custom ACF functions.
require_once 'inc/instantiate-cpt.php';                          // Load and instantiate Custom Posts and Custom Taxonomies.