<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tatteo
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		while (have_posts()) :
			the_post();
			get_template_part('template-parts/content', get_post_type());

		endwhile; // End of the loop.
		?>
		<div class="guestspots-studio-wrapper">
			<?php $args = array(
				'post_type' => 'guest_spot',
				'author' => get_the_author_meta('ID'),
			);
			$the_query = new WP_Query($args);

			// The Loop
			if ($the_query->have_posts()) {;
				while ($the_query->have_posts()) {
					$the_query->the_post(); ?>
					<div class="guest-spot small">
						<img src="<?php the_field('guestspot_image'); ?>" />
						<p><?php the_field('date_from'); ?> - <?php the_field('date_to'); ?> <p>
								<?php the_field('description_');
								/* Restore original Post Data */
								wp_reset_postdata(); ?>
					</div>
				<?php	}
		}


		?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
