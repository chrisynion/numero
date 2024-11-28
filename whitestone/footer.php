<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whitestone
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="box">
			<div class="widget stay-connected">
				<h3 class="widget-title">Stay Connected</h3>
				<div class="stay-connecte-gallery">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-asset-2.png" alt="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-asset-2.png" alt="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-asset-2.png" alt="">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/image-asset-2.png" alt="">
				</div>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social-icons.png" alt="" style="margin-top: 20px;">
			</div>
			<div class="widget quick-links">
				<h3 class="widget-title">Quick Links</h3>
				<nav class="footer-links">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
					)
				);
				?>
			</nav>
			</div>
			<div class="widget find-us">
				<h3 class="widget-title">Find Us</h3>
				<p>Level 9, 4 Williamson Ave, Grey Lynn, Auckland</p>
				<p>Whitestone Group Limited is a Licensed Real Estate 
				Agency under the REAA 2008</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/REINZ-logo 1.png" alt="">
			</div>
		</div>
		<div class="box copyright">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/copyright.png" alt="" style="margin-top: 90px">
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	var splide = new Splide( '.gallery', {
	perPage : 5,
	breakpoints: {
		767: {
			perPage: 2,
		},
  	},	
	type   : 'loop',
	padding: '5rem',
	} );

	splide.mount();

	var splide = new Splide( '.testimonials', {
	perPage : 3,
	breakpoints: {
		1280: {
			perPage: 2,
		},
		1024: {
			perPage: 1,
		},
  	},
	type   : 'loop',
	padding: '5rem',
	} );

	splide.mount();

	
</script>
</body>
</html>
