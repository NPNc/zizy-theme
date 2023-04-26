<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zizy-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'zizy-theme'); ?></a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<div class="logo-container">
					<?php
					if (has_custom_logo()) :
						the_custom_logo();
					else :
					?>
						<a href="<?php echo home_url() ?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
							<img class="rounded mx-auto d-block" src="<?php echo get_template_directory_uri() . '/assets/img/Zizylo1.png' ?>" />
						</a>
					<?php
					endif;
					?>
				</div>
			</div><!-- .site-branding -->

			<div class="container-fluid d-flex align-items-center justify-content-center primary-menu">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'zizy-theme'); ?></button>
					<?php
					if (has_nav_menu('primary')) :
						wp_nav_menu([
							'theme_location' => 'primary',
							'container'      => false,
							'menu_class'     => 'text-jura',
							'menu_id'        => '',
							'depth'          => 3
						]);
					else :
						printf(
							'<a href="%1$s" class="text-jura">%2$s</a>',
							esc_url(admin_url('/nav-menus.php')),
							esc_html__('Asign a menu', 'Zizy')
						);
					endif;
					?>
				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->