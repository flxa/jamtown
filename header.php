<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WPCharming
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
<body <?php body_class(); ?>>
<?php wpcharming_toppage_slider(); ?>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wpcharming' ); ?></a>
	
	<div id="topbar" class="site-topbar">
		<div class="container">
			<div class="topbar-inner clearfix">
				<div class="topbar-left topbar widget-area clearfix">
					<?php dynamic_sidebar('topbar-left'); ?>
				</div>
				<div class="topbar-right topbar widget-area clearfix">
					<?php dynamic_sidebar('topbar-right'); ?>
				</div>
			</div>
		</div>
	</div> <!-- /#topbar -->

	<header id="masthead" class="site-header <?php if ( wpcharming_option('header_fixed') ) echo 'fixed-on' ?>" role="banner">
		<div class="container">
			<div class="site-branding">
				<?php if ( wpcharming_option('site_logo', false, 'url') !== '' ) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php echo wpcharming_option('site_logo', false, 'url'); ?>" alt="<?php get_bloginfo( 'name' ) ?>" />
				</a>
				<?php } else { ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php } ?>
			</div><!-- /.site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
			<div class="clear"></div>
		</div>
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">
