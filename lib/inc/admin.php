<?php
/*
 * Custom Admin functions.
 */



/**
 * Custom login functionality styles.
 */
function jumpstart_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/lib/branding/login-logo.png);
            width: 80px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'jumpstart_login_logo' );



/**
 * Redirect login logo URL to home page.
 *
 * @return string
 */
function jumpstart_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'jumpstart_login_logo_url' );



/**
 * Customize title of login logo.
 *
 * @return string
 */
function jumpstart_login_logo_url_title() {
    return home_url();
}
add_filter( 'login_headertitle', 'jumpstart_login_logo_url_title' );



/**
 * Redirect to home page on logout
 */
function go_home() {
    wp_redirect( home_url() );
    exit();
}
add_action( 'wp_logout','go_home' );



/**
 * Remove clutter from main dashboard page.
 *
 * @link http://codex.wordpress.org/Dashboard_Widgets_API Turn off meta boxes.
 */
function jumpstart_disable_default_dashboard_widgets() {
//    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
//    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
//    remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
//    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
//    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
//    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
//    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
//    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
//    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
//    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
add_action( 'wp_dashboard_setup', 'jumpstart_disable_default_dashboard_widgets' );



/**
 * Remove clutter on backend of admin.
 *
 * @link http://codex.wordpress.org/Function_Reference/remove_submenu_page Remove submenu pages.
 */
function jumpstart_remove_submenus() {
//    remove_submenu_page( 'themes.php', 'theme-editor.php' );
//    remove_submenu_page( 'themes.php', 'customize.php' );
//    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
//    remove_submenu_page( 'tools.php', 'tools.php' );
}
add_action( 'admin_menu', 'jumpstart_remove_submenus', 999 );



/**
 * Remove unnecessary Menus.
 *
 * @link  http://codex.wordpress.org/Function_Reference/remove_menu_page#Examples
 */
function jumpstart_remove_menus() {
//    remove_menu_page( 'index.php' );                  //Dashboard
//    remove_menu_page( 'edit.php' );                   //Posts
//    remove_menu_page( 'upload.php' );                 //Media
//    remove_menu_page( 'edit.php?post_type=page' );    //Pages
//    remove_menu_page( 'edit-comments.php' );          //Comments
//    remove_menu_page( 'themes.php' );                 //Appearance
//    remove_menu_page( 'plugins.php' );                //Plugins
//    remove_menu_page( 'users.php' );                  //Users
//    remove_menu_page( 'tools.php' );                  //Tools
//    remove_menu_page( 'options-general.php' );        //Settings
}
add_action( 'admin_menu', 'jumpstart_remove_menus', 999 );



/**
 * Modify the footer in the admin section.
 *
 * @link http://wp.tutsplus.com/articles/12-useful-customization-and-branding-tweaks-for-the-wordpress-dashboard/ Change admin WP branding.
 */
function jumpstart_modify_footer_admin() {
    echo 'Created by <a href="' . AUTHOR_SITE . '">' . AUTHOR . '</a>.';
}
add_filter( 'admin_footer_text', 'jumpstart_modify_footer_admin' );
