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
	<a href=" <?php echo get_the_permalink() ?>" class="search-result-wrapper">
		<!-- Replace with image field -->
		<img src="<?php echo the_field() ?>alt=" featured image of the <?php echo $post_type ?>">
		<div class="search-result-text">
			<div class="search-result-header">
				<!-- Replace with name field -->
				<h2><?php echo get_field() ?></h2>
				<!-- Replace with location field -->
				<h3><?php echo get_field() ?></h3>
			</div>
			<div class="search-result-footer">
				<!-- Replace with comission term -->
				<p><?php echo get_field() ?></p>
				<!-- Replace with rating -->
				<p></p>
			</div>
		</div>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
