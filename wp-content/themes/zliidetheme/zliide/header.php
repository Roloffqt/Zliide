<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZliideTheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/fontawesome/fontawesome-all.js"></script>
<link href="https://fonts.googleapis.com/css?family=Exo:800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<div id="page" class="site">


	<header id="masthead" class="site-header bg-img">
		<div class="row margin-reset">

			<div class="col-lg-12">
				<div class="d-inline-block col-lg-3 col-md-6 offset-lg-0 offset-md-3 col-sm-8 col-12">
					<?php the_custom_logo(); ?>
				</div>
<div class="col-lg-8 d-lg-inline d-none d-sm-none desktopmenu">
	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
	) );
	?>
</div>
<div class="col-lg-5 col-12 col-md-12 col-sm-12 ">
			<header>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
</div>
<?php
			$zliide_description = get_bloginfo( 'description', 'display' );
			if ( $zliide_description || is_customize_preview() ) :

			endif; ?>


<div class="d-lg-none d-xl-none">
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('', 'zliide' ); ?>
				<div class="burger"></div>
				<div class="burger"></div>
				<div class="burger"></div>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
</div>


	</div><!-- .site-branding /row -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
