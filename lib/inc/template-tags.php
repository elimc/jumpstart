<?php
/**
 * Display information dynamically.
 *
 * @link http://codex.wordpress.org/Template_Tags Official template tag documentation.
 */



/**
 * Make Read More link actually link to the post.
 *
 * @link http://codex.wordpress.org/Customizing_the_Read_More
 *
 * @return string
 */
function jumpstart_excerpt() {
    global $post;
    return ' . . . <p></p><a href="'. get_permalink( $post->ID ) . '" title="' . esc_attr( get_the_title( $post->ID ) ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'jumpstart_excerpt', 999 );



/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'jumpstart_posted_on' ) ) {
    function jumpstart_posted_on() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }
        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
        );
        $posted_on = sprintf(
            esc_html_x( 'Posted on %s', 'post date', 'jumpstart' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        );
        $byline = sprintf(
            esc_html_x( 'by %s', 'post author', 'jumpstart' ),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
        );
        echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
    }
}



/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function jumpstart_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'jumpstart_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );
		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );
		set_transient( 'jumpstart_categories', $all_the_cool_cats );
	}
	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so _s_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so _s_categorized_blog should return false.
		return false;
	}
}



/**
 * Flush out the transients used in jumpstart_categorized_blog.
 */
function jumpstart_category_transient_flusher() {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'jumpstart_categories' );
}
add_action( 'edit_category', 'jumpstart_category_transient_flusher' );
add_action( 'save_post',     'jumpstart_category_transient_flusher' );