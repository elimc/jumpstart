<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

    <main id="not-found" role="main">

        <header>
            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'jumptstart' ); ?></h1>
        </header><!-- .page-header -->

        <section>
            <p><?php esc_html_e( 'Sorry, something went wrong.', 'jumptstart' ); ?></p>
        </section><!-- page-content -->

    </main><!-- main -->

<?php
get_footer();
