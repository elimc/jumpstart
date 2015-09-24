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

	<?php if ( is_search() ) { // Only display Excerpts for Search ?>
	<div>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php } else { ?>
	<div>
		<?php the_content( __( 'Continue reading>&rarr;</span>', 'jumpstart' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div>' . __( 'Pages:', 'jumpstart' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
    <?php } ?>

	<footer>
		<?php if ( 'post' == get_post_type() ) { // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'jumpstart' ) );
				if ( $categories_list && jumpstart_categorized_blog() ) {
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'jumpstart' ), $categories_list ); ?>
			</span>
            <?php } // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'jumpstart' ) );
				if ( $tags_list ) {
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'jumpstart' ), $tags_list ); ?>
			</span>
            <?php } // End if $tags_list ?>
		<?php } // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'jumpstart' ), __( '1 Comment', 'jumpstart' ), __( '% Comments', 'jumpstart' ) ); ?></span>
        <?php } ?>

		<?php edit_post_link( __( 'Edit', 'jumpstart' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
