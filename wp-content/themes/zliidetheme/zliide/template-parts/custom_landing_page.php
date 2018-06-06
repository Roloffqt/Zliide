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
		<div class="col-12 col-lg-6 offset-lg-3 height-100 ">
			<div class=" line-height-100">
				<div class="line-height-top">
		<h2 class="sales-text desktop-sales"><?php echo get_theme_mod('Sales-text-1', 'ENTERING A NEW ERA FOR SHOPPERS'); ?></h2>
		</div>
		</div>
	</div>


<div class="col-lg-12 col-md-12 col-sm-12 col-12 padding-reset display-inherit">
<div class="col-12 col-lg-6 col-md-12 col-sm-12 padding-reset">
<div class="value-bg" style="background-image: url('<?php echo get_theme_mod('over-lay-hero-image-1', ''); ?>')">
</div>
</div>

<div style="" class="col-12 col-lg-6 bg-color-imagebg padding-reset  height-100 d-inline-block">

<!-- Value 1 -->
<div class="col-lg-8 col-12 col-md-6 offset-md-6 offset-lg-3 value-center  text-center">
<div id="sidebar-primary " class="sidebar value-wigdet">
	<i class="<?php echo get_theme_mod('value-icon-zliide-1', ''); ?> fa-4x" aria-hidden="true"></i>
		<?php dynamic_sidebar('valuewidget-1'); ?>
</div>
</div>
<!-- /Value 1 -->


<!-- Value 2 -->
<div class="col-lg-8 col-12 col-md-6 value-center  text-center">
<div id="sidebar-primary " class="sidebar value-wigdet">
	<i class="<?php echo get_theme_mod('value-icon-zliide-2', ''); ?> fa-4x" aria-hidden="true"></i>
		<?php dynamic_sidebar('valuewidget-2'); ?>
</div>
</div>
<!-- /Value 2 -->

<!-- Value 3 -->
<div class="col-lg-8 col-12 col-md-6 offset-md-6 offset-lg-3 value-center  text-center">
<div id="sidebar-primary " class="sidebar value-wigdet">
	<i class="<?php echo get_theme_mod('value-icon-zliide-3', ''); ?> fa-4x" aria-hidden="true"></i>
		<?php dynamic_sidebar('valuewidget-3'); ?>
</div>
</div>
<!-- /Value 3 -->

<!-- Value 4 -->
<div class="col-lg-8 col-12 col-md-6 value-center  text-center">
<div id="sidebar-primary " class="sidebar value-wigdet">
	<i class="<?php echo get_theme_mod('value-icon-zliide-4', ''); ?> fa-4x" aria-hidden="true"></i>
		<?php dynamic_sidebar('valuewidget-4'); ?>
</div>
</div>
<!-- /Value 4 -->

</div>
</div>


<div class="col-lg-6 col-12 padding-reset d-xl-none d-lg-none">
	<div class="line-height-100">
		<div class="line-height-top footer-menu">
		<h2 class="sales-text margin-top-dbl desktop-sales"><?php echo get_theme_mod('Sales-text-3', 'So...'); ?></h2>

		<h2 class="sales-text margin-top-dbl desktop-sales"><?php echo get_theme_mod('Sales-text-4', 'What is it'); ?></h2>
</div>
</div>
</div>


<div class="col-lg-6 col-12 padding-reset d-none d-xl-blocke d-lg-block">
	<div class="line-height-100">
		<div class="line-height-top">
		<h2 class="sales-text margin-top-dbl desktop-sales"><?php echo get_theme_mod('Sales-text-3', 'So...'); ?></h2>

		<h2 class="sales-text margin-top-dbl desktop-sales"><?php echo get_theme_mod('Sales-text-4', 'What is it'); ?></h2>
</div>
</div>
</div>
<div class="col-lg-6  col-12 ">
<div class="col-lg-12 col-12">
	<div id="sidebar-primary " class="sidebar">
			<?php dynamic_sidebar('slider-1'); ?>
	</div>
</div>
</div>

<div class='col-12 product-display bg-color-imagebg'>
	<div class=" col-lg-6 offset-lg-3 col-12 col-md-6 offset-md-3 margin-bottom-5">
<p class="product-text-5"><?php echo get_theme_mod('Sales-text-5', 'How to use '); ?></p>
</div>

		<div class="offset-lg-2 col-lg-2 col-md-4 offset-md-4 d-inline-block product-img">
			<img src="<?php echo get_theme_mod('custom_product-image-1', ''); ?>">
		</div>
		<div class="col-lg-2 offset-lg-0 col-md-4 offset-md-4 d-inline-block product-img">
				<img src="<?php echo get_theme_mod('custom_product-image-2', ''); ?>">
		</div>
		<div class="col-lg-2 offset-lg-0 col-md-4 offset-md-4 d-inline-block product-img">
				<img src="<?php echo get_theme_mod('custom_product-image-3', ''); ?>">
		</div>
		<div class="col-lg-2 offset-lg-0 col-md-4 offset-md-4 d-inline-block product-img">
				<img src="<?php echo get_theme_mod('custom_product-image-4', ''); ?>">
		</div>
<div class="col-lg-12 text-center" style="padding-top:70px;">

	<a class="btn btn--ios" href="<?php echo get_theme_mod('itunes_download_url', 'https://itunes.apple.com/dk/app/zliide/id1317715210?mt=8'); ?>">
            <svg class="btn__icon btn__icon--apple" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            preserveAspectRatio="xMidYMid"
            viewBox="0 0 20 20">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5640259,13.8623047
        c-0.4133301,0.9155273-0.6115723,1.3251343-1.1437988,2.1346436c-0.7424927,1.1303711-1.7894897,2.5380249-3.086853,2.5500488
        c-1.1524048,0.0109253-1.4483032-0.749939-3.0129395-0.741333c-1.5640259,0.008606-1.8909302,0.755127-3.0438843,0.7442017
        c-1.296814-0.0120239-2.2891235-1.2833252-3.0321655-2.4136963c-2.0770874-3.1607666-2.2941895-6.8709106-1.0131836-8.8428955
        c0.9106445-1.4013062,2.3466187-2.2217407,3.6970215-2.2217407c1.375,0,2.239502,0.7539673,3.3761597,0.7539673
        c1.1028442,0,1.7749023-0.755127,3.3641357-0.755127c1.201416,0,2.4744263,0.6542969,3.3816528,1.7846069
        C14.0778809,8.4837646,14.5608521,12.7279663,17.5640259,13.8623047z M12.4625244,3.8076782
        c0.5775146-0.741333,1.0163574-1.7880859,0.8571167-2.857666c-0.9436035,0.0653076-2.0470581,0.6651611-2.6912842,1.4477539	C10.0437012,3.107605,9.56073,4.1605835,9.7486572,5.1849365C10.7787476,5.2164917,11.8443604,4.6011963,12.4625244,3.8076782z"/>
            </svg>
            <span class="btn__text">Download on the</span>
            <span class="btn__storename">App Store</span>
        </a>
</div>
</div>




</div><!-- .entry-content /row -->


</article><!-- #post-<?php the_ID(); ?> -->
