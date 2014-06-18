<?php
/**
 * The template used for displaying page content in page.php
 * 
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
?>

<article>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div>' . __( 'Pages:', 'jumpstart' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer>
		<?php edit_post_link( __( 'Edit', 'jumpstart' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
