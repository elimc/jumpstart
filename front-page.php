<?php
/**
 * This will always be the front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

    <main id="front-page" role="main">

    <?php

        while ( have_posts() ) { the_post();
//            get_template_part( './parts/content', 'page' );
        } // end of the loop.

    ?>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
