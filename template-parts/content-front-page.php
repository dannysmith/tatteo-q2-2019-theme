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


<section class="featured-artist featured-section">
  <h2 class="featured-title headings-box">Featured Artists</h2>
  <div class="featured-gallery">
    <div class="featured-item featured-one">
      <img src="https://theculturetrip.com/wp-content/uploads/2018/02/tattoo-studios_fallen-heroes-min.png">
      <div class="featured-information">
        <p class="featured-name">John Doe</p>
        <p class="featured-location">Paris, France</p>
        <p class="featured-rating">*****</p>
</div> <!-- Featured Information -->
</div> <!-- Featured Item One -->
<div class="featured-item featured-two">
      <img src="https://theculturetrip.com/wp-content/uploads/2018/02/tattoo-studios_fallen-heroes-min.png">
      <div class="featured-information">
        <p class="featured-name">John Doe</p>
        <p class="featured-location">Paris, France</p>
        <p class="featured-rating">*****</p>
</div> <!-- Featured Information -->
</div> <!-- Featured Item Two -->
<div class="featured-item featured-three">
      <img src="https://theculturetrip.com/wp-content/uploads/2018/02/tattoo-studios_fallen-heroes-min.png">
      <div class="featured-information">
        <p class="featured-name">John Doe</p>
        <p class="featured-location">Paris, France</p>
        <p class="featured-rating">*****</p>
</div> <!-- Featured Information -->
</div> <!-- Featured Item Three -->
<div class="featured-item featured-one">
      <img src="https://theculturetrip.com/wp-content/uploads/2018/02/tattoo-studios_fallen-heroes-min.png">
      <div class="featured-information">
        <p class="featured-name">John Doe</p>
        <p class="featured-location">Paris, France</p>
        <p class="featured-rating">*****</p>
</div> <!-- Featured Information -->
</div> <!-- Featured Item Four -->
<div class="featured-item featured-two">
      <img src="https://theculturetrip.com/wp-content/uploads/2018/02/tattoo-studios_fallen-heroes-min.png">
      <div class="featured-information">
        <p class="featured-name">John Doe</p>
        <p class="featured-location">Paris, France</p>
        <p class="featured-rating">*****</p>
</div> <!-- Featured Information -->
</div> <!-- Featured Item Five -->
<div class="featured-item featured-three">
      <img src="https://theculturetrip.com/wp-content/uploads/2018/02/tattoo-studios_fallen-heroes-min.png">
      <div class="featured-information">
        <p class="featured-name">John Doe</p>
        <p class="featured-location">Paris, France</p>
        <p class="featured-rating">*****</p>
</div> <!-- Featured Information -->
</div> <!-- Featured Item Six -->
  </div> <!-- Featured Gallery -->
</section>
    <?php
    /*
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tatteo' ),
			'after'  => '</div>',
		) );*/
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
