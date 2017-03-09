<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crystal
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class($pagename); ?>>
<div id="page" class="site">

	<div id="loader">
		<div id="loading">
			<div id="progstat"></div>
			<div id="progress"></div>
		</div>
	</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
		
			<div class="site-branding">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="">
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<div class="table"><div class="cell middle">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</div></div>
			</nav>

		</div>
	</header>

	<div id="content" class="site-content">
