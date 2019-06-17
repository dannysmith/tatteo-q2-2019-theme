<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tatteo
 */

get_header();
?>
<!-- PLACEHOLDER CODE --->
<div class="artist-page">
<section class="content-header">
    <div class="artist-rating">
        <h2>John Doe</h2>
        <!-- ***** --->
    </div>
    <a class="get-in-touch white-link">Get in Touch</a>
</section>
<section class="hero-section">
    <div class="image-area-wrapper">
        <img src="https://assets.rebelcircus.com/blog/wp-content/uploads/2015/05/tattoo1.jpg" class="artist-photo">
            <h2 class="headings-box">John Doe</h2> <!--Artist name --->
            <div class="star-rating"></div> <!-- the rating --->
            <p class="bio headings-box">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> <!-- Bio --->
    </div> <!-- image area wrapper --->
    <div class="hero-side-content">
        <div class="artist-style">
        <ul> <!-- This will currently display ANY custom taxonomies within the art style section, change later so it only displays the ones that the artist has chosen -->
						<?php
						$terms = get_terms(array(
							'taxonomy' => 'art_style',
							'hide_empty' => false,
						));
						foreach ($terms as $term) {
							echo "<li class='headings-box'><a href=" . esc_url(site_url()) . "/art_style/" . $term->name . ">" . $term->name . "</a></li>";
						}
						?>
					</ul>
        </div> <!-- artist style --->
        <a class="get-in-touch white-link">Get in Touch</a>
    </div> <!-- hero side content --->
</section>
</div>


<!-- PLACEHOLDER CODE --->





	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

            the_post_navigation();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
//get_footer();
