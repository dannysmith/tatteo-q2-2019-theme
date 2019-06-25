<?php
/**
 * The template for displaying Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tatteo
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'hero' );
			get_template_part( 'template-parts/content', 'front-page' );


			/* If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;*/

		endwhile; // End of the loop.
		?>
		<section class="featured-section-wrapper">
<section class="featured-artist featured-section">
  <h2 class="featured-title headings-box">Featured Artists</h2>
<?php while (have_rows('featured_artists')) : the_row(); ?>
			<?php $post_object = get_sub_field('featured_artist');
			if ($post_object) :
				// override $post
				$post = $post_object;
				setup_postdata($post);
				get_template_part('template-parts/content', 'search');
				wp_reset_postdata();
				?>
			<?php endif;
	endwhile;
	?>
	</section> <!-- featured Artist -->
	<section class="featured-studio featured-section">
  <h2 class="featured-title headings-box">Featured Studios</h2>
<?php while (have_rows('featured_studio')) : the_row(); ?>
			<?php $post_object = get_sub_field('featured_studio');
			if ($post_object) :
				// override $post
				$post = $post_object;
				setup_postdata($post);
				get_template_part('template-parts/content', 'search');
				wp_reset_postdata();
				?>
			<?php endif;
	endwhile;
	?>
	</section> <!-- featured artist -->
</section> <!-- featured section wrapper --->





		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
