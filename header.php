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
    </nav>

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
    </header>

    <!-- Responsive Blocks -->
    Responsive Blocks
    <section>
      <div>1</div>
      <div>2</div>
      <div>3</div>
      <div>4</div>
      <div>5</div>
      <div>6</div>
    </section>

    <!-- Offset -->
    Offset
    <section>
      <div>1</div>
      <div>2</div>
    </section>

    <!-- Nesting -->
    Nesting
    <section>
      <div>a</div>
      <div>a</div>
      <div>
        <div>b</div>
        <div>b</div>
      </div>
    </section>

    <!-- Alignment -->
    Alignment
    <section>
      <div>1</div>
    </section>

    <!-- Cycle -->
    Cycle
    <section>
      <div>
        1 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem rem nam dolore repellendus provident, voluptas necessitatibus vel cupiditate delectus, doloremque incidunt accusantium quia! Nisi molestiae totam natus, in assumenda accusantium.
      </div>
      <div>
        2 - Lorem ipsum dolor sit amet.
      </div>
      <div>
        3 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sunt harum ut rerum id quae voluptas velit iusto quasi distinctio.
      </div>
      <div>
        4 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, sequi?
      </div>
      <div>
        5 - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nisi deserunt, dolorem accusamus sint ipsam dolor quae ab animi assumenda architecto placeat possimus fugit doloribus vel, corporis amet aliquam maiores!
      </div>
      <div>
        6 - Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      </div>
    </section>

    <!-- Vertical Grid -->
    Vertical Grid
    <section>
      <div>1</div>
      <div>2</div>
      <div>3</div>
    </section>

    <!-- Waffle Grid -->
    Waffle Grid
    <section>
      <div>1</div>
      <div>2</div>
      <div>3</div>
      <div>4</div>
      <div>5</div>
      <div>6</div>
      <div>7</div>
      <div>8</div>
      <div>9</div>
      <div>10</div>
      <div>11</div>
      <div>12</div>
      <div>13</div>
      <div>14</div>
      <div>15</div>
    </section>

    <!-- Varying Sizes -->
    Varying Sizes
    <section>
      <div>1</div>
      <div>2</div>
    </section>

    <!-- Source Ordering -->
    Source Ordering
    <section>
      <div>1</div>
      <div>2</div>
    </section>


