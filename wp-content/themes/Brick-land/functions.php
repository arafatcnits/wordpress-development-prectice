<?php


if (! function_exists('bricksland_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Fifteen 1.0
	 */
	function bricksland_setup()
	{

		/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bricksland, use a find and replace
	 * to change 'bricksland' to the name of your theme in all the template files
	 */
		load_theme_textdomain('bricksland', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded  tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
		add_theme_support('title-tag');

		/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(825, 510, true);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(array(
			'primary' => __('Primary Menu',      'bricksland'),
			'social'  => __('Social Links Menu', 'bricksland'),
		));

		/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		));

		/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
		add_theme_support('post-formats', array(
			'image',
			'video',
			'quote',
			'gallery',
			'audio'
		));
	}
endif; // bricksland_setup
add_action('after_setup_theme', 'bricksland_setup');


// theme css and js file
function bricksland_theme_scripts()
{

	// CSS
	wp_enqueue_style('bootstarp-min', get_template_directory_uri() . '/assets/css/vendor/bootstrap.min.css', array(), '5.3.3', 'all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/vendor/owl.carousel.min.css', array(), '2.3.4', 'all');
	wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/assets/css/vendor/owl.theme.default.min.css', array(), '2.3.4', 'all');
	wp_enqueue_style('swiper-bundle', get_template_directory_uri() . '/assets/css/vendor/swiper-bundle.min.css', array(), '11.1.14', 'all');
	wp_enqueue_style('about', get_template_directory_uri() . '/assets/css/about.css', array(), '1.0', 'all');
	wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0', 'all');
	wp_enqueue_style('blog-single', get_template_directory_uri() . '/assets/css/blog-single.css', array(), '1.0', 'all');
	wp_enqueue_style('blog', get_template_directory_uri() . '/assets/css/blog.css', array(), '1.0', 'all');
	wp_enqueue_style('brick-dimensions-guide', get_template_directory_uri() . '/assets/css/brick-dimensions-guide.css', array(), '1.0', 'all');
	wp_enqueue_style('brick-test-result', get_template_directory_uri() . '/assets/css/brick-test-result.css', array(), '1.0', 'all');
	wp_enqueue_style('career', get_template_directory_uri() . '/assets/css/career.css', array(), '1.0', 'all');
	wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css', array(), '1.0', 'all');
	wp_enqueue_style('gallery', get_template_directory_uri() . '/assets/css/gallery.css', array(), '1.0', 'all');
	wp_enqueue_style('navbar-footer', get_template_directory_uri() . '/assets/css/navbar-footer.css', array(), '1.0', 'all');

	wp_enqueue_style('preloader', get_template_directory_uri() . '/assets/css/preloader.css', array(), '1.0', 'all');
	wp_enqueue_style('product-single', get_template_directory_uri() . '/assets/css/product-single.css', array(), '1.0', 'all');
	wp_enqueue_style('products', get_template_directory_uri() . '/assets/css/products.css', array(), '1.0', 'all');
	wp_enqueue_style('home', get_template_directory_uri() . '/assets/css/home.css', array(), '1.0', 'all');
	wp_enqueue_style('style', get_stylesheet_uri());


	// JS
	wp_enqueue_script('bootstrap-bundle-min', get_template_directory_uri() . '/assets/js/vendor/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);
	wp_enqueue_script('fortawesome-all-min', get_template_directory_uri() . '/assets/js/vendor/fortawesome.all.min.js', array('jquery'), '6.6.0', true);
	wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/vendor/jquery-3.7.0.min.js', array('jquery'), '3.7.0', true);
	wp_enqueue_script('owl-carousel-min', get_template_directory_uri() . '/assets/js/vendor/owl.carousel.min.js', array('jquery'), '2.3.4', true);
	wp_enqueue_script('swiper-bundle-min', get_template_directory_uri() . '/assets/js/vendor/swiper-bundle.min.js', array('jquery'), '11.1.14', true);
	wp_enqueue_script('about-counter', get_template_directory_uri() . '/assets/js/about-counter.js', array('jquery'), 1.0, true);
	wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), 1.0, true);
	wp_enqueue_script('blog-section-vedio-model', get_template_directory_uri() . '/assets/js/blog-section-vedio-model.js', array('jquery'), 1.0, true);
	wp_enqueue_script('brick-dimensions-guide', get_template_directory_uri() . '/assets/js/brick-dimensions-guide.js', array('jquery'), 1.0, true);
	wp_enqueue_script('brick-test-result', get_template_directory_uri() . '/assets/js/brick-test-result.js', array('jquery'), 1.0, true);
	wp_enqueue_script('career', get_template_directory_uri() . '/assets/js/career.js', array('jquery'), 1.0, true);
	wp_enqueue_script('contract-form', get_template_directory_uri() . '/assets/js/contract-form.js', array('jquery'), 1.0, true);
	wp_enqueue_script('frequently-questions', get_template_directory_uri() . '/assets/js/frequently-questions.js', array('jquery'), 1.0, true);
	wp_enqueue_script('gallery-modal', get_template_directory_uri() . '/assets/js/gallery-modal.js', array('jquery'), 1.0, true);
	wp_enqueue_script('hero-slider', get_template_directory_uri() . '/assets/js/hero-slider.js', array('jquery'), 1.0, true);
	wp_enqueue_script('our-blog-slider', get_template_directory_uri() . '/assets/js/our-blog-slider.js', array('jquery'), 1.0, true);
	wp_enqueue_script('our-client-slider', get_template_directory_uri() . '/assets/js/our-client-slider.js', array('jquery'), 1.0, true);
	wp_enqueue_script('our-customer-slider', get_template_directory_uri() . '/assets/js/our-customer-slider.js', array('jquery'), 1.0, true);
	wp_enqueue_script('our-product-slider', get_template_directory_uri() . '/assets/js/our-product-slider.js', array('jquery'), 1.0, true);
	wp_enqueue_script('preloader', get_template_directory_uri() . '/assets/js/preloader.js', array('jquery'), 1.0, true);
	wp_enqueue_script('product-single-page-reviews', get_template_directory_uri() . '/assets/js/product-single-page-reviews.js', array('jquery'), '1.0', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bricksland_theme_scripts');


include_once('inc/template-funtion.php');
include_once('inc/bricksland-kirki.php');
