<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body>
    <!--[if lt IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="pushy pushy-left">
        <?php wp_nav_menu( array( 'theme_location' => 'header_menu' ) ); ?>
    </nav><!-- nav -->

    <!-- Site Overlay -->
    <div class="site-overlay"></div>

    <!-- Your Content -->
    <div id="container">
        <!-- Menu Button -->
        <div class="menu-btn">&#9776; Menu</div>

        <header>
            <div>
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2><?php bloginfo( 'description' ); ?></h2>
            </div>
        </header><!-- header -->