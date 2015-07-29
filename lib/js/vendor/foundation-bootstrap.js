/**
 * Make sure Foundation and its dependencies are loaded.
 */



/**
 * The actual Foundation bootstrap function
 * 
 * The dollar sign must be passed into the jQuery function due to "no-conflict" mode.
 * See http://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers
 * 
 * @param {jQuery Library} $ Allow the dollar sign to be used as an alias for jQuery.
 * @returns {undefined}
 */
(function( $ ) {
    // Enable Foundation JS ...
    $( document ).foundation();
    
    // Disable 300ms double tap watch on touch devices
    FastClick.attach( document.body );

    // Only runs if the browser does not natively support placeholders
    $('input, textarea').placeholder();

})(jQuery);