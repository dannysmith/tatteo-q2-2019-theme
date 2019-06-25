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
<section class="content-header">
    <div class="custom-post-rating">
        <h2><?php the_field( 'name' ); ?></h2>
        <!-- ***** --->
    </div>
    <a class="get-in-touch white-link">Get In Touch</a>
</section>
<section class="hero-section">
    <div class="image-area-wrapper">
        <img src="https://assets.rebelcircus.com/blog/wp-content/uploads/2015/05/tattoo1.jpg" class="custom-post-photo">
            <h2 class="headings-box"><?php the_field( 'name' ); ?></h2> <!--Artist name --->
            <div class="star-rating"></div> <!-- the rating --->
            <p class="bio headings-box"><?php the_field( 'biography' ); ?></p> <!-- Bio --->
    </div> <!-- image area wrapper --->
    <div class="hero-side-content">
        <div class="artist-style">
					<p class="headings-box">Styles</p>
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
					<p class="headings-box">Social</p>
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
        <a class="get-in-touch white-link">Get In Touch</a>
    </div> <!-- hero side content --->
</section>
</div>
<section class="gallery">
    <h2 class="headings-box">Gallery</h2>
    <ul class="images-grid grid-container">
        <li><img src="http://www.fashionizm.com/wp-content/uploads/2017/04/back-dotwork-tattoo.jpg"></li>
        <li><img src="http://www.dubuddha.org/wp-content/uploads/2018/01/Blackwork-Tattoo-on-Forearm-by-Yanina-Viland-305x304.jpg"></li>
        <li><img src="http://tattoo-journal.com/wp-content/uploads/2016/08/blackwork-tattoo31-650x800.jpg"></li>
        <li><img src="https://positivefox.com/wp-content/uploads/2018/09/geometric-blackwork-tattoos-blackwork-tattoo-blackwork-tattoo-meaning-730x540.jpg"></li>
    </ul>
</section>
<section class="reviews">
    <h2 class="headings-box">Reviews</h2>
    <ul class="reviews-grid grid-container ">
        <li><p class="headings-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></li>
        <li><p class="headings-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></li>
        <li><p class="headings-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></li>
    </ul>
    </section>




</article><!-- #post-<?php the_ID(); ?> -->
