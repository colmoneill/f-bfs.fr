<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _mbbasetheme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<!--[if lt IE 9]>
	    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><div class="site-branding"></div></a>
			<button class="menu-toggle"><?php _e( 'menu', '_mbbasetheme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			<ul class="lang">
				<?php pll_the_languages(array('display_names_as'=> 'slug')); ?>
				<li class="search"><a class="search" href="#" onclick="$('.menu-search').show();"><svg class="geomicon-search" data-icon="search" viewBox="0 0 32 32"><title>search icon</title><path d="M12 0 A12 12 0 0 0 0 12 A12 12 0 0 0 12 24 A12 12 0 0 0 18.5 22.25 L28 32 L32 28 L22.25 18.5 A12 12 0 0 0 24 12 A12 12 0 0 0 12 0 M12 4 A8 8 0 0 1 12 20 A8 8 0 0 1 12 4"></path></svg></a></li>
			</ul>
			<div class="menu-search" style="display: none;">
				<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="text" placeholder="search the site" value="<?php echo get_search_query(); ?>" name="s" id="s" />
				</form>
			</div>
			<hr>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
