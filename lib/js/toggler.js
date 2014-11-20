/* 
 * toggler.js
 * 
 * Select elements on your site to toggle open and close.
 * 
 * This is just a sample script that was used for toggling menus open.
 * It is included in jumpstart to show how easy it is to include a custom written script.
 */



jQuery( document ).ready( function( $ ) {
    $( "#toggle-button" ).click( function() {
        $( "#toggle-container" ).slideToggle( 'fast', function() {
            $( "#toggle-button" ).toggleClass( 'active' );
        });
    });
});