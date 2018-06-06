<?php
/**
 * ZliideTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ZliideTheme
 */

if ( ! function_exists( 'zliide_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function zliide_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ZliideTheme, use a find and replace
		 * to change 'zliide' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'zliide', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'zliide' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'zliide_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'zliide_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zliide_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'zliide_content_width', 640 );
}
add_action( 'after_setup_theme', 'zliide_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zliide_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zliide' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'zliide' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'zliide_widgets_init' );


function Zliide_custom_script_enqueue(){
	wp_enqueue_style('Desktop',get_template_directory_uri(). '/css/Desktop.css',array());
	wp_enqueue_style('Tablet',get_template_directory_uri(). '/css/tablet.css',array());
	wp_enqueue_style('Shared',get_template_directory_uri(). '/css/shared.css',array());
	wp_enqueue_style('Mobile',get_template_directory_uri(). '/css/Mobile.css',array());
	wp_enqueue_style('header',get_template_directory_uri(). '/css/header.css',array());
	wp_enqueue_style('footer',get_template_directory_uri(). '/css/footer.css',array());
}
add_action('wp_enqueue_scripts', 'Zliide_custom_script_enqueue');
/**
 * Enqueue scripts and styles.
 */
function zliide_scripts() {
	wp_enqueue_style( 'zliide-style', get_stylesheet_uri() );

	wp_enqueue_script( 'zliide-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'zliide-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zliide_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//custom code adding more menu placements

function register_my_menus() {
  register_nav_menus(
    array(
      'footer-main' => __( 'footer Main' ),
      'footer-sub' => __( 'footer sub' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// custom code adding wigdet placements

add_action('widgets_init', 'my_register_sidebars');
function my_register_sidebars() {
/* Register the 'mapswidget' sidebar. */
register_sidebar(
    array(
        'id' => 'mapswidget',
        'name' => __( 'Maps Widgets' ),
        'description' => __( 'A short description of the sidebar.' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

		/* Register the 'mapswidget' sidebar. */
		register_sidebar(
		    array(
		        'id' => 'valuewidget-1',
		        'name' => __( 'Value Widgets - 1' ),
		        'description' => __( 'A short description of the sidebar.' ),
		        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		        'after_widget' => '</div>',
		        'before_title' => '<h3 class="widget-title">',
		        'after_title' => '</h3>'
		    ));
				register_sidebar(
				    array(
				        'id' => 'valuewidget-2',
				        'name' => __( 'Value Widgets -2' ),
				        'description' => __( 'A short description of the sidebar.' ),
				        'before_widget' => '<div id="%1$s" class="widget %2$s">',
				        'after_widget' => '</div>',
				        'before_title' => '<h3 class="widget-title">',
				        'after_title' => '</h3>'
				    ));
						register_sidebar(
								array(
										'id' => 'valuewidget-3',
										'name' => __( 'Value Widgets -3' ),
										'description' => __( 'A short description of the sidebar.' ),
										'before_widget' => '<div id="%1$s" class="widget %2$s">',
										'after_widget' => '</div>',
										'before_title' => '<h3 class="widget-title">',
										'after_title' => '</h3>'
								));
								register_sidebar(
										array(
												'id' => 'valuewidget-4',
												'name' => __( 'Value Widgets -4' ),
												'description' => __( 'A short description of the sidebar.' ),
												'before_widget' => '<div id="%1$s" class="widget %2$s">',
												'after_widget' => '</div>',
												'before_title' => '<h3 class="widget-title">',
												'after_title' => '</h3>'
										));
										register_sidebar(
												array(
														'id' => 'product-values-1',
														'name' => __( 'Product Value -1' ),
														'description' => __( 'A short description of the sidebar.' ),
														'before_widget' => '<div id="%1$s" class="widget %2$s">',
														'after_widget' => '</div>',
														'before_title' => '<h3 class="widget-title">',
														'after_title' => '</h3>'
												));
										register_sidebar(
												array(
														'id' => 'product-values-2',
														'name' => __( 'Product Value -2' ),
														'description' => __( 'A short description of the sidebar.' ),
														'before_widget' => '<div id="%1$s" class="widget %2$s">',
														'after_widget' => '</div>',
														'before_title' => '<h3 class="widget-title">',
														'after_title' => '</h3>'
												));
										register_sidebar(
												array(
														'id' => 'product-values-3',
														'name' => __( 'Product Value -3' ),
														'description' => __( 'A short description of the sidebar.' ),
														'before_widget' => '<div id="%1$s" class="widget %2$s">',
														'after_widget' => '</div>',
														'before_title' => '<h3 class="widget-title">',
														'after_title' => '</h3>'
												));
										register_sidebar(
												array(
														'id' => 'product-values-4',
														'name' => __( 'Product Value -4' ),
														'description' => __( 'A short description of the sidebar.' ),
														'before_widget' => '<div id="%1$s" class="widget %2$s">',
														'after_widget' => '</div>',
														'before_title' => '<h3 class="widget-title">',
														'after_title' => '</h3>'
												));



								register_sidebar(
										array(
												'id' => 'slider-1',
												'name' => __( 'Slider - 1' ),
												'description' => __( 'A short description of the sidebar.' ),
												'before_widget' => '<div id="%1$s" class="widget %2$s">',
												'after_widget' => '</div>',
												'before_title' => '<h3 class="widget-title">',
												'after_title' => '</h3>'
										));
										register_sidebar(
												array(
														'id' => 'slider-2',
														'name' => __( 'Slider - 2' ),
														'description' => __( 'A short description of the sidebar.' ),
														'before_widget' => '<div id="%1$s" class="widget %2$s">',
														'after_widget' => '</div>',
														'before_title' => '<h3 class="widget-title">',
														'after_title' => '</h3>'
												));
												register_sidebar(
														array(
																'id' => 'Contactform',
																'name' => __( 'Contactform' ),
																'description' => __( 'A short description of the sidebar.' ),
																'before_widget' => '<div id="%1$s" class="widget %2$s">',
																'after_widget' => '</div>',
																'before_title' => '<h3 class="widget-title">',
																'after_title' => '</h3>'
														));
														register_sidebar(
																array(
																		'id' => 'product-wigdet-1',
																		'name' => __( 'product-wigdet-1' ),
																		'description' => __( 'A short description of the sidebar.' ),
																		'before_widget' => '<div id="%1$s" class="widget %2$s">',
																		'after_widget' => '</div>',
																		'before_title' => '<h3 class="widget-title">',
																		'after_title' => '</h3>'
																));
																register_sidebar(
																		array(
																				'id' => 'text-zliide',
																				'name' => __( 'text-zliide' ),
																				'description' => __( 'A short description of the sidebar.' ),
																				'before_widget' => '<div id="%1$s" class="widget %2$s">',
																				'after_widget' => '</div>',
																				'before_title' => '<h3 class="widget-title">',
																				'after_title' => '</h3>'
																		));
		}


		//output custom
		function Zliide_custom_css(){


			function hex2rgb($hex) {
			$hex = str_replace("#", "", $hex);

			if(strlen($hex) == 3) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
			} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
			}
			$rgb = array($r, $g, $b);

			return $rgb; // returns an array with the rgb values
			}
			$Hex_color = get_theme_mod('over-lay');
			$RGB_color = hex2rgb($Hex_color);
			$Final_Rgb_color = implode(", ", $RGB_color);

		?>
		<style type ="text/css">
			body{
				background-color: <?php echo get_theme_mod('body-background-color'); ?> !important;
			}
			.bg-color-blue{
				background-color: <?php echo get_theme_mod('bg_color-pink'); ?> !important;
			}
			.bg-color-pink{
				background-color: <?php echo get_theme_mod('bg_color-pink'); ?> !important;
			}
			.sales-text{
				color: <?php echo get_theme_mod('sales-text-color'); ?>  !important;
			}
			.over-lay{
				/*background-color: <?php // echo 'rgba(' . $Final_Rgb_color . ',0.6)'; ?>;*/
			}
			 .footer-menu h3, .footer-menu ul li a, .footer-title , .social_media a, .footer-menu p, .copy-right {
				color: <?php echo get_theme_mod('sales-text-product'); ?> !important;
			}
			.entry-content .sidebar p, .entry-content h3, .entry-content svg, .product-text-5,.sales-text-product, .contact p, .address p{
				color: #fff;
			}
			.entry-title{
				color: <?php echo get_theme_mod('page_title'); ?> !important;
			}
			.footer-bg{
					background-color: <?php echo get_theme_mod('footer-bg'); ?> !important;
			}
			.page-id-16{
				background-image: url('<?php echo get_theme_mod('header-bg-1', ''); ?>');
			}
			.page-id-280{
				background-image: url('<?php echo get_theme_mod('header-bg-2', ''); ?>');
			}
			@media (max-width: 544px) {

				.bg-color-mobile-orange{
						background-color: <?php echo get_theme_mod('sales-text-color'); ?> !important;
				}

			}

		</style>
		<?php
		}
		add_action('wp_head', 'Zliide_custom_css');
