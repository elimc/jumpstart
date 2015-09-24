<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
?>

<article>
	<header>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div>
			<?php jumpstart_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div>
		<?php the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jumpstart' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer>
		<?php jumpstart_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->