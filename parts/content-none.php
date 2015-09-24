<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
?>

<section>
	<header>
		<h1 class="page-title"><?php _e( 'Nothing Found', 'jumpstart' ); ?></h1>
	</header><!-- .page-header -->

	<div>
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'jumpstart' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

        <?php } elseif ( is_search() ) { ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'jumpstart' ); ?></p>
			<?php get_search_form(); ?>

        <?php } else { ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'jumpstart' ); ?></p>
			<?php get_search_form(); ?>

        <?php } ?>
	</div>
</section><!-- .no-results -->
