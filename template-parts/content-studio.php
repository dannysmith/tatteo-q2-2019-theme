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
    <div class="custom-post-header">
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
            <?php if ( get_field( 'accommodation' ) == 1 ) {
 echo  '<p class="accommodation headings-box">Accomodation Available</p>';
} else {
 // echo 'false';
} ?>
            <p class="bio headings-box"><?php the_field( 'description' ); ?></p> <!-- Bio --->
    </div> <!-- image area wrapper --->
    <div class="hero-side-content">
        <div class="art-style">
        <h2 class="headings-box">Styles</h2>
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
        </div> <!-- studio style --->

        <div class="tools">
        <h2 class="headings-box">Tools Available</h2>
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

</article><!-- #post-<?php the_ID(); ?> -->
