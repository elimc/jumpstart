<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
?>

<article>
	<header>
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) { ?>
		<div>
			<?php jumpstart_posted_on(); ?>
		</div><!-- .entry-meta -->
        <?php } ?>
	</header><!-- .entry-header -->

	<div>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer>
		<?php jumpstart_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
