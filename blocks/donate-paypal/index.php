<?php
/**
 * BLOCK: Donate with PayPal
 *
 * Gutenberg Custom Block assets.
 *
 * @since   1.0.0
 * @package HTR
 */

namespace Gonzo\Easy_BG_Donations\Blocks\Donate_PayPal;

/**
 * Register hooks.
 */
function bootstrap() {
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\\editor_assets' );
	add_action( 'init', __NAMESPACE__ . '\\register_block' );
}

/**
 * Enqueue the block's assets for the editor.
 *
 * `wp-blocks`: includes block type registration and related functions.
 * `wp-element`: includes the WordPress Element abstraction for describing the structure of your blocks.
 * `wp-i18n`: To internationalize the block's text.
 *
 * @since 1.0.0
 */
function editor_assets() {
	// Scripts.
	wp_enqueue_script(
		'ebd-donate-paypal-block-editor', // Handle.
		plugins_url( 'block.js', __FILE__ ), // Block.js: We register the block here.
		[ 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-server-side-render' ], // Dependencies, defined above.
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' ) // filemtime — Gets file modification time.
	);
	wp_set_script_translations( 'ebd-donate-paypal-block-editor', 'ebd', plugin_dir_path( __FILE__ ) . '../../../languages/' );
}

/**
 * Register the block on the server.
 *
 * @since 1.0.0
 */
function register_block() {
	register_block_type(
		'ebd/donate-paypal',
		[
			'render_callback' => __NAMESPACE__ . '\\render_block',
		]
	);
}

/**
 * Render the block on the server.
 *
 * @param array $attributes Block attributes.
 *
 * @since 1.0.0
 */
function render_block( $attributes ) {

	wp_enqueue_script(
		'ebd-paypal',
		plugins_url( '../assets/js/paypal.js', __DIR__ ),
		[],
		filemtime( plugin_dir_path( __DIR__ ) . '../assets/js/paypal.js' )
	);

	$args = [
		'business' => get_option( 'ebd_paypal_business' ),
		'donate_bn' => get_option( 'ebd_paypal_donate_bn' ),
		'subscribe_bn' => get_option( 'ebd_paypal_subscribe_bn' ),
		'item_name' => get_option( 'ebd_paypal_item_name' ),
		'return_url' => get_option( 'ebd_paypal_return_url' ),
	];

	ob_start();
	if ( locate_template( 'template-parts/donate-paypal.php' ) ) {
		get_template_part( 'donate', 'paypal', $args );
	} else {
		require dirname( dirname( __DIR__ ) ) . '/templates/donate-paypal.php';
	}
	$block_content = ob_get_contents();
	ob_end_clean();

	return preg_replace( '/[\n\r]+/i', ' ', $block_content );
}
