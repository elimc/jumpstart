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