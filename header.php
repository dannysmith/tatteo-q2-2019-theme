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
<!-- Div Fixed Header -->
		<div class="header-search-form-wrapper dark-filter search-toggle">
					<div class="header-search-form search-toggle">
						<form name="search-form" method="get" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<!-- LOCATION -->
							<div class="location-filter">
								<label for="location">Location</label>
								<input type="text" name="location" id="location" placeholder="Search Locations...">
							</div>
							<!-- DATES -->
							<div class="dates-filter">
								<label for="dates">Dates</label>
								<div class="date-inputs">
									<input type="date" name="date_from" id="dates">
									<input type="date" name="date_to" id="dates">
								</div>
							</div>
							<div class="taxonomies-wrapper">
								<!-- ART STYLE -->
								<div class="art-styles-wrapper taxonomy-form">
									<button class="taxonomies-button">Style</button>
									<fieldset class="taxonomies-dropdown">
										<?php
										$art_styles = get_terms(array(
											'taxonomy' => 'art_style',
											'hide_empty' => false,
										));
										foreach ($art_styles as $art_style) {
											$style_name = $art_style->name;
											echo '<p>';
											echo '<input type="checkbox" name="art_style" value="'.$style_name.'" id="'.$style_name.'">';
											echo '<label for="'.$style_name.'">' .$style_name. '</label>';
											echo '</p>';
										}
										?>
									</fieldset>
								</div>

								<!-- COMISSION -->
								<div class="comissions-wrapper taxonomy-form">
									<button class="taxonomies-button">Comission</button>
									<fieldset class="taxonomies-dropdown">
										<?php
										$comissions = get_terms(array(
											'taxonomy' => 'comission',
											'hide_empty' => false,
										));
										foreach ($comissions as $comission) {
											$comission_amount = $comission->name;
											echo '<p>';
											echo '<input type="checkbox" name="comission" value="'.$comission_amount.'" id="'.$comission_amount.'">';
											echo '<label for="'.$comission_amount.'">' .$comission_amount. '</label>';
											echo '</p>';
										}
										?>
									</fieldset>
								</div>

								<!-- TOOLS -->
								<div class="tools-wrapper taxonomy-form">
									<button class="taxonomies-button">Tools</button>
									<fieldset class="taxonomies-dropdown">
										<?php
										$tools = get_terms(array(
											'taxonomy' => 'tools',
											'hide_empty' => false,
										));
										foreach ($tools as $tool) {
											$tool_name = $tool->name;
											echo '<p>';
											echo '<input type="checkbox" name="tools" value="'.$tool_name.'" id="'.$tool_name.'">';
											echo '<label for="'.$tool_name.'">' .$tool_name. '</label>';
											echo '</p>';
										}
										?>
									</fieldset>
								</div>
							<!-- ACCOMODATION -->
							<div class="accomodation-filter">
								<input type="checkbox" name="accomodation" id="accomodation">
								<label for="accomodation">Accomodation</label>
							</div>
							<input type="submit" id="searchsubmit" value="Search" />
							</div>
						</form>
					</div>
				</div>
		</div>


	</header><!-- #masthead -->



	<div id="content" class="site-content">
