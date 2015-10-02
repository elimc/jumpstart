<?php
/**
 * This will always be the front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

    <main id="front-page" role="main">


        <section class="row">
          <div class="quarter">1</div>
          <div class="half">2</div>
          <div class="quarter">3</div>
        </section>

    <?php

        while ( have_posts() ) { the_post();
            get_template_part( './parts/content', 'page' );
        } // end of the loop.

    ?>

    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
