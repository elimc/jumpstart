<?php
/**
 * The Template for displaying all single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

    <main id="single-post" role="main">

    <?php while ( have_posts() ) { the_post();

        get_template_part( './parts/content', 'single' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
            comments_template();
        }

    } // end of the loop. ?>

    </main><!-- #main -->

<?php
get_sidebar();
get_footer();