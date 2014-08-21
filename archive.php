<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

    <main id="archive" role="main">

    <?php if ( have_posts() ) { ?>

        <header>
            <h1>
                <?php
                    if ( is_category() ) {
                        single_cat_title();

                    } elseif ( is_tag() ) {
                        single_tag_title();

                    } elseif ( is_author() ) {
                        printf( __( 'Author: %s', 'jumpstart' ), '<span>' . get_the_author() . '</span>' );

                    } elseif ( is_day() ) {
                        printf( __( 'Day: %s', 'jumpstart' ), '<span>' . get_the_date() . '</span>' );

                    } elseif ( is_month() ) {
                        printf( __( 'Month: %s', 'jumpstart' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'jumpstart' ) ) . '</span>' );

                    } elseif ( is_year() ) {
                        printf( __( 'Year: %s', 'jumpstart' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'jumpstart' ) ) . '</span>' );

                    } else {
                        _e( 'Archives', 'jumpstart' );

                    }
                ?>
            </h1>
            <?php
                // Show an optional term description.
                $term_description = term_description();
                if ( ! empty( $term_description ) ) {
                    printf( '<div>%s</div>', $term_description );
                }
            ?>
        </header><!-- page-header -->

        <?php

        /* Start the Loop */
        while ( have_posts() ) {

            the_post();

            /* Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );

        }
            jumpstart_paging_nav();
        } else {
            get_template_part( 'content', 'none' );
        }

        ?>

    </main><!-- main -->

<?php
get_sidebar();
get_footer();
