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
            <p><?php _e( 'Sorry, something went wrong.', 'jumptstart' ); ?></p>
        </section><!-- page-content -->

    </main><!-- main -->

<?php get_footer(); ?>
