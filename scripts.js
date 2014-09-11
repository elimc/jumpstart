/**
 * This is an example JS file.
 *
 * This is a description of the custom JS file.
 */

/**
 * This is a custom JS function.
 * 
 * The dollar sign must be passed into the jQuery function due to "no-conflict" mode.
 * See http://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers
 * 
 * @param {jQuery Library} $ Allow the dollar sign to be used as an alias for jQuery.
 * @returns {undefined}
 */
jQuery( document ).ready( function( $ ) {
    // Custom js code goes here ...
    
    // Enable Foundation JS ...
    $( document ).foundation();
    
});
/* 
 * toggler.js
 * 
 * Select elements on your site to toggle open and close.
 */
jQuery( document ).ready( function( $ ) {
    $( "#toggle-button" ).click( function() {
        $( "#toggle-container" ).slideToggle( 'fast', function() {
            $( "#toggle-button" ).toggleClass( 'active' );
        });
    });
});