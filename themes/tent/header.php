<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>
	<a href="<?php echo esc_url(home_url('/')); ?>"></a>
				<a herf="http://localhost:3000/inhabitent/"><img class="tent" src=<?php echo get_stylesheet_directory_uri() . "/images/logos/inhabitent-logo-tent-white.svg"; ?> height="50" width="50" /></a>
				<!----->
				<!----->

				<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header reverse-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					
				</div><!-- .site-branding -->
				

					<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php echo esc_html( 'Primary Menu' ); ?></button>
					<!------- my edit monday 12:46pm----------->
					
					<?php //custom-header(); ?>
					<?php the_custom_logo(); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">


		<!----------------------------- my edit sunday ------------------------>
