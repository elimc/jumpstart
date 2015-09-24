<?php
/**
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */
?>

<article>
	<header>
		<?php the_title( sprintf( '<h1><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) { ?>

		<div>
			<?php jumpstart_posted_on(); ?>
		</div><!-- .entry-meta -->

        <?php } ?>
	</header><!-- .entry-header -->

    <div>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'jumpstart' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
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
