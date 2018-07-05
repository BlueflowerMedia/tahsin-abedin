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
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
				<a href="<?php echo get_permalink(get_page_by_path( 'bio' )); ?>">BIO</a>
				<a href="<?php echo get_permalink(get_page_by_path( 'portfolio' )); ?>">PORTFOLIO</a>
				<a href="<?php echo get_permalink(get_page_by_path( 'contact' )); ?>">CONTACT</a>



			</div>
      <!-- navbar right -->
      <div class="nav-right">
				<a href="https://www.instagram.com/tahsinabedin"><i class="fab fa-instagram"></i></a>
				<a href="https://www.youtube.com/channel/UC5vR-9bNQXbpd4pjtPgewKA"><i class="fab fa-youtube"></i></a>
      </div>

			<!-- <div class="hamburger" id="hamburger-9">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>

			<div id="dropdown-menu" class="dropdown">
			  <ul>
			   <li ><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a></li>
			   <li><a href="<?php echo get_permalink(get_page_by_path( 'bio' )); ?>">BIO</a></li>
			   <li><a href="<?php echo get_permalink(get_page_by_path( 'portfolio' )); ?>">PORTFOLIO</a></li>
				 <li><a href="<?php echo get_permalink(get_page_by_path( 'contact' )); ?>">CONTACT</a></li>
				</ul>
			</div> -->

	</header>

</div>
</body>
