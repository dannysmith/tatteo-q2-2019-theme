<?php
/**
 * Template part for displaying page content in singe-guestspot.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tatteo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="guestspot-wrapper">
			<?php if (get_field('guestspot_image')) { ?>
				<img src="<?php the_field('guestspot_image'); ?>" />
			<?php } ?>
			<div class="guestspot text">
				<p>Dates:</p>
				<?php echo the_field('date_from') . '-' . the_field('date_to'); ?>
				<?php the_field('description_'); ?>
			</div>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
