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
<!-- PLACEHOLDER CODE ARTIST --->
<div class="studio-page ">
<section class="content-header">
    <div class="studio-rating">
        <h2>Purple Sun Brussels</h2>
        <h3>Commision: 25%</h3>
        <!-- ***** --->
    </div>
    <a class="get-in-touch white-link">Get In Touch</a>
</section>
<section class="hero-section">
    <div class="image-area-wrapper">
        <img src="https://res-3.cloudinary.com/dostuff-media/image/upload//w_1200,q_75,c_limit,f_auto/v1524671269/page-image-11517-2067403a-2edb-4eef-b68b-f118a334e747.png" class="studio-photo">
            <h2 class="headings-box">Purple Sun Brussels</h2> <!--Artist name --->
            <div class="star-rating"></div> <!-- the rating --->
            <p class="bio headings-box">Tattoo collective in the heart of brussels by Burton Ursae Minoris, Indy Voet,
            Marine Martin, Capitaine Plum, Delyone and Ghandi.</p> <!-- Bio --->
    </div> <!-- image area wrapper --->
    <div class="hero-side-content">
        <div class="studio-tools">
        <ul> <!-- This will currently display ANY custom taxonomies within the art style section, change later so it only displays the ones that the artist has chosen -->
						<?php
						$terms = get_terms(array(
							'taxonomy' => 'tools',
							'hide_empty' => false,
						));
						foreach ($terms as $term) {
							echo "<li class='headings-box'><a href=" . esc_url(site_url()) . "/tool/" . $term->name . ">" . $term->name . "</a></li>";
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
        <li><img src="https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/735084_444210922428948_8870153899759761478_n.jpg?_nc_cat=106&_nc_oc=AQmP9b59yiBkVTyM-LJvqI_c5ni_0MIe-4bHxUu1RZzJDE24mUW1Ba97n9FNbEPwFf4&_nc_ht=scontent-lht6-1.xx&oh=b3cc622a2a614cbce43c88657314a975&oe=5D82BC97"></li>
        <li><img src="https://scontent-lht6-1.xx.fbcdn.net/v/t31.0-8/16112753_604247009758671_634733528614501969_o.jpg?_nc_cat=102&_nc_oc=AQlyAMjeEY0_BxTHCUuml66VCa-3BSPsepfcTO_JF-e0SvpGDWqOPifQvgR3pV9wdnQ&_nc_ht=scontent-lht6-1.xx&oh=ecf30714646f6f0fa13ed645b6103469&oe=5D89A44F"></li>
        <li><img src="https://scontent-lht6-1.xx.fbcdn.net/v/t31.0-8/26240789_777243019125735_3203639110354876723_o.jpg?_nc_cat=103&_nc_oc=AQkV5y2asWJdOba3g4gJHsU37_yYdO3hy1bM3uEvIprN-tQCX2XYmxIC912VyaxFQVU&_nc_ht=scontent-lht6-1.xx&oh=06b1f6aa0d2261a688e70799789a7931&oe=5D87D540"></li>
        <li><img src="https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/29570910_822079431308760_3848230687580175340_n.jpg?_nc_cat=100&_nc_oc=AQlvpzFJjzHmDymDD87z861PxkwQ4blnb-dqvce921Yh7DIfaUaHAW-CIgpCoS-WJKM&_nc_ht=scontent-lht6-1.xx&oh=3ff8f86765753b9613d4f8ccdc42d224&oe=5D784384"></li>
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


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

//<?php
//get_sidebar();
//get_footer();
