<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ZliideTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php zliide_post_thumbnail(); ?>
	<div class="container-fluid padding-reset">
  	<div class="entry-content row margin-top-reset">



<div class="bg-color-blue" style="width:100%;">
	<div class="col-lg-12 col-12 col-md-12  bg-color-blue text-center" >
<h2 style="font-size:4em;" class="sales-text-product"><?php echo get_theme_mod('Sales-text-3', 'What is'); ?></h2>
</div>

</div>
			<div class="col-lg-6 col-12 col-md-12 padding-reset  bg-color-blue ">
				<div class="offset-lg-3 col-lg-6 col-md-6 offset-md-3 text-center ">
					<div id="sidebar-primary" class="sidebar text-field">
					<?php dynamic_sidebar( 'text-zliide' ); ?>
					</div>



				</div>
			</div>
			<div class="col-lg-6 text-center bg-color-blue ">
					<div id="sidebar-primary" class="sidebar">
					<?php dynamic_sidebar( 'slider-2' ); ?>
					</div>
				</div>

				<div class='col-12 product-display bg-color-imagebg text-center'>
					<div class="col-lg-6 offset-lg-3 col-12 col-md-8 offset-md-2 margin-bottom-5">
				<h2 class="product-text-5"><?php echo get_theme_mod('Sales-text-5', 'How to use '); ?></h2>
				</div>

						<div class="col-lg-2 d-inline-block product-img">
							<img src="<?php echo get_theme_mod('custom_product-image-1', ''); ?>">
						</div>
						<div class="col-lg-2 d-inline-block product-img">
								<img src="<?php echo get_theme_mod('custom_product-image-2', ''); ?>">
						</div>
						<div class="col-lg-2 d-inline-block product-img">
								<img src="<?php echo get_theme_mod('custom_product-image-3', ''); ?>">
						</div>
						<div class="col-lg-2 d-inline-block product-img">
								<img src="<?php echo get_theme_mod('custom_product-image-4', ''); ?>">
						</div>
				</div>


<!--  contact form -->



<div class="col-lg-6 padding-reset col-12 ">
				<img class="MoodImage" src="<?php echo get_theme_mod('MoodImage-2', ''); ?>">
</div>
<div class="col-lg-6 text-center bg-color-pink address ">

	<h3 class="text-center" style="    padding: 30px;"><?php echo get_theme_mod('value_heading_1', 'How to use '); ?></h3>
	<!-- Value 1 -->
	<div class="col-lg-8 col-12 col-md-8 offset-md-4 offset-lg-3 value-center text-center">
	<div id="sidebar-primary " class="sidebar value-wigdet">
		<i class=" <?php echo get_theme_mod('value-icon-product-1', ''); ?> fa-4x" aria-hidden="true"></i>
			<?php dynamic_sidebar('product-values-1'); ?>
	</div>
	</div>
	<!-- /Value 1 -->
	<!-- Value 2 -->
	<div class="col-lg-8 col-12 col-md-8 value-center  text-center">
	<div id="sidebar-primary " class="sidebar value-wigdet">
		<i class="<?php echo get_theme_mod('value-icon-product-2', ''); ?> fa-4x" aria-hidden="true"></i>
			<?php dynamic_sidebar('product-values-2'); ?>
	</div>
	</div>
	<!-- /Value 2 -->

	<!-- Value 3 -->
	<div class="col-lg-8 col-12 col-md-8 offset-md-4 offset-lg-3 value-center text-center">
	<div id="sidebar-primary " class="sidebar value-wigdet">
		<i class="<?php echo get_theme_mod('value-icon-product-3', ''); ?> fa-4x" aria-hidden="true"></i>
			<?php dynamic_sidebar('product-values-3'); ?>
	</div>
	</div>
	<!-- /Value 3 -->

	<!-- Value 4 -->
	<div class="col-lg-8 col-12 col-md-8 value-center  text-center">
	<div id="sidebar-primary " class="sidebar value-wigdet">
		<i class="<?php echo get_theme_mod('value-icon-product-4', ''); ?> fa-4x" aria-hidden="true"></i>
			<?php dynamic_sidebar('product-values-4'); ?>
	</div>
	</div>
	<!-- /Value 4 -->

	</div>




	<div class="col-lg-12 col-md-12 col-sm-12 col-12 padding-reset display-inherit">
	<div class="height-100 col-12 col-lg-6 bg-color-imagebg padding-reset  d-inline-block">

			<h3 class="text-center" style="    padding: 30px;"><?php echo get_theme_mod('value_heading_2', 'How to use '); ?></h3>
	<!-- Value 1 -->
	<div class="col-lg-8 col-12 col-md-8 offset-md-4 offset-lg-3 value-center text-center">
	<div id="sidebar-primary " class="sidebar value-wigdet">
		<i class=" <?php echo get_theme_mod('value-icon-zliide-1', ''); ?> fa-4x" aria-hidden="true"></i>
			<?php dynamic_sidebar('valuewidget-1'); ?>
	</div>
	</div>
	<!-- /Value 1 -->


	<!-- Value 2 -->
	<div class="col-lg-8 col-12 col-md-8 value-center  text-center">
	<div id="sidebar-primary " class="sidebar value-wigdet">
		<i class="<?php echo get_theme_mod('value-icon-zliide-2', ''); ?> fa-4x" aria-hidden="true"></i>
			<?php dynamic_sidebar('valuewidget-2'); ?>
	</div>
	</div>
	<!-- /Value 2 -->

	<!-- Value 3 -->
	<div class="col-lg-8 col-12 col-md-8 offset-md-4 offset-lg-3 value-center text-center">
	<div id="sidebar-primary " class="sidebar value-wigdet">
		<i class="<?php echo get_theme_mod('value-icon-zliide-3', ''); ?> fa-4x" aria-hidden="true"></i>
			<?php dynamic_sidebar('valuewidget-3'); ?>
	</div>
	</div>
	<!-- /Value 3 -->

	<!-- Value 4 -->
	<div class="col-lg-8 col-12 col-md-8 value-center  text-center">
	<div id="sidebar-primary " class="sidebar value-wigdet">
		<i class="<?php echo get_theme_mod('value-icon-zliide-4', ''); ?> fa-4x" aria-hidden="true"></i>
			<?php dynamic_sidebar('valuewidget-4'); ?>
	</div>
	</div>
	<!-- /Value 4 -->
	</div>



	<div class="col-12 col-lg-6 col-md-12 col-sm-12 padding-reset">
	<div class="value-bg" style="background-image: url('<?php echo get_theme_mod('over-lay-hero-image-1', ''); ?>')">
	</div>
	</div>
	</div>




	<div class="col-lg-12 contact text-center padding-reset">
		<div class="value-bg" style="height: 100%;background-image: url('<?php echo get_theme_mod('over-lay-hero-image-2', ''); ?>')">

				<div class="col-lg-12 padding-reset">
				<h2 class="sales-text-product"><?php echo get_theme_mod('Contact_heading', 'Contact'); ?></h2>
				<p><?php echo get_theme_mod('Contact', 'Be a part of a more colorful future, Contact us now'); ?></p>
	</div>
	<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-4 padding-reset">
				<div id="sidebar-primary contact" class="sidebar">
				<?php dynamic_sidebar( 'Contactform' ); ?>
				</div>
				</div>

			</div>
	</div>

<!-- Contact -->





  </div><!-- .entry-content /row -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
