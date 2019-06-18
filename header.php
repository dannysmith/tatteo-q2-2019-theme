<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tatteo
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tatteo' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="fixed-header">
			<div class="site-branding">
				<?php if (has_custom_logo()) {
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image( $custom_logo_id , 'site-logo' ); ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php echo $image; ?>
					</a>
					<?php } else {
						if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif;
					}
				?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<nav class="secondary-navigation">
				<button class="search-button"><img src="<?php echo get_site_url()?>/wp-content/themes/tatteo/img/search.svg"></button>
				<div class="user-login">
					<?php
					if ( is_user_logged_in() ) {
					$currentUser = wp_get_current_user();
					$editUserProfile = get_edit_profile_url(); ?>
						<a href="<?php echo $editUserProfile; ?>" class="user-avatar" style="background-image: url(<?php echo esc_url( get_avatar_url( $currentUser->ID ) ); ?>)">
							My account
						</a>
					<?php } else { ?>
						<a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Login">
							Login
						</a>
					<?php } ?>
				</div>
				<div class="nav-toggle">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<?php get_template_part('template-parts/content', 'searchform') ?>
		</div>

	</header><!-- #masthead -->



	<div id="content" class="site-content">
