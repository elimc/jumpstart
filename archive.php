<?php
/**
 * The template for displaying Archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

    <main id="archive" role="main">

    <?php if ( have_posts() ) { ?>

        <header>

        <?php

            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description">', '</div>' );

        ?>

        </header><!-- page-header -->

        <?php

            /* Start the Loop */
            while ( have_posts() ) { the_post();

                /* Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( './parts/content', get_post_format() );
            }

            the_posts_navigation();

        } else {
            get_template_part( './parts/content', 'none' );
        }

        ?>

    </main><!-- main -->

<?php
get_sidebar();
get_footer();
