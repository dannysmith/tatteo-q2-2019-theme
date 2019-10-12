<?php
/**
 * Template part for displaying a Hero section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tatteo
 */

?>

<?php 
	// HERO IMAGE VARS
	// first, get the image ID returned by ACF
	$image_id = get_field('image');
	// and the image size to return (declared in functions.php)
	$image_size = 'content-hero';
	// use wp_get_attachment_image_src to return an array containing the image
	// pass in the $image_id in the first parameter
	// and the image size registered using add_image_size() in the second
	$image_array = wp_get_attachment_image_src($image_id, $image_size);
	// finally, extract and store the URL from $image_array
	$image_url = $image_array[0];

	if (get_field('image')) { // check if hero image is set for the page ?>
	
		<section class="hero" style="background-image: url(<?php echo esc_url($image_url); // Hero img URL ?>)">
		<?php
			// check if headlines exist
			if( have_rows('headlines') ): ?>
			<div class="hero-headlines">
				<?php	
				 	// loop through the headlines
				    while ( have_rows('headlines') ) : the_row(); ?>

			<?php if( get_sub_field('headline') ): ?>
				    <span class="hero-headline">
				    	<?php the_sub_field('headline'); ?>
				    </span>
			<?php endif; ?>
				<?php
					endwhile; ?>
			</div>
			<?php
				else :
			    // no headlines found - do nothing
				endif;
					
				$link = get_field('button'); // get button link
				
				if( $link ): 
					$link_url = $link['url'];
					$link_title = $link['title'];
					$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="hero-button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
				<?php echo esc_html($link_title); ?>
			</a>
		<?php endif; ?>
		</section><!-- .hero -->

	<?php } ?>
