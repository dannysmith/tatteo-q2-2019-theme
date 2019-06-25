
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
        <h2><?php the_field( 'title' ); ?></h2>
        <p class="CPT-location"><?php the_field( 'date' )?> - <?php the_field( 'date_end' ); ?><p>
          <p class="CPT-location"><?php the_field( 'location' ); ?></p>
        <!-- ***** --->
    </div>
    <a href="<?php the_field( 'event_website' ); ?>" class="get-in-touch white-link"><p>Website</p></a>
</section>
<section class="hero-section">
    <div class="image-area-wrapper">
    <?php $featured_image = get_field( 'featured_image' ); ?>
<?php if ( $featured_image ) { ?>
	<img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" />
<?php } ?>
            <h2 class="headings-box"><?php the_field( 'title' ); ?></h2>
            <p class="description bio headings-box"><?php the_field( 'description' ); ?></p> <!-- Bio --->
    </div> <!-- image area wrapper --->
    <div class="hero-side-content">
            <a href="<?php the_field( 'event_website' ); ?>" class="get-in-touch white-link"><p>Website</p></a>
    </div> <!-- hero side content --->
</section>
</div>
</section>

</article><!-- #post-<?php the_ID(); ?> -->
