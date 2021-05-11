<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MajorWP_Starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'major-wp' ); ?></a>

	<header id="masthead" class="site-header">
		<nav class="navbar is-relative" role="navigation" aria-label="main navigation">
			<div class="navbar-brand">
				<?php
					the_custom_logo();
				?>

				<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				<span aria-hidden="true"></span>
				</a>
			</div>

			<div id="navbarBasicExample" class="navbar-menu">
				<div class="navbar-start is-centered-absolute">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'menu-1',
							'menu_class'      => '',
							'container'       => false,
							'items_wrap'      => '%3$s'
						)
					);
					?>
				</div>

				<div class="navbar-end">
				<div class="navbar-item">
					<div class="buttons">
					<a class="button is-primary">
						<strong>Sign up</strong>
					</a>
					<a class="button is-light">
						Log in
					</a>
					</div>
				</div>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
