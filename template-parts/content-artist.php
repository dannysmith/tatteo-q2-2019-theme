<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tatteo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	    <div class="custom-post-header" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
		    <div class="custom-post-hero-meta">
		        <h2><?php the_title(); ?></h2>
		        <p class="CPT-location"><?php the_field( 'city' )?>, <?php the_field( 'country' ) ?><p>
		        <button class="get-in-touch open white-link" id="contact-button">Get In Touch</button>
	        </div>
	    </div>

	</header><!-- .entry-header -->

	<section class="studio-content">
		<?php $profile_picture = get_field( 'profile_picture' ); ?>
	    <div class="studio-content-image" style="background-image: url(<?php echo $profile_picture['url']; ?>)">
            
	    </div> <!-- image area wrapper --->
	    <div class="studio-content-meta">
		    <h2>About</h2>
		    <p class="studio-content-bio"><?php the_field( 'biography' ); ?></p> 
			<h2>Styles</h2>
	        <ul> 
		        
			<?php 
				// TODO: This will currently display ANY custom taxonomies within the art style section, change later so it only displays the ones that the artist has chosen
				$art_style_terms = get_field( 'art_style' ); ?>
			<?php if ( $art_style_terms ): ?>
				<?php foreach ( $art_style_terms as $art_style_term ): ?>
					<?php echo '<li>'.$art_style_term->name.'<li>'; ?>
				<?php endforeach; ?>
			<?php endif; ?>
			</ul>
			<h2>Social</h2>
			<?php if ( have_rows( 'social_media' ) ) : ?>
			<ul>
			<?php while ( have_rows( 'social_media' ) ) : the_row(); ?>
				<li><a href="<?php echo the_sub_field('twitter'); ?>">Twitter</a></li>
				<li><a href="<?php echo the_sub_field('facebook'); ?>">Facebook</a></li>
				<li><a href="<?php echo the_sub_field('instagram'); ?>">Instagram</a></li>
				<li><a href="<?php echo the_sub_field('portfolio'); ?>">Artist Portfolio</a></li>
			<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			<button class="get-in-touch open white-link" id="contact-button">Get In Touch</button>
		</div> <!-- artist style --->
	</section>
	<section class="gallery-section-wrapper">
	    <h2 class="gallery-title headings-box">Gallery</h2>
	    <ul class="images-grid grid-container">
			<li><?php $image_one = get_field( 'image_one' ); ?>
	<?php if ( $image_one ) { ?>
		<img src="<?php echo $image_one['url']; ?>" alt="<?php echo $image_one['alt']; ?>" />
	<?php } ?></li>
	<li class="image-border"><?php $image_two = get_field( 'image_two' ); ?>
	<?php if ( $image_two ) { ?>
		<img src="<?php echo $image_two['url']; ?>" alt="<?php echo $image_two['alt']; ?>" />
	<?php } ?></li>
	<li><?php $image_three = get_field( 'image_three' ); ?>
	<?php if ( $image_three ) { ?>
		<img src="<?php echo $image_three['url']; ?>" alt="<?php echo $image_three['alt']; ?>" />
	<?php } ?></li>
	<li><?php $image_four = get_field( 'image_four' ); ?>
	<?php if ( $image_four ) { ?>
		<img src="<?php echo $image_four['url']; ?>" alt="<?php echo $image_four['alt']; ?>" />
	<?php } ?></li>
	    </ul>
	</section>

	<div class="popup-overlay">
		<div class="popup-wrapper">
			<div class="popup-content">
				<button class="close-form headings-box">X</button>
				<?php echo do_shortcode( "[contact-form-7 id='1821' title='user-to-user']" ); ?>
			</div>
		</div>
	</div>
	



</article><!-- #post-<?php the_ID(); ?> -->
