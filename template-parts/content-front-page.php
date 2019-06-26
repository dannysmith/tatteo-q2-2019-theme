<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tatteo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

	</header><!-- .entry-header -->

	<?php tatteo_post_thumbnail(); ?>

	<div class="entry-content">

<section class="featured-section-wrapper">
<section class="featured-artist featured-section">
  <h2 class="featured-title headings-box">Featured Artists</h2>
  <div class="featured-gallery">
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
  </div> <!-- Featured Gallery -->
	<a href="<?php echo get_site_url().'/artist/'?>" class="get-in-touch see-more white-link">See More</a>
</section>
<section class="featured-studio featured-section">
  <h2 class="featured-title headings-box">Featured Studios</h2>
  <div class="featured-gallery">
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
  </div> <!-- Featured Gallery -->
	<a href="<?php echo get_site_url().'/studio/'?>" class="get-in-touch see-more white-link">See More</a>
</section>
</section> <!-- Featured Section Wrapper -->
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
