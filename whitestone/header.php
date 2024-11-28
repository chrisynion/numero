<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whitestone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<?php if ( is_front_page()  ) : ?>
    <style>
      .hero {
        background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/images/hero-bg.png");
      }
    </style>
  <?php endif; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'whitestone' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<a href="<?php echo home_url(); ?>" class="site-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/whitestone-group-logo.png" alt="Whitestone Group Logo">
			</a>
			<!-- .site-logo -->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle btn" style="height: 42px;background: transparent;border: 2px solid var(--brand-blue);color: var(--brand-blue);" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'whitestone' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<a href="#" class="btn">homes for sale</a>
	</header><!-- #masthead -->
