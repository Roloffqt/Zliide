<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZliideTheme
 */

?>

	</div><!-- #content -->

	<footer style="    margin-top: -30px;" id="colophon" class="footer-bg container-fluid">
		<div class="row">


			<div class="col-12  col-lg-12">
				<div class="offset-lg-5 offset-md-4 col-md-4 col-lg-2 footer-padding">
				<img src="<?php echo get_theme_mod('showcase_logo', ''); ?>">
				</div>
				<div class="offset-lg-4 col-lg-4 ">
				<?php the_title( '<p class="footer-title">', '</p>' ); ?>
				</div>
			</div>

			<div class="col-12 col-lg-4  text-center  footer-menu  ">
				<h3><?php  echo get_theme_mod('footer_heading-1', 'Default text'); ?></h3>
				<? wp_nav_menu( array( 'theme_location' => 'footer-main', 'container_class' => '' ) ); ?>
			</div>
			<div class="col-lg-4 col-12 text-center footer-menu">
						<h3 class="sales-text-product"><?php echo get_theme_mod('address_heading', 'Address'); ?></h3>
						<a href="http://maps.google.com/?q=<?php echo get_theme_mod('address', 'Alexander Foss Gade 13, 3rd floor 9000, Aalborg Northern Region, Denmark'); ?>"><p><?php echo get_theme_mod('address', 'Alexander Foss Gade 13, 3rd floor 9000, Aalborg Northern Region, Denmark'); ?></p></a>

			</div>
			<div class="col-12 col-lg-4  text-center  footer-menu  ">
							<h3><?php  echo get_theme_mod('footer_heading-2', 'Default text'); ?></h3>
							<? wp_nav_menu( array( 'theme_location' => 'footer-sub', 'container_class' => '' ) ); ?>
						</div>










	  <div class="offset-lg-4 col-lg-1 offset-md-4 col-md-1 col-3 text-center social_media">
				<a href="<?php echo get_theme_mod('footer_social_url_1'); ?>"><i class="fab fa-<?php echo get_theme_mod('footer_social_media_icon_1', 'facebook'); ?> fa-2x" aria-hidden="true"></i></a>
 </div>

 	  <div class="col-lg-1 col-3 col-md-1 text-center social_media">
				<a href="<?php echo get_theme_mod('footer_social_url_2'); ?>"><i class="fab fa-<?php echo get_theme_mod('footer_social_media_icon_2', 'linkedin'); ?> fa-2x" aria-hidden="true"></i></a>
</div>

	  <div class="col-lg-1 col-3 col-md-1 text-center social_media">
				<a href="<?php echo get_theme_mod('footer_social_url_3'); ?>"><i class="fab fa-<?php echo get_theme_mod('footer_social_media_icon_3', 'twitter'); ?> fa-2x" aria-hidden="true"></i></a>
</div>

	  <div class="col-lg-1 col-3 col-md-1 text-center social_media">
				<a href="<?php echo get_theme_mod('footer_social_url_4'); ?>"><i class="fab fa-<?php echo get_theme_mod('footer_social_media_icon_4', 'instagram'); ?> fa-2x" aria-hidden="true"></i></a>
</div>
<div class="col-lg-12">
				<p class="text-center copy-right"><?php echo get_theme_mod('zliide_copy_right', 'Copyright © 2018 Zliide Technologies Ltd. All rights reserved.') ?></p>
</div>
		<!-- .site-info -->
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
