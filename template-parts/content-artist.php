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
	</header><!-- .entry-header -->

	<?php tatteo_post_thumbnail(); ?>

	<div class="custom-post-page">
<section class="content-header content-padding">
    <div class="custom-post-header">
        <h2><?php the_field( 'name' ); ?></h2>
        <!-- ***** --->
    </div>
	<button class="get-in-touch open white-link" id="contact-button">Get In Touch</button>
</section>
<section class="hero-section">
    <div class="image-area-wrapper">
		<?php $profile_picture = get_field( 'profile_picture' ); ?>
<?php if ( $profile_picture ) { ?>
	<img src="<?php echo $profile_picture['url']; ?>" alt="<?php echo $profile_picture['alt']; ?>" />
<?php } ?>
            <h2 class="headings-box"><?php the_field( 'name' ); ?></h2> <!--Artist name --->
            <div class="star-rating"></div> <!-- the rating --->
            <p class="bio headings-box"><?php the_field( 'biography' ); ?></p> <!-- Bio --->
    </div> <!-- image area wrapper --->
    <div class="hero-side-content content-padding">
        <div class="artist-style">
					<h2 class="headings-box">Styles</h2>
        <ul> <!-- This will currently display ANY custom taxonomies within the art style section, change later so it only displays the ones that the artist has chosen -->
				<?php $art_style_terms = get_field( 'art_style' ); ?>
<?php if ( $art_style_terms ): ?>
	<?php foreach ( $art_style_terms as $art_style_term ): ?>
		<?php echo '<li>'.$art_style_term->name.'<li>'; ?>
	<?php endforeach; ?>
<?php endif; ?>
					</ul>
				</div> <!-- artist style --->
				<div class="artist-social-media">
					<h2 class="headings-box">Social</h2>
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
</div><!-- Artist Social Media -->
        <button class="get-in-touch open white-link" id="contact-button">Get In Touch</button>
    </div> <!-- hero side content --->
</section>
</div>
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
