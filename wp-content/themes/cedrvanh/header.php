<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php echo body_class(); ?>>
<nav class="navbar navbar-expand-md navbar-dark bg-pink" role="navigation">
  <div class="container">
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'cedrvanh_primary_menu',
			'depth'             => 2,
			'container'         => 'div',
			'menu_class'        => 'nav navbar-nav',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>