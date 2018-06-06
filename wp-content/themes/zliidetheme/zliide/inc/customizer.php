<?php
/**
 * ZliideTheme Theme Customizer
 *
 * @package ZliideTheme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function zliide_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';




$wp_customize->remove_section('colors');
$wp_customize->remove_section('header_image');


/***
Adding custom sections
under neath this section i add settings and controls to them
*/
$wp_customize->add_section('custom_colors', array(
	'title' => __('Custom Colors', 'ZliideTheme'),
	'description' => "Page colors
	Section Colors = Background colors for content
	Page Content text = Font colors for text on Sections
	Sales text colors = Colors for big slogans
	Overlay Colors = Colors for overlay on images
	",
	'Priority' => 30,
));
$wp_customize->add_section('landing_page_Headings', array(
	'title' => 'Landing page Headings', 'zliidetheme',
	'description' => 'headings for pages','zliidetheme',
	'priority' => 130
));
$wp_customize->add_section('product_page_Headings', array(
	'title' => 'product page Headings', 'zliidetheme',
	'description' => 'headings for pages','zliidetheme',
	'priority' => 130
));
$wp_customize->add_section('value-icon-zliide', array(
	'title' => 'Values Frontpage', 'zliidetheme',
	'description' => 'Options for icons','zliidetheme',
	'priority' => 130
));
$wp_customize->add_section('value-icon-product', array(
	'title' => 'Values Product', 'zliidetheme',
	'description' => 'Options for icons','zliidetheme',
	'priority' => 130
));
$wp_customize->add_section('moodimage', array(
	'title' => 'Mood images', 'zliidetheme',
	'description' => 'Images','zliidetheme',
	'priority' => 130
));
$wp_customize->add_section('custom_heroimage', array(
	'title' => 'Hero images', 'zliidetheme',
	'description' => 'hero images','zliidetheme',
	'priority' => 130
));
$wp_customize->add_section('custom_product_images', array(
	'title' => 'Product page images', 'zliidetheme',
	'description' => 'Images for product page','zliidetheme',
	'priority' => 130
));
$wp_customize->add_section('footer-social_media', array(
	'title' => 'Social media & Copyright', 'zliidetheme',
	'description' => 'Images for product page','zliidetheme',
	'priority' => 130
));
$wp_customize->add_section('download_buttons', array(
	'title' => 'download the app', 'zliidetheme',
	'description' => 'Button for downloading the app','zliidetheme',
	'priority' => 130
));
/***
custom Sections ends
*/

/***
Download buttons
*/
$wp_customize->add_setting('itunes_download_url',array(
	'default' => 'https://itunes.apple.com/dk/app/zliide/id1317715210?mt=8','zliidetheme',
	'type' => 'theme_mod'
));
//add_control make the diffrent "input fields" where Label is the name of them and section is what section theyre suppose to be in
$wp_customize->add_control('itunes_download_url', array(
	'label' => 'iTunes download button link', 'zliidetheme',
	'section' => 'download_buttons',
	'priority' => 3
));

/***
 Color section
Changable colors for
Background-Colors
Font-Colors
Overlay colors
Section background-colors

Changable in Customizer under Custom colors
All have default colors which are blue/white
OVerlays has 0.6 opactiys can be changed in Functions.php aswell as rest of the colors or adding more custom colors

 Changes Background colors for diffrent sections
Changes .bg-color class, used mulpitple times, used for "main color" change
 */
		$wp_customize->add_setting('bg_color-pink', array(
			'default' => '#ffd0b0',
			'transport' => 'refresh',
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_customize_Color_Control($wp_customize, 'bg_color-pink', array(
			'label' => __('Background-pink color', 'ZliideTheme'),
			'section' => 'custom_colors'
		)));

		$wp_customize->add_setting('bg_color-blue', array(
			'default' => '#f19dad',
			'transport' => 'refresh',
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_customize_Color_Control($wp_customize, 'bg_color-blue', array(
			'label' => __('background-color-blue', 'ZliideTheme'),
			'section' => 'custom_colors'
		)));

		$wp_customize->add_setting('footer-bg', array(
			'default' => '#f19dad',
			'transport' => 'refresh',
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_customize_Color_Control($wp_customize, 'footer-bg', array(
			'label' => __('Footer background-color', 'ZliideTheme'),
			'section' => 'footer'
		)));


		$wp_customize->add_setting('bg_color_mobile', array(
			'default' => '#fedbe1',
			'transport' => 'refresh',
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_customize_Color_Control($wp_customize, 'bg_color_mobile', array(
			'label' => __('background-color-mobile', 'ZliideTheme'),
			'section' => 'custom_colors'
		)));





		/* Changes font colors for Page title
		Changes .entry-title class, used for text underneath logo on landing page change
		 */
		$wp_customize->add_setting('page_title', array(
			'default' => '#fff',
			'transport' => 'refresh',
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_customize_Color_Control($wp_customize, 'page_title', array(
			'label' => __('Page Title Color', 'ZliideTheme'),
			'section' => 'custom_colors'
		)));
		/* page title ends */

		/* Changes Background colors for diffrent sections
		Changes body, default is white and should stay white for most designs.
		 */
		$wp_customize->add_setting('body-background-color', array(
			'default' => '#fff',
			'transport' => 'refresh',
			'type' => 'theme_mod'
		));
		$wp_customize->add_control(new WP_customize_Color_Control($wp_customize, 'body-background-color', array(
			'label' => __('Background Color', 'ZliideTheme'),
			'section' => 'custom_colors'
		)));
		/* body ends */



		/* Changes font colors for diffrent headings
		Changes .sales-text-product class, used mulpitple times, used for "main heading color" change
		also changes color for these classes

		.sales-text-product,
		.entry-content .sidebar p,
		.address p,
		.entry-content h3,
		.entry-content svg,
		.footer-menu h3,
		.footer-menu ul li a,
		.footer-title,
		.contact p,
		.social_media a

		it is the main font-color class on the page
		 */
				$wp_customize->add_setting('sales-text-product', array(
					'default' => '#fff',
					'transport' => 'refresh',
					'type' => 'theme_mod'
				));
				$wp_customize->add_control(new WP_customize_Color_Control($wp_customize, 'sales-text-product', array(
					'label' => __('Page Content text', 'ZliideTheme'),
					'section' => 'custom_colors'
				)));


		/* Cusomtize Color options */
				$wp_customize->add_setting('sales-text-color', array(
					'default' => '#5dc0ff',
					'transport' => 'refresh',
					'type' => 'theme_mod'
				));
				$wp_customize->add_control(new WP_customize_Color_Control($wp_customize, 'sales-text-color', array(
					'label' => __('Sales text Colors', 'ZliideTheme'),
					'section' => 'custom_colors'
				)));
					/* Sales text */


					/* Changes Background colors for all overlays
					has default opacity on 0.6
					Converted to RGBA in functions.php
					change opacity or convertion in functions.php in function : hex2rgb
					 */
						$wp_customize->add_setting('over-lay', array(
							'default' => '#5dc0ff',
							'transport' => 'refresh',
							'type' => 'theme_mod'
						));
						$wp_customize->add_control(new WP_customize_Color_Control($wp_customize, 'over-lay', array(
							'label' => __('Overlay Colors', 'ZliideTheme'),
							'section' => 'custom_colors'
						)));
						/* overlay ends */


/* Color section ends */


/***
Footer Section
Changable texts/images for
footer - menus
Copy-right texts
footer-logo
social media-buttons

Changable in Customizer under Footer
doesnt have default if fields are empty they will not be displayed
only 4 social media buttons available cause of design
*/
$wp_customize->add_section('footer', array(
	'title' => 'Footer', 'zliidetheme',
	'description' => 'Options for footer','zliidetheme',
	'priority' => 130
));

/* Footer Logo
	Editable from Footer section in customizer gets image from media section in wordpress
*/
$wp_customize->add_setting('showcase_logo',array(
	'default' => get_bloginfo('template_directory').'/img/showcase.jpg','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_logo', array(
	'label' => 'Select Image', 'zliidetheme',
	'section' => 'footer',
	'settings' => 'showcase_logo',
	'priority' => 1
)));
/* footer logo end*/


/***
Footer social media buttons 1-4 plus url
Uses Font-awesome icons from the free selection and size is changed in Zliide/template-parts/content-page.php and under the print where the class currently is = x2
*/
$wp_customize->add_setting('footer_social_media_icon_1',array(
	'default' => 'facebook','zliidetheme',
	'type' => 'theme_mod'
));
//add_control make the diffrent "input fields" where Label is the name of them and section is what section theyre suppose to be in
$wp_customize->add_control('footer_social_media_icon_1', array(
	'label' => 'Social media button - 1', 'zliidetheme',
	'section' => 'footer-social_media',
	'priority' => 3
));

$wp_customize->add_setting('footer_social_url_1',array(
	'default' => 'http://dev.roloff-design.dk','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('footer_social_url_1', array(
	'label' => 'Social media button-1 URL', 'zliidetheme',
	'section' => 'footer-social_media',
	'priority' => 3
));
$wp_customize->add_setting('footer_social_media_icon_2',array(
	'default' => 'linkedin','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('footer_social_media_icon_2', array(
	'label' => 'Social media button - 2', 'zliidetheme',
	'section' => 'footer-social_media',
	'priority' => 4
));
$wp_customize->add_setting('footer_social_url_2',array(
	'default' => 'http://dev.roloff-design.dk','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('footer_social_url_2', array(
	'label' => 'Social media button-2 URL', 'zliidetheme',
	'section' => 'footer-social_media',
	'priority' => 4
));
$wp_customize->add_setting('footer_social_media_icon_3',array(
	'default' => 'twitter','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('footer_social_media_icon_3', array(
	'label' => 'Social media button-3', 'zliidetheme',
	'section' => 'footer-social_media',
	'priority' => 5
));
$wp_customize->add_setting('footer_social_url_3',array(
	'default' => 'http://dev.roloff-design.dk','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('footer_social_url_3', array(
	'label' => 'Social media button-3 URL', 'zliidetheme',
	'section' => 'footer-social_media',
	'priority' => 5
));
$wp_customize->add_setting('footer_social_media_icon_4',array(
	'default' => 'instagram','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('footer_social_media_icon_4', array(
	'label' => 'Social media button-4', 'zliidetheme',
	'section' => 'footer-social_media',
	'priority' => 6
));
$wp_customize->add_setting('footer_social_url_4',array(
	'default' => 'http://dev.roloff-design.dk','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('footer_social_url_4', array(
	'label' => 'Social media button-4 URL ', 'zliidetheme',
	'section' => 'footer-social_media',
	'priority' => 6
));

/***
Headings for footer menus
*/
$wp_customize->add_setting('footer_heading-1',array(
	'default' => '','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('footer_heading-1', array(
	'label' => 'Heading-1', 'zliidetheme',
	'section' => 'footer',
	'priority' => 1
));
$wp_customize->add_setting('footer_heading-2',array(
	'default' => '','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('footer_heading-2', array(
	'label' => 'Heading-2', 'zliidetheme',
	'section' => 'footer',
	'priority' => 1
));


/***
Copy right text, it has a set styling, text is changeable
*/
// copyright-text
$wp_customize->add_setting('zliide_copy_right',array(
	'default' => 'Copyright © 2018 Zliide Technologies Ltd. All rights reserved.','zliidetheme',
	'type' => 'theme_mod'
));
//add_control make the diffrent "input fields" where Label is the name of them and section is what section theyre suppose to be in
$wp_customize->add_control('zliide_copy_right', array(
	'label' => 'Copy right text', 'zliidetheme',
	'section' => 'footer-social_media',
	'priority' => 7
));

/* footer section ends */


/***
Headings section
Headings are changable in the Headings section of Customizer
These are the overall headings and Sales texts on the pages
*/


$wp_customize->add_setting('Sales-text-1',array(
	'default' => '','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('Sales-text-1', array(
	'label' => 'Sale text-1', 'zliidetheme',
	'section' => 'landing_page_Headings',
	'priority' => 3
));
$wp_customize->add_setting('Sales-text-2',array(
	'default' => '','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('Sales-text-2', array(
	'label' => 'Sale text-2', 'zliidetheme',
	'section' => 'landing_page_Headings',
	'priority' => 3
));
$wp_customize->add_setting('Sales-text-3',array(
	'default' => '','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('Sales-text-3', array(
	'label' => 'Sale text-3', 'zliidetheme',
	'section' => 'landing_page_Headings',
	'priority' => 3
));
$wp_customize->add_setting('Sales-text-4',array(
	'default' => '','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('Sales-text-4', array(
	'label' => 'Sale text-4', 'zliidetheme',
	'section' => 'landing_page_Headings',
	'priority' => 3
));
$wp_customize->add_setting('Sales-text-5',array(
	'default' => '','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('Sales-text-5', array(
	'label' => 'Sale text-4', 'zliidetheme',
	'section' => 'landing_page_Headings',
	'priority' => 3
));
$wp_customize->add_setting('heading_logo',array(
	'default' => get_bloginfo('template_directory').'/img/showcase.jpg','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'heading_logo', array(
	'label' => 'Select logo for heading', 'zliidetheme',
	'section' => "landing_page_Headings",
	'settings' => 'heading_logo',
	'priority' => 3
)));

$wp_customize->add_setting('address_heading',array(
	'default' => 'Address','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('address_heading', array(
	'label' => 'Address section Heading', 'zliidetheme',
	'section' => 'landing_page_Headings',
	'priority' => 2
));
$wp_customize->add_setting('address',array(
	'default' => 'Alexander Foss Gade 13, 3rd floor 9000, Aalborg Northern Region, Denmark','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('address', array(
	'label' => 'Address', 'zliidetheme',
	'section' => 'landing_page_Headings',
	'priority' => 2
));



$wp_customize->add_setting('Contact_heading',array(
	'default' => 'Contact','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('Contact_heading', array(
	'label' => 'Contact section Heading', 'zliidetheme',
	'section' => 'product_page_Headings',
	'priority' => 2
));
$wp_customize->add_setting('Contact',array(
	'default' => 'Be a part of a more colorful future, Contact us now','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('Contact', array(
	'label' => 'Contact', 'zliidetheme',
	'section' => 'product_page_Headings',
	'priority' => 2
));


$wp_customize->add_setting('value_heading_1',array(
	'default' => 'For you...','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('value_heading_1', array(
	'label' => 'For you Value heading', 'zliidetheme',
	'section' => 'product_page_Headings',
	'priority' => 2
));
$wp_customize->add_setting('value_heading_2',array(
	'default' => 'For your Customers...','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control('value_heading_2', array(
	'label' => 'For customers value heading', 'zliidetheme',
	'section' => 'product_page_Headings',
	'priority' => 2
));





/***
Headings section ends
*/

/***
Mood images displyed on Desktop / tablet only
changeable from Media section in Wordpress
*/

$wp_customize->add_setting('MoodImage-2',array(
	'default' => get_bloginfo('template_directory').'/img/showcase.jpg','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'MoodImage-2', array(
	'label' => 'Select image for MoodImage - 2 ', 'zliidetheme',
	'section' => "moodimage",
	'settings' => 'MoodImage-2',
	'priority' => 3
)));
$wp_customize->add_setting('display_phone_1',array(
	'default' => get_bloginfo('template_directory').'/img/showcase.jpg','zliidetheme',
	'type' => 'theme_mod'
));
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'display_phone_1', array(
	'label' => 'Select image for phone display ', 'zliidetheme',
	'section' => "moodimage",
	'settings' => 'display_phone_1',
	'priority' => 3
)));
/***
Mood images section ends
*/

/***
overlay images
changeable from Media section in Wordpress
Color of overlay changes in Colors section
*/
	$wp_customize->add_setting('over-lay-hero-image-1',array(
		'default' => get_bloginfo('template_directory').'/wp-content/uploads/2018/05/ModelsCatwalk.jpg','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'over-lay-hero-image-1', array(
		'label' => 'Select background-Image for value section', 'zliidetheme',
		'section' => 'custom_heroimage',
		'settings' => 'over-lay-hero-image-1',
		'priority' => 1
	)));
	$wp_customize->add_setting('over-lay-hero-image-2',array(
		'default' => get_bloginfo('template_directory').'/wp-content/uploads/2018/05/ModelsCatwalk.jpg','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'over-lay-hero-image-2', array(
		'label' => 'Select background-Image for value section', 'zliidetheme',
		'section' => 'custom_heroimage',
		'settings' => 'over-lay-hero-image-2',
		'priority' => 2
	)));

	$wp_customize->add_setting('header-bg-1',array(
		'default' => get_bloginfo('template_directory').'/wp-content/uploads/2018/05/ModelsCatwalk.jpg','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header-bg-1', array(
		'label' => 'Header image', 'zliidetheme',
		'section' => 'custom_heroimage',
		'settings' => 'header-bg-1',
		'priority' => 2
	)));
	$wp_customize->add_setting('header-bg-2',array(
		'default' => get_bloginfo('template_directory').'/wp-content/uploads/2018/05/ModelsCatwalk.jpg','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header-bg-2', array(
		'label' => 'Header image', 'zliidetheme',
		'section' => 'custom_heroimage',
		'settings' => 'header-bg-2',
		'priority' => 2
	)));
	/***
	overlay images section ends
	*/

/***
Value icons
Font awesome icons changeable in Value icons
Value heading and text is from "posts"

Value for shoppers!
*/
	$wp_customize->add_setting('value-icon-zliide-1',array(
		'default' => 'clock','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('value-icon-zliide-1', array(
		'label' => 'Value icon - 1', 'zliidetheme',
		'section' => 'value-icon-zliide',
		'priority' => 3
	));
	$wp_customize->add_setting('value-icon-zliide-2',array(
		'default' => 'heart','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('value-icon-zliide-2', array(
		'label' => 'Value icon - 2', 'zliidetheme',
		'section' => 'value-icon-zliide',
		'priority' => 3
	));
	$wp_customize->add_setting('value-icon-zliide-3',array(
		'default' => 'money-bill-alt','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('value-icon-zliide-3', array(
		'label' => 'Value icon - 3', 'zliidetheme',
		'section' => 'value-icon-zliide',
		'priority' => 3
	));
	$wp_customize->add_setting('value-icon-zliide-4',array(
		'default' => 'money-bill-alt','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('value-icon-zliide-4', array(
		'label' => 'Value icon - 4', 'zliidetheme',
		'section' => 'value-icon-zliide',
		'priority' => 3
	));

	/***
Value for Companys
	*/
	$wp_customize->add_setting('value-icon-product-1',array(
		'default' => 'clock','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('value-icon-product-1', array(
		'label' => 'Value icon - 1', 'zliidetheme',
		'section' => 'value-icon-product',
		'priority' => 3
	));
	$wp_customize->add_setting('value-icon-product-2',array(
		'default' => 'heart','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('value-icon-product-2', array(
		'label' => 'Value icon - 2', 'zliidetheme',
		'section' => 'value-icon-product',
		'priority' => 3
	));
	$wp_customize->add_setting('value-icon-product-3',array(
		'default' => 'money-bill-alt','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('value-icon-product-3', array(
		'label' => 'Value icon - 3', 'zliidetheme',
		'section' => 'value-icon-product',
		'priority' => 3
	));
	$wp_customize->add_setting('value-icon-product-4',array(
		'default' => 'money-bill-alt','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control('value-icon-product-4', array(
		'label' => 'Value icon - 4', 'zliidetheme',
		'section' => 'value-icon-product',
		'priority' => 3
	));

	/***
Value sections ends
	*/

	/***
	PRoduct images displyed on all images on Product sides aswell as how to slide
	changeable from customizer under "Product-images" section in Wordpress
	*/
	$wp_customize->add_setting('custom_product-image-1',array(
		'default' => get_bloginfo('template_directory').'/img/showcase.jpg','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_product-image-1', array(
		'label' => 'Select image for Product image - 1', 'zliidetheme',
		'section' => "custom_product_images",
		'priority' => 3
	)));
	$wp_customize->add_setting('custom_product-image-2',array(
		'default' => get_bloginfo('template_directory').'/AdobeStock_125730018_Preview.jpeg','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_product-image-2', array(
		'label' => 'Select image for Product image - 2', 'zliidetheme',
		'section' => "custom_product_images",
		'priority' => 3
	)));
	$wp_customize->add_setting('custom_product-image-3',array(
		'default' => get_bloginfo('template_directory').'/AdobeStock_125730018_Preview.jpeg','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_product-image-3', array(
		'label' => 'Select image for Product image - 3', 'zliidetheme',
		'section' => "custom_product_images",
		'priority' => 3
	)));
	$wp_customize->add_setting('custom_product-image-4',array(
		'default' => get_bloginfo('template_directory').'/AdobeStock_125730018_Preview.jpeg','zliidetheme',
		'type' => 'theme_mod'
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_product-image-4', array(
		'label' => 'Select image for Product image - 4', 'zliidetheme',
		'section' => "custom_product_images",
		'priority' => 3
	)));
	/***
	PRoduct images section ends
	*/

}

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'zliide_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'zliide_customize_partial_blogdescription',
		) );
	}


add_action('customize_register', 'zliide_custom_footer_edit');
add_action( 'customize_register', 'zliide_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function zliide_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function zliide_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function zliide_customize_preview_js() {
	wp_enqueue_script( 'zliide-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'zliide_customize_preview_js' );
