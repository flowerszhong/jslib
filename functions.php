<?php

/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if (!isset($content_width)) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.1-alpha', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('jslib_setup')) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since JsLib 1.0
 */
function jslib_setup()
{

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain('jslib');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
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
		'primary' => __('Primary Menu', 'twentyfifteen'),
		'social' => __('Social Links Menu', 'twentyfifteen'),
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support('post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	));

	/*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support('custom-logo', array(
		'height' => 248,
		'width' => 248,
		'flex-height' => true,
	));


	function get_post_img($id = null, $width = "360", $height = "200", $size = null)
	{

		if ($id) {

			$post = get_post($id);

			$post_id = $id;

		}
		else {

			global $post;

			$post_id = $post->ID;

		}

		if (has_post_thumbnail($post)) {

			set_post_thumbnail_size($width, $height);



			if ($size) {

				$attachment_id = get_post_thumbnail_id($post_id);

				$thumb_url = wp_get_attachment_image_src($attachment_id, $size, true);

				return $thumb_url[0];

			}

			return get_the_post_thumbnail_url($post);

		}



		if (pk_get_meta('pk_thumbnail')) {

			return pk_get_meta('pk_thumbnail');

		}





		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

		if (!empty($matches[1][0])) {

			return $matches[1][0];

		}
		else {

			$width_height = $width . 'x' . $height;

			return 'http://fpoimg.com/' . $width_height;

		}

	}



	function pk_get_meta($value)
	{

		global $post;



		$field = get_post_meta($post->ID, $value, true);

		if (!empty($field)) {

			return is_array($field) ? stripslashes_deep($field) : stripslashes(wp_kses_decode_entities($field));

		}
		else {

			return false;

		}

	}



	function pk_add_meta_box()
	{

		add_meta_box(

			'nba17pk',

			'自定义封面图片',

			'pk_html',

			'post',

			'normal',

			'default'

		);

	}

	add_action('add_meta_boxes', 'pk_add_meta_box');



	function pk_html($post)
	{

		wp_nonce_field('_pk_nonce', 'pk_nonce'); ?>
	
		<p>如果未找到 特色图片(Featured Image),退而求其次会找到 自定义封面图片</p>
	
	
	
		<p>
	
			<label for="pk_thumbnail">自定义封面图片，如：http://a.com/a.jpg</label><br>
	
			<input type="text" class='widefat' name="pk_thumbnail" id="pk_thumbnail" value="<?php echo pk_get_meta('pk_thumbnail'); ?>">
	
		</p>
	
	
	
		<?php

	}



	function pk_save($post_id)
	{

		if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

		if (!isset($_POST['pk_nonce']) || !wp_verify_nonce($_POST['pk_nonce'], '_pk_nonce')) return;

		if (!current_user_can('edit_post', $post_id)) return;



		if (isset($_POST['pk_thumbnail'])) {
			update_post_meta($post_id, 'pk_thumbnail', esc_attr($_POST['pk_thumbnail']));
		}





	}

	add_action('save_post', 'pk_save');
	
	
	
	/*
	
		Usage: pk_get_meta( 'pk_thumbnail' )
		Usage: pk_get_meta( 'pk_downlink' )
	
	 */



	/**
	 * Filter Twenty Fifteen custom-header support arguments.
	 *
	 * @since Twenty Fifteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-color     		Default color of the header.
	 *     @type string $default-attachment     Default attachment of the header.
	 * }
	 */
	

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support('customize-selective-refresh-widgets');
}
endif; // twentyfifteen_setup
add_action('after_setup_theme', 'jslib_setup');


