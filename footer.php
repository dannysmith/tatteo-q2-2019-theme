<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tatteo
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="wrapper">
			<div class="site-info">
				
			<?php if (has_custom_logo()) { 
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image( $custom_logo_id , 'site-logo' ); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php echo $image; ?>
				</a>
			<?php } ?>
				
				
				
				<?php
				if ( has_nav_menu( 'menu-2' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'menu-2'
						) 
					);
				}
				?>
				<p class="copyright-info">
					&copy; <?php echo get_bloginfo( 'name' ); ?> <span class="copyright-year"><?php echo date("Y"); ?></span>
				</p>
			</div><!-- .site-info -->
			<div class="site-social">
				<?php
				if ( has_nav_menu( 'menu-3' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'menu-3'
						) 
					);
				}
				?>
			</div><!-- .site-social -->
		</div>		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
