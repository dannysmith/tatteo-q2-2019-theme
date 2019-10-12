
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
<?php tatteo_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	


<div class="custom-post-page">
	<section class="content-header">
	    <div class="cpt-event-meta">
	        <h2><?php the_field( 'title' ); ?></h2>
	        <p class="CPT-location"><?php the_field( 'date' )?> - <?php the_field( 'date_end' ); ?><p>
	          <p class="CPT-location"><?php the_field( 'location' ); ?></p>
	          <br/>
	    </div>
	</section>
	<section>
	    <div class="event-image-area">
			<?php $featured_image = get_field( 'featured_image' ); ?>
			<?php if ( $featured_image ) { ?>
				<img src="<?php echo $featured_image['url']; ?>" alt="<?php echo $featured_image['alt']; ?>" style="max-width: 50%;"/>
			<?php } ?>
			<div class="event-secondary-meta">
		        <h2><?php the_field( 'title' ); ?></h2>
		        <p><?php the_field( 'description' ); ?></p>
		        <a href="<?php the_field( 'event_website' ); ?>" class="get-in-touch white-link"><p>Website</p></a>
			</div>
	    </div> 
	</section>



</div>
</section>

</article><!-- #post-<?php the_ID(); ?> -->
