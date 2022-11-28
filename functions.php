<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version'    => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';
require 'inc/wordpress-shims.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce            = require 'inc/woocommerce/class-storefront-woocommerce.php';
	$storefront->woocommerce_customizer = require 'inc/woocommerce/class-storefront-woocommerce-customizer.php';

	require 'inc/woocommerce/class-storefront-woocommerce-adjacent-products.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
	require 'inc/woocommerce/storefront-woocommerce-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';
	require 'inc/nux/class-storefront-nux-starter-content.php';
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */


//shawn script
function my_enqueue($hook) {
    // Only add to the edit.php admin page.
    // See WP docs.
    if ('post.php' !== $hook) {
        return;
    }
    wp_enqueue_script('my_custom_script', 'http://localhost/hometaste/wp-content/themes/storefront/myscript.js');
}
add_action('admin_enqueue_scripts', 'my_enqueue');


add_action('admin_footer', 'my_admin_add_js');
function my_admin_add_js($data) {
    $data = '<script>alert("This will trigger an alert on the admin page.")</script>';
    return $data;
}

/*
add_action( 'woocommerce_before_add_to_cart_button', 'shawn_product_option', 9 );
 
function shawn_product_option() {
    $days = isset( $_POST['custom_days'] ) ? sanitize_text_field( $_POST['custom_days'] ) : '';
	$delivery = isset( $_POST['custom_delivery'] ) ? sanitize_text_field( $_POST['custom_delivery'] ) : '';
	
	echo '<div class="new_option">';
	echo '<div><label>Delivery <abbr class="required" title="required">*</abbr></label>';
	echo '<p>';
	echo '
	<select name="l_delivery" id="l_delivery">
  	<option value="1">SS2</option>
  	<option value="2">BU</option>
	</select>
	';
	echo '</p>';
	echo '</div>';

	echo '<div><label>Days <abbr class="required" title="required">*</abbr></label>';
	echo '<p>';
	echo '
	<input type="text" id="l_days" name="l_days">
	';
	echo '</p>';
	echo '</div>';

	echo '</div>';//end new option
}*/







