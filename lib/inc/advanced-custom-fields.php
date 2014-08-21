<?php
/*
 * Custom Advanced Custom Fields functions.
 */



function jumpstart_options_page_settings( $options ) {
    $options['title'] = __('Global Content');
    $options['pages'] = array(
        __('Header'),
        __('Footer'),
    );

    return $options;
}
add_filter('acf/options_page/settings', 'jumpstart_options_page_settings');
