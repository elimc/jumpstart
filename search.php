<?php
/**
 * The template for displaying Search Results pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

	<section>
		<main role="main">

		<?php if ( have_posts() ) { ?>

			<header>
				<h1><?php printf( __( 'Search Results for: %s', 'jumpstart' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php

            /* Start the Loop */
            while ( have_posts() ) { the_post();
                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part( 'content', 'search' );
            }

            jumpstart_paging_nav();

        } else {
			get_template_part( 'content', 'none' );
        }

        ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();