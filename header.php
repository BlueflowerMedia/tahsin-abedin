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
				<a href="home">HOME</a>
				<a href="bio">BIO</a>
				<a href="portfolio">PORTFOLIO</a>
				<a href="contact">CONTACT</a>
				<!-- <a id = fontawesome href="#"><i class="fab fa-instagram"></i></a>
				<a id = fontawesome href="#"><i class="fab fa-youtube"></i></a> -->
				<div class="hamburger" id="hamburger-9">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>

			</div>
      <!-- navbar right -->
      <div class="nav-right">
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
      </div>

			<!-- <div id="dropdown-menu" class="dropdown">
			  <ul>
			   <li ><a href="#about">About</a></li>
			   <li><a href="#objectives">Objectives</a></li>
			   <li><a href="#contacts">Contact</a></li>
			  </ul>
			</div> -->

	</header>

</div>
</body>
