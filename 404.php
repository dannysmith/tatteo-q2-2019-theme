<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Tatteo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops!', 'tatteo' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like something went wrong here. Try refreshing the page or go to our', 'tatteo' ); ?></p>
					<a class="404-home-button" href=" <?php echo get_home_url() ?>">Home Page</a>

					<p> Maybe try a search or one of the links below. </p>
					<?php
					get_search_form();
					?>

					<!-- //Display 3 random studios based on the same template as on search page -->
					<?php
					// New Query
					$args = array (
						'posts_per_page' => 3,
						'post_type' => 'studio',
						'orderby' => 'rand',
					);

						$studios = new WP_Query( $args );

						if ( $studios->have_posts() ) {
							echo '<h2> Explore Studios </h2>';
							echo '<div class="404-studios">';
							while ( $studios->have_posts() ) {
								$studios->the_post();
								//Replace with correct template part name
								get_template_part('template-parts/content', 'studio-search');
							}
							echo '</div>';
							/* Restore original Post Data */
							wp_reset_postdata();
						} else {
							// no posts found
							echo '<p>No posts found</p>';
						}
						?>

					<!-- //Display 3 random studios based on the same template as on search page -->
					<?php
					// New Query
					$args = array (
						'posts_per_page' => 3,
						'post_type' => 'guestspot',
						'orderby' => 'rand',
					);

						$studios = new WP_Query( $args );

						if ( $studios->have_posts() ) {
							echo '<h2> Explore Guestspots </h2>';
							echo '<div class="404-guestspot">';
							while ( $studios->have_posts() ) {
								$studios->the_post();
								//Replace with correct template part name
								get_template_part('template-parts/content', 'guestspot-search');
							}
							echo '</div>';
							/* Restore original Post Data */
							wp_reset_postdata();
						} else {
							// no posts found
							echo '<p>No posts found</p>';
						}
						?>

					<!-- //Display 3 random studios based on the same template as on search page -->
					<?php
					// New Query
					$args = array (
						'posts_per_page' => 3,
						'post_type' => 'artist',
						'orderby' => 'rand',
					);

						$studios = new WP_Query( $args );

						if ( $studios->have_posts() ) {
							echo '<h2> Explore Artist </h2>';
							echo '<div class="404-artist">';
							while ( $studios->have_posts() ) {
								$studios->the_post();
								//Replace with correct template part name
								get_template_part('template-parts/content', 'artist-search');
							}
							echo '</div>';
							/* Restore original Post Data */
							wp_reset_postdata();
						} else {
							// no posts found
							echo '<p>No posts found</p>';
						}
						?>


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
