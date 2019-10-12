<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tatteo
 */

$post_type = get_post_type(get_the_ID());
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href=" <?php echo the_permalink() ?>" class="search-result-wrapper">
		<!-- Check if post type is artist, if so get profile picture -->
		<?php if (get_post_type() === 'artist') {
			$profile_picture = get_field('profile_picture'); ?>
			<?php if ($profile_picture) { ?>
				<img src="<?php echo $profile_picture['url']; ?>" alt="<?php echo $profile_picture['alt']; ?>" />
			<?php } else {
			echo '<div class="no-photo"><p>No photo yet</p></div>';
		}
		// Else post type is studio or event so get featured image
	} else {
		$featured_image = get_field('featured_image'); ?>
			<?php if ($featured_image) { ?>
				<img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" />
			<?php } else {
			echo '<div class="no-photo"><p>No photo yet</p></div>';
		}
	}
	?>
		<div class="search-result-text featured-information-wrapper">
			<div class="search-result-header featured-information">
				<p class="studio-name"><?php if (get_post_type() === 'studio') { the_field('studio_name'); } else if (get_post_type() === 'artist') { the_field('name'); } else if (get_post_type() === 'event') { the_field('title'); }?></p>
				<p class="studio-country">
					<?php if (get_post_type() === 'studio') { the_field('city'); ?>, <?php the_field('country'); } ?>
					<?php if (get_post_type() === 'artist') { the_field('city'); ?>, <?php the_field('country'); } ?>
					<?php if (get_post_type() === 'event') { the_field('location'); echo '<br/>'; the_field('date'); } ?>
				</p>
			</div>
			<div class="search-result-footer">
				<p class="studio-commission">
					<?php $commission_term = get_field('commission'); ?>
					<?php if ($commission_term) : ?>
						<?php echo $commission_term->name; ?>
					<?php endif; ?>
				</p>
			</div>
		</div>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
