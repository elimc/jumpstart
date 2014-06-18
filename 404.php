<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

    <main role="main">

        <header>
            <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'jumptstart' ); ?></h1>
        </header><!-- .page-header -->

        <section>
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'jumptstart' ); ?></p>

            <?php get_search_form(); ?>
        </section><!-- page-content -->

    </main><!-- main -->

<?php get_footer(); ?>
