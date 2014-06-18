<?php
/**
 * Display information dynamically.
 *
 * @link http://codex.wordpress.org/Template_Tags Official template tag documentation.
 */



// This theme uses wp_nav_menu() in one location. Feel free to register more menus.
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'jumpstart' ),
) );



/**
 * Make Read More link actually link to the post.
 *
 * @link http://codex.wordpress.org/Customizing_the_Read_More
 *
 * @return string
 */
function jumpstart_excerpt() {
    global $post;
    return ' . . . <p></p><a href="'. get_permalink( $post->ID ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'jumpstart_excerpt', 999 );



/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function jumpstart_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'jumpstart' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'jumpstart_title', 10, 2 );



/**
 * Display navigation to next/previous set of posts when applicable.
 */
if ( ! function_exists( 'jumpstart_paging_nav' ) ) {
    function jumpstart_paging_nav() {
        // Don't print empty markup if there's only one page.
        if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
            return;
        }
        ?>
        <nav class="navigation paging-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'jumpstart' ); ?></h1>
            <div class="nav-links">

                <?php if ( get_next_posts_link() ) { ?>
                <div class="nav-previous"><?php next_posts_link( __( '<span>&larr;</span> Older posts', 'jumpstart' ) ); ?></div>
                <?php } ?>

                <?php if ( get_previous_posts_link() ) { ?>
                <div lass="nav-next"><?php previous_posts_link( __( 'Newer posts <span>&rarr;</span>', 'jumpstart' ) ); ?></div>
                <?php } ?>

            </div><!-- .nav-links -->
        </nav><!-- .navigation -->
        <?php
    }
}



/**
 * Display navigation to next/previous post when applicable.
 */
if ( ! function_exists( 'jumpstart_post_nav' ) ) {
    function jumpstart_post_nav() {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
        $next     = get_adjacent_post( false, '', false );

        if ( ! $next && ! $previous ) {
            return;
        }
        ?>
        <nav role="navigation">
            <?php
                previous_post_link( '<div>%link</div>', _x( '<span>&larr;</span> %title', 'Previous post link', 'jumpstart' ) );
                next_post_link(     '<div>%link</div>',     _x( '%title <span>&rarr;</span>', 'Next post link',     'jumpstart' ) );
            ?>
        </nav><!-- navigation -->
        <?php
    }
}



/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
if ( ! function_exists( 'jumpstart_posted_on' ) ) {
    function jumpstart_posted_on() {
        $time_string = '<time datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string .= '<time datetime="%3$s">%4$s</time>';
        }

        $time_string_formatted = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
        );

        $posted_on = sprintf(
            _x( 'Posted on %s', 'post date', 'jumpstart' ),
            '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string_formatted . '</a>'
        );

        $byline = sprintf(
            _x( 'by %s', 'post author', 'jumpstart' ),
            '<span><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
        );

        echo '<span>' . $posted_on . '</span><span> ' . $byline . '</span>';
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
		$number_of_all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'jumpstart_categories', $number_of_all_the_cool_cats );
	}

	if ( $number_of_all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so jumpstart_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so jumpstart_categorized_blog should return false.
		return false;
	}
}



/**
 * Flush out the transients used in jumpstart_categorized_blog.
 */
function jumpstart_category_transient_flusher() {
	delete_transient( 'jumpstart_categories' );
}
add_action( 'edit_category', 'jumpstart_category_transient_flusher' );
add_action( 'save_post',     'jumpstart_category_transient_flusher' );