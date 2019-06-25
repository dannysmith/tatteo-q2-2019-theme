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

	</header><!-- .entry-header -->

	<?php tatteo_post_thumbnail(); ?>


<div class="custom-post-page">
<section class="content-header">
    <div class="custom-post-rating">
        <h2><?php the_field( 'studio_name' ); ?></h2>
        <p class="CPT-location"><?php the_field( 'city' )?>, <?php the_field( 'country' ) ?><p>
        <!-- ***** --->
        <p class="commission">
          <?php $commission_term = get_field( 'commission' );
          if ( $commission_term ):
	          echo $commission_term->name.' commission';
          endif; ?></p>
    </div>
    <a class="get-in-touch white-link">Get In Touch</a>
</section>
<section class="hero-section">
    <div class="image-area-wrapper">
    <?php $featured_image = get_field( 'featured_image' );
    if ( $featured_image ) { ?>
	    <img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" />
    <?php } ?>
            <h2 class="headings-box"><?php the_field( 'studio_name' ); ?></h2> <!--Artist name --->
            <div class="star-rating"></div> <!-- the rating --->
            <p class="accommodation">
              <?php $accommodation_ids = get_field( 'accommodation' )?></p>
            <p class="bio headings-box"><?php the_field( 'description' ); ?></p> <!-- Bio --->
    </div> <!-- image area wrapper --->
    <div class="hero-side-content">
        <div class="art-style">
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
        </div> <!-- artist style --->

        <div class="tools">
        <ul>
        <?php $tools_terms = get_field( 'tools' );
        if ( $tools_terms ):
	        foreach ( $tools_terms as $tools_term ):
		      echo '<li>'.$tools_term->name.'</li>';
	        endforeach;
        endif; ?>
					</ul>
        </div> <!-- artist style --->

        <a class="get-in-touch white-link">Get In Touch</a> <!-- SET UP CONTENT FORM -->
    </div> <!-- hero side content --->
</section>
</div>
<section class="gallery">
    <h2 class="headings-box">Gallery</h2>
		<?php while (have_rows('gallery')) : the_row();?>
    <?php $post_object = get_sub_field('gallery_image');?>
    <?php echo  '<img src="'.$post_object.'>';
	endwhile;
	?>
    </section>

</article><!-- #post-<?php the_ID(); ?> -->
