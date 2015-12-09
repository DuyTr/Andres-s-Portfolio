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

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="site-branding display-branding">
						<h1 class="site-title "><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Andres Navas</a></h1>
						<p class="site-description">UX + Interaction + UI Designer</p>
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigaion -->
				<?php if( is_home() || is_front_page() ) : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/dinosaur.jpg" alt="Dinosaur Logo" class="bg-image"/>
				<?php endif; ?>
				<div class="home-site-branding site-branding">
					<h1 class="site-title "><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Andres Navas</a></h1>
					<p class="site-description">UX + Interaction + UI Designer</p>
				</div>
			</header><!-- #masthead -->
			<div id="content" class="site-content">
