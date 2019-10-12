<?php
/**
 * Template part for displaying page content in single-studio.php
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
		        <h2><?php the_field( 'studio_name' ); ?></h2>
		        <p class="CPT-location"><?php the_field( 'city' )?>, <?php the_field( 'country' ) ?><p>
		        <!-- ***** --->
		        <p class="commission">
		          <?php $commission_term = get_field( 'commission' );
		          if ( $commission_term ):
			          echo $commission_term->name.' commission';
		          endif; ?></p>
		        <button class="get-in-touch open white-link" id="contact-button">Get In Touch</button>
	        </div>
	    </div>

	</header><!-- .entry-header -->

	<section class="studio-content">
		<?php $featured_image = get_field( 'featured_image' ); ?>
		
		
	    <div class="studio-content-image" style="background-image: url(<?php echo $featured_image['url']; ?>)">
         
	    </div> 
	    <div class="studio-content-meta">
	        <div>
		        <h2>About</h2>
		        <p class="studio-content-bio"><?php the_field( 'description' ); ?></p>
		        <h2>Styles</h2>
		        <ul>
					<?php
						$art_style_terms = get_field( 'art_style' );
			            if ( $art_style_terms ):
			              foreach ( $art_style_terms as $art_style_term ):
			                echo '<li>'.$art_style_term->name.'</li>';
			              endforeach;
			            endif;
					?>
				</ul>
				<?php if ( get_field( 'accommodation' ) == 1 ) {
					 echo  '<p class="accommodation headings-box">Accommodation Available</p>';
					} else {
					 // echo 'false';
					}
			?>
	        </div> <!-- studio style --->
	
	        <div class="">
	        <h2 class="">Tools Available</h2>
	        <ul>
	        <?php $tools_terms = get_field( 'tools' );
	        if ( $tools_terms ):
		        foreach ( $tools_terms as $tools_term ):
			      echo '<li>'.$tools_term->name.'</li>';
		        endforeach;
	        endif; ?>
						</ul>
	        </div> <!-- artist style --->
	        <button class="get-in-touch open white-link" id="contact-button">Get In Touch</button>
	    </div> <!-- hero side content --->
	</section>
	<section class="gallery-section-wrapper">
	    <h2 class="gallery-title headings-box">Gallery</h2>
	    <ul class="images-grid grid-container">
			<li><?php $image_one = get_field( 'image_one' ); ?>
			<?php if ( $image_one ) { ?>
				<img src="<?php echo $image_one['url']; ?>" alt="<?php echo $image_one['alt']; ?>" />
			<?php } ?>
			</li>
			<li class="image-border"><?php $image_two = get_field( 'image_two' ); ?>
			<?php if ( $image_two ) { ?>
				<img src="<?php echo $image_two['url']; ?>" alt="<?php echo $image_two['alt']; ?>" />
			<?php } ?>
			</li>
			<li><?php $image_three = get_field( 'image_three' ); ?>
			<?php if ( $image_three ) { ?>
				<img src="<?php echo $image_three['url']; ?>" alt="<?php echo $image_three['alt']; ?>" />
			<?php } ?>
			</li>
			<li><?php $image_four = get_field( 'image_four' ); ?>
			<?php if ( $image_four ) { ?>
				<img src="<?php echo $image_four['url']; ?>" alt="<?php echo $image_four['alt']; ?>" />
			<?php } ?>
			</li>
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
