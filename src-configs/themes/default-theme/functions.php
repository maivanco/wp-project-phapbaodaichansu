<?php


define('THEME_URL', get_template_directory_uri());
define('ASSETS_URL', THEME_URL . '/assets/');
define('CSS_URL', ASSETS_URL . 'css/');
define('JS_URL', ASSETS_URL . 'js/');
define('IMG_URL', ASSETS_URL . 'img/');



// This theme requires WordPress 5.3 or later.
if (version_compare($GLOBALS['wp_version'], '5.3', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('wptheme_setup')) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function wptheme_setup()
	{

		load_theme_textdomain('pbdcs', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		add_theme_support('title-tag');

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		register_nav_menus(
			array(
				'primary' => esc_html__('Primary menu', 'sourcecode'),
				'footer'  => esc_html__('Secondary menu', 'sourcecode'),
			)
		);

		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		add_theme_support('post-thumbnails');

		// Remove feed icon link from legacy RSS widget.
		add_filter('rss_widget_feed_link', '__return_false');
	}
}
add_action('after_setup_theme', 'wptheme_setup');

function wptheme_scripts()
{
	$themeVer = getenv('ENVIRONMENT') == 'local' ? time() : '1.0';
	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css', array(), '6.2.1');

	wp_enqueue_style('main-font', CSS_URL . 'font.css', array(), $themeVer);

	wp_enqueue_script('jquery');
	wp_enqueue_script('slick', JS_URL . 'slick.min.js', array(), '1.0', true);
	
	wp_enqueue_script('theme-functions', JS_URL . 'theme-functions.js', array(), $themeVer, true);

	// Vite integration — HMR in development, built assets in production
	wptheme_vite_scripts();
}
add_action('wp_enqueue_scripts', 'wptheme_scripts');

// Remove or unregister unused WordPress Image Sizes
function wptheme_remove_custom_image_sizes()
{
	remove_image_size('2048x2048');
}
// Hook the function
add_filter('init', 'wptheme_remove_custom_image_sizes', 99, 2);

function get_acf_option($field_name)
{
	return get_field($field_name, 'option');
}

function get_acf_flexible_section($sections = [], $section_name = '')
{
	if (empty($sections)) {
		return $sections;
	}
	$section_data = [];
	foreach ($sections as $section) {
		if ($section['acf_fc_layout'] == $section_name) {
			$section_data = $section;
			unset($section_data['acf_fc_layout']);
			break;
		}
	}
	return $section_data;
}

function get_acf_flexible_content($flexible_content, $layout_name)
{

	if (empty($flexible_content)) {
		return [];
	}

	foreach ($flexible_content as $index => $info) {
		if ($info['acf_fc_layout'] == $layout_name) {
			unset($info['acf_fc_layout']);
			return $info;
		}
	}
	return [];
}

function get_page_id_by_template($template_path)
{
	$args = [
		'post_type' => 'page',
		'fields' => 'ids',
		'nopaging' => true,
		'meta_key' => '_wp_page_template',
		'meta_value' => $template_path
	];

	$post_id = get_posts($args);
	return !empty($post_id) ? $post_id[0] : 0;
}


function max_title_length($title, $max = 6)
{
	$max_words = $max;
	$words = explode(' ', $title, $max_words + 1);
	if (count($words) > $max_words) {
		array_pop($words);
		$title = implode(' ', $words) . '...';
	}
	return $title;
}

function filter_the_content($content)
{
	return str_replace('<blockquote>', '<blockquote><i class="fa-solid fa-quote-right"></i>', $content);
}
add_filter('the_content', 'filter_the_content');

function custom_excerpt_length($length)
{
	return 15;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

/**
 * Ensure Vite scripts are output as ES modules.
 */
function wptheme_vite_module_script_tag($tag, $handle, $src)
{
	if (in_array($handle, ['vite-client', 'main-js'], true)) {
		return '<script type="module" src="' . esc_url($src) . '" id="' . esc_attr($handle) . '-js"></script>';
	}

	return $tag;
}
add_filter('script_loader_tag', 'wptheme_vite_module_script_tag', 10, 3);


/**
 * Vite HMR integration for WordPress.
 *
 * In local/dev environment: injects the Vite client and entry point as ES modules
 * from the dev server running on localhost:5173, enabling Hot Module Replacement.
 *
 */
function wptheme_vite_scripts()
{
	$is_dev = defined('WP_ENVIRONMENT_TYPE') && WP_ENVIRONMENT_TYPE === 'local';

	if ($is_dev) {
		// Vite client (HMR engine)
        wp_enqueue_script(
            'vite-client',
            'http://localhost:5173/@vite/client',
            [],
            null,
            true
        );

        // Your main JS
        wp_enqueue_script(
            'main-js',
            'http://localhost:5173/src-configs/themes/default-theme/assets/js/vite.js',
            [],
            null,
            true
        );

		// Vite requires ES module script tags
	} else {
        // Production: load built assets from manifest.json
        $manifest_path = get_template_directory() . '/dist/.vite/manifest.json';
        
        if (file_exists($manifest_path)) {
            $manifest = json_decode(file_get_contents($manifest_path), true);
            $entry = 'src-configs/themes/default-theme/assets/js/vite.js';
            
            if (isset($manifest[$entry])) {
                // Enqueue JS
                wp_enqueue_script(
                    'main-js',
                    get_template_directory_uri() . '/dist/' . $manifest[$entry]['file'],
                    [],
                    null,
                    true
                );
                
                // Enqueue CSS
                if (isset($manifest[$entry]['css'])) {
                    foreach ($manifest[$entry]['css'] as $css_file) {
                        wp_enqueue_style(
                            'main-style',
                            get_template_directory_uri() . '/dist/' . $css_file,
                            [],
                            null
                        );
                    }
                }
            }
        }
    }
}

function load_partial($slug, $args = []){
	get_template_part('partials/' . $slug, null, $args);
}

function render_img_by_src($src = '', $extra_attrs = []){
	$attrs = array_merge([
		'src' => $src,
		'alt' => '',
		'loading' => 'lazy'
	], $extra_attrs);

	if (isset($attrs['fetchorigin'])) {
		unset($attrs['loading']);
	}

	$attrs_string = "";
	foreach ($attrs as $key => $value) {
		$attrs_string .= $key . '="' . $value . '" ';
	}
	echo '<img ' . $attrs_string . '>';
}

function render_img_by_id($attachment_id = 0, $size = 'large', $extra_attrs = []){
	$attrs = array_merge([
		'alt' => '',
		'loading' => 'lazy'
	], $extra_attrs);

	if (isset($attrs['fetchorigin'])) {
		unset($attrs['loading']);
	}
	echo wp_get_attachment_image($attachment_id, $size, false, $attrs);
}

add_action( 'admin_init', function () {
    remove_menu_page( 'edit-comments.php' );
});

/**
 * Change product gallery thumbnail size
 */
add_filter( 'woocommerce_gallery_thumbnail_size', 'custom_woocommerce_gallery_thumbnail_size' );
function custom_woocommerce_gallery_thumbnail_size( $size ) {
    // You can return any registered WordPress image size here
    // Examples: 'thumbnail', 'medium', 'large', 'full', or a custom size like 'my-custom-size'
    return 'thumbnail'; 
}


/**
 * Update cart count via AJAX
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'wptheme_cart_count_fragments', 10, 1 );
function wptheme_cart_count_fragments( $fragments ) {
    ob_start();
    ?>
    <span class="cart-count absolute top-0 right-0 inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-500 rounded-full border-2 border-white -mt-1 -mr-1">
        <?php echo class_exists('WooCommerce') && is_object(WC()->cart) ? WC()->cart->get_cart_contents_count() : 0; ?>
    </span>
    <?php
    $fragments['span.cart-count'] = ob_get_clean();
    return $fragments;
}

/**
 * Handle AJAX request to update mini cart quantity
 */
add_action( 'wp_ajax_update_mini_cart_item_qty', 'wptheme_update_mini_cart_item_qty' );
add_action( 'wp_ajax_nopriv_update_mini_cart_item_qty', 'wptheme_update_mini_cart_item_qty' );
function wptheme_update_mini_cart_item_qty() {
    if ( isset( $_POST['cart_item_key'], $_POST['cart_item_qty'] ) ) {
        $cart_item_key = sanitize_text_field( wp_unslash( $_POST['cart_item_key'] ) );
        $cart_item_qty = (int) $_POST['cart_item_qty'];

        if ( $cart_item_qty > 0 ) {
            WC()->cart->set_quantity( $cart_item_key, $cart_item_qty );
        } else {
            WC()->cart->remove_cart_item( $cart_item_key );
        }

        WC_AJAX::get_refreshed_fragments();
    }
    wp_die();
}