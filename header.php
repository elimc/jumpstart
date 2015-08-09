<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo LIB; ?>/branding/favicon.ico">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo LIB; ?>/branding/apple-touch-icon.png">
<?php wp_head(); ?>
</head>

<body>
    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<header>
		<div>
			<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>
		</nav><!-- nav -->
	</header><!-- header -->