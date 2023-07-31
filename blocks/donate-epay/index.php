<?php
/**
 * BLOCK: Donate with epay
 *
 * Gutenberg Custom Block assets.
 *
 * @since   1.0.0
 * @package HTR
 */

namespace Gonzo\Easy_BG_Donations\Blocks\Donate_Epay;

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
		'ebd-donate-epay-block-editor', // Handle.
		plugins_url( 'block.js', __FILE__ ), // Block.js: We register the block here.
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-server-side-render' ), // Dependencies, defined above.
		filemtime( plugin_dir_path( __FILE__ ) . 'block.js' ) // filemtime — Gets file modification time.
	);
	wp_set_script_translations( 'ebd-donate-epay-block-editor', 'ebd', plugin_dir_path( __FILE__ ) . '../../../languages/' );
}

/**
 * Register the block on the server.
 *
 * @since 1.0.0
 */
function register_block() {
	register_block_type(
		'ebd/donate-epay',
		array(
			'render_callback' => __NAMESPACE__ . '\\render_block',
		)
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

	ob_start();
	get_template_part( 'donate', 'epay' );
	$block_content = ob_get_contents();
	ob_end_clean();

	return preg_replace( '/[\n\r]+/i', ' ', $block_content );
}
