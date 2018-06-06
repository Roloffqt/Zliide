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



	<div class="entry-content row margin-top-reset">
		<div class="col-12 col-lg-12">
		<h2 class="sales-text desktop-sales"><?php echo get_theme_mod('Sales-text-1', 'ENTERING A NEW ERA FOR SHOPPERS'); ?></h2>
	</div>

<div class="col-12 col-lg-12  padding-reset">
<div class="value-bg" style="background-image: url('<?php echo get_theme_mod('over-lay-hero-image-1', ''); ?>')">
<div class="over-lay">


<div class="col-lg-3 col-12 col-md-6 offset-md-3 offset-lg-0 value-center top-30 d-inline-block">
<i class=" fa fa-<?php echo get_theme_mod('value-icon-zliide-1', 'clock'); ?> fa-4x" aria-hidden="true"></i>
<div id="sidebar-primary " class="sidebar value-wigdet">
		<?php dynamic_sidebar('valuewidget-1'); ?>
</div>
</div>

<div class="col-lg-3 col-12 col-md-6 offset-md-3 offset-lg-0 value-center top-30 d-inline-block">
<div class="value-center">
<i class="fa fa-<?php echo get_theme_mod('value-icon-zliide-2', 'heart'); ?> fa-4x" aria-hidden="true"></i>
</div>
<div id="sidebar-primary " class="sidebar value-wigdet">
		<?php dynamic_sidebar('valuewidget-2'); ?>
</div>
</div>

<div class="col-lg-3 col-12 col-md-6 offset-md-3 offset-lg-0 value-center top-30 d-inline-block">
<div class="value-center">
<i class="far fa-<?php echo get_theme_mod('value-icon-zliide-3', 'money-bill-alt'); ?> fa-4x" aria-hidden="true"></i>
</div>
<div id="sidebar-primary " class="sidebar value-wigdet">
		<?php dynamic_sidebar('valuewidget-3'); ?>
</div>
</div>

</div>
</div>
</div>


<div class="col-12 col-lg-12">
<h2 class="sales-text margin-top-dbl desktop-sales"><?php echo get_theme_mod('Sales-text-1', 'ENTERING A NEW ERA FOR SHOPPERS'); ?></h2>
</div>


<div class="col-lg-6  col-12 bg-color-pink">
	<div class="col-lg-12 col-12 offset-lg-0 col-md-6 offset-md-3">
<h2 class="sales-text-product"><?php echo get_theme_mod('Sales-text-2', 'WHAT IS'); ?></h2>
</div>
<div class="offset-lg-3 col-12 col-md-6 offset-md-3 col-lg-6">
	<img class="heading-logo" src="<?php echo get_theme_mod('heading_logo', ''); ?>">
</div>

<div class="col-lg-12 col-12">
	<div id="sidebar-primary " class="sidebar">
			<?php dynamic_sidebar('slider-1'); ?>
	</div>
</div>
</div>

<div class="col-lg-6 col-12 padding-reset d-none d-xl-blocke d-lg-block ">
			<img class="MoodImage "  src="<?php echo get_theme_mod('MoodImage-1', ''); ?>">
</div>

<div class="col-12 col-lg-12">
<h2 class="sales-text margin-top-dbl desktop-sales"><?php echo get_theme_mod('Sales-text-1', 'ENTERING A NEW ERA FOR SHOPPERS'); ?></h2>
</div>
<div class="col-lg-6 padding-reset  d-none d-xl-block d-lg-block ">
				<img class="MoodImage" src="<?php echo get_theme_mod('MoodImage-2', ''); ?>">
</div>
<div class="col-lg-6 text-center bg-color-blue address ">
	<div class="col-lg-6 offset-lg-3">
			<h2 class="sales-text-product"><?php echo get_theme_mod('address_heading', 'Address'); ?></h2>
			<p><?php echo get_theme_mod('address', 'Alexander Foss Gade 13, 3rd floor 9000, Aalborg Northern Region, Denmark'); ?></p>
			</div>
		<div id="sidebar-primary" class="sidebar">
		<?php dynamic_sidebar( 'mapswidget' ); ?>
		</div>
	</div>

	<div class="col-12 col-lg-12">
	<h2 class="sales-text margin-top-dbl desktop-sales"><?php echo get_theme_mod('Sales-text-1', 'ENTERING A NEW ERA FOR SHOPPERS'); ?></h2>
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


	<div class="col-12 col-lg-12">
	<h2 class="sales-text margin-top-dbl desktop-sales"><?php echo get_theme_mod('Sales-text-1', 'ENTERING A NEW ERA FOR SHOPPERS'); ?></h2>
	</div>


</div><!-- .entry-content /row -->


</article><!-- #post-<?php the_ID(); ?> -->
