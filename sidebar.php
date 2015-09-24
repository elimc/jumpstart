<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */
?>
	<div role="complementary">

        <!-- Have we added any widgets yet? -->
        <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) { ?>
            <p>You haven't added any widgets to your sidebar, yet. Check out the WordPress <a href='http://en.support.wordpress.com/widgets/'>Widget Page</a> for instructions.</p>
        <?php } ?>
	</div><!-- secondary -->
