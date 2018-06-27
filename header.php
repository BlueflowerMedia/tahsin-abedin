<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blueflowedmedia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

      <!-- navbar middle -->
      <div class="nav-middle">
				<a href="#">HOME</a>
				<a href="#">BIO</a>
				<a href="#">PORTFOLIO</a>
				<a href="#">CONTACT</a>
				<!-- <a id = fontawesome href="#"><i class="fab fa-instagram"></i></a>
				<a id = fontawesome href="#"><i class="fab fa-youtube"></i></a> -->
      </div>
      <!-- navbar right -->
      <div class="nav-right">
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
      </div>

	</header>

</div>
</body>
