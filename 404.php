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
				<header class="error-page-header">
				<div class="error-page-content">
					<h1 class="page-title"><?php esc_html_e( 'Oops!', 'tatteo' ); ?></h1>
					<p><?php esc_html_e( 'It looks like something went wrong here. Refresh the page or...', 'tatteo' ); ?></p>
					<div class="search-suggestion">
						<?php
						get_search_form();
						?>
					</div> <!--search suggestion-->
					</div>
					<h2 class="404">404</h2>
					</header><!-- .page-header -->
					<section class="suggestion-content">
					<h2> You can also check out these links: </h2>
					<div class="category-grid-wrapper">
					<!-- //Display 3 random studios based on the same template as on search page -->
					<div class="studio-suggestion">
					<?php
					// New Query
					$args = array (
						'posts_per_page' => 3,
						'post_type' => 'studio',
						'orderby' => 'rand',
					);

						$studios = new WP_Query( $args );

						if ( $studios->have_posts() ) {
							echo '<h2 class="headings-box"> Explore Studios </h2>';
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
							//echo '<p>No posts found</p>';
						}
						?>
						</div> <!--STUDIO SUGGESTION-->

					<!-- //Display 3 random studios based on the same template as on search page -->
					<div class="guestspot-suggestion">
					<?php
					// New Query
					$args = array (
						'posts_per_page' => 3,
						'post_type' => 'guestspot',
						'orderby' => 'rand',
					);

						$studios = new WP_Query( $args );

						if ( $studios->have_posts() ) {
							echo '<h2 class="headings-box"> Explore Guestspots </h2>';
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
							//echo '<p>No posts found</p>';
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
							echo '<h2 class="headings-box"> Explore Artist </h2>';
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
						</div><!--GUESTSPOT SUGGESTION-->
					</div><!-- CATEGORY GRID WRAPPER  -->
					</section><!-- SUGGESTION CONTENT -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
