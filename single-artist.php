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
<div class="custom-post-page">
<section class="content-header">
    <div class="custom-post-rating">
        <h2>John Doe</h2>
        <!-- ***** --->
    </div>
    <a class="get-in-touch white-link">Get In Touch</a>
</section>
<section class="hero-section">
    <div class="image-area-wrapper">
        <img src="https://assets.rebelcircus.com/blog/wp-content/uploads/2015/05/tattoo1.jpg" class="custom-post-photo">
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
get_footer();
