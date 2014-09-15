<?php
/**
 * jumpstart needs a header.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
    Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">

<?php wp_head(); ?>
</head>

<body>
	<header>
		<div>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>
		</nav><!-- nav -->
	</header><!-- header -->